<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CategoriasProduto[]|\Cake\Collection\CollectionInterface $categoriasProdutos
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
    <li><img src="webroot/img/unnamed.png"></li>
    <li class="heading"><?= __('Menu') ?></li>
        <li><?= $this->Html->link(__('Nova Categorias de Produto'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar Produtos'), ['controller' => 'Produtos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Listar Pessoas'), ['controller' => 'Pessoas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Listar Vendas'), ['controller' => 'Vendas', 'action' => 'index']) ?></li>
    </ul>
</nav>
<div class="categoriasProdutos index large-9 medium-8 columns content">
    <h3><?= __('Categorias Produtos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
            <th scope="col"><?= $this->Paginator->sort('ID Produto') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome_categoria') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Criado') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Modificado') ?></th>
                <th scope="col" class="actions"><?= __('CRUD') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($categoriasProdutos as $categoriasProduto): ?>
            <tr>
            <td><?= $this->Number->format($categoriasProduto->id) ?></td>
                <td><?= h($categoriasProduto->nome_categoria) ?></td>
                <td><?= h($categoriasProduto->created) ?></td>
                <td><?= h($categoriasProduto->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Ver/'), ['action' => 'view', $categoriasProduto->id]) ?>
                    <?= $this->Html->link(__('Edit/'), ['action' => 'edit', $categoriasProduto->id]) ?>
                    <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $categoriasProduto->id], ['confirm' => __('Deseja realmente excluir a categoria com ID#{0}?', $categoriasProduto->id)]) ?>                </td>
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
