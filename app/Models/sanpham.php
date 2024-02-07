<?php
    namespace App\Models;

    use App\Models\db;

    class Sanpham extends db{
        protected $sanpham = "sanpham";
    public function insert_sp($tensp,$price,$hinh,$motasp,$soluong,$iddm){
    $sql= "INSERT INTO ".$this->sanpham."(name,price,img,mota,soluong,iddm) VALUES('$tensp','$price','$hinh','$motasp','$soluong','$iddm')";
    $this->getData($sql);
    }
    public function delete_sp($id){
    $sql="DELETE FROM ".$this->sanpham." WHERE id=".$id;
    $this->getData($sql);
    }
    public function loadall_sanpham_home(){
    $sql="select * from ".$this->sanpham." where 1 order by id desc limit 0,9";
    $listsanpham=$this->getData($sql);
    return  $listsanpham;
    }
    public function loadall_sp($kyw="",$iddm=0){
    $sql="SELECT * FROM ".$this->sanpham." WHERE 1";

    if ($kyw !=""){
        $sql.=" and name like '%".$kyw."%'";
    }
    if ($iddm >0){
        $sql.=" and iddm ='".$iddm."'";
    }
    $sql.=" order by id asc";
    $listsp = $this->getData($sql);
    return $listsp;
    }
    public function loadone_sp($id){
    $sql= "SELECT * FROM ".$this->sanpham." WHERE id=".$id;
    $listsp=$this->getDataOne($sql);
    return $listsp;
    }
    public function load_tendm($iddm){
    if ($iddm>0) {
        $sql = "SELECT * FROM ".$this->sanpham." WHERE id=" . $iddm;
        $dm = $this->getDataOne($sql);
        extract($dm);
        return $namedm;
    }else{
        return "";
    }
    }
    public function loadone_spcl($id,$iddm){
    $sql= "SELECT * FROM ".$this->sanpham." WHERE iddm= $iddm AND id <> $id";
    $listsp=$this->getData($sql);
    return $listsp;
    }

    public function update_sp($id,$iddm,$tensp,$price,$motasp,$hinh,$soluong){
        if($hinh!="")
            $sql= "UPDATE ".$this->sanpham." SET iddm='".$iddm."',name='".$tensp."',price='".$price."',mota='".$motasp."',img='".$hinh."',soluong='".$soluong."' WHERE id= ".$id;
        else
            $sql= "UPDATE ".$this->sanpham." SET iddm='".$iddm."',name='".$tensp."',price='".$price."',mota='".$motasp."',soluong='".$soluong."' WHERE id= ".$id;
            $this->getData($sql);   
    }
}
?>