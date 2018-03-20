<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\ORM\Table;
use Cake\ORM\Query;

/**
* 
*/
class LoaitourController extends AppController
{
	
	public function initialize()
        {
        	$this->viewBuilder()->layout('adminLayout');
            // parent::initialize();
           $this->loadModel('Loaitour');
           
           // unlink("img/diemdl/30");die;
           
        }
    public function list(){
        $data = $this->Tour->listTour(null);
        $tourModel = $this->loadModel('Tour');
        $tour = $tourModel->listTour(null);
        $this->set("loaitour",$loaitour);
        // $quocgia = 
        $this->set("data",$data);
    }
}
?>