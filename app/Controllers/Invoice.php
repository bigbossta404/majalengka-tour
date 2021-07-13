<?php
namespace App\Controllers;
use App\Models\ModelPublic;

class Invoice extends BaseController
{
  public function index($id_transaksi)
  {
    $PublicModel = new ModelPublic;

    $data['produk'] = $PublicModel->InvoiceData($id_transaksi);
    echo view('Costumer/Invoice/index', $data);
  }
}
