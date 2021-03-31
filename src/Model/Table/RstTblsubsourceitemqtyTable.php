<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * RstTblsubsourceitemqty Model
 *
 * @method \App\Model\Entity\RstTblsubsourceitemqty get($primaryKey, $options = [])
 * @method \App\Model\Entity\RstTblsubsourceitemqty newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\RstTblsubsourceitemqty[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\RstTblsubsourceitemqty|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\RstTblsubsourceitemqty saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\RstTblsubsourceitemqty patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\RstTblsubsourceitemqty[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\RstTblsubsourceitemqty findOrCreate($search, callable $callback = null, $options = [])
 */
class RstTblsubsourceitemqtyTable extends Table
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

        $this->setTable('rst_tblsubsourceitemqty');

        $this->primaryKey('ItemCode');

        $this->hasMany('rst_tblitems', [
            'foreignKey' => 'ItemCode'
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
            ->numeric('ItemSubSourceCode')
            ->allowEmptyString('ItemSubSourceCode');

        $validator
            ->numeric('ItemCode')
            ->allowEmptyString('ItemCode');

        $validator
            ->numeric('ItemQty')
            ->allowEmptyString('ItemQty');

        $validator
            ->integer('isFromCategory')
            ->allowEmptyString('isFromCategory');

        $validator
            ->numeric('OpeningStock')
            ->allowEmptyString('OpeningStock');

        $validator
            ->numeric('CoCode')
            ->allowEmptyString('CoCode');

        return $validator;
    }
}
