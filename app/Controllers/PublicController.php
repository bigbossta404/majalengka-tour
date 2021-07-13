<?php

namespace App\Controllers;

use App\Models\ModelPublic;

class PublicController extends BaseController
{
	public function index()
	{
		$session = session();
		$data['id_user'] = $session->get('id_user');
		$data['title'] = 'Home';
		echo view('Costumer/AssetCostumer/CSSPublic');
		echo view('Costumer/AssetCostumer/NavbarPublic', $data);
		#data content
		echo view('Costumer/IndexView');
		#end data content
		echo view('Costumer/AssetCostumer/FooterPublic');
		echo view('Costumer/AssetCostumer/JSPublic');
	}

	#LOGIN PROSES
	public function LoginView()
	{
		$session = session();
		$data['id_user'] = $session->get('id_user');
		$data['title'] = 'Login User';

		echo view('Costumer/AssetCostumer/CSSPublic');
		echo view('Login/AssetLogin/AssetCSS');
		echo view('Costumer/AssetCostumer/NavbarPublic', $data);
		#data content
		echo view('Login/LoginView');
		#end data content
		// echo view('Costumer/AssetCostumer/FooterPublic');
		echo view('Login/AssetLogin/AssetJS');
		// echo view('Costumer/AssetCostumer/JSPublic');
	}

	public function LoginProses()
	{
		$session = session();
		$PublicModel = new ModelPublic;

		#get data
		$email = $this->request->getVar('email');
		$password = $this->request->getVar('pass');

		#seleksi login non password verify
		$data = $PublicModel->LoginConfirm($email, $password);

		if ($data != null) {
			$UserData = [
				'id_user'       => $data['id_user'],
				'username'     => $data['username'],
				'email'    => $data['email'],
				'logged_in'     => TRUE
			];
			$session->set($UserData);
			return redirect()->to('ProdukView');
		} else {
			session()->setFlashdata('msg', "Your email or password doesn't exist");
			return redirect()->to('LoginView')->withInput();
		}
	}
	#LOGIN END PROSES

	#LOGOUT PROSES
	public function Logout()
	{
		$session = session();
		$session->destroy();
		return redirect()->to('LoginView');
	}
	#END LOGOUT

	#REGISTER PROSES
	public function RegisterView()
	{
		$session = session();
		$data['id_user'] = $session->get('id_user');
		$data['title'] = 'Register User';

		echo view('Costumer/AssetCostumer/CSSPublic');
		echo view('Login/AssetLogin/AssetCSS');
		echo view('Costumer/AssetCostumer/NavbarPublic', $data);
		#data content
		echo view('Login/RegisterView');
		#end data content
		// echo view('Costumer/AssetCostumer/FooterPublic');
		echo view('Login/AssetLogin/AssetJS');
		// echo view('Costumer/AssetCostumer/JSPublic');
	}

	public function RegisterViewValid()
	{
		$session = session();
		$data['id_user'] = $session->get('id_user');
		$data['title'] = 'Valid Register';

		echo view('Costumer/AssetCostumer/CSSPublic');
		echo view('Login/AssetLogin/AssetCSS');
		echo view('Costumer/AssetCostumer/NavbarPublic', $data);
		#data content
		echo view('Login/RegisterViewValid');
		#end data content
		// echo view('Costumer/AssetCostumer/FooterPublic');
		echo view('Login/AssetLogin/AssetJS');
		// echo view('Costumer/AssetCostumer/JSPublic');
	}

	public function RegisterProses()
	{
		$PublicModel = new ModelPublic;

		$fname = $this->request->getVar('fname');
		$lname = $this->request->getVar('lname');
		$email = $this->request->getVar('email');
		$password = $this->request->getVar('pass');

		$data = $PublicModel->RegisterSelection($email);

		if (isset($data['id_user'])) {
			return redirect()->to('RegisterViewValid');
		} else {
			if ($PublicModel->RegisterProses($fname, $lname, $email, $password)) {
				return redirect()->to('LoginView');
			} else {
				echo "gagal memasukan data!";
			}
		}
	}
	#END PROSES REGISTER

	#PRODUK PROSES
	public function ProdukView()
	{
		$PublicModel = new ModelPublic;
		$session = session();
		$data['id_user'] = $session->get('id_user');
		$data['title'] = 'Produk';
		$data['kategori'] = $PublicModel->KategoriView();
		$data['produk'] = $PublicModel->ProdukView();
		$data['wisata'] = $PublicModel->WisataViewSelect();

		echo view('Costumer/AssetCostumer/CSSPublic');
		echo view('Costumer/AssetCostumer/NavbarProduk', $data);
		#data content
		echo view('Costumer/ProdukView', $data);
		#end data content
		echo view('Costumer/AssetCostumer/FooterPublic');
		echo view('Costumer/AssetCostumer/JSPublic');
	}

	public function ProdukViewSelect($id_kategori)
	{
		$PublicModel = new ModelPublic;
		$session = session();
		$data['id_user'] = $session->get('id_user');
		$data['title'] = 'Produk View';
		$data['kategori'] = $PublicModel->KategoriView();
		$data['produk'] = $PublicModel->ProdukViewSelect($id_kategori);

		echo view('Costumer/AssetCostumer/CSSPublic');
		echo view('Costumer/AssetCostumer/NavbarProduk', $data);
		#data content
		echo view('Costumer/ProdukView', $data);
		#end data content
		echo view('Costumer/AssetCostumer/FooterPublic');
		echo view('Costumer/AssetCostumer/JSPublic');
	}
	#END PRODUK PROSES

	#WISATA PROSES
	public function WisataViewSelect()
	{
		$PublicModel = new ModelPublic;
		$session = session();
		$data['id_user'] = $session->get('id_user');
		$data['title'] = 'Wisata Morowali';
		$data['kategori'] = $PublicModel->KategoriView();
		$data['wisata'] = $PublicModel->WisataViewSelect();

		echo view('Costumer/AssetCostumer/CSSPublic');
		echo view('Costumer/AssetCostumer/NavbarProduk', $data);
		#data content
		echo view('Costumer/WisataView', $data);
		#end data content
		echo view('Costumer/AssetCostumer/FooterPublic');
		echo view('Costumer/AssetCostumer/JSPublic');
	}
	#END WISATA PROSES
	#################################################################################################
	#MAP PROSES
	public function ViewLokasi($id_produk)
	{
		$PublicModel = new ModelPublic;
		$session = session();
		$data['id_user'] = $session->get('id_user');
		$data['title'] = 'Lokasi Wisata';
		$data['kategori'] = $PublicModel->KategoriView();
		$data['titik'] = $PublicModel->LokasiView($id_produk);

		echo view('Costumer/AssetCostumer/CSSPublic');
		echo view('Costumer/AssetCostumer/NavbarProduk', $data);
		#data content
		echo view('Costumer/OpenStreet/MapView', $data);
		#end data content
		echo view('Costumer/AssetCostumer/FooterPublic');
		echo view('Costumer/AssetCostumer/JSPublic');
	}
	#END MAP PROSES
	##################################################################################################
	#Proses transaksi
	public function TransaksiView()
	{
		$PublicModel = new ModelPublic;
		$session = session();
		$on_user = $session->get('id_user');
		$status = $this->request->getVar('status');

		if (isset($on_user)) {
			if (isset($status)) {
				echo json_encode(['location' => 'PublicController/TransaksiViewFilter/' . $status]);
				exit;
			} else {
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
		} else {
			return redirect()->to('index');
		}
	}

	public function FillterTransaksi()
	{
		$PublicModel = new ModelPublic;
		$session = session();
		$data['id_user'] = $session->get('id_user');
		$data['title'] = 'Riwayat Transaksi';

		$awal = $this->request->getVar('awal');
		$akhir = $this->request->getVar('akhir');
		$status = $this->request->getVar('status');
		$namaProduk = $this->request->getVar('nproduk');

		if ($status != '' && $namaProduk == '' && $awal == '' && $akhir == '') {
			$data['pembayaran'] = $PublicModel->TransaksiViewStatus($session->get('id_user'), $status);
		} elseif ($status != '' && $namaProduk == '' && $awal != '' && $akhir != '') {
			$data['pembayaran'] = $PublicModel->TransaksiViewAll($session->get('id_user'), $status,  $awal, $akhir);
		} elseif ($namaProduk != '' && $status == '' && $awal == '' && $akhir == '') {
			$data['pembayaran'] = $PublicModel->TransaksiViewProduk($session->get('id_user'), $namaProduk);
		} elseif ($namaProduk != '' && $status != '' && $awal == '' && $akhir == '') {
			$data['pembayaran'] = $PublicModel->TransaksiViewProdukStatus($session->get('id_user'), $namaProduk, $status);
		} elseif ($namaProduk != '' && $status == '' && $awal != '' && $akhir != '') {
			$data['pembayaran'] = $PublicModel->TransaksiViewProdukDate($session->get('id_user'), $namaProduk, $awal, $akhir);
		} elseif ($namaProduk != '' && $status != '' && $awal != '' && $akhir != '') {
			$data['pembayaran'] = $PublicModel->TransaksiViewProdukAll($session->get('id_user'), $namaProduk, $awal, $akhir, $status);
		} else {
			$data['pembayaran'] = $PublicModel->FilterView($session->get('id_user'), $awal, $akhir);
		}

		echo view('Costumer/AssetCostumer/CSSPublic');
		echo view('Costumer/AssetCostumer/NavbarPublic', $data);
		#data content
		echo view('Costumer/Transaksi/RiwayatView', $data);
		#end data content
		echo view('Costumer/AssetCostumer/FooterPublic');
		echo view('Costumer/AssetCostumer/JSPublic');
	}

	public function PayView($id_produk)
	{
		$PublicModel = new ModelPublic;
		$session = session();
		$data['id_user'] = $session->get('id_user');
		$data['user'] = $PublicModel->ProfilUser($session->get('id_user'));
		$data['produk'] = $PublicModel->PayData($id_produk);

		$data['jual'] = $PublicModel->DetailJual($id_produk);
		$data['title'] = 'Transaksi';

		echo view('Costumer/AssetCostumer/CSSPublic');
		echo view('Costumer/AssetCostumer/NavbarPublic', $data);
		#data content
		echo view('checkout_snap', $data);
		#end data content
		echo view('Costumer/AssetCostumer/FooterPublic');
		echo view('Costumer/AssetCostumer/JSPublic');
	}
	#End Proses Transaksi
	###################################################################################################
	#PROSES PROFIL
	public function ProfilView()
	{
		$PublicModel = new ModelPublic;
		$session = session();
		$on_user = $session->get('id_user');

		if (isset($on_user)) {
			$data['id_user'] = $session->get('id_user');
			$data['user'] = $PublicModel->ProfilUser($session->get('id_user'));
			$data['title'] = 'Profil User';

			if (isset($data)) {
				echo view('Costumer/AssetCostumer/CSSPublic');
				echo view('Login/AssetLogin/AssetCSS');
				echo view('Costumer/AssetCostumer/NavbarPublic', $data);
				#data content
				echo view('Login/ProfilView', $data);
				#end data content
				echo view('Costumer/AssetCostumer/JSPublic');
			} else {
				echo "error target";
			}
		} else {
			return redirect()->to('index');
		}
	}


	public function ProfilEdit()
	{
		$PublicModel = new ModelPublic;
		$session = session();
		$data['id_user'] = $session->get('id_user');
		$data['user'] = $PublicModel->ProfilUser($session->get('id_user'));
		$data['title'] = 'Edit Profil';

		if (isset($data)) {
			echo view('Costumer/AssetCostumer/CSSPublic');
			echo view('Login/AssetLogin/AssetCSS');
			echo view('Costumer/AssetCostumer/NavbarPublic', $data);
			#data content
			echo view('Login/ProfilEdit', $data);
			#end data content
			echo view('Costumer/AssetCostumer/JSPublic');
		} else {
			echo "error target";
		}
	}

	public function EditProfilProses()
	{
		$PublicModel = new ModelPublic;
		$session = session();
		$data['id_user'] = $session->get('id_user');

		$email = $this->request->getVar('email');
		$phone = $this->request->getVar('phone');
		$username = $this->request->getVar('username');
		$password = $this->request->getVar('pass');

		#gambar proses
		$gambar = $this->request->getFile('gambar');
		$namaGambar = $gambar->getName();


		if ($namaGambar != '') {
			if ($PublicModel->EditProfilFoto($namaGambar, $email, $phone, $username, $password, $session->get('id_user'))) {
				$gambar->move(ROOTPATH . 'public/gambar_user');
				return redirect()->to('ProfilView');
			} else {
				echo "error upload";
			}
		} else {
			if ($PublicModel->EditProfil($email, $phone, $username, $password, $session->get('id_user'))) {
				return redirect()->to('ProfilView');
			} else {
				echo "error";
			}
		}
	}
	#END PROESES PROFIL

	#PROSES UBAH PASSWORD
	public function EditPasswordProses($id_password)
	{
		$PublicModel = new ModelPublic;
		$session = session();
		$data['id_user'] = $session->get('id_user');
		$data['id_password'] = $id_password;
		$data['title'] = 'New Password';

		echo view('Costumer/AssetCostumer/CSSPublic');
		echo view('Login/AssetLogin/AssetCSS');
		echo view('Costumer/AssetCostumer/NavbarPublic', $data);
		#data content
		echo view('LupaPassword/NewPassword', $data);
		#end data content
		echo view('Login/AssetLogin/AssetJS');
	}

	public function ChangePassword()
	{
		$PublicModel = new ModelPublic;
		$session = session();
		$data['id_user'] = $session->get('id_user');
		$data['id_password'] = $this->request->getVar('id');
		$data['danger'] = 1;

		$confirm = $this->request->getVar('password');
		$password = $this->request->getVar('confirm_password');
		$id_user = $this->request->getVar('id');

		if ($confirm == $password) {
			if ($PublicModel->ChangePass($id_user, $password)) {
				return redirect()->to('LoginView');
			} else {
				echo "error";
			}
		} else {
			echo view('Costumer/AssetCostumer/CSSPublic');
			echo view('Login/AssetLogin/AssetCSS');
			echo view('Costumer/AssetCostumer/NavbarPublic', $data);
			#data content
			echo view('LupaPassword/NewPassword', $data);
			#end data content
			echo view('Login/AssetLogin/AssetJS');
		}
	}
	#END PROSES UBAH PASSWORD
}
