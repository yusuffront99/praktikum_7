<?php 
    $id = $_GET['id'];
    $bulan = $_GET['bulan'];
    $tahun = $_GET['tahun'];
?>
<div id="top" class="row">
    <div class="col">
        <h3>Hapus Data Penggajian</h3>
    </div>
    <div class="col">
        <a href="?page=penggajian&bulan=<?php $bulan ?>&tahun=<?php $tahun ?>" class="btn btn-primary float-end">
        <i class="fa fa-arrow-circle-left"></i> Kembali
    </a>
    </div>
</div>
<div id="content" class="row mt-3">
    <div class="col">
        <?php 
            include "database/connection.php";

            $sql =  "DELETE FROM penggajian WHERE id=$id";
            $result = mysqli_query($connection, $sql);
            if(!$result) {
            ?>
                <div class="alert alert-danger" role="alert">
                    <i class="fa fa-exclamation-circle"></i>
                    <?php echo mysqli_error($connection)?>
                </div>
            <?php
            } else {
            ?>
                <div class="alert alert-danger" role="alert">
                    <i class="fa fa-check-circle"></i>
                    Hapus Data Berhasil
                </div>
                <meta http-equiv="refresh" content="2;url=?page=penggajian&bulan=<?php $bulan ?>&tahun=<?php $tahun ?>">
            <?php
            }
        ?>
    </div>
</div>