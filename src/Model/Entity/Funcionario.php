<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Funcionario Entity
 *
 * @property int $id
 * @property string $nome_funcionario
 * @property string $cargo
 * @property \Cake\I18n\FrozenDate $created
 *
 * @property \App\Model\Entity\Venda[] $vendas
 */
class Funcionario extends Entity
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
        'nome_funcionario' => true,
        'cargo' => true,
        'created' => true,
        'vendas' => true,
    ];
}
