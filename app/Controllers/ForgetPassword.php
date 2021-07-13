<?php
namespace App\Controllers;
use App\Models\ModelPassword;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class ForgetPassword extends BaseController
{

  public function index(){
    $session = session();
    $data['id_user'] = $session->get('id_user');
    $data['title'] = 'Lupa Password';

    echo view('Costumer/AssetCostumer/CSSPublic');
    echo view('Login/AssetLogin/AssetCSS');
    echo view('Costumer/AssetCostumer/NavbarPublic', $data);
    echo View('LupaPassword/ViewPassword');
    echo view('Login/AssetLogin/AssetJS');
  }

  public function SuksesVerify(){
    $session = session();
    $data['id_user'] = $session->get('id_user');
    $data['title'] = 'Sukses';

    echo view('Costumer/AssetCostumer/CSSPublic');
    echo view('Login/AssetLogin/AssetCSS');
    echo view('Costumer/AssetCostumer/NavbarPublic', $data);
    echo View('LupaPassword/VerifySukses');
    echo view('Login/AssetLogin/AssetJS');
  }

  public function GagalVerify(){
    $session = session();
    $data['id_user'] = $session->get('id_user');
    $data['title'] = 'Gagal';

    echo view('Costumer/AssetCostumer/CSSPublic');
    echo view('Login/AssetLogin/AssetCSS');
    echo view('Costumer/AssetCostumer/NavbarPublic', $data);
    echo View('LupaPassword/VerifyGagal');
    echo view('Login/AssetLogin/AssetJS');
  }

  public function ProsesPassword()
  {
    require 'vendor/autoload.php';

    $PasswordModel = new ModelPassword;
    $session = session();

    $email = $this->request->getVar('email');
    $user = $PasswordModel->SelectionUser($email);

    if (isset($user['id_user'])) {
      // Instantiation and passing `true` enables exceptions
      $mail = new PHPMailer(true);

      try {
        //Server settings
        $mail->SMTPDebug = 2;                      // Enable verbose debug output
        $mail->isSMTP();                                            // Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        // $mail->Username   = "selvyerhita@gmail.com";                     // SMTP username
        $mail->Username   = "arsalammmmm1@gmail.com";                     // SMTP username
        $mail->Password   = "akuganteng";     // change Password to app gmail if deploy in host                         // SMTP password
        // $mail->Password   = "lftjgjaztewziagi";     // change Password to app gmail if deploy in host                         // SMTP password
        $mail->SMTPSecure = 'ssl';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        $mail->Port       = 465;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

        //Recipients
        $mail->setFrom('arsalammmmm1@gmail.com', 'Admin');
        $mail->addAddress($email);     // Add a recipient
        // $mail->addAddress($obj->email;,);               // Name is optional
        $mail->addReplyTo($email, 'Information');
        // $mail->addCC('selvyerhita@gmail.com');
        // $mail->addBCC('selvyerhita@gmail.com');

        // // Attachments
        // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Verify Mail Morwali Tour';
        $mail->Body    = 'Klik Link ini untuk mengubah password : <a href="http://localhost:8080/PublicController/EditPasswordProses/'.$user['id_user'].'">Klik Disini</a>';
        $mail->AltBody = '';

        $mail->send();

        return redirect()->to('SuksesVerify/');

        // header("location:../../sukses.php");
      } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
      }
    } else {
      $danger = 1;
      return redirect()->to('GagalVerify/');
    }
  }
}

?>
