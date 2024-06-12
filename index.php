<html>
   <head>
      <title>Menampilkan Data Tabel MySQL</title>
      <style>
         body {font-family:tahoma, arial}
         table {border-collapse: collapse}
         th, td {font-size: 13px; border: 1px solid #DEDEDE; padding: 3px 5px; color: #303030}
         th {background: #CCCCCC; font-size: 12px; border-color:#B0B0B0}
      </style>
   </head>
   <body>
      <center><h1>Sistem Penjualann</h1></center>
      <h3>Tabel anggota </h3>
      <table>
         <thead>
            <tr>
               <th>ID_Anggota</th>
               <th>Nama</th>
               <th>Alamat</th>
               <th>Tanggal_Lahir</th>
               <th>Nomor_Telepon</th>
               <th>Status_Keanggotaan</th>
               <th>Tanggal_Bergabung</th>
            </tr>
         </thead>
         <?php
            include 'koneksi.php';		
            $sql = 'SELECT  * FROM anggota';
            $query = mysqli_query($koneksi, $sql);		
            while ($row = mysqli_fetch_array($query))
               {?>
            <tbody>
               <tr>
                  <td><?php echo $row['ID_Anggota'] ?></td>
                  <td><?php echo $row['Nama'] ?></td>
                  <td><?php echo $row['Alamat'] ?></td>
                  <td><?php echo $row['Tanggal_Lahir'] ?></td>
                  <td><?php echo $row['nomor_telepon'] ?></td>
                  <td><?php echo $row['Status_keanggotaan'] ?></td>
                  <td><?php echo $row['Tanggal_Bergabung'] ?></td>
               </tr>
            </tbody>
         <?php
            }?>
      </table>
      <h3>Tabel pegawai </h3>
      <table>
         <thead>
            <tr>
               <th>ID_Pegawai</th>
               <th>Nama</th>
               <th>Jabatan</th>
               <th>Nomor_Telepon</th>
            </tr>
         </thead>
         <?php
            include 'koneksi.php';		
            $sql = 'SELECT  * FROM pegawai';
            $query = mysqli_query($koneksi, $sql);		
            while ($row = mysqli_fetch_array($query))
               {?>
            <tbody>
               <tr>
                  <td><?php echo $row['ID_Pegawai'] ?></td>
                  <td><?php echo $row['Nama'] ?></td>
                  <td><?php echo $row['Jabatan'] ?></td>
                  <td><?php echo $row['Nomor_Telepon'] ?></td>
               </tr>
            </tbody>
         <?php
            }?>
      </table>
      
      <h3>Tabel pinjaman </h3>
      <table>
         <thead>
            <tr>
               <th>ID_Pinjaman</th>
               <th>ID_Anggota</th>
               <th>ID_Pegawai</th>
               <th>ID_Jenis_Pinjaman</th>
               <th>Tanggal_Pinjaman</th>
               <th>Jumlah_Pinjaman</th>
            </tr>
         </thead>
         <?php
            include 'koneksi.php';		
            $sql = 'SELECT  * FROM pinjaman';
            $query = mysqli_query($koneksi, $sql);		
            while ($row = mysqli_fetch_array($query))
               {?>
            <tbody>
               <tr>
                  <td><?php echo $row['ID_Pinjaman'] ?></td>
                  <td><?php echo $row['ID_Anggota'] ?></td>
                  <td><?php echo $row['ID_Pegawai'] ?></td>
                  <td><?php echo $row['ID_Jenis_Pinjaman'] ?></td>
                  <td><?php echo $row['Tanggal_Pinjaman'] ?></td>
                  <td><?php echo $row['Jumlah_Pinjaman'] ?></td>
               </tr>
            </tbody>
         <?php
            }?>
      </table>

      <h3>Tabel jenis pinjaman </h3>
      <table>
         <thead>
            <tr>
               <th>ID_Jenis_Pinjaman</th>
               <th>Nama_Jenis_Pinjaman</th>
               <th>Bunga</th>
            </tr>
         </thead>
         <?php
            include 'koneksi.php';		
            $sql = 'SELECT  * FROM jenis_pinjaman';
            $query = mysqli_query($koneksi, $sql);		
            while ($row = mysqli_fetch_array($query))
               {?>
            <tbody>
               <tr>
                  <td><?php echo $row['ID_Jenis_Pinjaman'] ?></td>
                  <td><?php echo $row['Nama_Jenis_Pinjaman'] ?></td>
                  <td><?php echo $row['Bunga'] ?></td>
               </tr>
            </tbody>
         <?php
            }?>
      </table>
      <h3>Tabel keanggotaan </h3>
      <table>
         <thead>
            <tr>
               <th>ID_Keanggotaan</th>
               <th>ID_Anggota</th>
               <th>Status_Keanggotaan</th>
               <th>Tanggal_Bergabung</th>
            </tr>
         </thead>
         <?php
            include 'koneksi.php';		
            $sql = 'SELECT  * FROM keanggotaan';
            $query = mysqli_query($koneksi, $sql);		
            while ($row = mysqli_fetch_array($query))
               {?>
            <tbody>
               <tr>
                  <td><?php echo $row['ID_Keanggotaan'] ?></td>
                  <td><?php echo $row['ID_Anggota'] ?></td>
                  <td><?php echo $row['Status_Keanggotaan'] ?></td>
                  <td><?php echo $row['Tanggal_Bergabung'] ?></td>
               </tr>
            </tbody>
         <?php
            }?>
      </table>
      <h3>Tabel simpanan </h3>
      <table>
         <thead>
            <tr>
               <th>ID_Simpanan</th>
               <th>ID_Anggota</th>
               <th>ID_Pegawai</th>
               <th>Tanggal_Simpanan</th>
               <th>Jumlah_Simpanan</th>
            </tr>
         </thead>
         <?php
            include 'koneksi.php';		
            $sql = 'SELECT  * FROM simpanan';
            $query = mysqli_query($koneksi, $sql);		
            while ($row = mysqli_fetch_array($query))
               {?>
            <tbody>
               <tr>
                  <td><?php echo $row['ID_Simpanan'] ?></td>
                  <td><?php echo $row['ID_Anggota'] ?></td>
                  <td><?php echo $row['ID_Pegawai'] ?></td>
                  <td><?php echo $row['Tanggal_Simpanan'] ?></td>
                  <td><?php echo $row['Jumlah_Simpanan'] ?></td>
               </tr>
            </tbody>
         <?php
            }?>
      </table>
   </body>
</html>