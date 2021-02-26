<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CategoriasProduto $categoriasProduto
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
    <li class="heading"><?= __('Menu') ?></li>
        <li><?= $this->Form->postLink(
                __('Excluir'),
                ['action' => 'delete', $categoriasProduto->id],
                ['confirm' => __('Deseja realmente excluir a categoria com ID#{0}?', $categoriasProduto->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('Listar Categorias Produtos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Listar Produtos'), ['controller' => 'Produtos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Listar Vendas'), ['controller' => 'Vendas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar Pessoas'), ['controller' => 'Pessoas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="categoriasProdutos form large-9 medium-8 columns content">
    <?= $this->Form->create($categoriasProduto) ?>
    <fieldset>
        <legend><?= __('Editar Categorias Produto') ?></legend>
        <?php
            echo $this->Form->control('nome_categoria');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Salvar')) ?>
    <?= $this->Html->link(__('Cancelar'), ['action' => 'index'])?>
    <?= $this->Form->end() ?>

</div>
