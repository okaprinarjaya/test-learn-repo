<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ProjectProductOther Model
 *
 * @method \App\Model\Entity\ProjectProductOther get($primaryKey, $options = [])
 * @method \App\Model\Entity\ProjectProductOther newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ProjectProductOther[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ProjectProductOther|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ProjectProductOther|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ProjectProductOther patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ProjectProductOther[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ProjectProductOther findOrCreate($search, callable $callback = null, $options = [])
 */
class ProjectProductOtherTable extends Table
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

        $this->setTable('project_product_other');
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
            ->scalar('product_name')
            ->maxLength('product_name', 32)
            ->requirePresence('product_name', 'create')
            ->notEmpty('product_name');

        return $validator;
    }
}
