<?php require_once('views/backend/includes/header.php') ?>
<div class="col-md-9">
<div class="col-md-12 page-body">
<div class="row">

    
    <div class="sub-title">
      <h2>Chi tiết bài viết</h2>
      <a href="contact.html"><i class="icon-envelope"></i></a>
      <p><a href="index.php?type=backend&mod=post&act=index">BACK</a></p>
     </div>
    
    <div class="col-md-12 content-page">
      
        
        <!-- Blog Post Start -->
        <div class="col-md-12 blog-post">
             <table class="table">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Thumbnail</th>
                    <th scope="col">Slug</th>
                    <th scope="col">Tag</th>
                    <th scope="col">View Count</th>
                    <th scope="col">Category</th>
                    <th scope="col">User</th>
                    <th scope="col">Create At</th>
                  </tr>
                </thead>
                <tbody>
                      <tr>
                          <td style="width: 10px"><?php echo $post['id'] ?></td>
                          <td class="post"><?php echo "<img src='images/post/".$post['thumbnail']."' >"; ?></td?>
                          <td><?php echo $post['slug']; ?></td>
                          <td><?php echo $post['tag']; ?></td>
                          <td><?php echo $post['view_count']; ?></td>
                          <td><?php echo $category_name['name']; ?></td>
                          <td><?php echo $user_name['name']; ?></td>
                          <td><?php echo $post['created_at']; ?></td>
                      </tr>
                </tbody>
              </table>
              <table class="table" style="margin: 50px 0px">
                <thead>
                  <tr>
                    <th scope="col">Tên</th>
                    <th scope="col">Email</th>
                    <th scope="col">Content</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                  <?php if(isset($comments)){ foreach ($comments as $key => $value) { ?>
                      <tr>
                          <td><?php echo $value['user_name']; ?></td>
                          <td><?php echo $value['email']; ?></td>
                          <td><p style="max-height:200px; overflow-y: auto;"><?php echo $value['content']; ?></p></td>
                          <td>
                              <a href="index.php?type=backend&mod=comment&act=delte&cm=<?php echo $value['id']?>&id=<?php echo $_GET['id']?>&category_id=<?php echo $_GET['category_id']?>&user_id=<?php echo $_GET['user_id']?>" class="btn btn-danger"><i class="fas fa-trash-alt"></i></</a>
                          </td>
                      </tr>
                  <?php }}?>    
                </tbody>
              </table>
              <div><?php echo $post['content']?></div>
        </div>
        <!-- Blog Post End -->
    
        <div class="col-md-12 text-center">
         <a href="javascript:void(0)" id="load-more-post" class="load-more-button">Load</a>
         <div id="post-end-message"></div>
        </div>
        
     </div>
      
 </div>
<?php require_once('views/backend/includes/footer.php') ?>                        