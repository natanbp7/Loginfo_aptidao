<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Cliente Entity
 *
 * @property int $id
 * @property string $nome_cliente
 * @property string|null $nome_empresa
 * @property int $nome_cidade
 * @property \Cake\I18n\FrozenDate $created
 *
 * @property \App\Model\Entity\Venda[] $vendas
 */
class Cliente extends Entity
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
        'nome_cliente' => true,
        'nome_empresa' => true,
        'nome_cidade' => true,
        'created' => true,
        'vendas' => true,
    ];
}
