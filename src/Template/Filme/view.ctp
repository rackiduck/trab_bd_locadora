<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Filme $filme
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Filme'), ['action' => 'edit', $filme->filme_identificador]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Filme'), ['action' => 'delete', $filme->filme_identificador], ['confirm' => __('Are you sure you want to delete # {0}?', $filme->filme_identificador)]) ?> </li>
        <li><?= $this->Html->link(__('List Filme'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Filme'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Fita'), ['controller' => 'Fita', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Fitum'), ['controller' => 'Fita', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Emprestimo'), ['controller' => 'Emprestimo', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Emprestimo'), ['controller' => 'Emprestimo', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Ator'), ['controller' => 'Ator', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ator'), ['controller' => 'Ator', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Categoria'), ['controller' => 'Categoria', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Categorium'), ['controller' => 'Categoria', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="filme view large-9 medium-8 columns content">
    <h3><?= h($filme->titulo) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Titulo') ?></th>
            <td><?= h($filme->titulo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Filme Identificador') ?></th>
            <td><?= $this->Number->format($filme->filme_identificador) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Disponivel') ?></th>
            <td><?= $filme->disponivel ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Ator') ?></h4>
        <?php if (!empty($filme->ator)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Nome Real') ?></th>
                <th scope="col"><?= __('Nascimento') ?></th>
                <th scope="col"><?= __('Nome Ficticio') ?></th>
                <th scope="col"><?= __('Identificador Ator') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($filme->ator as $ator): ?>
            <tr>
                <td><?= h($ator->nome_real) ?></td>
                <td><?= h($ator->nascimento) ?></td>
                <td><?= h($ator->nome_ficticio) ?></td>
                <td><?= h($ator->identificador_ator) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Ator', 'action' => 'view', $ator->identificador_ator]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Ator', 'action' => 'edit', $ator->identificador_ator]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Ator', 'action' => 'delete', $ator->identificador_ator], ['confirm' => __('Are you sure you want to delete # {0}?', $ator->identificador_ator)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Categoria') ?></h4>
        <?php if (!empty($filme->categoria)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Identificador Categoria') ?></th>
                <th scope="col"><?= __('Categoria') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($filme->categoria as $categoria): ?>
            <tr>
                <td><?= h($categoria->identificador_categoria) ?></td>
                <td><?= h($categoria->categoria) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Categoria', 'action' => 'view', $categoria->identificador_categoria]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Categoria', 'action' => 'edit', $categoria->identificador_categoria]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Categoria', 'action' => 'delete', $categoria->identificador_categoria], ['confirm' => __('Are you sure you want to delete # {0}?', $categoria->identificador_categoria)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Fita') ?></h4>
        <?php if (!empty($filme->fita)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Numero Fita') ?></th>
                <th scope="col"><?= __('Filme Identificador') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($filme->fita as $fita): ?>
            <tr>
                <td><?= h($fita->numero_fita) ?></td>
                <td><?= h($fita->filme_identificador) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Fita', 'action' => 'view', $fita->numero_fita]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Fita', 'action' => 'edit', $fita->numero_fita]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Fita', 'action' => 'delete', $fita->numero_fita], ['confirm' => __('Are you sure you want to delete # {0}?', $fita->numero_fita)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Emprestimo') ?></h4>
        <?php if (!empty($filme->emprestimo)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Identificador Emp') ?></th>
                <th scope="col"><?= __('Devolucao') ?></th>
                <th scope="col"><?= __('Saida') ?></th>
                <th scope="col"><?= __('Numero Associado') ?></th>
                <th scope="col"><?= __('Filme Identificador') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($filme->emprestimo as $emprestimo): ?>
            <tr>
                <td><?= h($emprestimo->identificador_emp) ?></td>
                <td><?= h($emprestimo->devolucao) ?></td>
                <td><?= h($emprestimo->saida) ?></td>
                <td><?= h($emprestimo->numero_associado) ?></td>
                <td><?= h($emprestimo->filme_identificador) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Emprestimo', 'action' => 'view', $emprestimo->identificador_emp]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Emprestimo', 'action' => 'edit', $emprestimo->identificador_emp]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Emprestimo', 'action' => 'delete', $emprestimo->identificador_emp], ['confirm' => __('Are you sure you want to delete # {0}?', $emprestimo->identificador_emp)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
