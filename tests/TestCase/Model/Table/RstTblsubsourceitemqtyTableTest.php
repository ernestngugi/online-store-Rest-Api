<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RstTblsubsourceitemqtyTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RstTblsubsourceitemqtyTable Test Case
 */
class RstTblsubsourceitemqtyTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\RstTblsubsourceitemqtyTable
     */
    public $RstTblsubsourceitemqty;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.RstTblsubsourceitemqty',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('RstTblsubsourceitemqty') ? [] : ['className' => RstTblsubsourceitemqtyTable::class];
        $this->RstTblsubsourceitemqty = TableRegistry::getTableLocator()->get('RstTblsubsourceitemqty', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->RstTblsubsourceitemqty);

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
