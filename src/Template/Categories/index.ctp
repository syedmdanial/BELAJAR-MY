<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Category[]|\Cake\Collection\CollectionInterface $categories
 */
   echo $this->element('Side_Menu/side_menu');
?>
<div class="categories index large-9 medium-8 columns content">
    <h3><?= __('Categories') ?></h3>
    <table cellpadding="0" cellspacing="0" class="table table-hover table-responsive table-striped"> <!-- showing all category-->
        <thead>
            <tr>
              <th scope="col" width="5%"><?= $this->Paginator->sort('id') ?></th>
              <th scope="col"><?= $this->Paginator->sort('name') ?></th>
              <th scope="col" class="actions" width="1%"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
          <?php foreach ($categories as $category): ?>
          <tr>
              <td><?= $this->Number->format($category->id) ?></td>
              <td><?= h($category->name) ?></td>
              <td><?= $category->has('user') ? $this->Html->link($category->user->id, ['controller' => 'Users', 'action' => 'view', $category->user->id]) : '' ?></td>
              <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $category->id], ['class'=>'btn btn-default']) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $category->id], ['class'=>'btn btn-warning']) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $category->id], ['class'=>'btn btn-danger'], ['confirm' => __('Are you sure you want to delete # {0}?', $category->id)]) ?>
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
