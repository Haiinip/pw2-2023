<?php
    require_once "class_lingkaran.php";

    echo "Nilai PHI = " . Lingkaran::PHI;
    $lingkar1 = new Lingkaran ( 7 );
    $lingkar2 = new Lingkaran ( 7 );

    echo "<br/>Luas Lingkaran 1 = " .$lingkar1->getLuas();
    echo "<br/>Luas Lingkaran 2 = " .$lingkar2->getLuas();

    echo "<br/>Keliling Lingkaran 1 = " . $lingkar1->getKeliling();
    echo "<br/>Keliling Lingkaran 2 = " . $lingkar2->getKeliling();
?>