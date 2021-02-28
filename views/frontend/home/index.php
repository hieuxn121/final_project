<?php require_once('views/frontend/includes/header.php') ?>
	<!-- END #fh5co-header -->
	<div class="container-fluid">
		<div class="row fh5co-post-entry">
			<h1 style="text-align: center;margin-bottom: 50px;"><a href="">Bài viết mới nhất</a></h1>	
			<?php foreach ($posts as $key => $value) { if($key < 8){ if($key)?>
				<?php require('views/frontend/includes/article.php') ?>
			<?php }} ?>
		</div>
		<div class="row fh5co-post-entry">
			<h1 style="text-align: center;margin-bottom: 50px;"><a href="">Top nhiều lượt xem</a></h1>
			<?php foreach ($posts2 as $key => $value){?>
				<?php require('views/frontend/includes/article.php') ?>
			<?php } ?>
		</div>
	</div>

<?php require_once('views/frontend/includes/footer.php') ?>