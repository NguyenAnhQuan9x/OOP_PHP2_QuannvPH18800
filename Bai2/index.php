<?php
class ConNguoi{
    protected $ten;
    protected $gioi_tinh;
    protected $ngay_sinh;
    protected $can_nang;
    protected $chieu_cao;
}
class VanDongVien extends ConNguoi{
    protected $so_huy_chuong;
    protected $cac_mon_thi_dau;
    public function __construct($ten,$gioi_tinh,$ngay_sinh,$can_nang,$chieu_cao,$so_huy_chuong,$cac_mon_thi_dau)
    {
        $this->ten = $ten;
        $this->gioi_tinh = $gioi_tinh;
        $this->ngay_sinh = $ngay_sinh;
        $this->can_nang = $can_nang;
        $this->chieu_cao = $chieu_cao;
        $this-> so_huy_chuong = $so_huy_chuong;
        $this->cac_mon_thi_dau = $cac_mon_thi_dau;
    }
    public function  hienthi(){
        $gioitinh = ($this->gioi_tinh == 1)?'Nam':'Nữ';
        var_dump( "Tên vận động viên: $this->ten,  Giới tính: $gioitinh, Ngày sinh: $this->ngay_sinh, 
        Cân nặng: $this->can_nang kg, Chiều cao: $this->chieu_cao cm, Số huy chương: $this->so_huy_chuong");
        echo "<br>"."Các môn thi đấu: "."<br>";
        foreach($this->cac_mon_thi_dau as $value){
            echo $value."<br>";
        }
    }
    public function thidau($mon,$so_huy_chuong){
        array_push($this->cac_mon_thi_dau,$mon->ten_mon);
        if($this->chieu_cao < $mon->dieu_kien_chieu_cao || $this->can_nang< $mon->dieu_kien_can_nang){
            $this->so_huy_chuong -= $so_huy_chuong;
        }
        return "Số huy chương: $this->so_huy_chuong";
    }
}
class MonThiDau {
    public $ten_mon;
    public $dieu_kien_chieu_cao;
    public $dieu_kien_can_nang;
    public function __construct($ten_mon,$dieu_kien_chieu_cao,$dieu_kien_can_nang)
    {
        $this->ten_mon = $ten_mon;
        $this->dieu_kien_can_nang = $dieu_kien_can_nang;
        $this->dieu_kien_chieu_cao  = $dieu_kien_chieu_cao;
    }
}
$mon = new MonThiDau('Cử tạ',165,48);
$vandongvien = new VanDongVien('Quân',1,'1998/5/12',40,172,12,['Bơi','Boxing']);
$vandongvien->hienthi();
echo($vandongvien->thidau($mon,7));
$vandongvien->hienthi();