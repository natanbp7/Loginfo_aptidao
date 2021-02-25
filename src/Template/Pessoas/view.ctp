<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pessoa $pessoa
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Menu') ?></li>
        <li><?= $this->Html->link(__('Editar Pessoa'), ['action' => 'edit', $pessoa->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Excluir Pessoa'), ['action' => 'delete', $pessoa->id], ['confirm' => __('Deseja realmente excluir a pessoa de ID#{0}?', $pessoa->id)]) ?> </li>
        <li><?= $this->Html->link(__('Listar Pessoas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nova Pessoa'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="pessoas view large-9 medium-8 columns content">
    <h3><?= h($pessoa->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($pessoa->Nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('TipoPessoa') ?></th>
            <td><?= h($pessoa->TipoPessoa) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($pessoa->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($pessoa->created) ?></td>
        </tr>
    </table>
</div>
