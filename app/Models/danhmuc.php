<?php
    namespace App\Models;
    use App\Models\db;
class Danhmuc extends db{
    protected  $danhmuc ="danhmuc";
    public function insert_danhmuc($tenloai){
    $sql="INSERT INTO " .$this->danhmuc. " (name) VALUES('$tenloai')";
    $this->getData($sql);
    }
    public function delete_danhmuc($id){
    $sql="DELETE FROM ".$this->danhmuc." WHERE id=".$id;
    $this->getData($sql);
    }
    public function loadall_dm(){
    $sql="SELECT * FROM ".$this->danhmuc." order by id asc";
    $listdm = $this->getData($sql);
    return $listdm;
    }
    public function loadone_dm($id){
    $sql= "SELECT * FROM ".$this->danhmuc." WHERE id=".$id;
    $dm=$this->getDataOne($sql);
    return $dm;
    }

    public function update_dm($id,$tenloai){
    $sql="UPDATE danhmuc SET name='".$tenloai."' WHERE id=".$id;
    $this->getData($sql);
    }
    public function load_ten_dm($iddm){
    if($iddm>0){
        $sql="select * from sanpham where id=".$iddm;
        $dm=pdo_query_one($sql);

    }else{
        return "";
    }
    }
}
?>
