<?php
// Menggunakan getdate()
$tangalSkrng = getdate();
echo $tangalSkrng['mday']." - ".$tangalSkrng['mon'] .' - '. $tangalSkrng['year'];