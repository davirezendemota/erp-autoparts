<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Transaction> $transactions
 */
?>
<div class="transactions index content">
    <?= $this->Html->link(__('New Transaction'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Transactions') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('item_id') ?></th>
                    <th><?= $this->Paginator->sort('tipo') ?></th>
                    <th><?= $this->Paginator->sort('data_transacao') ?></th>
                    <th><?= $this->Paginator->sort('quantidade') ?></th>
                    <th><?= $this->Paginator->sort('preco_total') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($transactions as $transaction): ?>
                <tr>
                    <td><?= $this->Number->format($transaction->id) ?></td>
                    <td><?= $transaction->hasValue('item') ? $this->Html->link($transaction->item->nome, ['controller' => 'Items', 'action' => 'view', $transaction->item->id]) : '' ?></td>
                    <td><?= h($transaction->tipo) ?></td>
                    <td><?= h($transaction->data_transacao) ?></td>
                    <td><?= $this->Number->format($transaction->quantidade) ?></td>
                    <td><?= $this->Number->format($transaction->preco_total) ?></td>
                    <td><?= h($transaction->created) ?></td>
                    <td><?= h($transaction->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $transaction->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $transaction->id]) ?>
                        <?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $transaction->id],
                            [
                                'method' => 'delete',
                                'confirm' => __('Are you sure you want to delete # {0}?', $transaction->id),
                            ]
                        ) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>