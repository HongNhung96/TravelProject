<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\ORM\Table;
use Cake\ORM\Query;
/**
 * Diemdulich Controller
 *
 *
 * @method \App\Model\Entity\Diemdulich[] paginate($object = null, array $settings = [])
 */
class DiemdulichController extends AppController
{
     public function initialize()
        {
        	$this->viewBuilder()->layout('adminLayout');
            // parent::initialize();
           $this->loadModel('Diemdulich');
           
           // unlink("img/diemdl/30");die;
           
        }
    public function list(){
        $data = $this->Diemdulich->listDiemDuLich(null);
        $quocgiaModel = $this->loadModel('Quocgia');
        $quocgia = $quocgiaModel->listQuocGia(null);
        $this->set("quocgia",$quocgia);
        // $quocgia = 
        $this->set("data",$data);
    }
   
   public function add(){
        if ($this->request->is('post')) {
            $data = $this->request->data;
            $this->Diemdulich->addDiemDL($data);            
            return $this->redirect("Diemdulich/list");
        }
   }
   public function addimg(){

        if($this->request->is('post')){
            $data = $this->request->data;
            $file = $data['myFile']['tmp_name'];
            $path = WWW_ROOT."/img/diemdl/".$data['myFile']['name'];
            if(move_uploaded_file($file, $path)){
                echo "Tải tập tin thành công";
            }else{
                echo "Tải tập tin thất bại";
            }
        }
   }
    
   public function edit($MaDiemDL){
        $result = $this->Diemdulich->find('all')->where(['MaDiemDL' => $MaDiemDL])->toArray();
        // print_r($result);die;
            $this->set("result",$result);
            if($this->request->is('post')){
                $data = $this->request->data;
                $this->Diemdulich->editDiemDL($data,$MaDiemDL);
                return $this->redirect("Diemdulich/list");
            }
   }
   public function delete($MaDiemDL){
        $this->Diemdulich->deleteDiemDL($MaDiemDL);
        $this->redirect("Diemdulich/list");
   }
   
}
?>
