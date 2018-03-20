<?php
	namespace App\Controller;
	use App\Controller\AppController;
	class AdminController extends AppController{
		function index(){
			$this->viewBuilder()->layout('adminLayout');
		}
	}
?>