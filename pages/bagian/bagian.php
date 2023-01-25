<?php 
    include "database/connection.php";
?>

<div class="row">
    <div class="col">
        <h3>Bagian</h3>
    </div>
    <div class="col">
        <a href="?page=bagianTambah" class="btn btn-success btn-sm float-end">
            <i class="fa fa-plus-circle"></i> Tambah
        </a>
    </div>
</div>
<div class="row mt-3">
    <div class="col">
        <!-- PHP SCRIPT -->
        <?php 
            $selectSQL = "SELECT * FROM bagian";
            $result = mysqli_query($connection, $selectSQL);

        if(!$result) {
        ?>
            <div class="alert alert-danger" role="alert">
                <?php echo mysqli_error($connection) ?>
            </div>
        <?php 
            return;
        }

        if(mysqli_num_rows($result) == 0) {
        ?>
            <div class="alert alert-light" role="alert">
                Data Kosong
            </div>
        <?php 
            return;
            } 
        ?>
        <!-- PHP SCRIPT -->

        <table class="table bg-white rounded shadow-sm  table-hover">
            <thead>
                <tr>
                    <th scope="col" width="50">#</th>
                    <th scope="col">Bagian</th>
                    <th scope="col" width="200">Opsi</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $no = 1;
                    while($row = mysqli_fetch_assoc($result)) {
                ?>
                <tr class="align-middle">
                    <th scope="row"><?php echo $no++;?></th>
                    <td><?php echo $row['nama']?></td>
                    <td>
                        <a href="?page=bagianUbah&id=<?php echo $row['id'];?>" class="btn btn-primary btn-sm">
                            <i class="fa fa-edit"></i> Edit
                        </a>
                        <a href="?page=bagianHapus&id=<?php echo $row['id'];?>" onclick="javascript: return confirm('Konfirmasi Data Akan Dihapus ?');" class="btn btn-danger btn-sm">
                            <i class="fa fa-trash"></i> Delete
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