<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Project Entity
 *
 * @property string $project_id
 * @property string $customer_name
 * @property string $customer_phone
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenDate $delivery_date
 * @property string $stitch_name
 */
class Project extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
      'project_id' => true,
      'customer_name' => true,
      'customer_phone' => true,
      'project_created' => true,
      'project_due_date' => true,
      'product_id' => true,
      'project_assignee' => true,
      'project_status' => true,
      'deleted' => true
  ];
}
