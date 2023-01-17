<?php 
    include "database/connection.php";
?>

<div class="row">
    <div class="col">
        <h3>Bagian</h3>
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
                </tr>

                <?php 
                    }
                ?>
            </tbody>
        </table>
    </div>
</div>