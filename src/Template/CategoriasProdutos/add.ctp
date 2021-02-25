<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CategoriasProduto $categoriasProduto
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Menu') ?></li>
        <li><?= $this->Html->link(__('Listar Categorias Produtos'), ['action' => 'index']) ?></li>
       <!--  <li><?= $this->Html->link(__('Listar Produtos'), ['controller' => 'Produtos', 'action' => 'index']) ?></li> -->
       <!--  <li><?= $this->Html->link(__('Novo Produto'), ['controller' => 'Produtos', 'action' => 'add']) ?></li> -->
    </ul>
</nav>
<div class="categoriasProdutos form large-9 medium-8 columns content">
    <?= $this->Form->create($categoriasProduto) ?>
    <fieldset>
        <legend><?= __('Adicionar nova Categoria de produto') ?></legend>
        <?php
            echo $this->Form->control('nome_categoria');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Salvar')) ?>
    <?= $this->Form->button(__('Cacelar'),array ('type'=>'reset'))?>
    <?= $this->Form->end() ?>
</div>
