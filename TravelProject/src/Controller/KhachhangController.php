<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\ORM\Table;
use Cake\ORM\Query;
/**
 * Khachhang Controller
 *
 *
 * @method \App\Model\Entity\Khachhang[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class KhachhangController extends AppController
{

    
    public function initialize()
        {
            $this->viewBuilder()->layout('adminLayout');
            // parent::initialize();
           $this->loadModel('Khachhang');
           
           // unlink("img/diemdl/30");die;
           
        }
   
   
    public function list()
    {
        $data = $this->Khachhang->listKhachhang(null);
        $quocgiaModel = $this->loadModel('Quocgia');
        $quocgia = $quocgiaModel->listQuocGia(null);
        $this->set("quocgia",$quocgia);
        $this->set("data",$data);
    }

    public function add(){
         if ($this->request->is('post')) {
            $data = $this->request->data;
            $this->Khachhang->addKhachhang($data);            
            return $this->redirect("Khachhang/list");
        }
    }

    public function edit($MaKH){
        $khach = $this->Khachhang->find('all')->where(['MaKH' => $MaKH])->toArray();
            $this->set("khach",$khach);
            // print_r($khach);
            // echo "lần 1";
            if($this->request->is('post')){
                // print_r($MaKH);die;
                // print_r($khach);echo "lần 2";die;
                $data = $this->request->data;
                // print_r($Datasource);die;
                $this->Khachhang->editKhachhang($data,$MaKH);
                return $this->redirect("Khachhang/list");
            }
    }
    public function delete($MaKH){
        $this->Khachhang->deleteKhachhang($MaKH);
        $this->redirect("Khachhang/list");
    }
   
}
