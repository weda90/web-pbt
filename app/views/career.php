<?php require_once 'header.php'; ?>
<div class="container">
	<div class="row">
	<h1 class="page-header">
		career with us
	</h1>
	<p>we require professionals to participate in the development of our company. To apply this job, please click <a target="_blank" href="http://www.panbrotherstbk.com/pelamar"><i>here</i></a></p>
		<div class="col-sm-12">
			<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
			<?php 
			$job = $data['job']->get();
			$i = 0;
			// print_r($job);
			foreach ( $job as $key => $val):
				$a = $i++;
			?>
			<div class="panel panel-default">
			    <div class="panel-heading" role="tab" id="headingOne">
			      <h4 class="panel-title">
			        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $a; ?>" aria-expanded="true" aria-controls="collapseOne">
			          <?php echo $val['pos']; ?>
			          <small class="pull-right"><?php echo $val['closed']; ?></small>
			        </a>
			      </h4>
			    </div>
			    <div id="collapse<?php echo $a; ?>" class="panel-collapse collapse <?php //if($a == 0){echo "in";} ?>" role="tabpanel" aria-labelledby="headingOne">
			      <div class="panel-body">
			        <h3>Location</h3>
			        <p><?php echo $val['loc']; ?></p>
			        <h3>Required Qualifications</h3>
			        <p><?php echo $val['req']; ?></p>
			        <h3>Main Responsibilities</h3>
			        <p><?php echo $val['res']; ?></p>
			        <!-- <a href="http://panbrotherstbk.com/pelamar" class="btn btn-default pull-right" target="_blank">Apply</a> -->
			      </div>
			    </div>
			  </div>

			<?php endforeach; ?>
			</div>
		</div>
		<div class="col-sm-12">
			<i>* Only short-listed candidates will be invited via e-mail/phone for Test and Interview</i>
		</div>
	</div>
</div>
<?php require_once 'footer.php'; ?>