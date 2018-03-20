<?php 
	namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\ORM\Table;
use Cake\ORM\Query;

/**
* 
*/
class KhachditourController extends AppController
{
	
	public function initialize()
        {
        	$this->viewBuilder()->layout('adminLayout');
            // parent::initialize();
           $this->loadModel('Khachditour');
           
           // unlink("img/diemdl/30");die;
           
        }
    public function list(){
        $data = $this->Khachditour->listKhachditour(null);
        // $tourModel = $this->loadModel('Tour');
        // $tour = $tourModel->listTour(null);
        // $this->set("loaitour",$loaitour);
        
        // $quocgia = 
        $this->set("data",$data);
    }

    public function add(){
    	 if ($this->request->is('post')) {
            $data = $this->request->data;
            $this->Khachditour->addKhachditour($data);            
            return $this->redirect("Khachditour/list");
        }
    }

    public function edit($MaKhach){
    	$khachditour = $this->Khachditour->find('all')->where(['MaKhach' => $MaKhach])->toArray();
            $this->set("khachditour",$khachditour);
            if($this->request->is('post')){
                $data = $this->request->data;
                $this->Khachditour->editKhachditour($data,$MaKhach);
                return $this->redirect("Khachditour/list");
            }
    }

    public function delete($MaKhach){
    	 $this->Khachditour->deleteKhachditour($MaKhach);
        $this->redirect("Khachditour/list");
    }
}
 ?>