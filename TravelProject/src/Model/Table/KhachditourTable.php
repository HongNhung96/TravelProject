<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Khachditour Model
 *
 * @method \App\Model\Entity\Khachditour get($primaryKey, $options = [])
 * @method \App\Model\Entity\Khachditour newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Khachditour[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Khachditour|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Khachditour patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Khachditour[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Khachditour findOrCreate($search, callable $callback = null, $options = [])
 */
class KhachditourTable extends Table
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

        $this->setTable('khachditour');
        $this->setDisplayField('MaKhach');
        $this->setPrimaryKey('MaKhach');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        // $validator
        //     ->allowEmpty('MaKhach', 'create');

        // $validator
        //     ->scalar('TenKhach')
        //     ->maxLength('TenKhach', 50)
        //     ->requirePresence('TenKhach', 'create')
        //     ->notEmpty('TenKhach');

        // $validator
        //     ->requirePresence('MaDatTour', 'create')
        //     ->notEmpty('MaDatTour');

        // $validator
        //     ->date('NgaySinhKhach')
        //     ->requirePresence('NgaySinhKhach', 'create')
        //     ->notEmpty('NgaySinhKhach');

        // $validator
        //     ->scalar('DiaChiKhach')
        //     ->maxLength('DiaChiKhach', 100)
        //     ->requirePresence('DiaChiKhach', 'create')
        //     ->notEmpty('DiaChiKhach');

        // // $validator
        // //     ->integer('GioiTinhKhach')
        // //     ->requirePresence('GioiTinhKhach', 'create')
        // //     ->notEmpty('GioiTinhKhach');

        // $validator
        //     ->integer('LoaiKhach')
        //     ->requirePresence('LoaiKhach', 'create')
        //     ->notEmpty('LoaiKhach');

        // $validator
        //     ->integer('PhongDon')
        //     ->requirePresence('PhongDon', 'create')
        //     ->notEmpty('PhongDon');

        // $validator
        //     ->integer('ThanhTien')
        //     ->requirePresence('ThanhTien', 'create')
        //     ->notEmpty('ThanhTien');

        // $validator
        //     ->dateTime('NgayTao')
        //     ->requirePresence('NgayTao', 'create')
        //     ->notEmpty('NgayTao');

        // $validator
        //     ->dateTime('NgaySua')
        //     ->requirePresence('NgaySua', 'create')
        //     ->notEmpty('NgaySua');

        // return $validator;
    }

    public function listKhachditour(){
        // $khachditourTable = TableRegistry::get('Khachhang');
        // $quocgiaTable = TableRegistry::get('Quocgia');
        // $quocgia = $quocgiaTable->find('list', ['keyField' => 'MaQuocGia', 'valueField' => 'name'])->toArray();
        $result = $this->find('all')
            ->select(['MaKhach','TenKhach','Dattour.MaDatTour','NgaySinhKhach','DiaChiKhach','GioiTinhKhach','LoaiKhach','PhongDon','ThanhTien'])
            // ->where(['MaKH like' => '%'.$MaKH.'%'])
            ->join(
                    [
                        'table' => 'Dattour',
                        'alias' => 'Dattour',
                        'type' => 'LEFT',
                        'conditions' => 'Dattour.MaDatTour= Khachditour.MaDatTour' 
                    ]
                )
            ->toArray();
            // print_r($result);die;
            return $result;
    }
    public function addKhachditour($data){
        $khachditour = $this->newEntity();
        $khachditour->TenKhach = isset($data['TenKhach']) ? $data['TenKhach'] : null;
        $khachditour->MaDatTour = isset($data['MaDatTour']) ? $data['MaDatTour'] : null;
        $khachditour->NgaySinhKhach = isset($data['NgaySinhKhach']) ? $data['NgaySinhKhach'] : null;
        $khachditour->GioiTinhKhach = isset($data['GioiTinhKhach']) ? $data['GioiTinhKhach'] : null;
        $khachditour->DiaChiKhach = isset($data['DiaChiKhach']) ? $data['DiaChiKhach'] : null;
        $khachditour->LoaiKhach = isset($data['LoaiKhach']) ? $data['LoaiKhach'] : null;
        $khachditour->PhongDon = isset($data['PhongDon']) ? $data['PhongDon'] : null;
        $khachditour->ThanhTien = isset($data['ThanhTien']) ? $data['ThanhTien'] : null;
        $this->save($khachditour);
    }

    public function editKhachditour($data,$MaKhach){
        $khachhang = [];
        // echo "chào 1";
        $khachditour['TenKhach'] = isset($data['TenKhach']) ? $data['TenKhach'] : null;
        $khachditour['MaDatTour'] = isset($data['MaDatTour']) ? $data['MaDatTour'] : null;
        $khachditour['NgaySinhKhach'] = isset($data['NgaySinhKhach']) ? $data['NgaySinhKhach'] : null;
        $khachditour['GioiTinhKhach'] = isset($data['GioiTinhKhach']) ? $data['GioiTinhKhach'] : null;
        $khachditour['DiaChiKhach'] = isset($data['DiaChiKhach']) ? $data['DiaChiKhach'] : null;
        $khachditour['LoaiKhach'] = isset($data['LoaiKhach']) ? $data['LoaiKhach'] : null;
        $khachditour['PhongDon'] = isset($data['PhongDon']) ? $data['PhongDon'] : null;
        $khachditour['ThanhTien'] = isset($data['ThanhTien']) ? $data['ThanhTien'] : null;
        // print_r($khachhang);
        $query = $this->query();
        $query->update()
            ->set(['TenKhach' => $khachditour['TenKhach']])
            ->set(['MaDatTour' => $khachditour['MaDatTour']])
            ->set(['NgaySinhKhach' => $khachditour['NgaySinhKhach']])
            ->set(['GioiTinhKhach' => $khachditour['GioiTinhKhach']])
            ->set(['DiaChiKhach' => $khachditour['DiaChiKhach']])
            ->set(['LoaiKhach' => $khachditour['LoaiKhach']])
            ->set(['PhongDon' => $khachditour['PhongDon']])
            ->set(['ThanhTien' => $khachditour['ThanhTien']])
            ->where(['MaKhach' => $MaKhach])
            ->execute();

    }

    public function deleteKhachditour($MaKhach){
        $this->deleteAll(['MaKhach IN' => $MaKhach]);
    }
}
