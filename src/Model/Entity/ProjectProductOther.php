<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ProjectProductOther Entity
 *
 * @property string $project_id
 * @property string $product_name
 *
 * @property \App\Model\Entity\Project $project
 */
class ProjectProductOther extends Entity
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
        'product_name' => true,
        'project' => true
    ];
}
