<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Transaction Entity
 *
 * @property int $id
 * @property int $item_id
 * @property string $tipo
 * @property \Cake\I18n\Date $data_transacao
 * @property int $quantidade
 * @property string $preco_total
 * @property \Cake\I18n\DateTime $created
 * @property \Cake\I18n\DateTime|null $modified
 *
 * @property \App\Model\Entity\Item $item
 */
class Transaction extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected array $_accessible = [
        'item_id' => true,
        'tipo' => true,
        'data_transacao' => true,
        'quantidade' => true,
        'preco_total' => true,
        'created' => true,
        'modified' => true,
        'item' => true,
    ];
}
