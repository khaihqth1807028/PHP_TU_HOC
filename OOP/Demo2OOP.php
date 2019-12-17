
<Label>Cân nặng</Label>
<form action="#" method="post">
    <input type="number" name="cannang">
    <button type="submit">Button</button>
</form>

<?php
$cannang ="";
if (isset($_POST["cannang"])){
    $cannang= $_POST["cannang"];
}

?>
<h1><?php echo $cannang?></h1>
<?php

class Sieunhan {
public $ten ;
public $sucmanh;
function SayHi(){
   return "I am Sieu nhan";
}
function Who(){
    $s = $this->ten;
    $s .= " ";
    $s .= $this->sucmanh;
    return $s;
}
function What($t,$s){
    $this->ten=$t;
    $this->sucmanh=$s;
}
}

$ironman = new Sieunhan();
$ironman->What("leesin",65);
$superman = new Sieunhan();
$superman->ten="SupperMan";
$superman->sucmanh="90";
echo $superman->ten;
echo $ironman->sucmanh;
echo "<br>";
echo $ironman->SayHi();
echo "<br>";
echo $superman->Who();
echo "<br>";
echo $ironman->sucmanh;
echo "<hr>";


class HinhVuong{
    public $chieudai;
    public $chieurong;
    function TinhChuVi(){
        return $this->chieudai+$this->chieurong;
    }
    function TinhDienTich(){
        return $this->chieudai*$this->chieurong;
    }
    function Gan($d,$r){
        $this->chieudai=$d;
        $this->chieurong=$r;
    }
}
$lil=new HinhVuong();
$lil->Gan(30,20);
echo $lil->TinhChuVi();
echo "<hr>";
echo $lil->TinhDienTich();

echo "<br>";

class DongVat2{
    public $loai;
    private $cannang;
    function Gan($n){
        if ($n>0){
            $this->cannang=$n;
        }
        else{
            echo "<h1>ko thể có cân nặng này</h1>";
        }
    }
    function Lay(){
        return $this->cannang;
    }
}
$meo = new DongVat2();
$meo->Gan(30);
$meo->loai="Mèo";
echo $meo->loai;
echo $meo->Lay();
echo "<br>";
class HinhChuNhat{
    private $chieudai;
    private $chieurong;

    function getter($d){

    if ($d>0 ){
        $this->chieudai=$d;
    }
    else{
        echo " Fail ";
    }
}
    function setter(){
        return $this->chieudai ;

    }
    function getterrong($r){

        if ($r>0){
            $this->chieurong=$r;
        }
        else{
            echo " Fail ";
        }
    }
    function setterrong(){
        return $this->chieurong;

    }
    function TinhChuVi(){
        return $this->chieudai+$this->chieurong;
    }
}
$chunhat1=new HinhChuNhat();
$chunhat1->getter(50);
$chunhat1->getterrong(30);
echo $chunhat1->setter();
echo $chunhat1->setterrong();
echo $chunhat1->TinhChuVi();
class SieuNhanNhatBan extends Sieunhan {
    private $chieucao;
    function getterNhat($c){
        $this->chieucao=$c;
    }
    function setterNhat(){
        return $this->chieucao;
    }
}
$dienquang= new SieuNhanNhatBan();
$dienquang->sucmanh=50;
echo $dienquang->getterNhat(164);
echo $dienquang->setterNhat();
echo $dienquang->sucmanh;
class SieuNhanMy extends Sieunhan {
    public $mausac;
}
echo "<br>";
$mymieu=new  SieuNhanMy();
$mymieu->ten="Hồ";
echo $mymieu->ten;
?>