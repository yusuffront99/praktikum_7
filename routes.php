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

        // =============== BAGIAN
        case "bagian":
                include "pages/bagian/bagian.php";
                break;

        case "bagianTambah":
                include "pages/bagian/bagianTambah.php";
                break;

        case "bagianUbah":
                include "pages/bagian/bagianUbah.php";
                break;

        case "bagianHapus":
                include "pages/bagian/bagianHapus.php";
                break;

        // =============== KARYAWAN

        case "karyawan":
                include "pages/karyawan/karyawan.php";
                break;

        case "karyawanTambah":
                include "pages/karyawan/karyawanTambah.php";
                break;

        case "karyawanUbah":
                include "pages/karyawan/karyawanUbah.php";
                break;

        case "karyawanHapus":
                include "pages/karyawan/karyawanHapus.php";
                break;

        //  =============== PENGGAJIAN

        case "penggajian":
                include "pages/penggajian/penggajian.php";
                break;

        case "pilihBulanTahunPenggajian":
                include "pages/penggajian/pilihBulanTahunPenggajian.php";
                break;

        case "pilihKaryawanPenggajian":
                include "pages/penggajian/pilihKaryawanPenggajian.php";
                break;

        case "penggajianTambah":
                include "pages/penggajian/penggajianTambah.php";
                break;

        case "penggajianHapus":
                include "pages/penggajian/penggajianHapus.php";
                break;


        default :
                include "pages/404.php";        
    }
?>