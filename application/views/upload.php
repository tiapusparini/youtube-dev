<hr>
<br>
<center><h2>Upload Your Videos!</h2>
    <p style="color: red;"><?php echo $this->session->flashdata('hasil');?></p>
</center>
<br>
<div class="container p-10 m-auto">
	<div class="row justify-content-center">
      <div class="col-md-3"></div>
      <div class="col-md-6">
		<?php echo form_open_multipart('Upload/add_video');?>
		<div class="form-group">
			<label class="col-sm-2 control-label">Nama</label>
			<div class="col-sm-10">
		  		<input type="text" class="form-control" name="nama" placeholder="Nama" required="">
			</div>
			<br>
		</div>
	  	<br>
	      <div class="form-group">
	        <label class="col-sm-2 control-label">Deskripsi</label>
	        <div class="col-sm-10">
	        	<textarea class="form-control" name="deskripsi" rows="3" cols="50"></textarea>
	        </div>
	      </div>
	      <br><br><br><br><br>
	      <div class="form-group">
		  	<label class="col-sm-2 control-label">Kategori</label>
		  	<div class="col-sm-10">
			  <select name="kategori" class="form-control">
                <option value="Musik">Musik
                <option value="Berita">Berita 
                <option value="Film">Film            

              </select>
			</div>
		  </div>
          <br><br>
		  <div class="form-group">
			<label class="col-sm-2 control-label">File Input</label>
			<div class="col-sm-10">
				<input type="file" class="form-control-file" name="video"/>	  
			</div>
		  </div>
		  <br>
		  <br>
		  <div class="form-group">
			<center><button type="submit" class="btn btn-primary">Upload</button></center>
		  </div>
		</form>
	</div>
</div>
</div>