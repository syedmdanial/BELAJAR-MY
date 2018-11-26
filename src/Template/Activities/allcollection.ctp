<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Activity $activity
 */
?>
<!-- Container (Card Section) -->
<div id="category" class="container-fluid text-center">
  <h1 style="color:black;font-family:Berlin Sans FB;font-size:50px;"><?php echo $serName; ?></h1>
  <h4>Back to Basics</h4><br>

  <!-- category details section -->
  <div class="row">
    <div style="text-align:left;border-right: 1px solid #ccc;" class="col-sm-2" >
		    <h4 style="font-weight:bold;margin-bottom:10px;"><?php echo $serName; ?></h4>
    </div>
    <div class="col-sm-10">
  		<div class="row slideanim">
  			<?php foreach ($activity as $act): ?>
  			<div class="col-sm-6 col-md-4 col-lg-3 mt-4">
  			  <div class="card">
                      <div class="card-block">
                          <figure class="profile">
                              <img src="http://success-at-work.com/wp-content/uploads/2015/04/free-stock-photos.gif" class="profile-avatar" alt="">
                          </figure>
                          <a href="#" class="card-title mt-3" style="color:black;margin-bottom:8px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  						            <?= $this->Html->link($act->company->name, ['controller' => 'Companies', 'action' => 'profile', $act->company->id])?></a>
              						<h6>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?= $act->created ?></h6>
  						            <hr>
                          <div class="card-text">
                              <a href="#" ><?= $this->Html->link(__($act->name), ['controller' => 'companies', 'action' => 'collection', $act->id, $act->company->id]) ?></a>
                          </div>
                      </div>
                      <div class="card-footer">
              						<div class="col-xs-10" style="text-align:right;">
                						<p style="color:#C0CA33;font-size:10px" >STARTING AT&nbsp;&nbsp;&nbsp;
                							<span style="font-size:15px;font-weight:bold;"> RM<?= $act->price; ?></span>
                						</p>
              						</div>
                      </div>
          </div>
  			</div>
  			<?php endforeach; ?>
  		</div>
   </div>
 </div>
</div>
<br/>
