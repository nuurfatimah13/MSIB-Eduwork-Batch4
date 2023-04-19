<?php

  /** 
   * Membuat perulangan asterix 9 x 9
   */

  // bagian row
  for ($k=1; $k<=9; $k++) {
      // bagian column
      for ($l=9; $l>=$k; $l-=1) {
        echo "* ";
      }
      echo "<br>";
  }

