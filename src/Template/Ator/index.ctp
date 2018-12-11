<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ator[]|\Cake\Collection\CollectionInterface $ator
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Ator'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Filme'), ['controller' => 'Filme', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Filme'), ['controller' => 'Filme', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="ator index large-9 medium-8 columns content">
    <h3><?= __('Ator') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('nome_real') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nascimento') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome_ficticio') ?></th>
                <th scope="col"><?= $this->Paginator->sort('identificador_ator') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($ator as $ator): ?>
            <tr>
                <td><?= h($ator->nome_real) ?></td>
                <td><?= h($ator->nascimento) ?></td>
                <td><?= h($ator->nome_ficticio) ?></td>
                <td><?= $this->Number->format($ator->identificador_ator) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $ator->identificador_ator]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $ator->identificador_ator]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $ator->identificador_ator], ['confirm' => __('Are you sure you want to delete # {0}?', $ator->identificador_ator)]) ?>
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
