<?php print_r($res) ?>
<br><br><br>
<div class="container">
	<center><h1><?php echo $this->session->userdata('nama'); ?>'s Profile</h1><br>
	<img src="<?php echo(base_url("asset/images/profile.png")) ?>" height="200" width="200">
	</center>
	<div class="row"><br><br>
	<?php foreach ($res as $value) {?>
		<div class="col-md-3"></div>
		<div class="col-md-6"  style="background: #EAEEF1  ;">
			<h4>Nama Lengkap : <?php echo $value->nama; ?></h4>
			<h4>Email&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp; : <?php echo $value->email; ?></h4>
			<h4>Tanggal Lahir&nbsp;&nbsp;&nbsp; : <?php echo $value->birth; ?></h4>
			<h4>Jenis Kelamin &nbsp;&nbsp; : <?php echo $value->jeniskelamin; ?></h4>
			<h4>Alamat&emsp;&nbsp;&nbsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $value->alamat; ?></h4>
		</div>

	<?php } ?>
	</div>
</div>