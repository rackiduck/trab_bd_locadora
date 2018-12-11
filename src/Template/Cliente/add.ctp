<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cliente $cliente
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Cliente'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Emprestimo'), ['controller' => 'Emprestimo', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Emprestimo'), ['controller' => 'Emprestimo', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ator'), ['controller' => 'Ator', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ator'), ['controller' => 'Ator', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="cliente form large-9 medium-8 columns content">
    <?= $this->Form->create($cliente) ?>
    <fieldset>
        <legend><?= __('Add Cliente') ?></legend>
        <?php
            echo $this->Form->control('Sobrenome');
            echo $this->Form->control('prenome');
            echo $this->Form->control('cidade');
            echo $this->Form->control('bairro');
            echo $this->Form->control('cep');
            echo $this->Form->control('rua');
            echo $this->Form->control('telefone');
            echo $this->Form->control('telefone1');
            echo $this->Form->control('ator._ids', ['options' => $ator]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
