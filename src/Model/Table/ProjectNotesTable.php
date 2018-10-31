<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ProjectNotes Model
 *
 * @method \App\Model\Entity\ProjectNote get($primaryKey, $options = [])
 * @method \App\Model\Entity\ProjectNote newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ProjectNote[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ProjectNote|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ProjectNote|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ProjectNote patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ProjectNote[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ProjectNote findOrCreate($search, callable $callback = null, $options = [])
 */
class ProjectNotesTable extends Table
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

      $this->setTable('project_notes');
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
        ->scalar('notes')
        ->maxLength('notes', 1024)
        ->requirePresence('notes', 'create')
        ->notEmpty('notes');

      return $validator;
    }
}
