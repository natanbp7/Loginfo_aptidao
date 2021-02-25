<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Produto Entity
 *
 * @property int $id
 * @property int $categorias_produto_id
 * @property string $nome_produto
 * @property int|null $quantidade
 * @property string $unidade_medida
 * @property float $valor
 * @property bool $perecível
 * @property \Cake\I18n\FrozenDate|null $validade
 * @property \Cake\I18n\FrozenDate|null $fabricação
 * @property \Cake\I18n\FrozenDate $created
 * @property \Cake\I18n\FrozenDate|null $modified
 *
 * @property \App\Model\Entity\CategoriasProduto $categorias_produto
 * @property \App\Model\Entity\Venda[] $vendas
 */
class Produto extends Entity
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
        'categorias_produto_id' => true,
        'nome_produto' => true,
        'quantidade' => true,
        'unidade_medida' => true,
        'valor' => true,
        'perecível' => true,
        'validade' => true,
        'fabricação' => true,
        'created' => true,
        'modified' => true,
        'categorias_produto' => true,
        'vendas' => true,
    ];
}
