    <h1>Penjualan</h1>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
            <th>Bulan</th>
            <th>Tahun</th>
            <th>Total</th>
            <th>id_member</th>
            <th>status</th>
            </tr>
        </thead>
        <tbody>
            <?php
                include ('connect.php');
                $stmt = $connection->prepare("SELECT * FROM `membeli` WHERE SUBSTRING(tgl_pembelian, 5, 2)=? AND SUBSTRING(tgl_pembelian, 1, 4)=?");
                $stmt->bindParam(1,$bulan);
                $stmt->bindParam(2,$tahun);
                $stmt->execute();
                while($row = $stmt->fetch()){
                    ?>
                    <tr>
                        <td><?php echo $bulan ?></td>
                        <td><?php echo $tahun ?></td>
                        <td><?php echo $row['total_harga'] ?></td>
                        <td><?php echo $row['nomor_pelanggan'] ?></td>
                        <td><?php echo $row['status'] ?></td>
                    </tr>
                    <?php
                }
            ?>
        </tbody>
    </table>
    <br>
    <br>
    <br>
    <h1>Pembelian</h1>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
            <th>Bulan</th>
            <th>Tahun</th>
            <th>Total</th>
            <th>id_supplier</th>
            <th>status</th>
            </tr>
        </thead>
        <tbody>
            <?php
                include ('connect.php');
                $stmt = $connection->prepare("SELECT * FROM `menginput` WHERE SUBSTRING(tgl_pembelian, 5, 2)=? AND SUBSTRING(tgl_pembelian, 1, 4)=?");
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
                        <td><?php echo $row['status'] ?></td>
                    </tr>
                    <?php
                }
            ?>
        </tbody>
    </table>
    <br>
    <br>
    <br>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
            <th>Bulan</th>
            <th>Tahun</th>
            <th>Laba</th>
            <th>Rugi</th>
            </tr>
        </thead>
        <tbody>
            <?php
                include ('connect.php');
                $pengeluaran = $connection->prepare("SELECT SUM(`total_harga`) FROM `menginput` WHERE SUBSTRING(tgl_pembelian, 5, 2)=? AND SUBSTRING(tgl_pembelian, 1, 4)=? AND status='lunas'");
                $pengeluaran->bindParam(1,$bulan);
                $pengeluaran->bindParam(2,$tahun);
                $pengeluaran->execute();
                $pemasukan = $connection->prepare("SELECT SUM(`total_harga`) FROM `membeli` WHERE SUBSTRING(tgl_pembelian, 5, 2)=? AND SUBSTRING(tgl_pembelian, 1, 4)=? AND status='lunas'");
                $pemasukan->bindParam(1,$bulan);
                $pemasukan->bindParam(2,$tahun);
                $pemasukan->execute();
                $keluar = $pengeluaran->fetch();
                $masuk = $pemasukan->fetch();
                ?>
                <tr>
                    <td><?php echo $bulan ?></td>
                    <td><?php echo $tahun ?></td>
                    <td><?php echo $masuk ?></td>
                    <td><?php echo $keluar ?></td>
                </tr>
                <?php
            ?>
        </tbody>
    </table>
<?php