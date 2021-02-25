<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Produto[]|\Cake\Collection\CollectionInterface $produtos
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
    <li><img src="webroot/img/unnamed.png"></li>
    <li class="heading"><?= __('Menu') ?></li>
        <li><?= $this->Html->link(__('Novo Produto'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar Categorias Produtos'), ['controller' => 'CategoriasProdutos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Listar Vendas'), ['controller' => 'Vendas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Listar Pessoas'), ['controller' => 'Pessoas', 'action' => 'index']) ?></li>
    </ul>
</nav>
<div class="produtos index large-9 medium-8 columns content">
    <h3><?= __('Produtos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
            
                <th scope="col"><?= $this->Paginator->sort('nome_produto') ?></th>
                <th scope="col"><?= $this->Paginator->sort('unidade_medida') ?></th>
                <th scope="col"><?= $this->Paginator->sort('quantidade') ?></th>
                <th scope="col"><?= $this->Paginator->sort('valor') ?></th>
                <th scope="col"><?= $this->Paginator->sort('perecível') ?></th>
                <th scope="col"><?= $this->Paginator->sort('validade') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fabricação') ?></th>
                <th scope="col" class="actions"><?= __('CRUD') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($produtos as $produto): ?>
            <tr>
                <td><?= h($produto->nome_produto) ?></td>
                <td><?= h($produto->unidade_medida) ?></td>                
                <td><?= $this->Number->format($produto->quantidade) ?></td> 
                <td><?= number_format($produto->valor,2)?></td>         
                <td><?= h($produto->perecível) ?></td>
                <td><?= h($produto->validade) ?></td>
                <td><?= h($produto->fabricação) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Ver /'), ['action' => 'view', $produto->id]) ?>
                    <?= $this->Html->link(__('Editar /'), ['action' => 'edit', $produto->id]) ?>
                    <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $produto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $produto->id)]) ?>
                    
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
    <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('Primeira')) ?>
            <?= $this->Paginator->prev('< ' . __('Anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('Próxima') . ' >') ?>
            <?= $this->Paginator->last(__('Última') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Página {{page}} de {{pages}}')]) ?></p>
    </div>
</div>
