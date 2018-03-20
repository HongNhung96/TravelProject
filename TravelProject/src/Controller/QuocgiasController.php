<?php 
    namespace App\Controller;
    use App\Controller\AppController;
    use Cake\View\Helper;
    use Cake\ORM\TableRegistry;
    use Cake\Controller\Controller;
    use Cake\ORM\Table;
    use Cake\ORM\Query;
    use Cake\ORM\Entity;
    use Cake\Validation\Validator;
  use Cake\Event\Event;
  use Cake\Auth\FormAuthenticate;
  use Cake\Auth\DefaultPasswordHasher;
  use Cake\Utility\Security;
  use Cake\Mailer\Email;
  use Cake\I18n\Time;
  use Cake\View\Helper\TextHelper;
  use Cake\Network\Exception\NotFoundException; 
    /**
    *  
    */
    class QuocGiasController extends AppController
    {
        
         public function initialize()
        {
            parent::initialize();
            $this->viewBuilder()->layout('adminLayout');
            // $quocgia = TableRegistry::get('UserTbl');
            $this->loadComponent('Paginator');
           $this->loadModel('Quocgia');
           
        }
        public function list(){
            if (!($this->request->is('post'))) {
                $data = $this->Quocgia->listQuocGia(null);
            } else {
                $dataSearch = $this->request->data;
                $dataS = isset($dataSearch['dataSearch']) ? $dataSearch['dataSearch'] : null;
                $data = $this->Quocgia->listQuocGia($dataS);

            }
            $this->set('dataS',$dataS);
            $this->set('data', $data);
        
        }

        public function add(){
            if ($this->request->is('post')) {
                $data = $this->request->data;
                $this->Quocgia->addQuocGia($data);
                return $this->redirect(URL_LIST_QUOCGIA);

            }

        }

        public function edit($MaQuocGia){
            $result = $this->Quocgia->find('all')->where(['MaQuocGia' => $MaQuocGia])->toArray();
            $this->set("result",$result);
            if($this->request->is('post')){
                $data = $this->request->data;
                $this->Quocgia->editQuocGia($data,$MaQuocGia);
                return $this->redirect(URL_LIST_QUOCGIA);
            }
        }

        public function delete($MaQuocGia){
            if ($this->request->is('post')) {
                $data = $this->request->data;
                 $data = array_map(create_function('$value', 'return (int)$value;'),$data['delid']);
                $this->Quocgia->deleteQuocGia($data);
                
            } else {
                $this->Quocgia->deleteQuocGia($MaQuocGia);
            }
            return $this->redirect(URL_LIST_QUOCGIA);
        }
    }
?>