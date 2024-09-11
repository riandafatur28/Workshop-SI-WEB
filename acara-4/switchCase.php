<?php
$role = "sales";
switch ($role) {
    case "admin":
        echo "Anda login sebagai admin";
        break;
    case "teknisi":
        echo "Anda login sebagai teknisi";
        break;
    case "sales":
        echo "Anda login sebagai sales";
        break;
    default:
        echo "Role tidak dikenali";
}
?>
