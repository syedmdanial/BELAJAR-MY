<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Chatroom $chatroom
 */
   echo $this->element('Side_Menu/side_menu');
?>
<div id="category" class="container-fluid text-center"> <!-- adding chatroom -->
  <h1 style="color:black;font-family:Berlin Sans FB;font-size:50px;">Adding a Chatroom</h1>
  <hr>
  <!-- chatroom details section -->
  <div class="row">
    <div class="col-sm-12">
		<div class="row slideanim">
		<div class="col-sm-4">
		</div>
		<div class="col-sm-4" style="text-align:left;">
			<?= $this->Form->create($chatroom) ?>
			<?= $this->Form->control('chatlog', array('type' => 'chatlog', 'class' => 'form-control', 'id' => 'chatlog')); ?>
      <?= $this->Form->control('description', array('type' => 'description', 'class' => 'form-control', 'id' => 'description')); ?>
      <?= $this->Form->control('company_id', ['options' => $companies], array('type' => 'company_id', 'class' => 'form-control', 'id' => 'company_id')); ?>
      <?= $this->Form->control('user_id', ['options' => $users], array('type' => 'company_id', 'class' => 'form-control', 'id' => 'company_id')); ?>
			<br/>
			<?= $this->Form->submit('Submit', array('class' => 'btn btn-info', 'style' => 'float:right;float:bottom;')); ?>
			<?= $this->Form->end(); ?>
		</div>
		<div class="col-sm-3">
		</div>
		</div>
	  </div>
  </div>
</div>
