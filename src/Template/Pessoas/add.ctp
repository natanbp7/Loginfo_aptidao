<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pessoa $pessoa
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Menu') ?></li>
        <li><?= $this->Html->link(__('Listar Pessoas'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="pessoas form large-9 medium-8 columns content">
    <?= $this->Form->create($pessoa) ?>
    <fieldset>
        <legend><?= __('Adicionar Pessoa') ?></legend>
        <?php
            echo $this->Form->control('Nome');
            echo $this->Form->control('TipoPessoa');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Salvar')) ?>
    <?= $this->Form->button(__('Cancelar'),array ('type'=>'reset'))?>
    <?= $this->Form->end() ?>
</div>
