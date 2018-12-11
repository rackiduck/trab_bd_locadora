<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Fitum[]|\Cake\Collection\CollectionInterface $fita
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Fitum'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Filme'), ['controller' => 'Filme', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Filme'), ['controller' => 'Filme', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="fita index large-9 medium-8 columns content">
    <h3><?= __('Fita') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('numero_fita') ?></th>
                <th scope="col"><?= $this->Paginator->sort('filme_identificador') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($fita as $fitum): ?>
            <tr>
                <td><?= $this->Number->format($fitum->numero_fita) ?></td>
                <td><?= $fitum->has('filme') ? $this->Html->link($fitum->filme->filme_identificador, ['controller' => 'Filme', 'action' => 'view', $fitum->filme->filme_identificador]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $fitum->numero_fita]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $fitum->numero_fita]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $fitum->numero_fita], ['confirm' => __('Are you sure you want to delete # {0}?', $fitum->numero_fita)]) ?>
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
