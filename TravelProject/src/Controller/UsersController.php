<?php
	namespace App\Controller;
	use App\Controller\AppController;
	class UsersController extends AppController{
		function index(){
			echo "Chào bạn";
			// $this->viewBuilder()->layout('adminLayout');
		}
	}
?>