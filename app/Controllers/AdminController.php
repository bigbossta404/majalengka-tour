<?php

namespace App\Controllers;

use App\Models\ModelAdmin;

class AdminController extends BaseController
{
	public function index()
	{
		echo view('Admin/AssetAdmin/AssetCSS');
		#data content
		echo view('Admin/LoginView');
		#end data content
		echo view('Admin/AssetAdmin/AssetJS');
	}

	#DASHBOAERD
	public function Dashboard()
	{
		$session = session();
		$AdminData = new ModelAdmin;

		$on_admin = $session->get('id_admin');

		if (isset($on_admin)) {
			$data['nama_admin'] = $session->get('nama_admin');
			$data['gambar'] = $session->get('gambar');
			$data['title'] = 'Dashboard';

			$data['users'] = $AdminData->DasUser();
			$data['transaksi'] = $AdminData->DasTran();
			$data['pembayaran'] = $AdminData->DasPem();
			$data['produk'] = $AdminData->DasPro();

			echo view('Admin/AssetAdmin/AssetCSS');
			echo view('Admin/AssetAdmin/Navbar', $data);
			echo view('Admin/AssetAdmin/SideBar', $data);
			#data content
			echo view('Admin/Dashboard', $data);
			#end data content
			echo view('Admin/AssetAdmin/Footer');
			echo view('Admin/AssetAdmin/AssetJS');
		} else {
			return redirect()->to('index');
		}
	}
	#END DASHBOARD

	#PROSES LOGIN
	public function LoginAdmin()
	{
		$session = session();
		$AdminData = new ModelAdmin;

		#get data
		$username = $this->request->getVar('username');
		$password = $this->request->getVar('pass');

		#seleksi login non password verify
		$data = $AdminData->LoginConfirm($username, $password);

		if ($data != null) {
			$AdminData = [
				'id_admin'       => $data['id_admin'],
				'username'     => $data['username'],
				'email'    => $data['email'],
				'gambar'    => $data['gambar'],
				'nama_admin'    => $data['admin_name'],
				'logged_in'     => true
			];
			$session->set($AdminData);
			return redirect()->to('Dashboard');
		} else {
			session()->setFlashdata('msg', "Your email or password doesn't exist");
			return redirect()->to('index')->withInput();
		}
	}
	#END PROSES LOGIN

	#PROSES LOGOUT
	public function LogoutAdmin()
	{
		$session = session();
		$session->destroy();
		return redirect()->to('index');
	}
	#END PROSES LOGOUT

	#proses kategori
	public function AddKategori()
	{
		$session = session();

		$on_admin = $session->get('id_admin');

		if (isset($on_admin)) {
			$data['nama_admin'] = $session->get('nama_admin');
			$data['gambar'] = $session->get('gambar');
			$data['title'] = 'Tambah Kategori';

			echo view('Admin/AssetAdmin/AssetCSS');
			echo view('Admin/AssetAdmin/Navbar', $data);
			echo view('Admin/AssetAdmin/SideBar', $data);
			#data content
			echo view('Admin/AddKategori');
			#end data content
			echo view('Admin/AssetAdmin/Footer');
			echo view('Admin/AssetAdmin/AssetJS');
		} else {
			return redirect()->to('index');
		}
	}

	public function AddKategoriProses()
	{
		$modelAdmin = new ModelAdmin;
		$session = session();
		$data['nama_admin'] = $session->get('nama_admin');
		$data['gambar'] = $session->get('gambar');
		$namaKategori = $this->request->getVar('namaKategori');

		if ($modelAdmin->AddKategori($namaKategori)) {
			session()->setFlashdata('msg', "Data Kategori Berhasil ditambahkan");
			return redirect()->to('SeeKategori');
		} else {
			echo "error";
		}
	}

	public function SeeKategori()
	{
		$modelAdmin = new ModelAdmin;

		$session = session();
		$on_admin = $session->get('id_admin');

		if (isset($on_admin)) {
			$data['kategori'] = $modelAdmin->SeeKategori();
			$data['title'] = 'Kategori';
			$session = session();
			$data['nama_admin'] = $session->get('nama_admin');
			$data['gambar'] = $session->get('gambar');

			echo view('Admin/AssetAdmin/AssetCSS');
			echo view('Admin/AssetAdmin/Navbar', $data);
			echo view('Admin/AssetAdmin/SideBar', $data);
			#data content
			echo view('Admin/SeeKategori', $data);
			#end data content
			echo view('Admin/AssetAdmin/Footer');
			echo view('Admin/AssetAdmin/AssetJS');
		} else {
			return redirect()->to('index');
		}
	}

	public function EditKategori($id_kategori)
	{
		$modelAdmin = new ModelAdmin;
		$session = session();
		$on_admin = $session->get('id_admin');

		if (isset($on_admin)) {
			$data['nama_admin'] = $session->get('nama_admin');
			$data['gambar'] = $session->get('gambar');
			$data['title'] = 'Edit Kategori';

			if ($modelAdmin->SeeKategoriSelection($id_kategori)) {
				$data['kategori'] = $id_kategori;
				$data['seeKategori'] = $modelAdmin->SeeKategoriSelection($id_kategori);

				echo view('Admin/AssetAdmin/AssetCSS');
				echo view('Admin/AssetAdmin/Navbar', $data);
				echo view('Admin/AssetAdmin/SideBar', $data);
				#data content
				echo view('Admin/EditKategori', $data);
				#end data content
				echo view('Admin/AssetAdmin/Footer');
				echo view('Admin/AssetAdmin/AssetJS');
			}
		} else {
			return redirect()->to('index');
		}
	}

	public function EditKategoriProses()
	{
		$modelAdmin = new ModelAdmin;
		$session = session();
		$data['nama_admin'] = $session->get('nama_admin');
		$data['gambar'] = $session->get('gambar');

		$jKategori = $this->request->getVar('namaKategori');
		$id_kategori = $this->request->getVar('id_kategori');

		if ($modelAdmin->EditKategori($id_kategori, $jKategori)) {
			session()->setFlashdata('msg', "Data Kategori Berhasil diubah");
			return redirect()->to('SeeKategori');
		} else {
			echo "error";
		}
	}

	public function HapusKategori($id_kategori)
	{
		$modelAdmin = new ModelAdmin;
		$session = session();
		$data['nama_admin'] = $session->get('nama_admin');
		$data['gambar'] = $session->get('gambar');

		if ($modelAdmin->HapusKategori($id_kategori)) {
			session()->setFlashdata('msg', "Data Kategori Berhasil dihapus");
			return redirect()->to('../AdminController/SeeKategori');
		} else {
			echo "error";
		}
	}
	#end proses kategori

	#proses tempat wisata
	public function AddWisata()
	{
		$modelAdmin = new ModelAdmin;
		$session = session();
		$on_admin = $session->get('id_admin');

		if (isset($on_admin)) {
			$data['nama_admin'] = $session->get('nama_admin');
			$data['gambar'] = $session->get('gambar');
			$data['title'] = 'Tambah Wisata';
			$data['kategori'] = $modelAdmin->SeeKategori();

			echo view('Admin/AssetAdmin/AssetCSS');
			echo view('Admin/AssetAdmin/Navbar', $data);
			echo view('Admin/AssetAdmin/SideBar', $data);
			#data content
			echo view('Admin/Wisata/AddWisata', $data);
			#end data content
			echo view('Admin/AssetAdmin/Footer');
			echo view('Admin/AssetAdmin/AssetJS');
		} else {
			return redirect()->to('index');
		}
	}

	public function AddWisataProses()
	{
		$modelAdmin = new ModelAdmin;
		$session = session();
		$data['nama_admin'] = $session->get('nama_admin');
		$data['gambar'] = $session->get('gambar');

		$data['kategori'] = $modelAdmin->SeeKategori();

		$nama_tempat = $this->request->getVar('namaTempat');
		$id_kategori = $this->request->getVar('id_kategori');
		$deskripsi = $this->request->getVar('deskripsi');

		#gambar proses
		$gambar = $this->request->getFile('gambar');
		$namaGambar = $gambar->getName();

		if ($modelAdmin->AddWisata($id_kategori, $nama_tempat, $deskripsi, $namaGambar)) {
			$gambar->move(ROOTPATH . 'public/gambar_wisata');
			session()->setFlashdata('msg', "Data Wisata Berhasil ditambahkan");
			return redirect()->to('../AdminController/EditWisata');
		} else {
			echo "error memasukkan data!";
		}
	}

	public function EditWisata()
	{
		$modelAdmin = new ModelAdmin;
		$session = session();
		$on_admin = $session->get('id_admin');

		if (isset($on_admin)) {
			$data['nama_admin'] = $session->get('nama_admin');
			$data['gambar'] = $session->get('gambar');
			$data['title'] = 'Edit Wisata';
			$data['wisata'] = $modelAdmin->SeeWisata();

			echo view('Admin/AssetAdmin/AssetCSS');
			echo view('Admin/AssetAdmin/Navbar', $data);
			echo view('Admin/AssetAdmin/SideBar', $data);
			#data content
			echo view('Admin/Wisata/EditWisata', $data);
			#end data content
			echo view('Admin/AssetAdmin/Footer');
			echo view('Admin/AssetAdmin/AssetJS');
		} else {
			return redirect()->to('index');
		}
	}

	public function AddEditWisata($id_produk)
	{
		$modelAdmin = new ModelAdmin;
		$session = session();
		$on_admin = $session->get('id_admin');

		if (isset($on_admin)) {
			$data['nama_admin'] = $session->get('nama_admin');
			$data['gambar'] = $session->get('gambar');
			$data['title'] = 'Tambah Edit Wisata';
			$data['wisata'] = $modelAdmin->SeeWisataSelection($id_produk);
			$data['kategori'] = $modelAdmin->SeeKategori();
			$data['id_wisata'] = $id_produk;

			echo view('Admin/AssetAdmin/AssetCSS');
			echo view('Admin/AssetAdmin/Navbar', $data);
			echo view('Admin/AssetAdmin/SideBar', $data);
			#data content
			echo view('Admin/Wisata/AddWisata', $data);
			#end data content
			echo view('Admin/AssetAdmin/Footer');
			echo view('Admin/AssetAdmin/AssetJS');
		} else {
			return redirect()->to('index');
		}
	}

	public function EditWisataProses()
	{
		$modelAdmin = new ModelAdmin;
		$session = session();
		$data['nama_admin'] = $session->get('nama_admin');
		$data['gambar'] = $session->get('gambar');

		$nama_tempat = $this->request->getVar('namaTempat');
		$id_kategori = $this->request->getVar('id_kategori');
		$deskripsi = $this->request->getVar('deskripsi');
		$id_wisata = $this->request->getVar('id_wisata');

		#gambar proses
		$gambar = $this->request->getFile('gambar');
		$namaGambar = $gambar->getName();

		#jika gambar kosong/null
		if ($namaGambar == '') {
			if ($modelAdmin->EditWisata($id_kategori, $nama_tempat, $deskripsi, $id_wisata)) {
				session()->setFlashdata('msg', "Data Wisata Berhasil diubah");
				return redirect()->to('../AdminController/EditWisata');
			} else {
				echo "error memasukkan data!";
			}
		} else {
			if ($modelAdmin->EditWisataWithGambar($id_kategori, $nama_tempat, $deskripsi, $id_wisata, $namaGambar)) {
				$gambar->move(ROOTPATH . 'public/gambar_wisata');
				session()->setFlashdata('msg', "Data Wisata Berhasil diubah");
				return redirect()->to('../AdminController/EditWisata');
			} else {
				echo "error memasukkan data!2";
			}
		}
	}

	public function HapusWisata($id_wisata, $gambar)
	{
		$modelAdmin = new ModelAdmin;
		$session = session();
		$data['nama_admin'] = $session->get('nama_admin');
		$data['gambar'] = $session->get('gambar');
		if (file_exists(ROOTPATH . 'public/gambar_wisata/' . $gambar)) {
			if ($modelAdmin->HapusWisata($id_wisata)) {
				unlink(ROOTPATH . 'public/gambar_wisata/' . $gambar);
				session()->setFlashdata('msg', "Data Wisata Berhasil dihapus");
				return redirect()->to('../AdminController/EditWisata');
			} else {
				echo "error";
			}
		} else {
			if ($modelAdmin->HapusWisata($id_wisata)) {
				session()->setFlashdata('msg', "Data Wisata Berhasil dihapus");
				return redirect()->to('../AdminController/EditWisata');
			} else {
				echo "error";
			}
		}
	}
	#end proses tempat wisata
	##############################################################################################################
	#Proses Produk Data
	public function AddProduk()
	{
		$modelAdmin = new ModelAdmin;
		$session = session();
		$on_admin = $session->get('id_admin');

		if (isset($on_admin)) {
			$data['nama_admin'] = $session->get('nama_admin');
			$data['gambar'] = $session->get('gambar');
			$data['title'] = 'Tambah Produk';
			$data['kategori'] = $modelAdmin->SeeKategori();

			echo view('Admin/AssetAdmin/AssetCSS');
			echo view('Admin/AssetAdmin/Navbar', $data);
			echo view('Admin/AssetAdmin/SideBar', $data);
			#data content
			echo view('Admin/Produk/AddProduk', $data);
			#end data content
			echo view('Admin/AssetAdmin/Footer');
			echo view('Admin/AssetAdmin/AssetJS');
		} else {
			return redirect()->to('index');
		}
	}

	public function AddProdukProses()
	{
		$modelAdmin = new ModelAdmin;
		$session = session();
		$data['nama_admin'] = $session->get('nama_admin');
		$data['gambar'] = $session->get('gambar');

		$nama_produk = $this->request->getVar('namaProduk');
		$id_kategori = $this->request->getVar('id_kategori');
		$deskripsi = $this->request->getVar('deskripsi');
		$stok = 0;
		$harga = $this->request->getVar('harga');

		#gambar proses
		$gambar = $this->request->getFile('gambar');
		$namaGambar = $gambar->getName();

		if ($modelAdmin->AddProduk($id_kategori, $nama_produk, $deskripsi, $stok, $harga, $namaGambar)) {
			$gambar->move(ROOTPATH . 'public/gambar_produk');
			session()->setFlashdata('msg', "Data Produk Berhasil ditambahkan");
			return redirect()->to('../AdminController/EditProduk');
		} else {
			echo "error memasukkan data!";
		}
	}

	public function EditProduk()
	{
		$modelAdmin = new ModelAdmin;
		$session = session();
		$on_admin = $session->get('id_admin');

		if (isset($on_admin)) {
			$data['nama_admin'] = $session->get('nama_admin');
			$data['gambar'] = $session->get('gambar');
			$data['title'] = 'Edit Produk';
			$data['produk'] = $modelAdmin->SeeProduk();

			echo view('Admin/AssetAdmin/AssetCSS');
			echo view('Admin/AssetAdmin/Navbar', $data);
			echo view('Admin/AssetAdmin/SideBar', $data);
			#data content
			echo view('Admin/Produk/EditProduk', $data);
			#end data content
			echo view('Admin/AssetAdmin/Footer');
			echo view('Admin/AssetAdmin/AssetJS');
		} else {
			return redirect()->to('index');
		}
	}

	public function ViewProduk()
	{
		$modelAdmin = new ModelAdmin;
		$session = session();
		$on_admin = $session->get('id_admin');

		if (isset($on_admin)) {
			$data['nama_admin'] = $session->get('nama_admin');
			$data['gambar'] = $session->get('gambar');
			$data['title'] = 'List Produk';
			$data['produk'] = $modelAdmin->SeeProduk();

			echo view('Admin/AssetAdmin/AssetCSS');
			echo view('Admin/AssetAdmin/Navbar', $data);
			echo view('Admin/AssetAdmin/SideBar', $data);
			#data content
			echo view('Admin/Produk/ProdukView', $data);
			#end data content
			echo view('Admin/AssetAdmin/Footer');
			echo view('Admin/AssetAdmin/AssetJS');
		} else {
			return redirect()->to('index');
		}
	}

	public function AddEditProduk($id_produk)
	{
		$modelAdmin = new ModelAdmin;
		$session = session();
		$on_admin = $session->get('id_admin');

		if (isset($on_admin)) {
			$data['nama_admin'] = $session->get('nama_admin');
			$data['gambar'] = $session->get('gambar');
			$data['title'] = 'Edit Produk';
			$data['produk'] = $modelAdmin->SeeProdukSelection($id_produk);
			$data['kategori'] = $modelAdmin->SeeKategori();
			$data['id_produk'] = $id_produk;

			echo view('Admin/AssetAdmin/AssetCSS');
			echo view('Admin/AssetAdmin/Navbar', $data);
			echo view('Admin/AssetAdmin/SideBar', $data);
			#data content
			echo view('Admin/Produk/AddProduk', $data);
			#end data content
			echo view('Admin/AssetAdmin/Footer');
			echo view('Admin/AssetAdmin/AssetJS');
		} else {
			return redirect()->to('index');
		}
	}

	public function EditProdukProses()
	{
		$modelAdmin = new ModelAdmin;
		$session = session();
		$data['nama_admin'] = $session->get('nama_admin');
		$data['gambar'] = $session->get('gambar');
		#JARAK
		$nama_produk = $this->request->getVar('namaProduk');
		$id_kategori = $this->request->getVar('id_kategori');
		$deskripsi = $this->request->getVar('deskripsi');
		$stok = 0;
		$harga = $this->request->getVar('harga');
		$id_produk = $this->request->getVar('id_produk');

		#gambar proses
		$gambar = $this->request->getFile('gambar');
		$namaGambar = $gambar->getName();

		#jika gambar kosong/null
		if ($namaGambar == '') {
			if ($modelAdmin->EditProduk($id_kategori, $nama_produk, $deskripsi, $stok, $harga, $id_produk)) {
				session()->setFlashdata('msg', "Data Produk Berhasil diubah");
				return redirect()->to('EditProduk');
			} else {
				echo "error memasukkan data!";
			}
		} else {
			if ($modelAdmin->EditProdukWithGambar($id_kategori, $nama_produk, $deskripsi, $stok, $harga, $namaGambar, $id_produk)) {
				$gambar->move(ROOTPATH . 'public/gambar_produk');
				session()->setFlashdata('msg', "Data Produk Berhasil diubah");
				return redirect()->to('EditProduk');
			} else {
				echo "error memasukkan data!";
			}
		}
	}

	public function HapusProduk($id_produk, $gambar)
	{
		$modelAdmin = new ModelAdmin;
		$session = session();
		$data['nama_admin'] = $session->get('nama_admin');
		$data['gambar'] = $session->get('gambar');

		unlink(ROOTPATH . 'public/gambar_produk/' . $gambar);

		if ($modelAdmin->HapusProduk($id_produk)) {
			session()->setFlashdata('msg', "Data Produk Berhasil dihapus");
			return redirect()->to('../AdminController/EditProduk');
		} else {
			echo "error";
		}
	}
	#End Proses Data
	##############################################################################################################
	#Proses User
	public function UserView()
	{
		$modelAdmin = new ModelAdmin;
		$session = session();
		$on_admin = $session->get('id_admin');

		if (isset($on_admin)) {
			$data['nama_admin'] = $session->get('nama_admin');
			$data['gambar'] = $session->get('gambar');
			$data['title'] = 'List User';
			$data['user'] = $modelAdmin->SeeUser();

			echo view('Admin/AssetAdmin/AssetCSS');
			echo view('Admin/AssetAdmin/Navbar', $data);
			echo view('Admin/AssetAdmin/SideBar', $data);
			#data content
			echo view('Admin/User/UserView', $data);
			#end data content
			echo view('Admin/AssetAdmin/Footer');
			echo view('Admin/AssetAdmin/AssetJS');
		} else {
			return redirect()->to('index');
		}
	}
	#End Proses User
	##############################################################################################################
	#Proses Profil
	public function ProfilView()
	{
		$modelAdmin = new ModelAdmin;
		$session = session();
		$on_admin = $session->get('id_admin');

		if (isset($on_admin)) {
			$data['nama_admin'] = $session->get('nama_admin');
			$data['gambar'] = $session->get('gambar');
			$data['title'] = 'Profil Admin';
			$id_admin = $session->get('id_admin'); #change seassion
			$data['admin'] = $modelAdmin->ProfilAdmin($id_admin);

			echo view('Admin/AssetAdmin/AssetCSS');
			echo view('Admin/AssetAdmin/Navbar', $data);
			echo view('Admin/AssetAdmin/SideBar', $data);
			#data content
			echo view('Admin/Profil/ProfilView', $data);
			#end data content
			echo view('Admin/AssetAdmin/Footer');
			echo view('Admin/AssetAdmin/AssetJS');
		} else {
			return redirect()->to('index');
		}
	}

	public function EditProfil()
	{
		$modelAdmin = new ModelAdmin;
		$session = session();
		$on_admin = $session->get('id_admin');

		if (isset($on_admin)) {
			$data['nama_admin'] = $session->get('nama_admin');
			$data['gambar'] = $session->get('gambar');
			$data['title'] = 'Edit Profil';
			$id_admin = $session->get('id_admin'); #change seassion
			$data['admin'] = $modelAdmin->ProfilAdmin($id_admin);

			echo view('Admin/AssetAdmin/AssetCSS');
			echo view('Admin/AssetAdmin/Navbar', $data);
			echo view('Admin/AssetAdmin/SideBar', $data);
			#data content
			echo view('Admin/Profil/EditProfil', $data);
			#end data content
			echo view('Admin/AssetAdmin/Footer');
			echo view('Admin/AssetAdmin/AssetJS');
		} else {
			return redirect()->to('index');
		}
	}

	public function EditProfilProses()
	{
		$modelAdmin = new ModelAdmin;
		$session = session();
		$data['nama_admin'] = $session->get('nama_admin');
		$data['gambar'] = $session->get('gambar');

		$nama_admin = $this->request->getVar('nama_admin');
		$id_admin = $this->request->getVar('id_admin');
		$username = $this->request->getVar('username');
		$email = $this->request->getVar('email');

		#gambar proses
		$gambar = $this->request->getFile('gambar');
		$namaGambar = $gambar->getName();

		#jika gambar kosong/null
		if ($namaGambar == '') {
			if ($modelAdmin->EditProfil($id_admin, $nama_admin, $username, $email)) {
				session()->setFlashdata('msg', "Profil Berhasil diubah");
				return redirect()->to('../AdminController/ProfilView');
			} else {
				echo "error memasukkan data!";
			}
		} else {
			if ($modelAdmin->EditProfilWithGambar($id_admin, $nama_admin, $username, $email, $namaGambar)) {
				$gambar->move(ROOTPATH . 'public/gambar_admin');
				session()->setFlashdata('msg', "Profil Berhasil diubah");
				return redirect()->to('../AdminController/ProfilView');
			} else {
				echo "error memasukkan data!2";
			}
		}
	}

	public function EditPassword()
	{
		$modelAdmin = new ModelAdmin;
		$session = session();
		$on_admin = $session->get('id_admin');

		if (isset($on_admin)) {
			$data['nama_admin'] = $session->get('nama_admin');
			$data['gambar'] = $session->get('gambar');
			$data['title'] = 'Edit Password';
			$id_admin = $session->get('id_admin'); #change seassion
			$data['admin'] = $modelAdmin->ProfilAdmin($id_admin);

			echo view('Admin/AssetAdmin/AssetCSS');
			echo view('Admin/AssetAdmin/Navbar', $data);
			echo view('Admin/AssetAdmin/SideBar', $data);
			#data content
			echo view('Admin/Profil/EditPassword', $data);
			#end data content
			echo view('Admin/AssetAdmin/Footer');
			echo view('Admin/AssetAdmin/AssetJS');
		} else {
			return redirect()->to('index');
		}
	}

	public function EditPasswordProses()
	{
		$modelAdmin = new ModelAdmin;
		$session = session();
		$data['nama_admin'] = $session->get('nama_admin');
		$data['gambar'] = $session->get('gambar');

		$id_admin = $this->request->getVar('id_admin');
		$password = $this->request->getVar('password_satu');
		$konfirmasi = $this->request->getVar('password_dua');

		if ($password == $konfirmasi) {
			if ($modelAdmin->EditPassword($id_admin, $password)) {
				session()->setFlashdata('msg', "Password Berhasil diubah");
				return redirect()->to('../AdminController/ProfilView');
			} else {
				session()->setFlashdata('msg', "Password dan Konfirmasi Password Harus Sama!!!");
				return redirect()->to('../AdminController/EditPassword');
			}
		} else {
			session()->setFlashdata('msg', "Password dan Konfirmasi Password Harus Sama!!!");
			return redirect()->to('../AdminController/EditPassword');
		}
	}
	#End Proses Profil
	##############################################################################################################
	#Proses transaksi
	public function TransaksiView()
	{
		$modelAdmin = new ModelAdmin;
		$session = session();
		$on_admin = $session->get('id_admin');

		if (isset($on_admin)) {
			$data['nama_admin'] = $session->get('nama_admin');
			$data['gambar'] = $session->get('gambar');
			$data['title'] = 'List Transaksi';
			$data['transaksi'] = $modelAdmin->TransaksiView();

			echo view('Admin/AssetAdmin/AssetCSS');
			echo view('Admin/AssetAdmin/Navbar', $data);
			echo view('Admin/AssetAdmin/SideBar', $data);
			#data content
			echo view('Admin/Transaksi/ViewTransaksi', $data);
			#end data content
			echo view('Admin/AssetAdmin/Footer');
			echo view('Admin/AssetAdmin/AssetJS');
		} else {
			return redirect()->to('index');
		}
	}

	public function PembayaranView()
	{
		$modelAdmin = new ModelAdmin;
		$session = session();
		$on_admin = $session->get('id_admin');

		if (isset($on_admin)) {
			$data['nama_admin'] = $session->get('nama_admin');
			$data['gambar'] = $session->get('gambar');
			$data['title'] = 'List Pembayaran';
			$data['pembayaran'] = $modelAdmin->PembayaranView();

			echo view('Admin/AssetAdmin/AssetCSS');
			echo view('Admin/AssetAdmin/Navbar', $data);
			echo view('Admin/AssetAdmin/SideBar', $data);
			#data content
			echo view('Admin/Transaksi/ViewPembayaran', $data);
			#end data content
			echo view('Admin/AssetAdmin/Footer');
			echo view('Admin/AssetAdmin/AssetJS');
		} else {
			return redirect()->to('index');
		}
	}

	public function FillterPembayaran()
	{
		$modelAdmin = new ModelAdmin;
		$session = session();
		$on_admin = $session->get('id_admin');

		if (isset($on_admin)) {
			$data['nama_admin'] = $session->get('nama_admin');
			$data['gambar'] = $session->get('gambar');
			$data['title'] = 'List Pembayaran';

			$awal = $this->request->getVar('awal');
			$akhir = $this->request->getVar('akhir');
			$status = $this->request->getVar('status');
			$namaProduk = $this->request->getVar('nproduk');

			if ($status != '' && $namaProduk == '' && $awal == '' && $akhir == '') {
				$data['pembayaran'] = $modelAdmin->PembayaranViewStatus($status);
			} elseif ($status != '' && $namaProduk == '' && $awal != '' && $akhir != '') {
				$data['pembayaran'] = $modelAdmin->PembayaranViewAll($status, $awal, $akhir);
			} elseif ($namaProduk != '' && $status == '' && $awal == '' && $akhir == '') {
				$data['pembayaran'] = $modelAdmin->PembayaranViewProduk($namaProduk);
			} elseif ($namaProduk != '' && $status != '' && $awal == '' && $akhir == '') {
				$data['pembayaran'] = $modelAdmin->PembayaranViewProdukStatus($namaProduk, $status);
			} elseif ($namaProduk != '' && $status == '' && $awal != '' && $akhir != '') {
				$data['pembayaran'] = $modelAdmin->PembayaranViewProdukDate($namaProduk, $awal, $akhir);
			} elseif ($namaProduk != '' && $status != '' && $awal != '' && $akhir != '') {
				$data['pembayaran'] = $modelAdmin->PembayaranViewProdukAll($namaProduk, $awal, $akhir, $status);
			} else {
				$data['pembayaran'] = $modelAdmin->PembayaranFilter($awal, $akhir);
			}
			echo view('Admin/AssetAdmin/AssetCSS');
			echo view('Admin/AssetAdmin/Navbar', $data);
			echo view('Admin/AssetAdmin/SideBar', $data);
			#data content
			echo view('Admin/Transaksi/ViewPembayaran', $data);
			#end data content
			echo view('Admin/AssetAdmin/Footer');
			echo view('Admin/AssetAdmin/AssetJS');
		} else {
			return redirect()->to('index');
		}
	}

	public function KonfirmasiPembayaran($id_pembayaran)
	{
		$modelAdmin = new ModelAdmin;
		$session = session();
		$data['nama_admin'] = $session->get('nama_admin');
		$data['gambar'] = $session->get('gambar');

		if ($modelAdmin->KonfirmasiPembayaran($id_pembayaran)) {
			return redirect()->to('../AdminController/PembayaranView');
		}
	}

	public function KonfirmasiBatal($id_pembayaran)
	{
		$modelAdmin = new ModelAdmin;
		$session = session();
		$data['nama_admin'] = $session->get('nama_admin');
		$data['gambar'] = $session->get('gambar');

		if ($modelAdmin->KonfirmasiBatal($id_pembayaran)) {
			return redirect()->to('../AdminController/PembayaranView');
		}
	}
	#End Proses transaksi
	##############################################################################################################
	#Proses Lokasi
	public function AddLokasi()
	{
		$modelAdmin = new ModelAdmin;
		$session = session();
		$on_admin = $session->get('id_admin');

		if (isset($on_admin)) {
			$data['nama_admin'] = $session->get('nama_admin');
			$data['gambar'] = $session->get('gambar');
			$data['title'] = 'Tambah Lokasi';
			$data['wisata'] = $modelAdmin->SeeWisata();

			echo view('Admin/AssetAdmin/AssetCSS');
			echo view('Admin/AssetAdmin/Navbar', $data);
			echo view('Admin/AssetAdmin/SideBar', $data);
			#data content
			echo view('Admin/Lokasi/AddLokasi', $data);
			#end data content
			echo view('Admin/AssetAdmin/Footer');
			echo view('Admin/AssetAdmin/AssetJS');
		} else {
			return redirect()->to('index');
		}
	}

	public function AddLokasiProses()
	{
		$modelAdmin = new ModelAdmin;
		$session = session();
		$data['nama_admin'] = $session->get('nama_admin');
		$data['gambar'] = $session->get('gambar');

		$id_wisata = $this->request->getVar('id_wisata');
		$longtitude = $this->request->getVar('longtitude');
		$latitude = $this->request->getVar('latitude');

		if ($modelAdmin->AddTitik($id_wisata, $longtitude, $latitude)) {
			session()->setFlashdata('msg', "Data Lokasi Berhasil ditambahkan");
			return redirect()->to('../AdminController/EditLokasi');
		} else {
			echo "error";
		}
	}

	public function EditLokasi()
	{
		$modelAdmin = new ModelAdmin;
		$session = session();
		$on_admin = $session->get('id_admin');

		if (isset($on_admin)) {
			$data['nama_admin'] = $session->get('nama_admin');
			$data['gambar'] = $session->get('gambar');
			$data['title'] = 'Edit Lokasi';
			$data['lokasi'] = $modelAdmin->SeeLokasi();

			echo view('Admin/AssetAdmin/AssetCSS');
			echo view('Admin/AssetAdmin/Navbar', $data);
			echo view('Admin/AssetAdmin/SideBar', $data);
			#data content
			echo view('Admin/Lokasi/EditLokasi', $data);
			#end data content
			echo view('Admin/AssetAdmin/Footer');
			echo view('Admin/AssetAdmin/AssetJS');
		} else {
			return redirect()->to('index');
		}
	}

	public function AddEditLokasi($id_titik)
	{
		$modelAdmin = new ModelAdmin;
		$session = session();
		$on_admin = $session->get('id_admin');

		if (isset($on_admin)) {
			$data['nama_admin'] = $session->get('nama_admin');
			$data['gambar'] = $session->get('gambar');
			$data['title'] = 'Edit Lokasi';
			$data['wisata'] = $modelAdmin->SeeWisata();
			$data['id_titik'] = $id_titik;
			$data['titik'] = $modelAdmin->SelectionTitik($id_titik);

			echo view('Admin/AssetAdmin/AssetCSS');
			echo view('Admin/AssetAdmin/Navbar', $data);
			echo view('Admin/AssetAdmin/SideBar', $data);
			#data content
			echo view('Admin/Lokasi/AddLokasi', $data);
			#end data content
			echo view('Admin/AssetAdmin/Footer');
			echo view('Admin/AssetAdmin/AssetJS');
		} else {
			return redirect()->to('index');
		}
	}

	public function EditLokasiProses()
	{
		$modelAdmin = new ModelAdmin;
		$session = session();
		$data['nama_admin'] = $session->get('nama_admin');
		$data['gambar'] = $session->get('gambar');

		$id_titik = $this->request->getVar('id_titik');
		$latitude = $this->request->getVar('latitude');
		$longtitude = $this->request->getVar('longtitude');

		if ($modelAdmin->EditLokasi($id_titik, $latitude, $longtitude)) {
			session()->setFlashdata('msg', "Data Lokasi Berhasil diubah");
			return redirect()->to('../AdminController/EditLokasi');
		} else {
			echo "error";
		}
	}

	public function HapusLokasi($id_titik)
	{
		$modelAdmin = new ModelAdmin;
		$session = session();
		$data['nama_admin'] = $session->get('nama_admin');
		$data['gambar'] = $session->get('gambar');

		if ($modelAdmin->HapusTitik($id_titik)) {
			session()->setFlashdata('msg', "Data Lokasi Berhasil dihapus");
			return redirect()->to('../AdminController/EditLokasi');
		} else {
			echo "error";
		}
	}

	public function ViewLokasi($id_wisata)
	{
		$modelAdmin = new ModelAdmin;
		$session = session();
		$on_admin = $session->get('id_admin');

		if (isset($on_admin)) {
			$data['nama_admin'] = $session->get('nama_admin');
			$data['gambar'] = $session->get('gambar');
			$data['titik'] = $modelAdmin->LokasiView($id_wisata);
			$data['title'] = 'Lihat Lokasi';

			echo view('Admin/AssetAdmin/AssetCSS');
			echo view('Admin/AssetAdmin/Navbar', $data);
			echo view('Admin/AssetAdmin/SideBar', $data);
			#data content
			echo view('Admin/Lokasi/ViewLokasi', $data);
			#end data content
			echo view('Admin/AssetAdmin/Footer');
			echo view('Admin/AssetAdmin/AssetJS');
		} else {
			return redirect()->to('index');
		}
	}
	#End Proses Lokasi

	#PROSES JUAL PRODUK
	public function AddJualProduk()
	{
		$modelAdmin = new ModelAdmin;
		$session = session();
		$on_admin = $session->get('id_admin');

		if (isset($on_admin)) {
			$data['nama_admin'] = $session->get('nama_admin');
			$data['gambar'] = $session->get('gambar');
			$data['title'] = 'Jual Produk';
			$data['produk'] = $modelAdmin->SeeProduk();

			echo view('Admin/AssetAdmin/AssetCSS');
			echo view('Admin/AssetAdmin/Navbar', $data);
			echo view('Admin/AssetAdmin/SideBar', $data);
			#data content
			echo view('Admin/Produk/JualView', $data);
			#end data content
			echo view('Admin/AssetAdmin/Footer');
			echo view('Admin/AssetAdmin/AssetJS');
		} else {
			return redirect()->to('index');
		}
	}

	public function AddJualProses()
	{
		$modelAdmin = new ModelAdmin;
		$session = session();
		$data['nama_admin'] = $session->get('nama_admin');
		$data['gambar'] = $session->get('gambar');

		#get data
		$id_produk = $this->request->getVar('id_produk');
		$tanggal = $this->request->getVar('tanggal_jual');
		$stock = $this->request->getVar('stock');

		if ($modelAdmin->AddJual($id_produk, $tanggal, $stock)) {
			session()->setFlashdata('msg', "Produk yang dijual Berhasil ditambahkan");
			return redirect()->to('SeeJual');
		} else {
			echo "error";
		}
	}

	public function SeeJual()
	{
		$modelAdmin = new ModelAdmin;

		$session = session();
		$on_admin = $session->get('id_admin');

		if (isset($on_admin)) {
			$data['produk'] = $modelAdmin->SeeJual();
			$data['title'] = 'List Barang Jual';
			$session = session();
			$data['nama_admin'] = $session->get('nama_admin');
			$data['gambar'] = $session->get('gambar');

			echo view('Admin/AssetAdmin/AssetCSS');
			echo view('Admin/AssetAdmin/Navbar', $data);
			echo view('Admin/AssetAdmin/SideBar', $data);
			#data content
			echo view('Admin/Produk/SeeJual', $data);
			#end data content
			echo view('Admin/AssetAdmin/Footer');
			echo view('Admin/AssetAdmin/AssetJS');
		} else {
			return redirect()->to('index');
		}
	}

	public function HapusJual($id_jual)
	{
		$modelAdmin = new ModelAdmin;
		$session = session();
		$data['nama_admin'] = $session->get('nama_admin');
		$data['gambar'] = $session->get('gambar');

		if ($modelAdmin->HapusJual($id_jual)) {
			session()->setFlashdata('msg', "Produk yang dijual Berhasil dihapus");
			return redirect()->to('../AdminController/SeeJual');
		} else {
			echo "error";
		}
	}

	public function EditJual($id_jual)
	{
		$modelAdmin = new ModelAdmin;

		$session = session();
		$on_admin = $session->get('id_admin');

		if (isset($on_admin)) {
			$data['nama_admin'] = $session->get('nama_admin');
			$data['gambar'] = $session->get('gambar');
			$data['title'] = 'Edit Produk Jual';
			$data['produk'] = $modelAdmin->SeeProduk();

			if ($modelAdmin->SeeJualSelection($id_jual)) {
				$data['id_jual'] = $id_jual;
				$data['seeJual'] = $modelAdmin->SeeJualSelection($id_jual);

				echo view('Admin/AssetAdmin/AssetCSS');
				echo view('Admin/AssetAdmin/Navbar', $data);
				echo view('Admin/AssetAdmin/SideBar', $data);
				#data content
				echo view('Admin/Produk/JualView', $data);
				#end data content
				echo view('Admin/AssetAdmin/Footer');
				echo view('Admin/AssetAdmin/AssetJS');
			}
		} else {
			return redirect()->to('index');
		}
	}

	public function EditJualProses()
	{
		$modelAdmin = new ModelAdmin;
		$session = session();
		$data['nama_admin'] = $session->get('nama_admin');
		$data['gambar'] = $session->get('gambar');

		#get data
		$id_jual = $this->request->getVar('id_jual');
		$id_produk = $this->request->getVar('id_produk');
		$tanggal = $this->request->getVar('tanggal_jual');
		$stock = $this->request->getVar('stock');

		if ($modelAdmin->EditJual($id_jual, $id_produk, $tanggal, $stock)) {
			session()->setFlashdata('msg', "Produk yang dijual Berhasil diubah");
			return redirect()->to('SeeJual');
		} else {
			echo "error";
		}
	}
	#END PROSES JUAL PRODUK

	#FILTER LAPORAN
	public function FillterTransaksi()
	{
		$modelAdmin = new ModelAdmin;
		$session = session();
		$on_admin = $session->get('id_admin');

		if (isset($on_admin)) {
			$data['nama_admin'] = $session->get('nama_admin');
			$data['gambar'] = $session->get('gambar');
			$data['title'] = 'List Transaksi';

			//$data['transaksi'] = $modelAdmin->TransaksiFilter($awal, $akhir);

			$awal = $this->request->getVar('awal');
			$akhir = $this->request->getVar('akhir');
			$status = $this->request->getVar('status');
			$namaProduk = $this->request->getVar('nproduk');

			if ($status != '' && $namaProduk == '' && $awal == '' && $akhir == '') {
				$data['transaksi'] = $modelAdmin->TransaksiViewStatus($status);
			} elseif ($status != '' && $namaProduk == '' && $awal != '' && $akhir != '') {
				$data['transaksi'] = $modelAdmin->TransaksiViewAll($status, $awal, $akhir);
			} elseif ($namaProduk != '' && $status == '' && $awal == '' && $akhir == '') {
				$data['transaksi'] = $modelAdmin->TransaksiViewProduk($namaProduk);
			} elseif ($namaProduk != '' && $status != '' && $awal == '' && $akhir == '') {
				$data['transaksi'] = $modelAdmin->TransaksiViewProdukStatus($namaProduk, $status);
			} elseif ($namaProduk != '' && $status == '' && $awal != '' && $akhir != '') {
				$data['transaksi'] = $modelAdmin->TransaksiViewProdukDate($namaProduk, $awal, $akhir);
			} elseif ($namaProduk != '' && $status != '' && $awal != '' && $akhir != '') {
				$data['transaksi'] = $modelAdmin->TransaksiViewProdukAll($namaProduk, $awal, $akhir, $status);
			} else {
				$data['transaksi'] = $modelAdmin->TransaksiFilter($awal, $akhir);
			}

			echo view('Admin/AssetAdmin/AssetCSS');
			echo view('Admin/AssetAdmin/Navbar', $data);
			echo view('Admin/AssetAdmin/SideBar', $data);
			#data content
			echo view('Admin/Transaksi/ViewTransaksi', $data);
			#end data content
			echo view('Admin/AssetAdmin/Footer');
			echo view('Admin/AssetAdmin/AssetJS');
		} else {
			return redirect()->to('index');
		}
	}
	#END FILLTER
}
