<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\ORM\TableRegistry;

/**
 * Tour Model
 *
 * @method \App\Model\Entity\Tour get($primaryKey, $options = [])
 * @method \App\Model\Entity\Tour newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Tour[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Tour|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Tour patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Tour[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Tour findOrCreate($search, callable $callback = null, $options = [])
 */
class TourTable extends Table
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

        $this->setTable('tour');
        $this->setDisplayField('MaTour');
        $this->setPrimaryKey('MaTour');
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
            ->allowEmpty('MaTour', 'create');

        $validator
            ->scalar('TenTour')
            ->maxLength('TenTour', 100)
            ->allowEmpty('TenTour');

        $validator
            ->allowEmpty('MaLoaiTour');

       
        $validator
            ->integer('GiaTour')
            ->allowEmpty('GiaTour');

        $validator
            ->requirePresence('NoiKhoiHanh', 'create')
            ->notEmpty('NoiKhoiHanh');

        $validator
            ->allowEmpty('MaDiemDL');

        $validator
            ->scalar('GioiThieu')
            ->maxLength('GioiThieu', 2000)
            ->allowEmpty('GioiThieu');

        $validator
            ->scalar('NoiDung')
            ->maxLength('NoiDung', 5000)
            ->requirePresence('NoiDung', 'create')
            ->notEmpty('NoiDung');

        $validator
            ->scalar('DieuKhoan')
            ->maxLength('DieuKhoan', 5000)
            ->requirePresence('DieuKhoan', 'create')
            ->notEmpty('DieuKhoan');

        $validator
            ->integer('SoNgay')
            ->requirePresence('SoNgay', 'create')
            ->notEmpty('SoNgay');

        $validator
            ->integer('SoDem')
            ->requirePresence('SoDem', 'create')
            ->notEmpty('SoDem');

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
    public function listTour($TenTour){
        $tourTable = TableRegistry::get('Tour');
        $loaitourTable = TableRegistry::get('Loaitour');
        $diemdulichTable = TableRegistry::get('Diemdulich');
    
        $loaitour = $loaitourTable->find('list', ['keyField' => 'MaLoaiTour', 'valueField' => 'name'])->toArray();
        $result = $this->find('all')
            ->select(['MaTour','TenTour','GiaTour','Loaitour.LoaiTour','GioiThieu','NoiDung','DieuKhoan','SoNgay','SoDem','Diemdulich.TenDiemDL'])
            // ->where(['TenDiemDL like' => '%'.$TenDiemDL.'%'])
            ->join(
                [
                    'table' => 'loaitour',
                    'alias' => 'Loaitour',
                    'type' => 'LEFT',
                    'conditions' => 'Loaitour.MaLoaiTour = Tour.MaLoaiTour' 
                ],
                [
                    'table' => 'diem_du_lich',
                    'alias' => 'Diemdulich',
                    'type' => 'LEFT',
                    'conditions' => 'Diemdulich.MaDiemDL= Tour.NoiKhoiHanh' 
                ],
                [
                    'table' => 'diemdulich',
                    'alias' => 'Diemdulich',
                    'type' => 'LEFT',
                    'conditions' => 'Diemdulich.MaDiemDL= Tour.MaDiemDL' 
                ]
            )
            ->toArray();
            print_r($result);die;
            // print_r($result);die;
            return $result;
            


    }
}
