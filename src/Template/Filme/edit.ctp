<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Filme $filme
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $filme->filme_identificador],
                ['confirm' => __('Are you sure you want to delete # {0}?', $filme->filme_identificador)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Filme'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Fita'), ['controller' => 'Fita', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Fitum'), ['controller' => 'Fita', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Emprestimo'), ['controller' => 'Emprestimo', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Emprestimo'), ['controller' => 'Emprestimo', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ator'), ['controller' => 'Ator', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ator'), ['controller' => 'Ator', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Categoria'), ['controller' => 'Categoria', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Categorium'), ['controller' => 'Categoria', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="filme form large-9 medium-8 columns content">
    <?= $this->Form->create($filme) ?>
    <fieldset>
        <legend><?= __('Edit Filme') ?></legend>
        <?php
            echo $this->Form->control('titulo');
            echo $this->Form->control('disponivel');
            echo $this->Form->control('ator._ids', ['options' => $ator]);
            echo $this->Form->control('categoria._ids', ['options' => $categoria]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
