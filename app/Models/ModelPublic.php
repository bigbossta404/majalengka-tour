<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelPublic extends Model
{

	#PROFIL PROSES
	public function ProfilUser($id_user)
	{
		$query = $this->db->query("SELECT * FROM tb_user WHERE id_user='$id_user'");
		return $query->getRowArray();
	}

	public function EditProfil($email, $phone, $username, $password, $id_user)
	{
		$query = $this->db->query("UPDATE  tb_user SET email='$email', telephone='$phone', username='$username', password='$password' WHERE id_user='$id_user'");
		return $query;
	}

	public function EditProfilFoto($namaGambar, $email, $phone, $username, $password, $id_user)
	{
		$query = $this->db->query("UPDATE  tb_user SET gambar='$namaGambar', email='$email', telephone='$phone', username='$username', password='$password' WHERE id_user='$id_user'");
		return $query;
	}
	#END PROSES PROFIL
	###########################################################################
	#LOGIN PROSES
	public function LoginConfirm($email, $password)
	{
		$query = $this->db->query("SELECT * FROM tb_user WHERE email='$email' AND password='$password'");
		return $query->getRowArray();
	}
	#END PROSES LOGIN
	###########################################################################
	#PROSES REGISTER
	public function RegisterSelection($email)
	{
		$query = $this->db->query("SELECT * FROM tb_user WHERE email='$email'");
		return $query->getRowArray();
	}

	public function RegisterProses($fname, $lname, $email, $password)
	{
		$query = $this->db->query("INSERT INTO tb_user(fname, lname, email, password) VALUES('$fname', '$lname', '$email', '$password')");
		return $query;
	}
	#END PROSES REGISTER
	###########################################################################
	#KATAGORI PROSES
	public function KategoriView()
	{
		$query = $this->db->query("SELECT * FROM tb_kategori");
		return $query->getResultArray();
	}
	#KATEGORI END PROSES
	###########################################################################
	#PRODUK WISATA
	public function ProdukView()
	{
		$query = $this->db->query("SELECT * FROM tb_produk WHERE id_kategori=1");
		return $query->getResultArray();
	}

	public function ProdukViewSelect($id_kategori)
	{
		$query = $this->db->query("SELECT * FROM tb_produk WHERE id_kategori='$id_kategori'");
		return $query->getResultArray();
	}
	#END PROSES PRODUK
	###########################################################################
	#WISATA PROSES
	public function WisataViewSelect()
	{
		$query = $this->db->query("SELECT * FROM tb_produk WHERE id_kategori=1");
		return $query->getResultArray();
	}
	#END PROSES WISATA
	###########################################################################
	#PROSES MAP
	public function LokasiView($id_produk)
	{
		$query = $this->db->query("SELECT * FROM tb_produk tp JOIN tb_titik tk ON tk.id_produk = tp.id_produk WHERE id_kategori=1 AND tk.id_produk = '$id_produk'");
		return $query->getRowArray();
	}
	#END PROSES MAP
	###########################################################################
	#Proses Transaksi
	public function TransaksiView($id_user)
	{
		$query = $this->db->query("SELECT * FROM tb_transaksi as tr LEFT JOIN tb_produk as pr ON pr.id_produk=tr.id_produk JOIN tb_pembayaran as tp ON tp.id_transaksi=tr.id_transaksi WHERE tr.id_user='$id_user'");
		return $query->getResultArray();
	}

	public function TransaksiViewStatus($id_user, $status)
	{
		$query = $this->db->query("SELECT * FROM tb_transaksi as tr JOIN tb_produk as pr ON pr.id_produk=tr.id_produk JOIN tb_pembayaran as tp ON tp.id_transaksi=tr.id_transaksi WHERE tr.id_user='$id_user' AND tp.status='$status'");
		return $query->getResultArray();
	}

	public function TransaksiViewAll($id_user, $status,  $awal, $akhir)
	{
		$query = $this->db->query("SELECT * FROM tb_transaksi as tr JOIN tb_produk as pr ON pr.id_produk=tr.id_produk JOIN tb_pembayaran as tp ON tp.id_transaksi=tr.id_transaksi WHERE tr.id_user='$id_user' AND tp.status='$status' AND tr.tgl_transaksi BETWEEN '$awal' AND '$akhir'");
		return $query->getResultArray();
	}

	public function TransaksiViewProduk($id_user, $namaProduk)
	{
		$query = $this->db->query("SELECT * FROM tb_transaksi as tr JOIN tb_produk as pr ON pr.id_produk=tr.id_produk JOIN tb_pembayaran as tp ON tp.id_transaksi=tr.id_transaksi WHERE tr.id_user='$id_user' AND pr.nama_produk LIKE '%$namaProduk%'");
		return $query->getResultArray();
	}

	public function TransaksiViewProdukStatus($id_user, $namaProduk, $status)
	{
		$query = $this->db->query("SELECT * FROM tb_transaksi as tr JOIN tb_produk as pr ON pr.id_produk=tr.id_produk JOIN tb_pembayaran as tp ON tp.id_transaksi=tr.id_transaksi WHERE tr.id_user='$id_user' AND pr.nama_produk LIKE '%$namaProduk%' AND tp.status='$status'");
		return $query->getResultArray();
	}

	public function TransaksiViewProdukDate($id_user, $namaProduk, $awal, $akhir)
	{
		$query = $this->db->query("SELECT * FROM tb_transaksi as tr JOIN tb_produk as pr ON pr.id_produk=tr.id_produk JOIN tb_pembayaran as tp ON tp.id_transaksi=tr.id_transaksi WHERE tr.id_user='$id_user' AND pr.nama_produk LIKE '%$namaProduk%' AND tr.tgl_transaksi BETWEEN '$awal' AND '$akhir'");
		return $query->getResultArray();
	}

	public function TransaksiViewProdukAll($id_user, $namaProduk, $awal, $akhir, $status)
	{
		$query = $this->db->query("SELECT * FROM tb_transaksi as tr JOIN tb_produk as pr ON pr.id_produk=tr.id_produk JOIN tb_pembayaran as tp ON tp.id_transaksi=tr.id_transaksi WHERE tr.id_user='$id_user' AND pr.nama_produk LIKE '%$namaProduk%' AND tp.status='$status' AND tr.tgl_transaksi BETWEEN '$awal' AND '$akhir'");
		return $query->getResultArray();
	}

	public function FilterView($id_user, $awal, $akhir)
	{
		$query = $this->db->query("SELECT * FROM tb_transaksi as tr JOIN tb_produk as pr ON pr.id_produk=tr.id_produk JOIN tb_pembayaran as tp ON tp.id_transaksi=tr.id_transaksi WHERE tr.id_user='$id_user' AND tr.tgl_transaksi BETWEEN '$awal' AND '$akhir'");
		return $query->getResultArray();
	}
	public function PayData($id_produk)
	{
		$query = $this->db->query("SELECT * FROM tb_produk WHERE id_produk='$id_produk'");
		return $query->getRowArray();
	}

	public function InsertTransaksi($id_jual, $id_produk, $total, $id_user, $order_id, $banyak)
	{
		$query = $this->db->query("INSERT INTO tb_transaksi(id_transaksi, id_produk, id_user, tgl_transaksi, id_jual, banyak, totBayar, status) VALUES('$order_id', '$id_produk', '$id_user', NOW(), '$id_jual', '$banyak', '$total', '0')");
		return $query;
	}

	public function InsertPembayaran($order_id, $va_number)
	{
		$query = $this->db->query("INSERT INTO tb_pembayaran(id_transaksi, tgl_bayar, bukti_bayar, status) VALUES('$order_id', NOW(), '$va_number', '0')");
		return $query;
	}

	public function VerifySukses($id_transaksi)
	{
		$query = $this->db->query("UPDATE tb_pembayaran SET status=1 WHERE id_transaksi='$id_transaksi'");
		return $query;
	}

	public function VerifyTransaksiSukses($id_transaksi)
	{
		$query = $this->db->query("UPDATE tb_pembayaran SET status=1 WHERE id_transaksi='$id_transaksi'");
		return $query;
	}
	#End Proses transaksi

	#INVOICE
	public function InvoiceData($id_transaksi)
	{
		$query = $this->db->query("SELECT
			tb.nama_produk, tbu.fname, tbu.lname, tbu.email, tbu.telephone, tb.harga,
			tbt.*, tb.id_kategori, tj.tanggal_jual	FROM tb_transaksi as tbt
			JOIN tb_pembayaran as tbp
			ON tbp.id_transaksi=tbt.id_transaksi
			JOIN tb_user as tbu
			ON tbt.id_user=tbu.id_user
			JOIN tb_produk as tb
			ON tb.id_produk=tbt.id_produk
			JOIN tb_jual as tj
			ON tj.id_jual=tbt.id_jual
			WHERE tbt.id_transaksi ='$id_transaksi'");
		return $query->getRowArray();
	}
	#End Invoice

	#UBAH PASSWORD
	public function ChangePass($id_user, $password)
	{
		$query = $this->db->query("UPDATE tb_user SET password='$password' WHERE id_user='$id_user'");
		return $query;
	}
	#END UBAH PASSWORD

	#DATA JUAL
	public function DetailJual($id_produk)
	{
		$query = $this->db->query("SELECT * FROM tb_jual WHERE id_produk='$id_produk' AND stock > 0 AND tanggal_jual >= DATE(NOW())");
		return $query->getResultArray();
	}

	public function jumlahPesan($id_transaksi)
	{
		$query = $this->db->query("SELECT tt.banyak, tj.id_jual FROM tb_transaksi as tt JOIN tb_jual as tj ON tj.id_jual=tt.id_jual WHERE tt.id_transaksi='$id_transaksi'");
		return $query->getRowArray();
	}

	public function UpdateJual($banyak, $id_jual)
	{
		$query = $this->db->query("UPDATE tb_jual SET stock=stock-$banyak WHERE id_jual='$id_jual'");
		return $query;
	}

	public function UpdateGagalJual($banyak, $id_jual)
	{
		$query = $this->db->query("UPDATE tb_jual SET stock=stock+$banyak WHERE id_jual='$id_jual'");
		return $query;
	}

	public function StockSisa($id_jual)
	{
		$query = $this->db->query("SELECT stock FROM tb_jual WHERE id_jual='$id_jual'");
		return $query->getRowArray();
	}
	#END PROSES DATA JUAL
	####################################################################################
}
