<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Venda Entity
 *
 * @property int $id
 * @property string $pessoa_id
 * @property string $produto_id
 * @property float $valor_venda
 * @property string $nome_cliente
 * @property \Cake\I18n\FrozenTime $created
 *
 * @property \App\Model\Entity\Produto $produto
 * @property \App\Model\Entity\Pessoa $pessoa
 */
class Venda extends Entity
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
        'pessoa_id' => true,
        'produto_id' => true,
        'valor_venda' => true,
        'nome_cliente' => true,
        'created' => true,
        'produto' => true,
        'pessoa' => true,
    ];
}
