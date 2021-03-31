<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * RstTblsubsourceitemqtyFixture
 */
class RstTblsubsourceitemqtyFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'rst_tblsubsourceitemqty';
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'ItemSubSourceCode' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'ItemCode' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'ItemQty' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'isFromCategory' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => '1', 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'OpeningStock' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => true, 'default' => '0', 'comment' => ''],
        'CoCode' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => true, 'default' => '0', 'comment' => ''],
        '_indexes' => [
            'ItemSubSourceCode' => ['type' => 'index', 'columns' => ['ItemSubSourceCode'], 'length' => []],
            'ItemCode' => ['type' => 'index', 'columns' => ['ItemCode'], 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'latin1_swedish_ci'
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
                'ItemSubSourceCode' => 1,
                'ItemCode' => 1,
                'ItemQty' => 1,
                'isFromCategory' => 1,
                'OpeningStock' => 1,
                'CoCode' => 1,
            ],
        ];
        parent::init();
    }
}
