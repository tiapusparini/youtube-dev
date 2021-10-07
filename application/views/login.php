<hr>
<br>
    <div class="container p-3 m-auto">
        <legend><h2 class="text-center">Sign In</h2></legend>
        <center><p style="color: red;"><?php echo $this->session->flashdata('hasil');?></p></center>
        <br>
        <div class="row justify-content-center">
          <div class="col-md-4"></div>
          <div class="col-md-4">
            <form action="<?php echo(base_url("User/prosesLogin")); ?>" method="POST">
                <div class="form-group">
                <label class="col-sm-2 control-label">Email</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="email" placeholder="Email" required="">
                </div>
              </div>
              <br><br><br>
              <div class="form-group">
                <label class="col-sm-2 control-label">Password</label>
                <div class="col-sm-10">
                  <input type="password" class="form-control" name="password" placeholder="Password" required="">
                </div>
              </div>
              <br><br>
              <div class="form-group">
               		<center><button type="submit" class="btn btn-primary">Login</button><br>
                		<h6 class="m-5">Belum punya akun? Klik<a href="<?php echo(base_url("Home/registrasi")); ?>"> di sini</a></h6>
                	</center>
              </div>
            </form>
          </div>    
        </div>
    </div>
    	