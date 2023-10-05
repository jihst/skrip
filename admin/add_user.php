<?php 
	if (isset($_GET['st'])) {
		if ($_GET['st']==1) {
			echo "<div class='alert alert-warning'><strong>Berhasil Ditambahkan.</strong></div>";
		} elseif ($_GET['st']==2) {
			echo "<div class='alert alert-danger'><strong>Gagal Menambahkan.</strong></div>";
		} elseif ($_GET['st']==3) {
			echo "<div class='alert alert-danger'><strong>Maaf Email sudah digunakan.</strong></div>";
		} elseif ($_GET['st']==4) {
      echo "<div class='alert alert-danger'><strong>Semua kolom wajib di isi.</strong></div>";
    } elseif ($_GET['st']==5) {
      echo "<div class='alert alert-danger'><strong>Katasandi tidak cocok!</strong></div>";
    } elseif ($_GET['st']==6) {
      echo "<div class='alert alert-danger'><strong>NIS sudah terdaftar!</strong></div>";
    }
	}

 ?>
<div class="row">
	<form class="form-horizontal" role="form" style="width:80%" onSubmit="return validasi()" name="formulir" method="post" action="proses_add.php">
	  <div class="form-group">
		<label class="control-label col-sm-2" for="nim">NIM/NIK:</label>
		<div class="col-sm-10">
		  <input type="text" class="form-control" name="NI" value="" required>
		</div>
	  </div>
	  <fieldset>
	  <div class="form-group">
		<label class="control-label col-sm-2" for="pwd">Password:</label>
		<div class="col-sm-10"> 
		  <input type="text" class="form-control" name="pass"  placeholder="Masukan Password User" value=""  required>
		</div>
	  </div>
	  <div class="form-group">
		<label class="control-label col-sm-2" for="lev">Level User:</label>
		<div class="col-sm-10">
		<select name="level" id="level"  required>
				<option selected="selected">Please select ...</option>
				<option value="mahasiswa">Mahasiswa</option>
				<option value="dosen">Dosen</option>
		  </select>
		</div>
	  </div>
	  </fieldset>
	  
	  <div class="form-group">
		<label class="control-label col-sm-2" for="name">Nama Lengkap:</label>
		<div class="col-sm-10">
		  <input type="text" class="form-control" name="nama" placeholder="Masukan Nama User" value="" required>
		</div>
	  </div>
	  <div class="form-group">
		<label class="control-label col-sm-2" for="email">Email:</label>
		<div class="col-sm-10">
		  <input type="text" class="form-control" name="email" placeholder="Masukan Email User" value=""  required>
		</div>
	  </div>
	  <div class="form-group">
		<label class="control-label col-sm-2" for="tel">Nomor Telpon:</label>
		<div class="col-sm-10">
		  <input type="text" class="form-control" name="tlp" placeholder="Masukan Nomor Telpon User" value=""  required>
		</div>
	  </div>
	  <div class="form-group">
    <label class="control-label col-sm-2" for="jk">Jenis Kelamin:</label>
    <div class="col-sm-10">
    	<label class="radio-inline"><input type="radio" name="jk" id="jk" value="L">Laki-laki</label>
		<label class="radio-inline"><input type="radio" name="jk" id="jk" value="P">Perempuan</label>
    </div>
  </div>
	  
	  <div class="form-group"> 
		<div class="col-sm-offset-2 col-sm-10">
		  <button type="submit" class="btn btn-default">Submit</button>
		</div>
	  </div>
	</form>
</div>