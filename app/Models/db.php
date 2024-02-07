<?php
/**
 * Mở kết nối đến CSDL sử dụng PDO
 */
namespace App\Models;

    use PDO;
///khoi tao calss db de thuc hien ket noi CSDL
        class db{
            protected $severname="locahost";
            protected $dbname="duan1";
            protected $username="root";
            protected $password="";
            //tao ke noi voi CSDL
            public function getConnect(){
                $connect = new PDO(
                    "mysql:host =". $this->severname 
                    . ";dbname=" . $this->dbname,
                    $this->username,
                    $this->password
                );
                return $connect;
            }
            //thuc hien truy van 
            public function getData($sql){
                $conn = $this->getConnect();//khởi tạo kết nối CSDL
                $stmt = $conn->prepare($sql);// 
                $stmt->execute();//thực thi câu truy vấn

                return $stmt->fetchAll();
            }
public function getDataById($query) {
    $conn = $this->getConnect(); //khởi tạo kết nối CSDL
    $stmt = $conn->prepare($query); //
    $stmt->execute(); //thực thi câu truy vấn

    return $stmt->fetch();
}
public function getDataOne($query) {
    $conn = $this->getConnect(); //khởi tạo kết nối CSDL
    $stmt = $conn->prepare($query); //
    $stmt->execute(); //thực thi câu truy vấn

    return $stmt->fetch();
}


}
