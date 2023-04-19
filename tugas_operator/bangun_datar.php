<?php 

  /** 
   * Membuat perhitungan 5 macam luas bangun datar
   */

  // 1. Luas Lingkaran
  $jari2 = 14;
  $l_lingkaran = 3.14 * $jari2 * $jari2;

  echo 'Luas sebuah <b>Lingkaran</b> dengan jari-jari ' .$jari2. ' cm adalah ' .$l_lingkaran. ' cm2. <br />';

  // 2. Luas Persegi Panjang
  $panjang = 10;
  $lebar = 5;
  $l_pp = $panjang * $lebar;

  echo 'Luas sebuah <b>Persegi Panjang</b> dengan panjang ' .$panjang. ' cm dan lebar ' .$lebar. ' cm adalah ' .$l_pp. ' cm2. <br />';

  // 3. Luas Persegi
  $sisi = 6;
  $l_p = $sisi * $sisi;

  echo 'Luas sebuah <b>Persegi</b> dengan sisi ' .$sisi. ' cm adalah ' .$l_p. ' cm2. <br />';

  // 4. Luas Segitiga
  $alas = 3;
  $tinggi = 4;
  $l_segitiga = 0.5 * $alas * $tinggi;

  echo 'Luas sebuah <b>Segitiga</b> dengan alas ' .$alas. ' cm dan tinggi ' .$tinggi. ' cm adalah ' .$l_segitiga. ' cm2. <br />';
  
  // 5. Luas Trapesium
  $a = 10;
  $b = 6;
  $tinggi = 12;
  $l_trapesium = 0.5 * ($a + $b) * $tinggi;
  
  echo 'Luas sebuah <b>Trapesium</b> dengan sisi a ' .$a. ' cm, sisi b ' .$b. ' cm dan tinggi ' .$tinggi. ' cm adalah ' .$l_trapesium. ' cm2.';