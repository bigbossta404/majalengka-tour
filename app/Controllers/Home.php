<?php

namespace App\Controllers;

class Home extends BaseController
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
}
