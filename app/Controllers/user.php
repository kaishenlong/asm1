<?php
    namespace App\Controllers;
    use App\Models\danhmuc;
    use App\Models\sanpham;
    use App\Models\taikhoan;
    use App\Controllers\BaseController;

    use App\Controller\global;
    class User extends BaseController {
    // if (!isset($_SESSION['mycart'])) $_SESSION['mycart'] = [];
    protected $sanPham;
    protected $danhMuc;
    protected $taiKhoan;
    public function __construct(){
        $this->sanPham = new Sanpham();
        $this->danhMuc = new danhmuc();
        $this->taiKhoan = new taikhoan();
    }

    public function home(){ 
        if (isset($_POST['keyword']) &&  $_POST['keyword'] != 0) {
            $kyw = $_POST['keyword'];
        } else {
            $kyw = "";
        }
        $listsp = $this->sanPham->loadall_sp();

        if (isset($_GET['iddm']) && ($_GET['iddm'] > 0)) {
            $iddm = $_GET['iddm'];
        } else {
            $iddm = 0;
        }
        $listdm = $this->sanPham->load_tendm($iddm);
        
        $this->render('User.home',compact('listdm','listsp'));
    }
    public function chitietsp(){
        if (isset($_GET['idsp']) && ($_GET['idsp'] > 0)) {
            $id = $_GET['idsp'];
            $onesp = $this->sanPham->loadone_sp($id);
             $sp_cungloai = $this->sanPham->loadone_spcl($id, $onesp['iddm']);
             include "chitietsp.php";
        } else {
            include "home.php";
        }
       
    }
    public function dangky(){
        $erroruser= $erroremail = $errorpass = $errortel = ""; 
                if(isset($_POST['dangky'])){
                    $countError = 0;
                    if (strlen($_POST['email']) === 0) { 
                        $erroremail = "email không được để trống";
                        $countError += 1;
                    }
                    if (strlen($_POST['user']) <3) {
                        $erroruser = "user không được it hon 3";
                        $countError += 1;
                    }
                    if ($_POST['pass'] <=6) { 
                        $errorpass = "pass không được ít hơn 6";
                        $countError += 1;
                    }
                    if (strlen($_POST['tel']) <10) { 
                        $errortel = "số điện thoại không đúng";
                        $countError += 1;
                    }
                    if ($countError === 0) {
                    $user = $_POST['user'];
                    $pass = $_POST['pass'];
                    $email = $_POST['email'];
                    $tel = $_POST['tel'];
                    $this->taiKhoan->insert_taikhoan($user, $pass, $email,$tel);
                    $thongbao = "Đã đăng ký thành công. Vui lòng đăng nhập.";
                    }
                }
                $this->render('User.dangky',compact('erroruser','erroremail','errorpass','errortel'));
    }
    public function login(){
        if (isset($_POST['dangnhap'])){
            $email=$_POST['email'];
            $pass=$_POST['pass'];
            $checkuser=$this->taiKhoan->checkuser($email,$pass);
            if (is_array($checkuser)) {
                $_SESSION['email']=$checkuser;
                header('Location: ' .route('/'));
            }else {
                $thongbao="Tài khoản không tồn tại. Vui lòng kiểm tra hoặc đăng ký.";
            }
           
        }
        $this->render('user.login',compact('checkuser'));
    }
    public function quenmk(){
        if (isset($_POST['guiemail'])&&($_POST['guiemail'])){
            $email=$_POST['email'];
            $checkemail=$this->taiKhoan->checkemail($email);
            $sendMailMess=$this->taiKhoan->sendMail($email);
            if(is_array($checkemail)){
                $thongbao="Mật khẩu của bạn là: ".$checkemail['pass'];
            }else{
                $thongbao="Email này không tồn tại";
            }
        }
        $this->render('user.quenmk',compact('checkemail','sendMailMess'));
    }
    public function dangxuat(){
        session_unset();
        header('Location: ' .route('/'));
    }
}
?>
