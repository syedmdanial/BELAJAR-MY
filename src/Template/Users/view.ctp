<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<!-- Container (Card Section) -->
<div id="category" class="container-fluid text-center">
  <!-- profile info section -->
  <div class="row">
    <div style="text-align:left;border-right: 1px solid #ccc;" class="col-sm-2" >
		<img src="http://success-at-work.com/wp-content/uploads/2015/04/free-stock-photos.gif" class="profile-avatar" alt="">
		<h4 style="font-weight:bold;margin-bottom:10px;text-align:center;text-transform:capitalize;"><?= h($user->username) ?></h4>
		<p style="text-align:center;"><?= h($user->description) ?></p>
		<div class="row" style="text-align:center;">
			<div class="col-xs-7">
				<button class="btn btn-info" data-toggle="modal" data-target="#contactModal">Contact Me</button>
			</div>
			<div class="col-xs-2">
				<?= $this->Html->link(__('Edit'), ['controller' => 'users', 'action' => 'edit', $user->id], ['class' => 'btn btn-default btn-md']) ?>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-xs-12">
				<?= $this->Html->link(__('Delete Account'), ['controller' => 'users', 'action' => 'edit', $user->id], ['class' => 'btn btn-danger btn-md', 'style' => 'float:right;']) ?>
			</div>
		</div>
    </div>
    <div class="col-sm-10">
		<div class="col-xs-12 board">
			<?php if ($this->request->session()->read('Auth.User')){
				if($this->request->session()->read('Auth.User.privilege') == 'admin') {
					echo '<p style="text-transform:capitalize;">' . h($user->username) . "'s Company</p>";
				} else{
					echo '<p style="text-transform:capitalize;">' . h($user->username) . "'s Profile</p>";
				}
			}?>
		</div>
		<div class="row slideanim">
			<div class="col-xs-12">
			<?php if (!empty($user->companies)): ?>
				<table class="table table-bordered" style="text-align:left;">
					<thead>
					  <tr>
						<th>ID</th>
						<th>Company Name</th>
						<th>Description</th>
						<th>Action</th>
					  </tr>
					</thead>
					<tbody>
					<?php foreach ($user->companies as $companies): ?>
					  <tr>
						<td><?= h($companies->id) ?></td>
						<td><?= h($companies->name) ?></td>
						<td><?= h($companies->description) ?></td>
						<td>
						<?= $this->Html->link(__('View'), ['controller' => 'Companies', 'action' => 'profile', $companies->id], ['class' => 'btn btn-default btn-md']) ?>
						<?= $this->Html->link(__('Edit'), ['controller' => 'Companies', 'action' => 'edit', $companies->id], ['class' => 'btn btn-info btn-md']) ?>
						<?= $this->Form->postLink(__('Delete'), ['controller' => 'Companies', 'action' => 'delete', $companies->id], ['class' => 'btn btn-danger btn-md'], ['confirm' => __('Are you sure you want to delete # {0}?', $companies->id)]) ?></td>
					  </tr>
					<?php endforeach; ?>
					</tbody>
				</table>
				<?php endif; ?>
			</div>
		</div>
    </div>
  </div>
</div>

<!-- Modal (Contact Me)-->
<div id="contactModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-xs" style="width:460px;">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Contact Me</h4>
      </div>
	  <div class="col-sm-5" style="text-align:left;margin-left:10px;">
		<br>
		<p><span class="glyphicon glyphicon-phone"></span> Phone Number</p>
		<p><span class="glyphicon glyphicon-envelope"></span> Email</p>
		<p><span class="fa fa-facebook-square"></span> <?= h($user->username) ?>'s Address</p>
		<br>
	  </div>
	  <div class="col-sm-6" style="text-align:right;margin-right:10px;">
		<br>
		<p><?= h($user->phonenum) ?></p>
		<p><?= h($user->email) ?></p>
		<p><?= h($user->address) ?></p>
		<br>
	  </div>
      <div class="modal-footer">
		<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
