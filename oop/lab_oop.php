<?php
// ===== Bai 1 =====

interface PhepTinh{
    public function phepCong();
    public function phepTru();
    public function phepNhan();
    public function phepChia();
}

class TinhToan implements PhepTinh{
    private $so_a;
    private $so_b;
    function __construct($so_a,$so_b)
    {
        $this->so_a = $so_a;
        $this->so_b = $so_b;    
    }
    function phepCong(){
        return $this->so_a + $this->so_b;
    }
    function phepTru(){
        return $this->so_a - $this->so_b;
    }
    function phepNhan(){
        return $this->so_a * $this->so_b;
    }
    function phepChia(){
        return $this->so_a / $this->so_b;
    }
}
$tinhToan = new TinhToan(10,5);
echo '<pre>';
var_dump($tinhToan->phepCong());
var_dump($tinhToan->phepTru());
var_dump($tinhToan->phepNhan());
var_dump($tinhToan->phepChia());

// ===== Bai 2 =====
class ConNguoi
{
    public $ten;
    public $gioiTinh;
    public $ngaySinh;
    public $canNang;
    public $chieuCao;

    function __construct($ten, $gioiTinh, $ngaySinh, $canNang, $chieuCao)
    {
        $this->ten = $ten;
        $this->gioiTinh = $gioiTinh;
        $this->ngaySinh = $ngaySinh;
        $this->canNang = $canNang;
        $this->chieuCao = $chieuCao;
    }
}
class VanDongVien extends ConNguoi {
    public $so_huy_chuong;
    public $cac_mon_da_thi_dau;
    function __construct($ten, $gioiTinh, $ngaySinh, $canNang, $chieuCao,$so_huy_chuong,$cac_mon_da_thi_dau)
    {
        $this->ten = $ten;
        $this->gioiTinh = $gioiTinh;
        $this->ngaySinh = $ngaySinh;
        $this->canNang = $canNang;
        $this->chieuCao = $chieuCao;
        $this->so_huy_chuong = $so_huy_chuong;
        $this->cac_mon_da_thi_dau = $cac_mon_da_thi_dau;
    }

    function hienThiThongTin(){
        if($this->gioiTinh == 1){
            $this->gioiTinh = "Nữ";
        }else{
            $this->gioiTinh = "Nam";
        }
        return "
        Tên vận động viên : $this->ten,<br>
        Giới tính : $this->gioiTinh,<br>
        Ngày sinh : $this->ngaySinh,
        Cân nặng : $this->canNang,
        Chiều cao : $this->chieuCao,
        Số huy chương : $this->so_huy_chuong,
        Các môn thi đấu : $this->cac_mon_da_thi_dau,
        ";
    }

    function thiDau($mon_thi_dau,$so_huy_chuong){


    }
}

$nguoi_1 = new VanDongVien('quang',2,'18/11/190',50,165,3,[$mon_thi_1,$mon_thi_2]);
echo '<pre>';
var_dump($nguoi_1);
class MonThiDau{
    public $ten;
    public $dk_chieu_cao;
    public $dk_can_nang;

    function __construct($ten,$dk_chieu_cao,$dk_can_nang)
    {
        $this->ten = $ten;
        $this->dk_chieu_cao = $dk_chieu_cao;
        $this->dk_can_nang = $dk_can_nang;
    }
}

$mon_thi_1 = new MonThiDau ('Boxing',170,60);
$mon_thi_2 = new MonThiDau ('Karate',165,55);


