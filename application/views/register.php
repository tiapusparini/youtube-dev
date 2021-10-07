       <hr>
       <br>
	<legend><h2 class="text-center">Pendaftaran Pengguna Baru</h2></legend>
	<br>
	<div class="container p-10 m-auto">
		<div class="row justify-content-center">
          <div class="col-md-3"></div>
          <div class="col-md-6">
		<form method="post" action="<?php echo site_url('User/prosesregist') ?>">
			<div class="form-group">
				<label class="col-sm-2 control-label">Nama</label>
				<div class="col-sm-10">
			  		<input type="text" class="form-control" name="nama" placeholder="Nama" required="">
				</div>
				<br>
			</div>
		  	<br>
          	<div class="form-group">
            	<label class="col-sm-2 control-label">Tanggal Lahir</label>
		  		<div class="col-sm-10">
                <input class="form-control" type="date" name="birth" required/>
            </div>
          </div>
          <br>
          <br>
          <div class="form-group">
		  	<label class="col-sm-2 control-label">Jenis Kelamin</label>
		  	<div class="col-sm-10">
			  <select name="jeniskelamin" class="form-control">
                <option value="Laki-laki">Laki-laki
                <option value="Perempuan">Perempuan            
              </select>
			</div>
		  </div>
          <br><br>
          <div class="form-group">
            <label class="col-sm-2 control-label">Alamat Lengkap</label>
            <div class="col-sm-10">
            	<textarea class="form-control" name="alamat" rows="3" cols="50"></textarea>
            </div>
          </div>
          <br><br><br><br><br>
		  <div class="form-group">
			<label class="col-sm-2 control-label">Email</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" name="email" placeholder="Email" required="">
			</div>
		  </div>
		  <br>
		  <br>
		  <div class="form-group">
			<label class="col-sm-2 control-label">Password</label>
			<div class="col-sm-10">
			  <input type="password" class="form-control" name="password" placeholder="Password" required="">
			</div>
		  </div>
		  <br>
		  <br>
		  <div class="form-group">
			<center><button type="submit" class="btn btn-primary">Register</button></center>
		  </div>
		</form>
	</div>
</div>
	</div>
