<br><br><br>
  <legend><h2 class="text-center">Hasil Pencarian</h2></legend>
  <br>
  <div class="container p-10 m-auto"><br>
    <div class="row">
      <?php foreach ($search as $value) { ?>
        <div class="col-sm-4 my-4">
          <div class="card">
            <video width="350" height="250" controls="">
              <source src="<?php echo base_url($value->src); ?>" type="video/mp4">
            </video>
            <div class="card-body">
              <?php $id = $value->id_video; ?>
              <form method="post" action="<?php echo site_url('Home/detail/'.$id) ?>">
                <input hidden type="text" name="kategori" value="<?php echo $value->kategori; ?>">
                <center><h4><button class="btn btn-link"><?php echo $value->nama_video; ?></button></h4></center>
              </form>
            </div>
          </div>
        </div>
      <?php } ?>
        <br>  
    </div>