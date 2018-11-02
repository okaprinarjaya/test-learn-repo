<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ProjectProductOtherFixture
 *
 */
class ProjectProductOtherFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'project_product_other';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'project_id' => ['type' => 'uuid', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'product_name' => ['type' => 'string', 'length' => 32, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'project_id' => '79726538-6d35-4fdb-87df-ce1c833c14b9',
                'product_name' => 'Lorem ipsum dolor sit amet'
            ],
        ];
        parent::init();
    }
}
