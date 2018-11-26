<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */
   echo $this->element('Side_Menu/side_menu');
?>

<div class="users index large-9 medium-8 columns content">
    <h3><?= __('Users') ?></h3>
    <table cellpadding="0" cellspacing="0" class="table table-hover table-responsive table-striped"> <!-- showing all services-->
        <thead>
            <tr>
              <th scope="col" width="5%"><?= $this->Paginator->sort('id') ?></th>
              <th scope="col"><?= $this->Paginator->sort('username') ?></th>
              <th scope="col"><?= $this->Paginator->sort('password') ?></th>
              <th scope="col"><?= $this->Paginator->sort('address') ?></th>
              <th scope="col"><?= $this->Paginator->sort('phonenum') ?></th>
              <th scope="col"><?= $this->Paginator->sort('email') ?></th>
              <th scope="col"><?= $this->Paginator->sort('picture') ?></th>
              <th scope="col"><?= $this->Paginator->sort('privilege') ?></th>
              <th scope="col"><?= $this->Paginator->sort('description') ?></th>
              <th scope="col"><?= $this->Paginator->sort('created') ?></th>
              <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
              <th scope="col" class="actions" width="15%"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
          <?php foreach ($users as $user): ?>
          <tr>
              <td><?= $this->Number->format($user->id) ?></td>
              <td><?= h($user->username) ?></td>
              <td><?= h($user->password) ?></td>
              <td><?= h($user->address) ?></td>
              <td><?= h($user->phonenum) ?></td>
              <td><?= h($user->email) ?></td>
              <td><?= h($user->picture) ?></td>
              <td><?= h($user->privilege) ?></td>
              <td><?= h($user->description) ?></td>
              <td><?= h($user->created) ?></td>
              <td><?= h($user->modified) ?></td>
              <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $user->id], ['class'=>'btn btn-default']) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id], ['class'=>'btn btn-warning']) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->id], ['class'=>'btn btn-danger'], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
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
