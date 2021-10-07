<br>
<nav class="container">	
	<nav class="jumbotron">
		<div class="row">
			<div class="col-md-3">
				<div class="list-group" style="background: #D6DBDF"><br>
					<center>
					<h3>Pilih Tabel Yang Ingin Anda Lihat</h3><br>
					<p style="color: red;"><?php echo $this->session->flashdata('hasil');?></p>
					<form method="post" action="#">
					  <input class="btn btn-primary" type="submit" name="submit1" value="User">
					  </input><br><br>
					  <input class="btn btn-primary" type="submit" name="submit2" value="Video">
					  </input><br><br>
					  <input class="btn btn-primary" type="submit" name="submit3" value="Komentar">
					  </input><br><br>
					  <input class="btn btn-primary" type="submit" name="submit4" value="Like">
					  </input><br><br>
					  <input class="btn btn-primary" type="submit" name="submit5" value="Master iTube">
					  </input><br><br>
					</center>
					</form><br>
				</div>
			</div>
			<div class="col-md-9">
				<?php if(isset($_POST['submit1'])){ ?>
					<h2>User</h2>
					<div style="overflow-x:auto;">
					<table class="table table-hover">
					  <thead>
					       <tr class="table-warning" style="background: maroon; color:white;">
							  <td scope="row">No</td>
						      <td>Id_User</td>
						      <td>Nama</td>
						      <td>Email</td>
						      <td>Password</td>
						      <td>Tanggal Lahir</td>
						      <td>Jenis Kelamin</td>
						      <td>Alamat</td>
						      <td>Hapus</td>
						    </tr>
					  </thead>
					  <tbody>
					  	<?php $i = 0;
						if($user != null){				
							foreach($user as $data){ ?>
					  	<tr class="table-light" style="background: white;">
					      <th scope="row"><?php echo $i+1; ?></th>
					      <td><?php echo $data->id_user ?></td>
					      <td><?php echo $data->nama ?></td>
					      <td><?php echo $data->email ?></td>
					      <td><?php echo $data->password ?></td>
					      <td><?php echo $data->birth ?></td>
					      <td><?php echo $data->jeniskelamin ?></td>
					      <td><?php echo $data->alamat ?></td>
					      <td>
					      	<?php echo anchor('Admin/delete/'.$data->id_user, 'Hapus', 'class="btn btn-danger"'); ?>
					      </td>
					    </tr>
					    <?php $i++; } } ?>
					  </tbody>
					</table> 
					</div>
				<?php }else if(isset($_POST['submit2'])){ ?>
					<h2>Video</h2>
					<div style="overflow-x:auto;">
					<table class="table table-hover">
					  <thead>
					       <tr class="table-warning" style="background: maroon; color:white;">
						      <td scope="row">No</td>
						      <td>Id_Video</td>
						      <td>Nama User</td>
						      <td>Nama Video</td>
						      <td>Deskripsi</td>
						      <td>Kategori</td>
						      <td>Tanggal Post</td>
						      <td>Jumlah Like</td>	
						      <td>Direktori</td>				
						      <td>Hapus</td>
						    </tr>
					  </thead>
					  <tbody>
					  	<?php $i = 0;
						if($vid != null){				
							foreach($vid as $data){ ?>
					  	<tr class="table-light" style="background: white;">
					      <th scope="row"><?php echo $i+1; ?></th>
					      <td><?php echo $data->id_video ?></td>
					      <td><?php echo $data->nama ?></td>
					      <td><?php echo $data->nama_video ?></td>
					      <td><?php echo $data->deskripsi ?></td>
					      <td><?php echo $data->kategori ?></td>
					      <td><?php echo $data->tanggal ?></td>
				     	  <td><?php echo $data->likes ?></td>
				     	  <td>
				     	  	<a href="<?php echo base_url($data->src) ?>">click here</a>
				     	  </td>
					      <td>
					      	<?php echo anchor('Admin/deleteVideo/'.$data->id_video, 'Hapus', 'class="btn btn-danger"'); ?>
					      </td>
					    </tr>
					    <?php $i++;} } ?>
					  </tbody>
					</table> 
					</div>
				<?php }else if(isset($_POST['submit3'])){ ?>
					<h2>Komentar</h2>
					<div style="overflow-x:auto;">
					<table class="table table-hover">
					  <thead>
					       <tr class="table-warning" style="background: maroon; color:white;">
						      <td scope="row">No</td>
						      <td>Id_Komentar</td>
						      <td>Nama User</td>
						      <td>Nama Video</td>
						      <td>Isi Komentar</td>
						      <td>Tanggal Post</td>
						      <td>Hapus</td>
						    </tr>
					  </thead>
					  <tbody>
					  	<?php $i = 0;
						if($kom != null){				
							foreach($kom as $data){ ?>
					  	<tr class="table-light" style="background: white;">
					      <th scope="row"><?php echo $i+1; ?></th>
					      <td><?php echo $data->id_komentar ?></td>
					      <td><?php echo $data->nama; ?></td>
					      <td><?php echo $data->nama_video ?></td>
				      	  <td><?php echo $data->message ?></td>
				      	  <td><?php echo $data->tanggal_post ?></td>
					      <td>
					      	<?php echo anchor('Admin/deleteKomen/'.$data->id_komentar, 'Hapus', 'class="btn btn-danger"'); ?>
					      </td>
					    </tr>
					    <?php $i++; } } ?>
					  </tbody>
					</table> 
					</div>
				<?php }else if(isset($_POST['submit4'])){ ?>
					<h2>Likes</h2>
					<div style="overflow-x:auto;">
					<table class="table table-hover">
					  <thead>
					       <tr class="table-warning" style="background: maroon; color:white;">
						      <td scope="row">No</td>
						      <td>Id_Like</td>
						      <td>Nama User</td>
						      <td>Nama Video</td>
						    </tr>
					  </thead>
					  <tbody>
					  	<?php $i = 0;
					  	if($like != NULL){
					  		foreach($like as $key){ ?>
					  	<tr class="table-light" style="background: white;">
					      <th scope="row"><?php echo $i+1; ?></th>
					      <td><?php echo $key->id_like ?></td>
					      <td><?php echo $key->nama ?></td>
					      <td><?php echo $key->nama_video ?></td>
					    </tr>
					    <?php $i++; } } ?>
					  </tbody>
					</table>
					</div> 
				<?php }else if(isset($_POST['submit5'])){ ?>
					<h2>Master iTube</h2>
					<div style="overflow-x:auto;">
					<table class="table table-hover">
					  <thead>
					       <tr class="table-warning" style="background: maroon; color:white;">
						      <td scope="row">No</td>
						      <td>Id_Master</td>
						      <td>Nama User</td>
						      <td>Nama Video</td>
						      <td>Komentar</td>
						      <td>Jumlah Like</td>
						    </tr>
					  </thead>
					  <tbody>
					  	<?php $i = 0;
					  	if($itube != NULL){
					  		foreach($itube as $key){ ?>
					  	<tr class="table-light" style="background: white;">
					      <th scope="row"><?php echo $i+1; ?></th>
					      <td><?php echo $key->id_youtube ?></td>
					      <td><?php echo $key->nama ?></td>
					      <td><?php echo $key->nama_video ?></td>
					      <td><?php echo $key->message ?></td>
					      <td><?php echo $key->likes ?></td>
					    </tr>
					    <?php $i++; } } ?>
					  </tbody>
					</table> 
					</div> 
				<?php } ?>
			</div>
		</div>
	</nav>
</nav>