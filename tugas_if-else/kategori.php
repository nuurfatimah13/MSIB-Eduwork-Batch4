<?php

  /** 
   * Menghitung BMI
   * Catatan: Kurus (<18.5), Sedang/Normal (18.5-25), Gemuk (>25)
   * Rumus BMI: Berat badan/BB (kg) : tinggi badan/TB (m)
   */

  $nama = "Axel";
  $bb = 45; // dalam kg
  $tb = 100; // masih dalam cm.

  $bmi = $bb / (($tb / 100)**2);

  if ($bmi < 18.5) {
    echo 'Halo, '.$nama.'. Nilai BMI anda adalah '.number_format($bmi, 1).', anda termasuk <b>kurus</b>';
  } else if ($bmi >= 18.5 && $bmi <= 25) {
    echo 'Halo, '.$nama.'. Nilai BMI anda adalah '.number_format($bmi, 1).', anda termasuk <b>normal (ideal)</b>';
  } else if ($bmi > 25.0 && $bmi <= 29.9) {
    echo 'Halo,'.$nama.'. Nilai BMI anda adalah '.number_format($bmi, 1).', anda termasuk <b>sedang</b>';
  } else {
    echo 'Halo, '.$nama.'. Nilai BMI anda adalah '.number_format($bmi, 1).', anda termasuk <b>gemuk</b>';
  } 
  