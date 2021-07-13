<?php

namespace App\Controllers;

use App\Libraries\Midtrans;
use App\Models\ModelPublic;

class Snap extends BaseController
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */


	public function __construct()
	{
		$params = array('server_key' => 'SB-Mid-server-_0B5OUUC0P-jdbq9cg6Wmplf', 'production' => false);
		$midtrans = new Midtrans;
		$midtrans->config($params);
		base_url('url');
	}

	public function index()
	{
		echo view('checkout_snap');
	}

	public function token()
	{
		$PublicModel = new ModelPublic;

		$id_jual = $this->request->getVar('id_jual');
		$cekStock = $PublicModel->StockSisa($id_jual);
		$banyak = $this->request->getVar('banyak');

		if ($cekStock['stock'] >= $banyak) {
			#data
			$id_produk = $this->request->getVar('id_produk');
			$harga = $this->request->getVar('harga');
			$nama_produk = $this->request->getVar('nama_produk');

			$total = $harga * $banyak;

			#data pribadi
			$fname = $this->request->getVar('fname');
			$lname = $this->request->getVar('lname');
			$email = $this->request->getVar('email');
			$telephone = $this->request->getVar('telephone');

			// Required
			$transaction_details = array(
				'order_id' => rand(),
				'gross_amount' => $total, // no decimal allowed for creditcard
			);

			// Optional
			$item1_details = array(
				'id' => 'a1',
				'price' => $harga,
				'quantity' => $banyak,
				'name' => $nama_produk
			);

			// Optional
			$item_details = array($item1_details);

			// Optional
			$customer_details = array(
				'first_name'    => $fname,
				'last_name'     => $lname,
				'email'         => $email,
				'phone'         => $telephone,
			);

			// Data yang akan dikirim untuk request redirect_url.
			$credit_card['secure'] = true;
			//ser save_card true to enable oneclick or 2click
			//$credit_card['save_card'] = true;

			$time = time();
			$custom_expiry = array(
				'start_time' => date("Y-m-d H:i:s O", $time),
				'unit' => 'minute',
				'duration'  => 1440
				// 'duration'  => 120
			);

			$transaction_data = array(
				'transaction_details' => $transaction_details,
				'item_details'       => $item_details,
				'customer_details'   => $customer_details,
				'credit_card'        => $credit_card,
				'expiry'             => $custom_expiry
			);

			$midtrans = new Midtrans;

			error_log(json_encode($transaction_data));
			$snapToken = $midtrans->getSnapToken($transaction_data);
			error_log($snapToken);
			echo $snapToken;
		} else {
			return redirect()->to('../index');
		}
	}

	public function TransaksiView()
	{
		$PublicModel = new ModelPublic;
		$session = session();
		$data['id_user'] = $session->get('id_user');
		$data['title'] = 'Riwayat Transaksi';

		$data['pembayaran'] = $PublicModel->TransaksiView($session->get('id_user'));

		echo view('Costumer/AssetCostumer/CSSPublic');
		echo view('Costumer/AssetCostumer/NavbarPublic', $data);
		#data content
		echo view('Costumer/Transaksi/RiwayatView', $data);
		#end data content
		echo view('Costumer/AssetCostumer/FooterPublic');
		echo view('Costumer/AssetCostumer/JSPublic');
	}

	public function finish()
	{
		$ModelPublic = new ModelPublic;
		$session = session();

		$result = json_decode($this->request->getVar('result_data'));
		#data
		$id_jual = $this->request->getVar('id_jual');
		$id_produk = $this->request->getVar('id_produk');
		$nama_produk = $this->request->getVar('nama_produk');
		$id_user = $session->get('id_user');

		$order_id = $result->order_id;
		#get number
		$vas_number = $result->va_numbers;
		#get
		$va_number = $vas_number[0]->va_number;
		$bank = $vas_number[0]->bank;

		$banyak = $this->request->getVar('banyak');
		$harga = $this->request->getVar('harga');

		$total = $harga * $banyak;

		if ($ModelPublic->InsertTransaksi($id_jual, $id_produk, $nama_produk, $total, $id_user, $order_id, $banyak)) {
			if ($ModelPublic->InsertPembayaran($order_id, $va_number)) {
				if ($ModelPublic->UpdateJual($banyak, $id_jual)) {
					return redirect()->to('TransaksiView');
				}
			} else {
				echo "error 2";
			}
		} else {
			echo "error 1";
		}
	}
}
