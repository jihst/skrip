<?php 
include "../../skrip/koneksi.php";


?>
<div class="row">
	<form class="form-horizontal">
	  <div class="form-group">
		<label class="control-label col-sm-2" for="nim">NIM:</label>
		<div class="col-sm-10">
		  <input type="email" class="form-control" id="nim" placeholder="Enter email">
		</div>
	  </div>
	  <div class="form-group">
		<label class="control-label col-sm-2" for="pwd">Nama:</label>
		<div class="col-sm-10"> 
		  <input type="password" class="form-control" id="pwd" placeholder="Enter password">
		</div>
	  </div>
	  <div class="form-group"> 
		<div class="col-sm-offset-2 col-sm-10">
		  <div class="checkbox">
			<label><input type="checkbox"> Remember me</label>
		  </div>
		</div>
	  </div>
	  <div class="form-group"> 
		<div class="col-sm-offset-2 col-sm-10">
		  <button type="submit" class="btn btn-default">Submit</button>
		</div>
	  </div>
	</form>
</div>