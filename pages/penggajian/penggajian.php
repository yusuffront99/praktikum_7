<div id="top" class="row mb-3">
    <div class="col">
        <h3>Penggajian</h3>
    </div>
</div>
<div id="content" class="row mb-3">
    <div class="col">
        <?php 
            include "database/connection.php";

            $no = 1;
            $bulan = $_GET['bulan'];
            $tahun = $_GET['tahun'];

            $selectSQL = "";
            if($bulan == 'Semua') {
                if($tahun == 'Semua') {
                    $selectSQL ="SELECT P.*, K.nama FROM penggajian P LEFT JOIN karyawan K ON P.karyawan_nik";
                } else {
                    $selectSQL = "SELECT P.*, K.nama FROM penggajian P LEFT JOIN karyawan K ON P.karyawan_nik = K.nik WHERE tahun=$tahun";
                }
            } else {
                if($tahun != 'Semua') {
                    $selectSQL = "SELECT P.*, K.nama FROM penggajian P LEFT JOIN karyawan K ON P.karyawan_nik = K.nik WHERE tahun=$tahun AND bulan='$bulan'";
                }
            }

            $result = mysqli_query($connection, $selectSQL);
            if(!$result) {
            ?>
                <div class="alert alert-danger" role="alert">
                    Data Kosong
                </div>
            <?php
            return;    
        }
        ?>
        <a href="?page=pilihKaryawanPenggajian" class="btn btn-success float-end">
            <i class="fa fa-plus-circle"></i> Tambah
        </a>
        <div class="col">
            <a href="?page=pilihBulanTahunPenggajian" class="btn btn-primary float-end">
                <i class="fa fa-arrow-circle-left"></i>
                Kembali
            </a>
        </div>
    </div>
    <div class="mt-3">
    <table class="table bg-white rounded shadow-sm table-hover">
            <thead>
                <tr>
                    <th scope="col">NIK</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Bulan</th>
                    <th scope="col">Tahun</th>
                    <th class="text-end" scope="col">Gaji Dibayar</th>
                    <th scope="col" width="200">Opsi</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $no =1;
                    while($row = mysqli_fetch_assoc($result)) {
                ?>
                <tr class="align-middle">
                    <th scope="row"><?php echo $row['karyawan_nik'];?></th>
                    <td><?php echo $row["nama"]; ?></td>
                    <td><?php echo $row["bulan"]; ?></td>
                    <td><?php echo $row["tahun"]; ?></td>
                    <td class="text-end"><?php echo number_format($row["gaji_bayar"])?></td>
                    <td>
                        <a href="?page=penggajianhapus&id=<?= $row["id"];?>&bulan=<?= $bulan?>&tahun=<?= $tahun?>" class="btn btn-danger" onclick="javascript: return confirm('Konfirmasi data akan dihapus');">
                            <i class="fa fa-trash"></i> Hapus
                        </a>
                    </td>
                </tr>
                <?php 
                    }
                ?>
            </tbody>
        </table>
    </div>
</div>