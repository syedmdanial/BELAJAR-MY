<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Company $company
 */
 echo $this->Html->css('pricetable.css');
 echo $this->Html->css('comment.css');
  $user_id = $this->request->session()->read('Auth.User.id')
?>
<!-- Container (Card Section) -->
<div id="category" class="container-fluid text-center">
  <!-- profile info section -->
  <div class="row">
    <div style="text-align:left;border-right: 1px solid #ccc;" class="col-sm-2" >
		<img src="http://success-at-work.com/wp-content/uploads/2015/04/free-stock-photos.gif" class="profile-avatar" alt="">
		<h4 style="font-weight:bold;margin-bottom:10px;text-align:center;"><?= h($comp->name) ?></h4>
		<!--<p style="text-align:center;"><?= h($company->description) ?></p> -->
		<div class="row" style="text-align:center;">
			<div class="col-xs-7">
				<button class="btn btn-info" data-toggle="modal" data-target="#contactModal" style="margin-left:40px">Contact Us</button>
			</div>
			<div class="col-xs-2">
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-xs-6">
				<p style="color:black;" ><span class="glyphicon glyphicon-map-marker" style="color:grey;"></span>From</p>
			</div>
			<div class="col-xs-6">
				<p style="text-align:right;"><?= h($company->name) ?></p>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-6">
				<p style="color:black;" ><span class="glyphicon glyphicon-calendar" style="color:grey;"></span>Since</p>
			</div>
			<div class="col-xs-6">
				<p style="text-align:right;"><?= h($comp->created) ?></p>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-8">
				<p style="color:black;" ><span class="glyphicon glyphicon-file" style="color:grey;"></span>Tutoring Done</p>
			</div>
			<div class="col-xs-4">
				<p style="text-align:right;">100</p>
			</div>
		</div>
    </div>
    <div class="col-sm-10">
			<hr/>
		<div class="col-sm-7">
		<div style="border:1px;text-align:left;margin-left:10px;margin-right:10px;">
			<ul class="nav nav-tabs" id="tabContent">
				<li class="active"><a href="#overview" data-toggle="tab">Overview</a></li>
				<li><a href="#price" data-toggle="tab">Price</a></li>
			</ul>
			<div class="tab-content">
				<div class="tab-pane active" id="overview">

						<!-- Details tab -->
				   <div class="control-group">
					   <label class="control-label">
					   <br/>

							<h4>Tutor is from company: <?= h($company->name) ?></h4>
							<h4><?= h($comp->description) ?></h4>
					   </label>
				   </div>
				</div>
				<div class="tab-pane" id="price">
					<div id="pricing-table" class="clear" style="margin-top:30px;">
					<div class="plan">
						<h3>Open Hall<span>RM<?= $comp->price; ?></span></h3>
						<ul>
							<li><b>Subscription</b> of Software For 6 Month</li>
							<li><b>Cover </b> Basics </li>
							<li><b>Only Session</b> For Designated Day</li>
						</ul>
					</div>
					<div class="plan" id="most-popular">
						<h3>Private Session<span>RM<?= $comp->price+100; ?></span></h3>
						<ul>
							<li><b>Subscription</b> of Software For 2 Years </li>
							<li><b>Cover </b> All Topic</li>
							<li><b>3 Times Session</b> Per Month</li>
						</ul>
					</div>
					</div>
				</div>
			</div>


			</div>
		  </div>
		  <div class="col-sm-5">
		  <button class="btn btn-info"><?= $this->Html->link(__("To Company's Collection"), ['action' => 'profile', $getid], ['style' => 'color:white;text-decoration:none;']) ?></button>
			<div class="col-sm-10" style='background-color:#f2f2f2;border-radius:7px;margin-top:35px'>
			<h4 style="margin-bottom:0.5px;">Comments</h4>
				<div class="col-sm-3">
				<br />
				<img src="http://success-at-work.com/wp-content/uploads/2015/04/free-stock-photos.gif" width="50px" height="50px" style="border-radius:100px;margin-bottom:100px;"/>
				</div>
				<div class="col-sm-9">
				<?php echo $this->Form->create($chatroom);
					  echo $this->Form->control('chatlog', array('label' => '', 'type' => 'textarea', 'class' => 'form-control', 'id' => 'chatlog', 'placeholder' => 'Add comment...'));
					  echo $this->Form->hidden('description', ['value' => 'unchecked']);
					  echo $this->Form->hidden('company_id', ['value' => $getid]);
					  echo $this->Form->hidden('user_id', ['value' => $user_id]);
					  echo '<br />';
					  echo $this->Form->submit('Comment', array('class' => 'btn btn-info', 'style' => 'float:right;float:bottom;'));
					  echo $this->Form->end();
				?>
				<br/><br/>
				</div>
		    </div>
			<?php foreach($result as $chat):?>
			<div class="col-sm-10" style="background-color:#f2f2f2;border-radius:7px;margin-top:35px;word-wrap:break-word;" >
				<div class="col-sm-3">
				<br />
				<img src="http://success-at-work.com/wp-content/uploads/2015/04/free-stock-photos.gif" width="50px" height="50px" style="border-radius:100px;margin-bottom:100px;"/>
				</div>
				<div class="col-sm-9">
				<p style="text-align:left;margin-top:25px;margin-bottom:1px;font-size:17px;text-transform:capitalize;color:black;"><?= $chat->user->username; ?></p>
				<p style="text-align:left;font-size:10px;"><?= $chat->created; ?></p>
				<hr style="border:0.5px solid darkgrey;margin-bottom:2px;" />
				<p style="text-align:left;font-size:20px;color:black;"><?= $chat->chatlog; ?></p>
				<?= $this->Form->postLink(__('Delete'), ['controller' => 'chatrooms', 'action' => 'delete', $chat->id, $getaid, $getid], ['style' => 'font-size:12px;margin-left:150px;'], ['confirm' => __('Are you sure you want to delete # {0}?', $chat->id)]) ?>
				</div>
			</div>
			<?php endforeach; ?>
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
	</div>
  </div>
</div>

<!-- Modal (Contact Me) -->
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
		<p><span class="fa fa-facebook-square"></span> <?= h($company->user->username) ?>'s Address</p>
		<br>
	  </div>
	  <div class="col-sm-6" style="text-align:right;margin-right:10px;">
		<br>
		<?php // to display the details of the tutor
      echo '<p>' . h($company->user->phonenum) . '</p>';
      echo '<p>' . h($company->user->email) . '</p>';
      echo '<p>' . h($company->user->address) . '</p>';
    ?>
		<br>
	  </div>
      <div class="modal-footer">
		<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<!-- Modal (More Details)
<div id="detailModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-xs" tyle="width:200px;">

     Modal content
    <div class="modal-content">
      <div class="modal-header" style="border:0px;">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"><?= h($company->user->username) ?></h4>
      </div>
	  <div style="border:0px;margin-left:10px;margin-right:10px;">
		<ul class="nav nav-tabs" id="tabContent">
			<li class="active"><a href="#desc" data-toggle="tab">Description</a></li>
			<li><a href="#access-security" data-toggle="tab">Language</a></li>
			<li><a href="#networking" data-toggle="tab">Skills</a></li>
		</ul>

		<div class="tab-content">
			<div class="tab-pane active" id="desc">

					Details tab
			   <div class="control-group">
				   <label class="control-label"><?= h($company->user->description) ?></label>
			   </div>
			</div>

			<div class="tab-pane" id="access-security">
				<label class="control-label">hello</label>
			</div>
			<div class="tab-pane" id="networking">
				<label class="control-label">aaaaaaaaaaaaaaaaaaaaaaa</label>
			</div>
		</div>
	  </div>
      <div class="modal-footer">

		<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
-->
