<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * RstTblitems Model
 *
 * @method \App\Model\Entity\RstTblitem get($primaryKey, $options = [])
 * @method \App\Model\Entity\RstTblitem newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\RstTblitem[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\RstTblitem|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\RstTblitem saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\RstTblitem patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\RstTblitem[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\RstTblitem findOrCreate($search, callable $callback = null, $options = [])
 */
class RstTblitemsTable extends Table
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

        $this->setTable('rst_tblitems');

        $this->belongsTo('RstTblsubsourceitemqty', [
            'foreignKey' => 'ItemCode',
            'joinType' => 'INNER'
        ]);

        $this->addBehavior('Search.Search');

        $this->searchManager()
            ->value('ItemName')
            ->add('q', 'Search.Like', [
                'before' => true,
                'after' => true,
                'fieldMode' => 'OR',
                'comparison' => 'LIKE',
                'wildcardAny' => '*',
                'wildcardOne' => '?',
                'field' => ['ItemName']
            ])
            ->add('foo', 'Search.Callback', [
                'callback' => function ($query, $args, $filter) {
                    // Modify $query as required
                }
            ]);
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
            ->numeric('ItemCode')
            ->requirePresence('ItemCode', 'create')
            ->notEmptyString('ItemCode');

        $validator
            ->scalar('ItemName')
            ->maxLength('ItemName', 200)
            ->allowEmptyString('ItemName');

        $validator
            ->numeric('ItemCategoryCode')
            ->allowEmptyString('ItemCategoryCode');

        $validator
            ->integer('isActive')
            ->allowEmptyString('isActive');

        $validator
            ->scalar('BTN_ForeColor')
            ->maxLength('BTN_ForeColor', 200)
            ->allowEmptyString('BTN_ForeColor');

        $validator
            ->scalar('BTN_BackColor')
            ->maxLength('BTN_BackColor', 200)
            ->allowEmptyString('BTN_BackColor');

        $validator
            ->integer('isPOS_Item')
            ->allowEmptyString('isPOS_Item');

        $validator
            ->numeric('ItemMapping')
            ->allowEmptyString('ItemMapping');

        $validator
            ->numeric('ItemQty')
            ->allowEmptyString('ItemQty');

        $validator
            ->numeric('ItemUnit')
            ->allowEmptyString('ItemUnit');

        $validator
            ->numeric('ReOrderLevel')
            ->allowEmptyString('ReOrderLevel');

        $validator
            ->numeric('StoreGrossCostPrice')
            ->allowEmptyString('StoreGrossCostPrice');

        $validator
            ->numeric('StoreCostPrice')
            ->allowEmptyString('StoreCostPrice');

        $validator
            ->numeric('AfterMappingCostPrice')
            ->allowEmptyString('AfterMappingCostPrice');

        $validator
            ->numeric('SellingPrice')
            ->allowEmptyString('SellingPrice');

        $validator
            ->integer('ItemType')
            ->allowEmptyString('ItemType');

        $validator
            ->integer('WithAccompaniment')
            ->allowEmptyString('WithAccompaniment');

        $validator
            ->integer('isAccompaniment')
            ->allowEmptyString('isAccompaniment');

        $validator
            ->numeric('PercentageSP')
            ->allowEmptyString('PercentageSP');

        $validator
            ->numeric('NetSellingPrice')
            ->allowEmptyString('NetSellingPrice');

        $validator
            ->numeric('GrossProfitMarkUp')
            ->allowEmptyString('GrossProfitMarkUp');

        $validator
            ->numeric('FoodCostMargin')
            ->allowEmptyString('FoodCostMargin');

        $validator
            ->numeric('FoodCost')
            ->allowEmptyString('FoodCost');

        $validator
            ->integer('isPurchaseTaxable')
            ->allowEmptyString('isPurchaseTaxable');

        $validator
            ->integer('isConsumable')
            ->allowEmptyString('isConsumable');

        $validator
            ->numeric('WAC')
            ->allowEmptyString('WAC');

        $validator
            ->numeric('ItemSalesTarget')
            ->allowEmptyString('ItemSalesTarget');

        $validator
            ->numeric('CostAccount')
            ->allowEmptyString('CostAccount');

        $validator
            ->numeric('IncomeAccount')
            ->allowEmptyString('IncomeAccount');

        $validator
            ->numeric('StockAccount')
            ->allowEmptyString('StockAccount');

        $validator
            ->numeric('DeptIssueAccount')
            ->allowEmptyString('DeptIssueAccount');

        $validator
            ->numeric('CoCode')
            ->allowEmptyString('CoCode');

        $validator
            ->integer('isStockable')
            ->allowEmptyString('isStockable');

        $validator
            ->integer('NetSPToCalcFBCost')
            ->allowEmptyString('NetSPToCalcFBCost');

        $validator
            ->numeric('ItemDisc')
            ->allowEmptyString('ItemDisc');

        $validator
            ->integer('ItemClass')
            ->allowEmptyString('ItemClass');

        $validator
            ->numeric('ExpenseAccount')
            ->allowEmptyString('ExpenseAccount');

        $validator
            ->integer('MustHaveAccompaniment')
            ->allowEmptyString('MustHaveAccompaniment');

        $validator
            ->numeric('OpeningStock')
            ->allowEmptyString('OpeningStock');

        $validator
            ->integer('isTot')
            ->allowEmptyString('isTot');

        $validator
            ->integer('CalibrateQty')
            ->allowEmptyString('CalibrateQty');

        $validator
            ->scalar('ItemBarCode')
            ->maxLength('ItemBarCode', 200)
            ->allowEmptyString('ItemBarCode');

        $validator
            ->numeric('ManufacturerCode')
            ->allowEmptyString('ManufacturerCode');

        return $validator;
    }
}
