<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Projects Model
 *
 * @method \App\Model\Entity\Project get($primaryKey, $options = [])
 * @method \App\Model\Entity\Project newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Project[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Project|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Project|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Project patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Project[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Project findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ProjectsTable extends Table
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

        $this->setTable('projects');
        $this->hasOne('ProjectNotes', ['foreignKey' => 'project_id']);
        $this->hasOne('ProjectProductOther', ['foreignKey' => 'project_id']);
        $this->belongsTo('Products', ['foreignKey' => 'product_id']);
        $this->setDisplayField('project_id');
        $this->setPrimaryKey('project_id');

        $this->addBehavior('Timestamp');
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
            ->uuid('project_id')
            ->allowEmpty('project_id', 'create');

        $validator
            ->scalar('customer_name')
            ->maxLength('customer_name', 32)
            ->requirePresence('customer_name', 'create')
            ->notEmpty('customer_name');

        $validator
          ->scalar('customer_phone')
          ->maxLength('customer_phone', 16)
          ->requirePresence('customer_phone', 'create')
          ->notEmpty('customer_phone');

        $validator
          ->date('project_due_date')
          ->requirePresence('project_due_date', 'create')
          ->notEmpty('project_due_date');

        $validator
          ->scalar('product_id')
          ->requirePresence('product_id', 'create')
          ->notEmpty('product_id');

        return $validator;
    }
}
