<?php 

    if(isset($_GET["page"])) {
        $page = $_GET["page"];
    } else {
        $page = "";
    }

    switch($page) {
        case "":
        case "dashboard":
                include "pages/dashboard.php";
                break;

        case "bagian":
                include "pages/bagian.php";
                break;

        case "karyawan":
                include "pages/karyawan.php";
                break;

        case "penggajian":
                include "pages/penggajian.php";
                break;

        default :
                include "pages/404.php";        
    }
?>