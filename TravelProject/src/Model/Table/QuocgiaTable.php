<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\ORM\TableRegistry;

/**
 * Quocgia Model
 *
 * @method \App\Model\Entity\Quocgium get($primaryKey, $options = [])
 * @method \App\Model\Entity\Quocgium newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Quocgium[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Quocgium|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Quocgium patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Quocgium[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Quocgium findOrCreate($search, callable $callback = null, $options = [])
 */
class QuocgiaTable extends Table
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

        $this->setTable('quocgia');
        $this->setDisplayField('MaQuocGia');
        $this->setPrimaryKey('MaQuocGia');
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
            ->allowEmpty('MaQuocGia', 'create');

        $validator
            ->scalar('TenQuocGia')
            ->maxLength('TenQuocGia', 30)
            ->requirePresence('TenQuocGia', 'create')
            ->notEmpty('TenQuocGia');

        $validator
            ->dateTime('NgayTao')
            ->requirePresence('NgayTao', 'create')
            ->notEmpty('NgayTao');

        $validator
            ->dateTime('NgaySua')
            ->requirePresence('NgaySua', 'create')
            ->notEmpty('NgaySua');

        return $validator;
    }
    public function listQuocGia($TenQuocGia){
        $result = $this->find('all')
            ->select(['MaQuocGia','TenQuocGia'])
            ->where(['TenQuocGia like' => '%'.$TenQuocGia.'%'])
            ->toArray();
            return $result;

    }
    public function addQuocGia($data){
        $quocgia = $this->newEntity();
        $quocgia->TenQuocGia = isset($data['TenQuocGia']) ? $data['TenQuocGia'] : null;
        
        $this->save($quocgia);
    }

    public function editQuocGia($data,$MaQuocGia_now){
        $quocgia = [];
        $quocgia['TenQuocGia'] = isset($data['TenQuocGia']) ? $data['TenQuocGia'] : null;
        $query = $this->query();
        $query->update()
            ->set(['TenQuocGia' => $quocgia['TenQuocGia']])
            ->where(['MaQuocGia' => $MaQuocGia_now ])
            ->execute();
    }

    public function deleteQuocGia($MaQuocGia_now){
        
        // $quocgia = $this->find('all')->where(['MaQuocGia' => $MaQuocGia_now])->toArray();
        // print_r($quocgia);die;
        // for($i = 0; $i < count($MaQuocGia_now);$i++){
            // $quocgia = $this->find('all')->where(['MaQuocGia' => 34567895])->toArray();
        $diemdulich = TableRegistry::get('Diemdulich');
        $resultddl = $diemdulich->find('all')->select(['MaDiemDL','MaQuocGia'])->where(['MaQuocGia' => $MaQuocGia_now])->toArray();
        foreach ($resultddl as $key => $value) {
            $query = $diemdulich->query();
            $query->update()
            ->set(['MaQuocGia' => null])
             ->where(['MaDiemDL' => $value['MaDiemDL']])
            ->execute();
        }
        $this->deleteAll(['MaQuocGia IN' =>  $MaQuocGia_now]);
            // print_r($quocgia);die;
            
        // }
        // print_r($quocgia);die;
        // foreach ($MaQuocGia_now as $key => $value) {
        //     $quocgia = $this->find('all')->where(['MaQuocGia' => $value[$i++]])->toArray();
        //     print_r($quocgia);die;
            
        // }
        // // $this->delete($quocgia);
    }
}
