<div id="top" class="row mb-3">
    <div class="col">
        <h3>Pilih Bulan dan Tahun Penggajian</h3>
    </div>
</div>
<div id="pesan" class="row mb-3">
    <div class="col">
        <?php 
            include 'database/connection.php';

                $selectSQL = "SELECT DISTINCT tahun FROM penggajian";
                $result = mysqli_query($connection, $selectSQL);
                if(!$result) {
                ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo mysqli_error($connection)?>
                    </div>
                <?php 
                return;
                }
                if(mysqli_num_rows($result) == 0) {
                ?>
                    <div class="alert alert-danger" role="alert">
                        Data Kosong
                    </div>
                <?php  
                    return;
                }

                // ====== CEK
                if(isset($_POST['lanjut_button'])) {
                    $bulan_select = $_POST['bulan_select'];
                    $tahun_select = $_POST['tahun_select'];
                    $checkSQL = "";

                    if($bulan_select == "Semua") {
                        if($tahun_select == "Semua") {
                            $checkSQL = "SELECT * FROM penggajian";
                        } else {
                            $checkSQL = "SELECT * FROM penggajian WHERE tahun = $tahun_select";
                        }
                    } else {
                        if($tahun_select != 'Semua') {
                            $checkSQL = "SELECT * FROM penggajian WHERE tahun = $tahun_select AND bulan = $bulan_select";
                        }
                    }

                    if($checkSQL != "") {
                        $checkResult = mysqli_query($connection, $checkSQL);
                        if(mysqli_num_rows($checkResult) == 0) {
                        ?>
                            <div class="alert alert-danger" role="alert">
                                <i class="fa fa-exclamation-circle"></i>
                                Data Dengan Data Tahun & Bulan Masih Kosong
                            </div>
                        <?php
                        } else {
                            echo "<meta http-equiv='refresh' content='0;url=?page=penggajian&bulan=$bulan_select&tahun=$tahun_select'>";
                        }
                    }
                }
            ?>
    </div>
</div>
<div id="inputan" class="row mb-3">
    <div class="col">
        <form action="" method="post">
            <div class="card px-3">
                <div class="mb-3 mt-3">
                    <label for="bagian_id" class="form-label">Bulan</label>
                    <select name="bulan_select" id="" class="form-select" aria-label="Default Select Example">
                        <option value="Semua" selected>Semua</option>
                        <option value="01">Januari</option>
                        <option value="02">Februari</option>
                        <option value="03">Maret</option>
                        <option value="04">April</option>
                        <option value="05">Mei</option>
                        <option value="06">Juni</option>
                        <option value="07">Juli</option>
                        <option value="08">Agustus</option>
                        <option value="09">September</option>
                        <option value="10">Oktober</option>
                        <option value="11">November</option>
                        <option value="12">Desember</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="tahun_select" class="form-label">Tahun</label>
                    <select name="tahun_select" id="" class="form-select">
                        <option value="Semua" selected>Semua</option>
                        <?php 
                            while($row = mysqli_fetch_assoc($result)) {
                            ?>
                                <option value="<?php echo $row['tahun'];?>"><?php echo $row['tahun'];?></option>
                            <?php
                            }
                        ?>
                    </select>
                </div>
                <div class="col mb-3">
                    <button class="btn btn-success" type="submit" name="lanjut_button">
                        <i class="fa fa-arrow-circle-right"></i> Lanjut
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>