<?php
namespace App\Models;
use CodeIgniter\Model;

class ModelPassword extends Model
{
  public function SelectionUser($email)
  {
    $query = $this->db->query("SELECT id_user FROM tb_user WHERE email='$email'");
    return $query->getRowArray();
  }

}

?>
