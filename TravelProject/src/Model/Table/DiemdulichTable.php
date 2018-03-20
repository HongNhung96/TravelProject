<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\ORM\TableRegistry;
use Cake\ORM\Entity;

/**
 * Diemdulich Model
 *
 * @method \App\Model\Entity\Diemdulich get($primaryKey, $options = [])
 * @method \App\Model\Entity\Diemdulich newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Diemdulich[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Diemdulich|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Diemdulich patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Diemdulich[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Diemdulich findOrCreate($search, callable $callback = null, $options = [])
 */
class DiemdulichTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('diemdulich');
        $this->setDisplayField('MaDiemDL');
        $this->setPrimaryKey('MaDiemDL');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->allowEmpty('MaDiemDL', 'create');

        $validator
            ->scalar('TenDiemDL')
            ->maxLength('TenDiemDL', 50)
            ->requirePresence('TenDiemDL', 'create')
            ->notEmpty('TenDiemDL');

        $validator
            ->scalar('Anh')
            ->maxLength('Anh', 191)
            ->requirePresence('Anh', 'create')
            ->notEmpty('Anh');

        $validator
            ->scalar('ThongTin')
            ->maxLength('ThongTin', 2000)
            ->requirePresence('ThongTin', 'create')
            ->notEmpty('ThongTin');

        $validator
            ->dateTime('NgayTao')
            ->requirePresence('NgayTao', 'create')
            ->notEmpty('NgayTao');

        $validator
            ->dateTime('NgaySua')
            ->requirePresence('NgaySua', 'create')
            ->notEmpty('NgaySua');

        $validator
            ->requirePresence('MaQuocGia', 'create')
            ->notEmpty('MaQuocGia');

        return $validator;
    }
    public function listDiemDuLich($TenDiemDL){
        $diemdulichTable = TableRegistry::get('Diemdulich');
        $quocgiaTable = TableRegistry::get('Quocgia');
        $quocgia = $quocgiaTable->find('list', ['keyField' => 'MaQuocGia', 'valueField' => 'name'])->toArray();
        $result = $this->find('all')
            ->select(['MaDiemDL','TenDiemDL','Anh','ThongTin','Quocgia.TenQuocGia'])
            // ->where(['TenDiemDL like' => '%'.$TenDiemDL.'%'])
            ->join(
                [
                    'table' => 'quocgia',
                    'alias' => 'Quocgia',
                    'type' => 'LEFT',
                    'conditions' => 'Diemdulich.MaQuocGia= Quocgia.MaQuocGia' 
                ]
            )
            ->toArray();
            // print_r($result);die;
            return $result;

    }
    public function addDiemDL($data){
        $diemdulich = $this->newEntity();
        $diemdulich->TenDiemDL = isset($data['TenDiemDL']) ? $data['TenDiemDL'] : null;
        $diemdulich->ThongTin = isset($data['ThongTin']) ? $data['ThongTin'] : null;
        $diemdulich->MaQuocGia = isset($data['selquocgia']) ? $data['selquocgia'] : null;
        // $result = $this->find('all')->select(['MaDiemDL'])->limit(1)->order(['NgayTao' => 'DESC'])->toArray();
        $file = $data['myFile']['tmp_name'];
        // $data['myFile']['name'] = $sresult['0']['MaDiemDL']+ 1;
        $path = WWW_ROOT."/img/diemdl/".$data['myFile']['name'];
        if(move_uploaded_file($file, $path)){
            $diemdulich->Anh = isset($data['myFile']['name']) ? "/img/diemdl/".$data['myFile']['name'] : null;
            echo "Tải tập tin thành công";
        }else{
            echo "Tải tập tin thất bại";
        }
        $this->save($diemdulich);
    }
    public function editDiemDL($data,$MaDiemDL){

        $diemdulich = [];
        $diemdulich['MaQuocGia'] = isset($data['selquocgia']) ? $data['selquocgia'] : null;
        $diemdulich['TenDiemDL'] = isset($data['TenDiemDL']) ? $data['TenDiemDL'] : null;

        $diemdulich['ThongTin'] = isset($data['ThongTin']) ? $data['ThongTin'] : null;
        // $result = $this->find('all')->select(['MaDiemDL'])->limit(1)->order(['NgayTao' => 'DESC'])->toArray();
        $linkImage = $this->find('all')->select(['Anh'])->where(['MaDiemDL' => $MaDiemDL])->toArray();
        if ($data['myFile']['tmp_name'] != null) {
            $file = $data['myFile']['tmp_name'];
        // $data['myFile']['name'] = $sresult['0']['MaDiemDL']+ 1;
        $path = WWW_ROOT."/img/diemdl/".$data['myFile']['name'];
        if(move_uploaded_file($file, $path)){
            $diemdulich['Anh'] = "/img/diemdl/".$data['myFile']['name'];
            echo "Tải tập tin thành công";
        }else{
            echo "Tải tập tin thất bại";
        }
        
        // print_r($linkImage);die;
        $linkImage = $linkImage['0']['Anh'];
        if ($linkImage!=null) {
            $a = substr($linkImage,1);
            unlink($a);
        }
        } else {
            $diemdulich['Anh'] = $linkImage['0']['Anh'];
        }
        
         
        $query = $this->query();
        $query->update()
            ->set(['MaQuocGia' => $diemdulich['MaQuocGia']])
            ->set(['TenDiemDL' => $diemdulich['TenDiemDL']])
            ->set(['Anh' => $diemdulich['Anh']])
            ->set(['ThongTin' => $diemdulich['ThongTin']])
            ->where(['MaDiemDL' => $MaDiemDL ])
            ->execute();
    }
    public function deleteDiemDL($MaDiemDL){
        $this->deleteAll(['MaDiemDL IN' => $MaDiemDL]);

    }
}
