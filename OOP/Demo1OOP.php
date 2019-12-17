<?php


class DongVat{

public $sochan=4;
public $tiengkeu="haha";
public $maulong="vàng";
    public function __construct($sochan,$maulong,$tiengkeu)
    {
$this->sochan =$sochan;
$this->tiengkeu= $tiengkeu;
$this->maulong= $maulong;
    }
    public function setsochan($sochan){
        $this->sochan =$sochan;
    }
    public function getsochan(){
      return " Số chân  " .$this->sochan;
    }
public function gettiengkeu($tiengkeu){
        $this->tiengkeu=$tiengkeu;

}
public function settiengkeu(){
    return "tiếng kêu ".$this->tiengkeu;
}
public static function getoto(){
        return "Lamborghini";
}

}
class DemoExtend extends DongVat
{
    private $sothich ="";
 public function __construct($sochan,$maulong,$tiengkeu,$sothich)
 {
     $this->sothich= $sothich;
     parent::__construct($sochan,$maulong,$tiengkeu,$sothich) ;
 }
}
$lilwayne = new DemoExtend(4,"đỏ","rap","Freestyle");
var_dump($lilwayne);
echo $lilwayne->maulong;
echo "<br>";
 $cho=new DongVat();
$meo=new DongVat();
$lon=new DongVat();
$lon->setsochan(4);
echo "Lợn có" .$lon->getsochan();

echo "<br>";
 $meo->getsochan();
$meo->setsochan(4);
$cho->gettiengkeu("MeoMeo");
echo $cho->settiengkeu();
echo "<br>";
echo $cho::getoto();





