<?php

class Dispenser{
  protected $volume;
  protected $hargaSegelas;
  private $volumeGelas;
  public $namaMinuman;

  function  volume($vol){
    $this->volume = $vol;
  }
}

class Minuman extends Dispenser
{
  public $uang;
  function __construct($uang, $namaMinuman, $volumeGelas, $harga)
  {
    $this->uang = $uang;
    $this->namaMinuman = $namaMinuman;
    $this->hargaSegelas = $harga;
    $this->volumeGelas = $volumeGelas;
  }

  function transaksi($uang)
  {
    $this->uang = $uang;
    return  $this->uang - $this->hargaSegelas;
  }

  function volumeSetelahdibeli()
  {
    $this->volume = $this->volume - $this->volumeGelas;
    return $this->volume;
  }

  function cetak()
  {
    echo '<h1>'. 'Silahkan memilih '.'</h1>';
    echo 'Nama Minuman : ' . $this->namaMinuman . "<br>";
    echo 'Uang Saat ini : ' . $this->uang . "<br>";
    echo 'kapasistas (volume) Dispenser : ' . $this->volume .' ml'. "<br>";
    echo 'Harga Bayar Segelas Minuman : ' . $this->hargaSegelas ."<br>";
    echo 'Volume Dispenser setelah dibeli : ' . $this->volumeSetelahDibeli() .' ml'. "<br>";
    echo 'Sisa uang: ' . $this->transaksi($this->uang);
  }
}

$minuman = new Minuman(10000, 'Jus Semangka', 3000, 5000);
$minuman->transaksi($minuman->uang);
$minuman->volume(5000);
$minuman->cetak();
?>