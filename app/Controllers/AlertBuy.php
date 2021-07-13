<?php
namespace App\Controllers;
use App\Models\ModelPublic;

class AlertBuy extends BaseController
{

  public function getId(){
    $session = session();
    $PublicModel = new ModelPublic;

    $id_jual = $this->request->getVar('id');

    $data = $PublicModel->StockSisa($id_jual);

    $dataStock = [
      'stock'       => $data['stock'],
    ];
    $session->set($dataStock);
  }

  public function getAlert(){
    $session = session();

    $banyak = $this->request->getVar('banyak');
    $stock = $session->get('stock');

    if ($stock<$banyak) {
      echo '<div class="alert alert-danger" role="alert">
              Stock yang tersedia hanya '.$stock.'!
            </div>';
    }
  }
}
