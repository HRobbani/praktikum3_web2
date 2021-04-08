<?php

class PersegiPanjang{
  public $panjang;
  public $lebar;

  function __construct($panjang,$lebar){
    $this->panjang = $panjang;
    $this->lebar = $lebar;
  }

  function Hitung(){
    return $this->panjang * $this->lebar;
  }
}


$persegiPanjang = new PersegiPanjang(5,10);

echo $persegiPanjang -> Hitung();