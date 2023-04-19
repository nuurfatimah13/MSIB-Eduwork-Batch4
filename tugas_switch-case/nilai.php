<?php

  /** 
   * Menghitung Kategori sebuah nilai
   * Catatan: nilai A (90-100), B (80-90), C(70-80), D(0-70)
   */

  $nilai = 93;

  switch ($nilai) {
    case ($nilai <= 100 && $nilai >= 90) :
      echo 'Anda mendapatkan nilai A';
      break;
    case ($nilai < 90 && $nilai >= 80) :
      echo 'Anda mendapatkan nilai B';
      break;
    case ($nilai < 80 && $nilai >= 70) :
      echo 'Anda mendapatkan nilai C';
      break;
    case ($nilai < 70 && $nilai >= 0) :
      echo 'Anda mendapatkan nilai D';
      break;
    
    default:
      echo 'Maaf, nilai Anda tidak termasuk ke dalam kategori nilai :)';
      break;
  }