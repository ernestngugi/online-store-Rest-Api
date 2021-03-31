<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * RstTblitem Entity
 *
 * @property float $ItemCode
 * @property string|null $ItemName
 * @property float|null $ItemCategoryCode
 * @property int|null $isActive
 * @property string|null $BTN_ForeColor
 * @property string|null $BTN_BackColor
 * @property int|null $isPOS_Item
 * @property float|null $ItemMapping
 * @property float|null $ItemQty
 * @property float|null $ItemUnit
 * @property float|null $ReOrderLevel
 * @property float|null $StoreGrossCostPrice
 * @property float|null $StoreCostPrice
 * @property float|null $AfterMappingCostPrice
 * @property float|null $SellingPrice
 * @property int|null $ItemType
 * @property int|null $WithAccompaniment
 * @property int|null $isAccompaniment
 * @property float|null $PercentageSP
 * @property float|null $NetSellingPrice
 * @property float|null $GrossProfitMarkUp
 * @property float|null $FoodCostMargin
 * @property float|null $FoodCost
 * @property int|null $isPurchaseTaxable
 * @property int|null $isConsumable
 * @property float|null $WAC
 * @property float|null $ItemSalesTarget
 * @property float|null $CostAccount
 * @property float|null $IncomeAccount
 * @property float|null $StockAccount
 * @property float|null $DeptIssueAccount
 * @property float|null $CoCode
 * @property int|null $isStockable
 * @property int|null $NetSPToCalcFBCost
 * @property float|null $ItemDisc
 * @property int|null $ItemClass
 * @property float|null $ExpenseAccount
 * @property int|null $MustHaveAccompaniment
 * @property float|null $OpeningStock
 * @property int|null $isTot
 * @property int|null $CalibrateQty
 * @property string|null $ItemBarCode
 * @property float|null $ManufacturerCode
 */
class RstTblitem extends Entity
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
        'ItemCode' => true,
        'ItemName' => true,
        'ItemCategoryCode' => true,
        'isActive' => true,
        'BTN_ForeColor' => true,
        'BTN_BackColor' => true,
        'isPOS_Item' => true,
        'ItemMapping' => true,
        'ItemQty' => true,
        'ItemUnit' => true,
        'ReOrderLevel' => true,
        'StoreGrossCostPrice' => true,
        'StoreCostPrice' => true,
        'AfterMappingCostPrice' => true,
        'SellingPrice' => true,
        'ItemType' => true,
        'WithAccompaniment' => true,
        'isAccompaniment' => true,
        'PercentageSP' => true,
        'NetSellingPrice' => true,
        'GrossProfitMarkUp' => true,
        'FoodCostMargin' => true,
        'FoodCost' => true,
        'isPurchaseTaxable' => true,
        'isConsumable' => true,
        'WAC' => true,
        'ItemSalesTarget' => true,
        'CostAccount' => true,
        'IncomeAccount' => true,
        'StockAccount' => true,
        'DeptIssueAccount' => true,
        'CoCode' => true,
        'isStockable' => true,
        'NetSPToCalcFBCost' => true,
        'ItemDisc' => true,
        'ItemClass' => true,
        'ExpenseAccount' => true,
        'MustHaveAccompaniment' => true,
        'OpeningStock' => true,
        'isTot' => true,
        'CalibrateQty' => true,
        'ItemBarCode' => true,
        'ManufacturerCode' => true,
    ];
}
