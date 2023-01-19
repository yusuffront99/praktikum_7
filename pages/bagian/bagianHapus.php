<div id="top" class="row mb-3">
    <div class="col">
        <h3>Hapus Data Bagian</h3>
    </div>
    <div class="col">

    </div>
    <div id="pesan" class="row mb-3">
        <div class="col">
            <?php 
                include "database/connection.php";

                $id = $_GET['id'];
                $sql = "DELETE FROM bagian WHERE id = $id";

                $result = mysqli_query($connection, $sql);

                if(!$result) {
            ?>
            <div class="alert alert-danger" role="alert">
                <i class="fa fa-check-circle"></i> 
                <?php 
                    echo $sql;
                ?>
            </div>
            <?php
                } else {
            ?>
            <div class="alert alert-success" role="alert">
                <i class="fa fa-check-circle"></i>
                Hapus Data Berhasil
            </div>
            <meta http-equiv="refresh" content="2; url=?page=bagian">
            <?php 
                }
            ?>
        </div>
    </div>
</div>