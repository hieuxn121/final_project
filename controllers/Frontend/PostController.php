<?php 
require_once('controllers/BaseController.php');
require_once('models/Post.php');
require_once('models/Category.php');
require_once('models/User.php');
class PostController extends BaseController
{
	public function detail(){
		$id = $_GET['id'];
		$post = new Post();
		$posts = $post->find($id);
		$category = new Category();
		$categories = $category->getList();
		$user = new User();
		$users = $user->getList();
		$this->view('frontend/posts/detail.php',['posts' => $posts, 'users' => $users, 'categories' => $categories]);
	}
}
?>