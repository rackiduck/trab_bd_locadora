<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Categorium[]|\Cake\Collection\CollectionInterface $categoria
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Categorium'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Filme'), ['controller' => 'Filme', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Filme'), ['controller' => 'Filme', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="categoria index large-9 medium-8 columns content">
    <h3><?= __('Categoria') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('identificador_categoria') ?></th>
                <th scope="col"><?= $this->Paginator->sort('categoria') ?></th>
                <th scope="col"><?= $this->Paginator->sort('filme_identificador') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($categoria as $categorium): ?>
            <tr>
                <td><?= $this->Number->format($categorium->identificador_categoria) ?></td>
                <td><?= h($categorium->categoria) ?></td>
                <td><?= $categorium->has('filme') ? $this->Html->link($categorium->filme->filme_identificador, ['controller' => 'Filme', 'action' => 'view', $categorium->filme->filme_identificador]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $categorium->identificador_categoria]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $categorium->identificador_categoria]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $categorium->identificador_categoria], ['confirm' => __('Are you sure you want to delete # {0}?', $categorium->identificador_categoria)]) ?>
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
