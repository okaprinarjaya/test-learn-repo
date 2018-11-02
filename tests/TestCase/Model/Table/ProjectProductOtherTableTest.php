<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProjectProductOtherTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProjectProductOtherTable Test Case
 */
class ProjectProductOtherTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ProjectProductOtherTable
     */
    public $ProjectProductOther;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.project_product_other',
        'app.projects'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ProjectProductOther') ? [] : ['className' => ProjectProductOtherTable::class];
        $this->ProjectProductOther = TableRegistry::getTableLocator()->get('ProjectProductOther', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ProjectProductOther);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
