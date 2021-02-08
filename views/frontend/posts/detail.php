<?php require_once('views/frontend/includes/header.php') ?>
	<a href="#" class="fh5co-post-prev"><span><i class="icon-chevron-left"></i> Prev</span></a>
	<a href="#" class="fh5co-post-next"><span>Next <i class="icon-chevron-right"></i></span></a>
	<!-- END #fh5co-header -->
	<div class="container-fluid">
		<div class="row fh5co-post-entry single-entry">
			<article class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-12 col-xs-offset-0">
				<figure class="animate-box">
					<img src="assets2/images/single_1.jpg" alt="Image" class="img-responsive">
				</figure>
				<span class="fh5co-meta animate-box"><a href="single.html"><?php $code = $posts['category_id'];echo $categories[$code-1]['name']; ?></a></span>
				<h2 class="fh5co-article-title animate-box"><?php echo $posts['title']; ?></h2>
				<span class="fh5co-meta fh5co-date animate-box"><?php $code = $posts['user_id'];echo $users[$code-1]['name'];?></span>
				<span class="fh5co-meta fh5co-date animate-box"><?php echo $posts['created_at']; ?></span>
				
				<div class="col-lg-12 col-lg-offset-0 col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-left content-article">
					<div class="row">
						<div class="col-lg-12 cp-r animate-box">
							<pre style="background-color: white"> <?php echo $posts['content']; ?> </pre>
						</div>	
					</div>
				</div>
			</article>
		</div>
	</div>
<?php require_once('views/frontend/includes/footer.php') ?>