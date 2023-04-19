<?php 

  /** 
   * Membuat perhitungan 3 macam volume bangun ruang
   */

  // 1. Volume Bola
  $jari2 = 14;
  $l_bola = (3/4) * 3.14 * $jari2 * $jari2 * $jari2;

  echo 'Volume sebuah <b>Bola</b> dengan jari-jari ' .$jari2. ' cm adalah ' .$l_bola. ' cm3. <br />';

  // 2. Volume Balok
  $panjang = 10;
  $lebar = 5;
  $tinggi = 8;
  $l_balok = $panjang * $lebar * $tinggi;

  echo 'Volume sebuah <b>Balok</b> dengan panjang ' .$panjang. ' cm, lebar ' .$lebar. ' cm dan tinggi ' .$tinggi. ' cm adalah ' .$l_balok. ' cm3. <br />';

  // 3. Volume Kubus
  $sisi = 6;
  $l_kubus = $sisi * $sisi * $sisi;

  echo 'Volume sebuah <b>Kubus</b> dengan sisi ' .$sisi. ' cm adalah ' .$l_kubus. ' cm3. <br />';