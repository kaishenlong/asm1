<?php
    namespace App\Models;

    use App\Models\db;

    class Taikhoan extends db{
        protected $taikhoan = "taikhoan";

    public function insert_taikhoan($user,$pass,$email,$tel){
        $sql="insert into ".$this->taikhoan."(user,pass,email,tel) values('$user','$pass','$email','$tel')";
         $this->getData($sql);
    }
    public function checkuser($email,$pass) {
        $sql="select * from ".$this->taikhoan." where email='".$email."' AND pass='".$pass."'";
        $sp= $this->getDataone($sql);
        return $sp;
    }        
    public function checkemail($email) {
        $sql="select * from ".$this->taikhoan." where email='".$email."'";
        $sp=$this->getDataone($sql);
        return $sp;
    }
    public function update_taikhoan($id,$user,$email,$address,$tel)
     {
        $sql="update ".$this->taikhoan." set user='".$user."', email='".$email."',address='".$address."',tel='".$tel."',id='".$id."' where id=".$id;
        $this->getData($sql);
    }
    public function loadall_taikhoan() {  
        $sql="select * from ".$this->taikhoan." order by id desc";
        $listtaikhoan=$this->getData($sql);
        return $listtaikhoan;
    }
    public function loadone_tk($id){
        $sql= "SELECT * FROM ".$this->taikhoan." WHERE id=".$id;
        $taikhoan=$this->getDataById($sql);
        return $taikhoan;
    }
    public function update_tk($id,$user,$pass,$email,$address,$tel,$role){
        $sql= "UPDATE ".$this->taikhoan." SET user='".$user."', pass='".$pass."', email='".$email."', address='".$address."', tel='".$tel."',role='".$role."' WHERE id= ".$id;
        $this->getData($sql);
    }
    public function delete_tk($id){
        $sql="DELETE FROM ".$this->taikhoan." WHERE id=".$id;
        $this->getData($sql);
    }
    public function sendMail($email) {
        $sql="SELECT * FROM ".$this->taikhoan." WHERE email='$email'";
        $taikhoan=$this->getDataone($sql);

        if ($taikhoan != false) {
            $this->sendMailPass($email, $taikhoan['user'], $taikhoan['pass']);
            return "Gửi email thành công. Vui lòng check email!";
        }else{
            return "Email không tồn tại.";
        }
    }

    public function sendMailPass($email, $username, $pass) {
        require '../Model/PHPMailer-master/src/Exception.php';
        require '../Model/PHPMailer-master/src/PHPMailer.php';
        require '../Model/PHPMailer-master/src/SMTP.php';   
  

        $mail = new PHPMailer\PHPMailer\PHPMailer(true);

        try {
            //Server settings
            $mail->SMTPDebug = PHPMailer\PHPMailer\SMTP::DEBUG_OFF;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'sandbox.smtp.mailtrap.io';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'a2ec00bc7e081b';                     //SMTP username
            $mail->Password   = '8f5f8c016092b8';                               //SMTP password
            $mail->SMTPSecure = PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
            $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        
            //Recipients
            $mail->setFrom('ekoeats@example.com', 'EKO EATS');
            $mail->addAddress($email, $username);     //Add a recipient

            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'NGUOI DUNG QUEN MAT KHAU';
            $mail->Body    = 'MAT KHAU CUA BAN LA:' .$pass;
        
            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
}
?>
