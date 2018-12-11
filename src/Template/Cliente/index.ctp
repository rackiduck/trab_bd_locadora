<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cliente[]|\Cake\Collection\CollectionInterface $cliente
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Cliente'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Emprestimo'), ['controller' => 'Emprestimo', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Emprestimo'), ['controller' => 'Emprestimo', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ator'), ['controller' => 'Ator', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ator'), ['controller' => 'Ator', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="cliente index large-9 medium-8 columns content">
    <h3><?= __('Cliente') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('numero_associado') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Sobrenome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('prenome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cidade') ?></th>
                <th scope="col"><?= $this->Paginator->sort('bairro') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cep') ?></th>
                <th scope="col"><?= $this->Paginator->sort('rua') ?></th>
                <th scope="col"><?= $this->Paginator->sort('telefone') ?></th>
                <th scope="col"><?= $this->Paginator->sort('telefone1') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($cliente as $cliente): ?>
            <tr>
                <td><?= $this->Number->format($cliente->numero_associado) ?></td>
                <td><?= h($cliente->Sobrenome) ?></td>
                <td><?= h($cliente->prenome) ?></td>
                <td><?= h($cliente->cidade) ?></td>
                <td><?= h($cliente->bairro) ?></td>
                <td><?= h($cliente->cep) ?></td>
                <td><?= h($cliente->rua) ?></td>
                <td><?= h($cliente->telefone) ?></td>
                <td><?= h($cliente->telefone1) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $cliente->numero_associado]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $cliente->numero_associado]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $cliente->numero_associado], ['confirm' => __('Are you sure you want to delete # {0}?', $cliente->numero_associado)]) ?>
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
