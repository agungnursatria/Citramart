    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Bulan</th>
                <th>Tahun</th>
                <th>Jumlah Hutang</th>
                <th>Id_suppler</th>
            </tr>
        </thead>
        <tbody>
            <?php
                include ('connect.php');
                $stmt = $connection->prepare("SELECT * FROM `menginput` WHERE SUBSTRING(tgl_pembelian, 5, 2)=? AND SUBSTRING(tgl_pembelian, 1, 4)=? AND status='hutang'");
                $stmt->bindParam(1,$bulan);
                $stmt->bindParam(2,$tahun);
                $stmt->execute();
                while($row = $stmt->fetch()){
                    ?>
                    <tr>
                        <td><?php echo $bulan ?></td>
                        <td><?php echo $tahun ?></td>
                        <td><?php echo $row['total_harga'] ?></td>
                        <td><?php echo $row['id_supplier'] ?></td>
                    </tr>
                    <?php
                }
            ?>
        </tbody>
    </table>
<?php