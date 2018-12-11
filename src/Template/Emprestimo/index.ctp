<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Emprestimo[]|\Cake\Collection\CollectionInterface $emprestimo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Emprestimo'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Cliente'), ['controller' => 'Cliente', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cliente'), ['controller' => 'Cliente', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Filme'), ['controller' => 'Filme', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Filme'), ['controller' => 'Filme', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="emprestimo index large-9 medium-8 columns content">
    <h3><?= __('Emprestimo') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('identificador_emp') ?></th>
                <th scope="col"><?= $this->Paginator->sort('devolucao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('saida') ?></th>
                <th scope="col"><?= $this->Paginator->sort('numero_associado') ?></th>
                <th scope="col"><?= $this->Paginator->sort('filme_identificador') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($emprestimo as $emprestimo): ?>
            <tr>
                <td><?= $this->Number->format($emprestimo->identificador_emp) ?></td>
                <td><?= h($emprestimo->devolucao) ?></td>
                <td><?= h($emprestimo->saida) ?></td>
                <td><?= $emprestimo->has('cliente') ? $this->Html->link($emprestimo->cliente->numero_associado, ['controller' => 'Cliente', 'action' => 'view', $emprestimo->cliente->numero_associado]) : '' ?></td>
                <td><?= $emprestimo->has('filme') ? $this->Html->link($emprestimo->filme->filme_identificador, ['controller' => 'Filme', 'action' => 'view', $emprestimo->filme->filme_identificador]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $emprestimo->identificador_emp]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $emprestimo->identificador_emp]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $emprestimo->identificador_emp], ['confirm' => __('Are you sure you want to delete # {0}?', $emprestimo->identificador_emp)]) ?>
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
