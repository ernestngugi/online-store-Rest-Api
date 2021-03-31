<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RstTblitemsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RstTblitemsTable Test Case
 */
class RstTblitemsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\RstTblitemsTable
     */
    public $RstTblitems;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.RstTblitems',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('RstTblitems') ? [] : ['className' => RstTblitemsTable::class];
        $this->RstTblitems = TableRegistry::getTableLocator()->get('RstTblitems', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->RstTblitems);

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
}
