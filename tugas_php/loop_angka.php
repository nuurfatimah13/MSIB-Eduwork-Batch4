<?php

  /** 
   * Membuat angka bentuk segitiga
   */

  // bagian row
  for ($k=0; $k<=9; $k++) {
    // bagian column
    for ($l=0; $l<$k; $l++) {
      echo "$l ";
    }
    echo "<br>";
  }