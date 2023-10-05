<?php 
session_start();
include "../../skrip/koneksi.php";

$nim = $_SESSION['nim'];

$sql = "select * from user where nim='$nim'";
$query = mysqli_query($connection,$sql) or die ("Gagal query".mysqli_error());
$r = mysqli_fetch_array($query);


?>
<div class="row">
	<form class="form-horizontal" role="form" style="width:80%" onSubmit="return validasi()" name="formulir" method="post" action="./prosesizin.php">
	  <div class="form-group">
		<label class="control-label col-sm-2" for="email">NIM:</label>
		<div class="col-sm-10">
		  <input type="text" class="form-control" name="Nim" value="<?php echo $nim; ?>" readonly>
		</div>
	  </div>
	  <div class="form-group">
		<label class="control-label col-sm-2" for="pwd">Nama:</label>
		<div class="col-sm-10"> 
		  <input type="text" class="form-control" name="Nama" value="<?php echo $r[nama]; ?>" readonly>
		</div>
	  </div>
	  <fieldset>
	  <div class="form-group">
		<label class="control-label col-sm-2" for="email">Matakuliah:</label>
		<div class="col-sm-10">
		<!--<input type="text" class="form-control" name="matkul" placeholder="Masukan Matakuliah" value="">-->
		<?php 
		
		$sqli = "select * from matakuliah";
		$q = mysqli_query($connection,$sqli) or die ("Gagal query".mysqli_error());
		
		?>
		  <select name="matkul" id="matakuliah" >
				<option selected="selected">Please select ...</option>
				<?php 
				while($read = mysqli_fetch_array($q))
				{
				?>
				<option value='<?php echo $read['kode_matkul']; ?>' ><?php echo $read['nama_matkul']; ?></option><?php
				}?>
		  </select>
		</div>
	  </div>
	  </fieldset>
	  <div class="form-group">
		<label class="control-label col-sm-2" for="email">Tanggal:</label>
		<div class="col-sm-10">
		  <input type="text" class="form-control" name="tgll" placeholder="Masukan Tanggal" value="<?php $tgl=date('d-m-Y');echo $tgl;?>" readonly>
		</div>
	  </div>
	  <div class="form-group">
		<label class="control-label col-sm-2" for="email">Alasan:</label>
		<div class="col-sm-10">
		  <input type="text" class="form-control" name="alasann" placeholder="Masukan Alasan Izin" value="">
		</div>
	  </div>
	  <div class="form-group">
		<label class="control-label col-sm-2" for="email">File:</label>
		<div class="col-sm-10">
		 <input type="text" class="form-control" name="filee" placeholder="Unggah File" value="">
		  <!--<button type="submit" class="">Browse File</button>-->
		</div>
	  </div>
	  
	  <div class="form-group"> 
		<div class="col-sm-offset-2 col-sm-10">
		  <button type="submit" class="btn btn-default">Submit</button>
		</div>
	  </div>
	</form>
</div>