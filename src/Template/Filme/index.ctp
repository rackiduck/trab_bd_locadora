<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Filme[]|\Cake\Collection\CollectionInterface $filme
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Filme'), ['action' => 'add']) ?></li>
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
<div class="filme index large-9 medium-8 columns content">
    <h3><?= __('Filme') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('filme_identificador') ?></th>
                <th scope="col"><?= $this->Paginator->sort('titulo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('disponivel') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($filme as $filme): ?>
            <tr>
                <td><?= $this->Number->format($filme->filme_identificador) ?></td>
                <td><?= h($filme->titulo) ?></td>
                <td><?= h($filme->disponivel) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $filme->filme_identificador]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $filme->filme_identificador]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $filme->filme_identificador], ['confirm' => __('Are you sure you want to delete # {0}?', $filme->filme_identificador)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
