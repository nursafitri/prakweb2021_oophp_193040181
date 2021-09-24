<?php
//Pertemuan 3
//Video 12

// define('NAMA', 'Nur Safitri');
// echo NAMA;
// echo "<br>";
// const UMUR = 22;
// echo UMUR;

// class Coba {
//   const NAMA = 'Fitri';
// }

// echo Coba::NAMA;

// echo __LINE__;

// echo __FILE__;

// function coba() {
//    return __FUNCTION__;
// }
// echo coba();

class Coba
{
  public $kelas = __CLASS__;
}

$obj = new Coba;
echo $obj->kelas;
