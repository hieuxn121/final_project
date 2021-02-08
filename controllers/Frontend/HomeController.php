<?php 
	require_once('controllers/BaseController.php'); 
	require_once('models/Post.php');
	require_once('models/Category.php');
	require_once('models/User.php');
	class HomeController extends BaseController
	{
		public function index(){
			$post = new Post();
			$posts = $post->getList();
			$category = new Category();
			$categories = $category->getList();
			$user = new User();
			$users = $user->getList();
			$this->view('frontend/home/index.php',['posts' => $posts, 'users' => $users, 'categories' => $categories]);
		}
	}
?>