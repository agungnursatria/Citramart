
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