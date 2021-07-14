<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelAdmin extends Model
{

	#proses kategori
	public function AddKategori($namaKategori)
	{
		$query = $this->db->query("INSERT INTO tb_kategori(jenis_kategori) VALUES('$namaKategori')");
		return $query;
	}

	public function SeeKategori()
	{
		$query = $this->db->query("SELECT * FROM tb_kategori");
		return $query->getResultArray();
	}

	public function SeeKategoriSelection($id_kategori)
	{
		$query = $this->db->query("SELECT * FROM tb_kategori WHERE id_kategori='$id_kategori'");
		return $query->getRowArray();
	}

	public function EditKategori($id_kategori, $jenis_kategori)
	{
		$query = $this->db->query("UPDATE tb_kategori SET jenis_kategori='$jenis_kategori' WHERE id_kategori='$id_kategori'");
		return $query;
	}

	public function HapusKategori($id_kategori)
	{
		$query = $this->db->query("DELETE FROM tb_kategori WHERE id_kategori='$id_kategori'");
		return $query;
	}
	#end proses kategori
	#####################################################################################################
	#Proses Wisata
	public function AddWisata($id_kategori, $nama_tempat, $deskripsi, $gambar)
	{
		$query = $this->db->query("INSERT INTO tb_produk(id_kategori, nama_produk, deskripsi, gambar,available) VALUES('$id_kategori', '$nama_tempat', '$deskripsi', '$gambar',1)");
		return $query;
	}

	public function SeeWisata()
	{
		$query = $this->db->query("SELECT * FROM tb_produk where id_kategori = 1 and available = 1 order by id_produk desc");
		return $query->getResultArray();
	}

	public function SeeWisataSelection($id_produk)
	{
		$query = $this->db->query("SELECT * FROM tb_produk as tp JOIN tb_kategori as tk ON tk.id_kategori=tp.id_kategori WHERE tp.id_produk='$id_produk'");
		return $query->getRowArray();
	}

	public function EditWisata($id_kategori, $nama_tempat, $deskripsi, $id_wisata)
	{
		$query = $this->db->query("UPDATE tb_produk SET id_kategori='$id_kategori', nama_produk='$nama_tempat', deskripsi='$deskripsi' WHERE id_produk='$id_wisata'");
		return $query;
	}

	public function EditWisataWithGambar($id_kategori, $nama_tempat, $deskripsi, $id_wisata, $namaGambar)
	{
		$query = $this->db->query("UPDATE tb_produk SET id_kategori='$id_kategori', nama_produk='$nama_tempat', deskripsi='$deskripsi', gambar='$namaGambar' WHERE id_produk='$id_wisata'");
		return $query;
	}

	public function HapusWisata($id_wisata)
	{
		$query = $this->db->query("UPDATE tb_produk SET available = 0 WHERE id_produk='$id_wisata'");
		return $query;
	}
	#End Proses Wisata
	####################################################################################################
	#Proses User
	public function SeeUser()
	{
		$query = $this->db->query("SELECT * FROM tb_user");
		return $query->getResultArray();
	}
	#End Proses User
	####################################################################################################
	#Proses Produk
	public function AddProduk($id_kategori, $nama_produk, $deskripsi, $stok, $harga, $namaGambar)
	{
		$query = $this->db->query("INSERT INTO tb_produk(id_kategori,nama_produk,stok,deskripsi,gambar,harga,available) VALUES('$id_kategori', '$nama_produk', '$stok', '$deskripsi', '$namaGambar', '$harga',1)");
		return $query;
	}

	public function SeeProduk()
	{
		$query = $this->db->query("SELECT tb.*, tk.jenis_kategori FROM tb_produk as tb JOIN tb_kategori as tk ON tk.id_kategori=tb.id_kategori WHERE available = 1");
		return $query->getResultArray();
	}

	public function SeeProdukSelection($id_produk)
	{
		$query = $this->db->query("SELECT * FROM tb_produk AS tp JOIN tb_kategori as kt ON kt.id_kategori=tp.id_kategori WHERE tp.id_produk='$id_produk'");
		return $query->getRowArray();
	}

	public function EditProduk($id_kategori, $nama_produk, $deskripsi, $stok, $harga, $id_produk)
	{
		$query = $this->db->query("UPDATE tb_produk SET id_kategori='$id_kategori', deskripsi='$deskripsi', stok='$stok', harga='$harga', nama_produk='$nama_produk' WHERE id_produk='$id_produk'");
		return $query;
	}

	public function EditProdukWithGambar($id_kategori, $nama_produk, $deskripsi, $stok, $harga, $namaGambar, $id_produk)
	{
		$query = $this->db->query("UPDATE tb_produk SET id_kategori='$id_kategori', deskripsi='$deskripsi', stok='$stok', harga='$harga', nama_produk='$nama_produk', gambar='$namaGambar' WHERE id_produk='$id_produk'");
		return $query;
	}
	public function HapusProduk($id_produk)
	{
		$query = $this->db->query("UPDATE tb_produk SET available = 0 WHERE id_produk='$id_produk'");
		return $query;
	}
	#End Proses Produk
	#############################################################################################################
	#Proses Profil
	public function ProfilAdmin($id_admin)
	{
		$query = $this->db->query("SELECT * FROM tb_admin WHERE id_admin='$id_admin'");
		return $query->getRowArray();
	}

	public function EditProfil($id_admin, $nama_admin, $username, $email)
	{
		$query = $this->db->query("UPDATE tb_admin SET admin_name='$nama_admin', username='$username', email='$email' WHERE id_admin='$id_admin'");
		return $query;
	}

	public function EditProfilWithGambar($id_admin, $nama_admin, $username, $email, $namaGambar)
	{
		$query = $this->db->query("UPDATE tb_admin SET admin_name='$nama_admin', username='$username', email='$email', gambar='$namaGambar' WHERE id_admin='$id_admin'");
		return $query;
	}

	public function EditPassword($id_admin, $password)
	{
		$query = $this->db->query("UPDATE tb_admin SET password='$password' WHERE id_admin='$id_admin'");
		return $query;
	}
	#End Proses Profil
	##########################################################################################################################
	#Proses Pembayaran
	public function PembayaranView()
	{
		$query = $this->db->query("SELECT * FROM tb_transaksi as tt LEFT JOIN tb_produk as tp ON tp.id_produk=tt.id_produk JOIN tb_user as tu ON tu.id_user=tt.id_user JOIN tb_pembayaran as tb ON tb.id_transaksi=tt.id_transaksi ORDER BY tb.status DESC");
		return $query->getResultArray();
	}

	public function PembayaranFilter($awal, $akhir)
	{
		$query = $this->db->query("SELECT * FROM tb_transaksi as tt JOIN tb_produk as tp ON tp.id_produk=tt.id_produk JOIN tb_user as tu ON tu.id_user=tt.id_user JOIN tb_pembayaran as tb ON tb.id_transaksi=tt.id_transaksi WHERE tb.tgl_bayar BETWEEN '$awal' AND '$akhir' ORDER BY tb.status DESC");
		return $query->getResultArray();
	}

	public function PembayaranViewStatus($status)
	{
		$query = $this->db->query("SELECT * FROM tb_transaksi as tt JOIN tb_produk as tp ON tp.id_produk=tt.id_produk JOIN tb_user as tu ON tu.id_user=tt.id_user JOIN tb_pembayaran as tb ON tb.id_transaksi=tt.id_transaksi WHERE tb.status='$status'");
		return $query->getResultArray();
	}

	public function PembayaranViewAll($status, $awal, $akhir)
	{
		$query = $this->db->query("SELECT * FROM tb_transaksi as tt JOIN tb_produk as tp ON tp.id_produk=tt.id_produk JOIN tb_user as tu ON tu.id_user=tt.id_user JOIN tb_pembayaran as tb ON tb.id_transaksi=tt.id_transaksi WHERE tb.status='$status' AND tb.tgl_bayar BETWEEN '$awal' AND '$akhir'");
		return $query->getResultArray();
	}

	public function PembayaranViewProduk($namaProduk)
	{
		$query = $this->db->query("SELECT * FROM tb_transaksi as tt JOIN tb_produk as tp ON tp.id_produk=tt.id_produk JOIN tb_user as tu ON tu.id_user=tt.id_user JOIN tb_pembayaran as tb ON tb.id_transaksi=tt.id_transaksi WHERE tp.nama_produk LIKE '%$namaProduk%'");
		return $query->getResultArray();
	}

	public function PembayaranViewProdukStatus($namaProduk, $status)
	{
		$query = $this->db->query("SELECT * FROM tb_transaksi as tt JOIN tb_produk as tp ON tp.id_produk=tt.id_produk JOIN tb_user as tu ON tu.id_user=tt.id_user JOIN tb_pembayaran as tb ON tb.id_transaksi=tt.id_transaksi WHERE tp.nama_produk LIKE '%$namaProduk%' AND tb.status='$status'");
		return $query->getResultArray();
	}

	public function PembayaranViewProdukDate($namaProduk, $awal, $akhir)
	{
		$query = $this->db->query("SELECT * FROM tb_transaksi as tt JOIN tb_produk as tp ON tp.id_produk=tt.id_produk JOIN tb_user as tu ON tu.id_user=tt.id_user JOIN tb_pembayaran as tb ON tb.id_transaksi=tt.id_transaksi WHERE tp.nama_produk LIKE '%$namaProduk%' AND tb.tgl_bayar BETWEEN '$awal' AND '$akhir'");
		return $query->getResultArray();
	}

	public function PembayaranViewProdukAll($namaProduk, $awal, $akhir, $status)
	{
		$query = $this->db->query("SELECT * FROM tb_transaksi as tt JOIN tb_produk as tp ON tp.id_produk=tt.id_produk JOIN tb_user as tu ON tu.id_user=tt.id_user JOIN tb_pembayaran as tb ON tb.id_transaksi=tt.id_transaksi WHERE tp.nama_produk LIKE '%$namaProduk%' AND tb.status='$status' AND tb.tgl_bayar BETWEEN '$awal' AND '$akhir'");
		return $query->getResultArray();
	}
	#End Proses Pembayaran
	##########################################################################################################################
	#Proses Transaksi
	public function TransaksiView()
	{
		$query = $this->db->query("SELECT tu.fname, tu.lname, tt.totBayar, tt.tgl_transaksi, tj.tanggal_jual, tbp.status, tp.nama_produk, tt.banyak, tp.harga FROM tb_transaksi as tt LEFT JOIN tb_produk as tp ON tp.id_produk=tt.id_produk JOIN tb_user as tu ON tu.id_user=tt.id_user JOIN tb_jual as tj ON tj.id_jual=tt.id_jual JOIN tb_pembayaran as tbp ON tbp.id_transaksi=tt.id_transaksi");
		return $query->getResultArray();
	}

	public function KonfirmasiPembayaran($id_pembayaran)
	{
		$query = $this->db->query("UPDATE tb_pembayaran SET status='1' WHERE id_pembayaran='$id_pembayaran'");
		return $query;
	}

	public function KonfirmasiBatal($id_pembayaran)
	{
		$query = $this->db->query("UPDATE tb_pembayaran SET status='0' WHERE id_pembayaran='$id_pembayaran'");
		return $query;
	}
	#End Proses Transaksi
	######################################################################################################################################
	#Proses Lokasi
	public function AddTitik($id_wisata, $longtitude, $latitude)
	{
		$query = $this->db->query("INSERT INTO tb_titik(id_produk,longtitude,latitude) VALUES('$id_wisata', '$longtitude','$latitude')");
		return $query;
	}

	public function SeeLokasi()
	{
		$query = $this->db->query("SELECT * FROM tb_titik as tk JOIN tb_produk as tw ON tw.id_produk=tk.id_produk");
		return $query->getResultArray();
	}

	public function SelectionTitik($id_titik)
	{
		$query = $this->db->query("SELECT * FROM tb_titik as tk JOIN tb_wisata as tw ON tw.id_wisata=tk.id_wisata WHERE id_titik='$id_titik'");
		return $query->getRowArray();
	}

	public function HapusTitik($id_titik)
	{
		$query = $this->db->query("DELETE FROM tb_titik WHERE id_titik='$id_titik'");
		return $query;
	}

	public function EditLokasi($id_titik, $latitude, $longtitude)
	{
		$query = $this->db->query("UPDATE tb_titik SET latitude='$latitude', longtitude='$longtitude' WHERE id_titik='$id_titik'");
		return $query;
	}

	public function LokasiView($id_wisata)
	{
		$query = $this->db->query("SELECT * FROM tb_titik as tk JOIN tb_produk AS tw ON tw.id_produk=tk.id_produk WHERE tk.id_produk='$id_wisata'");
		return $query->getRowArray();
	}
	#End Proses Lokasi

	#Proses Login
	public function LoginConfirm($username, $password)
	{
		$query = $this->db->query("SELECT * FROM tb_admin WHERE username='$username' AND password='$password'");
		return $query->getRowArray();
	}
	#End Proses Login

	#PROSES JUAL
	public function SeeJual()
	{
		$query = $this->db->query("SELECT tj.*, tp.nama_produk FROM tb_jual as tj JOIN tb_produk as tp ON tp.id_produk=tj.id_produk");
		return $query->getResultArray();
	}

	public function SeeJualSelection($id_jual)
	{
		$query = $this->db->query("SELECT tj.*, tp.nama_produk, tp.id_produk FROM tb_jual as tj JOIN tb_produk as tp ON tp.id_produk=tj.id_produk WHERE tj.id_jual='$id_jual'");
		return $query->getRowArray();
	}

	public function AddJual($id_produk, $tanggal, $stock)
	{
		$query = $this->db->query("INSERT INTO tb_jual(id_produk, tanggal_jual, stock) VALUES('$id_produk', '$tanggal', '$stock')");
		return $query;
	}

	public function EditJual($id_jual, $id_produk, $tanggal, $stock)
	{
		$query = $this->db->query("UPDATE tb_jual SET id_produk='$id_produk', tanggal_jual='$tanggal', stock='$stock' WHERE id_jual='$id_jual'");
		return $query;
	}

	public function HapusJual($id_jual)
	{
		$query = $this->db->query("DELETE FROM tb_jual WHERE id_jual='$id_jual'");
		return $query;
	}
	#END PROSES JUAL

	#PROSES FILLTER
	public function TransaksiFilter($awal, $akhir)
	{
		$query = $this->db->query("SELECT * FROM tb_transaksi as tt JOIN tb_produk as tp ON tp.id_produk=tt.id_produk JOIN tb_user as tu ON tu.id_user=tt.id_user JOIN tb_jual as tj ON tj.id_jual=tt.id_jual WHERE tt.tgl_transaksi BETWEEN '$awal' AND '$akhir'");
		return $query->getResultArray();
	}

	public function TransaksiViewStatus($status)
	{
		$query = $this->db->query("SELECT * FROM tb_transaksi as tr JOIN tb_produk as pr ON pr.id_produk=tr.id_produk JOIN tb_pembayaran as tp ON tp.id_transaksi=tr.id_transaksi JOIN tb_user as tu ON tu.id_user=tr.id_user JOIN tb_jual as tj ON tj.id_jual=tr.id_jual WHERE tp.status='$status'");
		return $query->getResultArray();
	}

	public function TransaksiViewAll($status,  $awal, $akhir)
	{
		$query = $this->db->query("SELECT * FROM tb_transaksi as tr JOIN tb_produk as pr ON pr.id_produk=tr.id_produk JOIN tb_pembayaran as tp ON tp.id_transaksi=tr.id_transaksi JOIN tb_user as tu ON tu.id_user=tr.id_user JOIN tb_jual as tj ON tj.id_jual=tr.id_jual WHERE tp.status='$status' AND tr.tgl_transaksi BETWEEN '$awal' AND '$akhir'");
		return $query->getResultArray();
	}

	public function TransaksiViewProduk($namaProduk)
	{
		$query = $this->db->query("SELECT * FROM tb_transaksi as tr JOIN tb_produk as pr ON pr.id_produk=tr.id_produk JOIN tb_pembayaran as tp ON tp.id_transaksi=tr.id_transaksi JOIN tb_user as tu ON tu.id_user=tr.id_user JOIN tb_jual as tj ON tj.id_jual=tr.id_jual WHERE pr.nama_produk LIKE '%$namaProduk%'");
		return $query->getResultArray();
	}

	public function TransaksiViewProdukDate($namaProduk, $awal, $akhir)
	{
		$query = $this->db->query("SELECT * FROM tb_transaksi as tr JOIN tb_produk as pr ON pr.id_produk=tr.id_produk JOIN tb_pembayaran as tp ON tp.id_transaksi=tr.id_transaksi JOIN tb_user as tu ON tu.id_user=tr.id_user JOIN tb_jual as tj ON tj.id_jual=tr.id_jual WHERE pr.nama_produk LIKE '%$namaProduk%' AND tr.tgl_transaksi BETWEEN '$awal' AND '$akhir'");
		return $query->getResultArray();
	}

	public function TransaksiViewProdukStatus($namaProduk, $status)
	{
		$query = $this->db->query("SELECT * FROM tb_transaksi as tr JOIN tb_produk as pr ON pr.id_produk=tr.id_produk JOIN tb_pembayaran as tp ON tp.id_transaksi=tr.id_transaksi JOIN tb_user as tu ON tu.id_user=tr.id_user JOIN tb_jual as tj ON tj.id_jual=tr.id_jual WHERE pr.nama_produk LIKE '%$namaProduk%' AND tp.status='$status'");
		return $query->getResultArray();
	}

	public function TransaksiViewProdukAll($namaProduk, $awal, $akhir, $status)
	{
		$query = $this->db->query("SELECT * FROM tb_transaksi as tr JOIN tb_produk as pr ON pr.id_produk=tr.id_produk JOIN tb_pembayaran as tp ON tp.id_transaksi=tr.id_transaksi  JOIN tb_user as tu ON tu.id_user=tr.id_user JOIN tb_jual as tj ON tj.id_jual=tr.id_jual WHERE pr.nama_produk LIKE '%$namaProduk%' AND tp.status='$status' AND tr.tgl_transaksi BETWEEN '$awal' AND '$akhir'");
		return $query->getResultArray();
	}
	#END PROSES FILTERR

	#PROSES DASHBOARD
	public function DasUser()
	{
		$query = $this->db->query("SELECT * FROM tb_user");
		return $query->getNumRows();
	}

	public function DasTran()
	{
		$query = $this->db->query("SELECT * FROM tb_transaksi");
		return $query->getNumRows();
	}

	public function DasPem()
	{
		$query = $this->db->query("SELECT * FROM tb_pembayaran WHERE status='1'");
		return $query->getNumRows();
	}

	public function DasPro()
	{
		$query = $this->db->query("SELECT * FROM tb_produk");
		return $query->getNumRows();
	}
	#END PROSES
}
