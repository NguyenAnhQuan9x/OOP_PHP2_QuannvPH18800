<?php
class TinhToan implements PhepTinh{
    public $a;
    public $b;
    public function Cong()
    {
        return ($this->a + $this->b);
    }
    public function Tru()
    {
        return ($this->a - $this->b);
    }
    public function Nhan()
    {
        return ($this->a * $this->b);
    }
    public function Chia()
    {
        return ($this->a / $this->b);
    }
}
interface PhepTinh
{
    function Cong();
    function Tru();
    function Nhan();
    function Chia();
}
$tinhtoan = new TinhToan();
$tinhtoan->a = 5;
$tinhtoan->b = 9;
echo($tinhtoan->Nhan());
