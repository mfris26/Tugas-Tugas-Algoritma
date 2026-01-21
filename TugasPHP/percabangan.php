<?php
$hari = "Senin";

switch ($hari) {
    case "Senin":
        echo "Hari ini adalah awal minggu kerja.";
        break;
    case "Jumat":
        echo "Besok sudah akhir pekan!";
        break;
    case "Sabtu":
    case "Minggu":
        echo "Waktunya libur.";
        break;
    default:
        echo "Semangat menjalani hari!";
        break;
}
?>