<br>
<div class="container">
	<div class="col-sm-9 col-md-12 main">
	<div class="show-top-grids">
		<div class="col-sm-8 single-left">
			<div class="song">
				<?php if($result != NULL){ ?>
				<div class="song-info">
					<h3><?php echo $result->nama_video; ?></h3>	
				</div>
				<div class="video-grid">
					<video width="722" height="450" controls autoplay>
			          <source src="<?php echo base_url($result->src) ?>" type="video/mp4">
			        </video>
				</div>
			</div>
			<div class="clearfix"> </div>
			<div class="published">
				<script src="<?php echo base_url("jquery.min.js") ?>"></script>
				<script>
					$(document).ready(function () {
						size_li = $("#myList li").size();
						x=1;
						$('#myList li:lt('+x+')').show();
						$('#loadMore').click(function () {
							x= (x+1 <= size_li) ? x+1 : size_li;
							$('#myList li:lt('+x+')').show();
						});
					
						$('#showLess').click(function () {
							x=(x-1<0) ? 1 : x-1;
							$('#myList li').not(':lt('+x+')').hide();
						});
					});
				</script>
				<div class="load_more">
					<div class="row">
						<div class="col-md-10">
							<h4>Published by <?php echo $result->nama; ?></h4>
							<h4>Published on <?php echo $result->tanggal; ?></h4>
							<p><?php echo $result->deskripsi; ?></p>
						</div>
						<div class="col-md-1">
							<a class="btn btn-default" style="background: #800000;color: #ffffff;" href="<?php echo site_url('User/like/'.$result->id_video) ?>"><?php echo $result->likes ?> Like </a>
						</div>
					</div>
				</div>
			</div>
			<?php } ?>
			<div class="all-comments">
				<h3>KOMENTAR</h3>
				<div class="media-grids">
					<?php foreach ($kom as $value) {
					if($value->tanggal_post != '0000-00-00'){ ?>
					<div class="media">
						<h5><?php echo $value->nama; ?></h5>
						<div class="media-left">
							<a href="#"></a>
						</div>
						<div class="media-body">
							<p><?php echo $value->message; ?></p>
							<span>Publish : <?php echo $value->tanggal_post ?></span>
						</div>
					</div>
					<?php }} ?>
				</div><br>
				<div class="all-comments-info">
					<div class="box">
						<h4>Masukkan Komentar Anda</h4>
						<form method="post" action="<?php echo base_url('User/komen') ?>">
							<input hidden type="text" name="id_video" value="<?php echo $_SESSION['id_video']; ?>">
							<textarea placeholder="Message" required=" " name="message"></textarea>
							<input type="submit" value="SEND" style="background: #800000;color: #ffffff;">
							<div class="clearfix"></div>
						</form>
						
					</div>
				</div><br>
			</div>
		</div>
	
		<div class="col-md-4 single-right">
			<h3>Up Next</h3>
			<div class="single-grid-right">
				<?php	foreach ($dat as $value) { ?>
				<div class="single-right-grids">
					<div class="col-md-4 single-right-grid-left">
						<a href="single.html"><img src="images/r2.jpg" alt="" /></a>
					</div>
					<div class="col-md-8 single-right-grid-right">
						<a href="<?php echo site_url('Home/detail/'.$value->id_video) ?>" class="title"><?php echo $value->nama_video; ?></a>
						<p class="author"><a href="#" class="author"><?php echo $value->user_nama?></a></p>
						<p class="views"><?php echo $value->likes; ?> likes</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<?php }?>
			</div>
		</div>
		<div class="clearfix"> </div>
	</div>
</div>
</div>