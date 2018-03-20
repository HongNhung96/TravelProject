<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\ORM\TableRegistry;

/**
 * Khachhang Model
 *
 * @method \App\Model\Entity\Khachhang get($primaryKey, $options = [])
 * @method \App\Model\Entity\Khachhang newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Khachhang[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Khachhang|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Khachhang patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Khachhang[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Khachhang findOrCreate($search, callable $callback = null, $options = [])
 */
class KhachhangTable extends Table
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

        $this->setTable('khachhang');
        $this->setDisplayField('MaKH');
        $this->setPrimaryKey('MaKH');
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
        //     ->allowEmpty('MaKH', 'create');

        // $validator
        //     ->scalar('TenKH')
        //     ->maxLength('TenKH', 30)
        //     ->allowEmpty('TenKH');

        // $validator
        //     ->scalar('MatKhauKH')
        //     ->maxLength('MatKhauKH', 30)
        //     ->requirePresence('MatKhauKH', 'create')
        //     ->notEmpty('MatKhauKH');

        // $validator
        //     ->integer('Quyen')
        //     ->requirePresence('Quyen', 'create')
        //     ->notEmpty('Quyen');

        // $validator
        //     ->date('NgaySinh')
        //     ->requirePresence('NgaySinh', 'create')
        //     ->notEmpty('NgaySinh');

        // $validator
        //     ->scalar('GioiTinh')
        //     ->maxLength('GioiTinh', 6)
        //     ->requirePresence('GioiTinh', 'create')
        //     ->notEmpty('GioiTinh');

       
        // $validator
        //     ->scalar('DiaChi')
        //     ->maxLength('DiaChi', 100)
        //     ->requirePresence('DiaChi', 'create')
        //     ->notEmpty('DiaChi');

        // $validator
        //     ->scalar('Email')
        //     ->maxLength('Email', 30)
        //     ->requirePresence('Email', 'create')
        //     ->notEmpty('Email');

        // $validator
        //     ->integer('DienThoai')
        //     ->requirePresence('DienThoai', 'create')
        //     ->notEmpty('DienThoai');

        // $validator
        //     ->allowEmpty('MaQuocGia');

        // $validator
        //     ->integer('SoCMT')
        //     ->requirePresence('SoCMT', 'create')
        //     ->notEmpty('SoCMT');

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

    public function listKhachhang($MaKH){
        $khachhangTable = TableRegistry::get('Khachhang');
        $quocgiaTable = TableRegistry::get('Quocgia');
        // $quocgia = $quocgiaTable->find('list', ['keyField' => 'MaQuocGia', 'valueField' => 'name'])->toArray();
        $result = $this->find('all')
            ->select(['MaKH','TenKH','Quyen','NgaySinh','Quocgia.TenQuocGia','GioiTinh','DiaChi','Email','DienThoai','SoCMT'])
            // ->where(['MaKH like' => '%'.$MaKH.'%'])
            ->join(
                    [
                        'table' => 'quocgia',
                        'alias' => 'Quocgia',
                        'type' => 'LEFT',
                        'conditions' => 'Khachhang.MaQuocGia= Quocgia.MaQuocGia' 
                    ]
                )
            ->toArray();
            return $result;
    }

    public function addKhachhang($data){
        $khachhang = $this->newEntity();
        $khachhang->TenKH = isset($data['TenKH']) ? $data['TenKH'] : null;
        $khachhang->Quyen = isset($data['selquyen']) ? $data['selquyen'] : null;
        $khachhang->NgaySinh = isset($data['NgaySinh']) ? $data['NgaySinh'] : null;
        $khachhang->GioiTinh = isset($data['selgioitinh']) ? $data['selgioitinh'] : null;
        $khachhang->DiaChi = isset($data['DiaChi']) ? $data['DiaChi'] : null;
        $khachhang->Email = isset($data['Email']) ? $data['Email'] : null;
        $khachhang->DienThoai = isset($data['DienThoai']) ? $data['DienThoai'] : null;
        $khachhang->MaQuocGia = isset($data['selquocgia']) ? $data['MaQuocGia'] : null;
        $khachhang->SoCMT = isset($data['SoCMT']) ? $data['SoCMT'] : null;
        $this->save($khachhang);
    }

    public function editKhachhang($data,$MaKH){
        // print_r($data);die;
        $khachhang = [];
        // echo "chào 1";
        $khachhang['TenKH'] = isset($data['TenKH']) ? $data['TenKH'] : null;
        $khachhang['Quyen'] = isset($data['selquyen']) ? $data['selquyen'] : null;
        $khachhang['NgaySinh'] = isset($data['NgaySinh']) ? $data['NgaySinh'] : null;
        $khachhang['GioiTinh'] = isset($data['selgioitinh']) ? $data['selgioitinh'] : null;
        $khachhang['DiaChi'] = isset($data['DiaChi']) ? $data['DiaChi'] : null;
        $khachhang['Email'] = isset($data['Email']) ? $data['Email'] : null;
        $khachhang['DienThoai'] = isset($data['DienThoai']) ? $data['DienThoai'] : null;
        $khachhang['MaQuocGia'] = isset($data['selquocgia']) ? $data['selquocgia'] : null;
        $khachhang['SoCMT'] = isset($data['SoCMT']) ? $data['SoCMT'] : null;    
        // print_r($khachhang);
        $query = $this->query();
        $query->update()
            ->set(['TenKH' => $khachhang['TenKH']])
            ->set(['MaQuocGia' => $khachhang['MaQuocGia']])
            ->set(['Quyen' => $khachhang['Quyen']])
            ->set(['NgaySinh' => $khachhang['NgaySinh']])
            ->set(['GioiTinh' => $khachhang['GioiTinh']])
            ->set(['DienThoai' => $khachhang['DienThoai ']])
            ->set(['DiaChi' => $khachhang['DiaChi']])
            ->set(['Email' => $khachhang['Email']])
            ->set(['SoCMT' => $khachhang['SoCMT']])
            ->where(['MaKH' => $MaKH])
            ->execute();

            // echo "chào 2";die;
    }
    public function deleteKhachhang($MaKH){
        $this->deleteAll(['MaKH IN' => $MaKH]);
    }
}
