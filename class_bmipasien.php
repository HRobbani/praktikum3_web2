<?php

class BmiPasien {
  public $nama;
  public $umur;
  public $jenis_kelamin;
  public $berat_badan;
  public $tinggi;
  

  function __construct($nama,$umur,$jenis_kelamin,$berat_badan,$tinggi){
    $this->nama = $nama;
    $this->umur = $umur;
    $this->jenis_kelamin = $jenis_kelamin;
    $this->berat_badan = $berat_badan;
    $this->tinggi = $tinggi;
  }

  function statusBMI(){
    return $this->berat_badan / pow($this->tinggi / 100 ,2);
  }

  function hasilBmi($bmi){
    switch ($bmi) {
      case $bmi < 18.5:
        return 'Kekurangan berat badan';
      case $bmi > 18.5 && $bmi < 24.9:
        return 'Normal (ideal)';
      case $bmi > 25 && $bmi < 29.9:
        return 'Kelebihan berat badan';
      case $bmi > 30; 
        return 'Kegemukan (Obesitas)';
      default:
        return 'error';
    }
  }

}

