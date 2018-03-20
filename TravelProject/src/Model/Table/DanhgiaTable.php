<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Danhgia Model
 *
 * @method \App\Model\Entity\Danhgium get($primaryKey, $options = [])
 * @method \App\Model\Entity\Danhgium newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Danhgium[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Danhgium|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Danhgium patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Danhgium[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Danhgium findOrCreate($search, callable $callback = null, $options = [])
 */
class DanhgiaTable extends Table
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

        $this->setTable('danhgia');
        $this->setDisplayField('MaDanhGia');
        $this->setPrimaryKey('MaDanhGia');
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
            ->allowEmpty('MaDanhGia', 'create');

        $validator
            ->integer('Loai')
            ->requirePresence('Loai', 'create')
            ->notEmpty('Loai');

        $validator
            ->requirePresence('MaTour', 'create')
            ->notEmpty('MaTour');

        $validator
            ->allowEmpty('MaKhach');

        $validator
            ->scalar('NoiDungDG')
            ->maxLength('NoiDungDG', 500)
            ->requirePresence('NoiDungDG', 'create')
            ->notEmpty('NoiDungDG');

        $validator
            ->integer('TrangThai')
            ->requirePresence('TrangThai', 'create')
            ->notEmpty('TrangThai');

        $validator
            ->dateTime('NgayTao')
            ->requirePresence('NgayTao', 'create')
            ->notEmpty('NgayTao');

        $validator
            ->dateTime('NgaySua')
            ->allowEmpty('NgaySua');

        return $validator;
    }
    public function listDanhgia(){

    }

    public function addDanhgia(){

    }

    public function editDanhgia(){

    }

    public function deleteDanhgia(){
        
    }


}
