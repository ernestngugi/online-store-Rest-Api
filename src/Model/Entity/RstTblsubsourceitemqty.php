<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * RstTblsubsourceitemqty Entity
 *
 * @property float|null $ItemSubSourceCode
 * @property float|null $ItemCode
 * @property float|null $ItemQty
 * @property int|null $isFromCategory
 * @property float|null $OpeningStock
 * @property float|null $CoCode
 */
class RstTblsubsourceitemqty extends Entity
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
        'ItemSubSourceCode' => true,
        'ItemCode' => true,
        'ItemQty' => true,
        'isFromCategory' => true,
        'OpeningStock' => true,
        'CoCode' => true,
    ];
}
