<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Company[]|\Cake\Collection\CollectionInterface $companies
 */
   echo $this->element('Side_Menu/side_menu');
?>
<div class="companies index large-9 medium-8 columns content">
    <h3><?= __('Companies') ?></h3>
    <table cellpadding="0" cellspacing="0" class="table table-hover table-responsive table-striped"> <!-- showing all company-->
        <thead>
            <tr>
              <th scope="col" width="5%"><?= $this->Paginator->sort('id') ?></th>
              <th scope="col"><?= $this->Paginator->sort('name') ?></th>
              <th scope="col"><?= $this->Paginator->sort('address') ?></th>
              <th scope="col"><?= $this->Paginator->sort('description') ?></th>
              <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
              <th scope="col" class="actions" width="25%"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
          <?php foreach ($companies as $company): ?>
          <tr>
              <td><?= $this->Number->format($company->id) ?></td>
              <td><?= h($company->name) ?></td>
              <td><?= h($company->address) ?></td>
              <td><?= h($company->description) ?></td>
              <td><?= $company->has('user') ? $this->Html->link($company->user->id, ['controller' => 'Users', 'action' => 'view', $company->user->id]) : '' ?></td>
              <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $company->id], ['class'=>'btn btn-default']) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $company->id], ['class'=>'btn btn-warning']) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $company->id], ['class'=>'btn btn-danger'], ['confirm' => __('Are you sure you want to delete # {0}?', $company->id)]) ?>
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
