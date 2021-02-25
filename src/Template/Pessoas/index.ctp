<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pessoa[]|\Cake\Collection\CollectionInterface $pessoas
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
    <li><img src="webroot/img/unnamed.png"></li>
        <li class="heading"><?= __('Menu') ?></li>
        <li><?= $this->Html->link(__('Nova Pessoa'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar Categorias Produtos'), ['controller' => 'CategoriasProdutos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Listar Vendas'), ['controller' => 'Vendas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Listar Produtos'), ['controller' => 'Produtos', 'action' => 'index']) ?></li>
</nav>
<div class="pessoas index large-9 medium-8 columns content">
    <h3><?= __('Pessoas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('ID Pessoa') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Nome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Tipo da Pessoa') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Criada em:') ?></th>
                <th scope="col" class="actions"><?= __('CRUD') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pessoas as $pessoa): ?>
            <tr>
                <td><?= $this->Number->format($pessoa->id) ?></td>
                <td><?= h($pessoa->Nome) ?></td>
                <td><?= h($pessoa->TipoPessoa) ?></td>
                <td><?= h($pessoa->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Ver /'), ['action' => 'view', $pessoa->id]) ?>
                    <?= $this->Html->link(__('Editar /'), ['action' => 'edit', $pessoa->id]) ?>
                    <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $pessoa->id], ['confirm' => __('Deseja realmente excluir a Pessoa do ID#{0}?', $pessoa->id)]) ?>
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
