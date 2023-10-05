 <div class="container">
  <h2 align="center">Data Mata Kuliah</h2>
  </br>
  
  <form class="form-inline" action="" method="POST">
  <div class="form-group">
    <input type="text" name="cari" class="form-control" id="cari">
  </div>
  <button type="submit" name="submit" class="btn btn-default">Cari</button>
</form>

	</br>
  <table class="table table-condensed">
    <thead>
      <tr>
		<th>No</th>
        <th>Kode Mata Kuliah</th>
        <th>Nama Mata Kuliah</th>
        <th>Semester</th>
		<th>Jumlah SKS</th>
		<th>Jumlah Sesi</th>
		<th>Batas Izin</th>
      </tr>
    </thead>
    <tbody>
	<?php
	session_start();
	include "../../skrip/koneksi.php";
	
	if(isset($_POST['submit'])) {
		$cari= $_POST['cari'];
		$sql 	= "SELECT * from matakuliah where kode_matkul or nama_matkul LIKE '%$cari%' Order by id_semester desc";
	} else {
		$sql   = "SELECT * FROM matakuliah order by id_semester desc";
	}
	$query = mysqli_query($connection, $sql) or die ("Gagal query".mysql_error($sql));
	$no = 0;
	while($r = mysqli_fetch_array($query)) {
		$no++;
	 ?>

	<tr>
        <td><?php echo $no; ?></td>
        <td><?php echo $r['kode_matkul']; ?></td>
        <td><?php echo $r['nama_matkul']; ?></td>
		<td><?php echo $r['id_semester']; ?></td>
		<td><?php echo $r['sks']; ?></td>
		<td><?php echo $r['sesi']; ?></td>
		<td><?php echo $r['batas_izin']; ?></td>
		
    </tr>
	<?php } ?>
    </tbody>
  </table>
</div>
