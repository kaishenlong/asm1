<?php 
    namespace App\Controllers;
    use App\Models\danhmuc;
    use App\Models\sanpham;
    use App\Models\taikhoan;
    use App\Controllers\BaseController;

        class Admin extends BaseController {
            protected $sanPham;
            protected $danhMuc;
            protected $taiKhoan;
            public function __construct(){
                $this->sanPham = new Sanpham();
                $this->danhMuc = new danhmuc();
                $this->taiKhoan = new taikhoan();

            }
        
        public function dssp(){
            if(isset($_POST['listok'])&&($_POST['listok'])){
                $kyw= $_POST['kyw'];
                $iddm= $_POST['iddm'];
            } else{
                $kyw= '';
                $iddm =0;
            }
            $listdm=$this->danhMuc->loadall_dm();
            $listsp = $this->sanPham->loadall_sp($kyw,$iddm);
            $this->render('sanpham.dssp',compact('listdm','listsp'));
        }
        public function themsp(){
            $errortensp= $errorprice = $errormotasp = $errorsoluong = ""; 
                if(isset($_POST['themmoi'])){
                    $countError = 0;
                    if (strlen($_POST['tensp']) == 0) { 
                        $errortensp = "tên sản phẩm không được để trống";
                        $countError += 1;
                    }
                    if (($_POST['price']) <0) {
                        $errorprice = "giá không được là số âm";
                        $countError += 1;
                    }
                    if (strlen($_POST['motasp']) ===0) { 
                        $errormotasp = "mô tả không được bỏ trống";
                        $countError += 1;
                    }
                    if ($_POST['soluong'] <0) { 
                        $errorsoluong = "số lượng không được âm";
                        $countError += 1;
                    }
                    
                if($countError === 0){
                    $iddm=$_POST['iddm'];
                    $tensp=$_POST['tensp'];
                    $price=$_POST['price'];
                    $motasp=$_POST['motasp'];
                    $soluong= $_POST['soluong'];
                    $hinh=$_FILES['img']['name'];
                    $target_dir ="../Model/upload/";
                    $target_file = $target_dir . basename($_FILES["img"]["name"]);
                    if(move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
                        // echo "The file ". htmlspecialchars( basename( $_FILES["img"]["name"])). " has been uploaded.";
                      } else {
                        // echo "Sorry, there was an error uploading your file.";
                      }
                      $this->sanPham->insert_sp($tensp,$price,$hinh,$motasp,$soluong,$iddm);
                    $thongbao="thêm thành công";
                }
                }
                $listdm=$this->danhMuc->loadall_dm();
               $this->render('sanpham.themsp',compact('listdm','errortensp','errorprice','errormotasp','errorsoluong'));
        }
        public function xoasp($id){
                $this->sanPham->delete_sp($id);            
                $this->render('sanpham.dssp',compact('listdm','listsp'));
        }
        public function suasp($id){
            
            $sanpham=$this->sanPham->loadone_sp($id);
            $listdm=$this->danhMuc->loadall_dm();
            $this->render('sanpham.update',compact('sanpham','listdm'));
        }
        public function updatesp($id){
            if(isset($_POST['capnhat']) && ($_POST['capnhat'])){
                $iddm=$_POST['iddm'];
                $tensp=$_POST['tensp'];
                $price=$_POST['price'];
                $motasp=$_POST['motasp'];
                $soluong= $_POST['soluong'];
                $hinh=$_FILES['img']['name'];
                $target_dir ="../Model/upload/";
                $target_file = $target_dir . basename($_FILES["img"]["name"]);
                if(move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
                    // echo "The file ". htmlspecialchars( basename( $_FILES["img"]["name"])). " has been uploaded.";
                  } else {
                    // echo "Sorry, there was an error uploading your file.";
                  }
                  $this->sanPham->update_sp($id,$iddm,$tensp,$price,$motasp,$hinh,$soluong);
                $thongbao="Cập nhật thành công";
            }
            $listdm=$this->danhMuc->loadall_dm();
            $listsp =$this->sanPham->loadall_sp();
            $this->render('sanpham.dssp',compact('listdm','listsp'));
            
        }
        public function dsdm(){
            $listdm=$this->danhMuc->loadall_dm();
            $this->render('danhmuc.dsdm',compact('listdm'));
        }
        public function themdm(){
            $errortenloai= ""; 
                if(isset($_POST['themmoi'])){
                    $countError = 0;
                    if (strlen($_POST['tenloai']) === 0) { 
                        $errortenloai = "tên loại không được để trống";
                        $countError += 1;
                    }
                if($countError === 0){
                    $tenloai=$_POST['tenloai'];
                    $this->danhMuc->insert_danhmuc($tenloai);
                }
                }

                $this->render('danhmuc.themdm',compact('errortenloai'));
        }
        public function suadm($id){
           
                $danhmuc=$this->danhMuc->loadone_dm($id);

                $this->render('danhmuc.update',compact('danhmuc'));
        }
        public function xoadm($id){

                $this->danhMuc->delete_danhmuc($id);
                $this->render('danhmuc.dsdm',compact('listdm'));
        }
        public function updatedm(){
            if(isset($_POST['capnhat'])&& ($_POST['capnhat'])){
                $tenloai=$_POST['tenloai'];
                $id=$_POST['id'];
                $this->danhMuc->update_dm($id,$tenloai); 
            }
            $listdm=$this->danhMuc->loadall_dm();
            $this->render('danhmuc.dsdm',compact('listdm'));
        }
        public function dstk(){
            $listtaikhoan=$this->taiKhoan->loadall_taikhoan();
           $this->render('taikhoan.dstk',compact('listtaikhoan'));
        }
        public function xoatk($id){

                $this->taiKhoan->delete_tk($id);

            $listtaikhoan=$this->taiKhoan->loadall_taikhoan();
            $this->render('taikhoan.dstk',compact('listtaikhoan'));
        }
        public function suatk($id){
                $taikhoan=$this->taiKhoan->loadone_tk($id);
            
            $this->render('taikhoan.suatk',compact('taikhoan'));
        }
        public function updatetk(){
            if(isset($_POST['capnhat'])){
                $id=$_POST['id'];
                $user=$_POST['user'];
                $pass=$_POST['pass'];
                $email=$_POST['email'];
                $address=$_POST['address'];
                $tel=$_POST['tel'];
                $role=$_POST['role'];
                $this->taiKhoan->update_tk($id,$user,$pass,$email,$address,$tel,$role); 
            }
            $listtaikhoan=$this->taiKhoan->loadall_taikhoan();
            $this->render('taikhoan.dstk',compact('listtaikhoan'));
        }
        public function home(){
            $this->render('Admin.homead');
        }
    }
?>
