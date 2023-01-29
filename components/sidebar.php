<?php 
    $dashboard_active = "fw-bold";
    $bagian_active = "fw-bold";
    $karyawan_active = "fw-bold";
    $penggajian_active = "fw-bold";

    $page = $_GET["page"];

    switch($page) {
        case "";
        case "dashboard":
            $dashboard_active = "active";
            break;
        
        case "bagian":
        case "bagianTambah":
        case "bagianUbah":
        case "bagianHapus":
            $bagian_active = "active";
            break;

        case "karyawan":
        case "karyawanTambah":
        case "karyawanUbah":
        case "karyawanHapus":
            $karyawan_active = "active";
            break;
        
        case "pilihBulanTahunPenggajian":
        case "penggajian":
        case "penggajianTambah":
        case "pilihKaryawanPenggajian":
        case "penggajianHapus":
            $penggajian_active = "active";
            break;
        
        default:
            $dashboard_active = "active";
    }
?>
<div class="bg-white" id="sidebar-wrapper">
    <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom"><i
            class="fas fa-money-bill me-2"></i>Penggajian</div>
    <div class="list-group list-group-flush my-3">
        <a href="?page=dashboard" class="list-group-item list-group-item-action bg-transparent second-text <?php echo $dashboard_active ?>"><i class="fas fa-tachometer-alt me-2"></i>Dashboard</a>
        <a href="?page=bagian" class="list-group-item list-group-item-action bg-transparent second-text fw-bold <?php echo $bagian_active ?>"><i class="fas fa-building me-2"></i>Bagian</a>
        <a href="?page=karyawan" class="list-group-item list-group-item-action bg-transparent second-text fw-bold <?php echo $karyawan_active ?>"><i class="fas fa-users me-2"></i>Karyawan</a>
        <a href="?page=pilihBulanTahunPenggajian" class="list-group-item list-group-item-action bg-transparent second-text fw-bold <?php echo $penggajian_active ?>"><i class="fas fa-money-bill me-2"></i>Penggajian</a>
        <a href="logout.php" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold"><i class="fas fa-power-off me-2"></i>Logout</a>
    </div>
</div>