<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * RstTblitemsFixture
 */
class RstTblitemsFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'ItemCode' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => ''],
        'ItemName' => ['type' => 'string', 'length' => 200, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'ItemCategoryCode' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'isActive' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'BTN_ForeColor' => ['type' => 'string', 'length' => 200, 'null' => true, 'default' => '0', 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'BTN_BackColor' => ['type' => 'string', 'length' => 200, 'null' => true, 'default' => '13668448', 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'isPOS_Item' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => '1', 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'ItemMapping' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => true, 'default' => '1', 'comment' => ''],
        'ItemQty' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => true, 'default' => '0', 'comment' => ''],
        'ItemUnit' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'ReOrderLevel' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => true, 'default' => '0', 'comment' => ''],
        'StoreGrossCostPrice' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => true, 'default' => '0', 'comment' => ''],
        'StoreCostPrice' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => true, 'default' => '0', 'comment' => ''],
        'AfterMappingCostPrice' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => true, 'default' => '0', 'comment' => ''],
        'SellingPrice' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => true, 'default' => '0', 'comment' => ''],
        'ItemType' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => '0', 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'WithAccompaniment' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => '0', 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'isAccompaniment' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => '0', 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'PercentageSP' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => true, 'default' => '0', 'comment' => ''],
        'NetSellingPrice' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => true, 'default' => '0', 'comment' => ''],
        'GrossProfitMarkUp' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => true, 'default' => '0', 'comment' => ''],
        'FoodCostMargin' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => true, 'default' => '0', 'comment' => ''],
        'FoodCost' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => true, 'default' => '0', 'comment' => ''],
        'isPurchaseTaxable' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => '0', 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'isConsumable' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => '0', 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'WAC' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => true, 'default' => '0', 'comment' => ''],
        'ItemSalesTarget' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => true, 'default' => '0', 'comment' => ''],
        'CostAccount' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => true, 'default' => '0', 'comment' => ''],
        'IncomeAccount' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => true, 'default' => '0', 'comment' => ''],
        'StockAccount' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => true, 'default' => '0', 'comment' => ''],
        'DeptIssueAccount' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => true, 'default' => '0', 'comment' => ''],
        'CoCode' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => true, 'default' => '0', 'comment' => ''],
        'isStockable' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => '0', 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'NetSPToCalcFBCost' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => '0', 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'ItemDisc' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => true, 'default' => '0', 'comment' => ''],
        'ItemClass' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => '0', 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'ExpenseAccount' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => true, 'default' => '0', 'comment' => ''],
        'MustHaveAccompaniment' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => '0', 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'OpeningStock' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => true, 'default' => '0', 'comment' => ''],
        'isTot' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => '0', 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'CalibrateQty' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => '0', 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'ItemBarCode' => ['type' => 'string', 'length' => 200, 'null' => true, 'default' => '', 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'ManufacturerCode' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => true, 'default' => '0', 'comment' => ''],
        '_indexes' => [
            'ItemCategoryCode' => ['type' => 'index', 'columns' => ['ItemCategoryCode'], 'length' => []],
            'isActive' => ['type' => 'index', 'columns' => ['isActive'], 'length' => []],
            'isPOS_Item' => ['type' => 'index', 'columns' => ['isPOS_Item'], 'length' => []],
            'ItemType' => ['type' => 'index', 'columns' => ['ItemType'], 'length' => []],
            'isConsumable' => ['type' => 'index', 'columns' => ['isConsumable'], 'length' => []],
            'isStockable' => ['type' => 'index', 'columns' => ['isStockable'], 'length' => []],
            'ItemClass' => ['type' => 'index', 'columns' => ['ItemClass'], 'length' => []],
            'isTot' => ['type' => 'index', 'columns' => ['isTot'], 'length' => []],
            'CalibrateQty' => ['type' => 'index', 'columns' => ['CalibrateQty'], 'length' => []],
            'ItemBarCode' => ['type' => 'index', 'columns' => ['ItemBarCode'], 'length' => []],
            'ManufacturerCode' => ['type' => 'index', 'columns' => ['ManufacturerCode'], 'length' => []],
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
                'ItemCode' => 1,
                'ItemName' => 'Lorem ipsum dolor sit amet',
                'ItemCategoryCode' => 1,
                'isActive' => 1,
                'BTN_ForeColor' => 'Lorem ipsum dolor sit amet',
                'BTN_BackColor' => 'Lorem ipsum dolor sit amet',
                'isPOS_Item' => 1,
                'ItemMapping' => 1,
                'ItemQty' => 1,
                'ItemUnit' => 1,
                'ReOrderLevel' => 1,
                'StoreGrossCostPrice' => 1,
                'StoreCostPrice' => 1,
                'AfterMappingCostPrice' => 1,
                'SellingPrice' => 1,
                'ItemType' => 1,
                'WithAccompaniment' => 1,
                'isAccompaniment' => 1,
                'PercentageSP' => 1,
                'NetSellingPrice' => 1,
                'GrossProfitMarkUp' => 1,
                'FoodCostMargin' => 1,
                'FoodCost' => 1,
                'isPurchaseTaxable' => 1,
                'isConsumable' => 1,
                'WAC' => 1,
                'ItemSalesTarget' => 1,
                'CostAccount' => 1,
                'IncomeAccount' => 1,
                'StockAccount' => 1,
                'DeptIssueAccount' => 1,
                'CoCode' => 1,
                'isStockable' => 1,
                'NetSPToCalcFBCost' => 1,
                'ItemDisc' => 1,
                'ItemClass' => 1,
                'ExpenseAccount' => 1,
                'MustHaveAccompaniment' => 1,
                'OpeningStock' => 1,
                'isTot' => 1,
                'CalibrateQty' => 1,
                'ItemBarCode' => 'Lorem ipsum dolor sit amet',
                'ManufacturerCode' => 1,
            ],
        ];
        parent::init();
    }
}
