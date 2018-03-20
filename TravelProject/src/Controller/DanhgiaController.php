<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\ORM\Table;
use Cake\ORM\Query;

/**
* 
*/
class DanhgiaController extends AppController
{
	
	public function initialize()
        {
        	$this->viewBuilder()->layout('adminLayout');
            // parent::initialize();
           $this->loadModel('Danhgia');
           
           // unlink("img/diemdl/30");die;
           
        }
    public function list(){
        $data = $this->Danhgia->listDanhgia(null);
        $danhgiaModel = $this->loadModel('Danhgia');
        $quocgia = $quocgiaModel->listQuocGia(null);
        $this->set("quocgia",$quocgia);
        // $quocgia = 
        $this->set("data",$data);
    }
}
?>