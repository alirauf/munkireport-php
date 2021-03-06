		<div class="col-lg-4 col-md-6">

			<div class="panel panel-default">

				<div class="panel-heading" data-container="body" title="Munki versions among all clients">

			    	<h3 class="panel-title"><i class="icon-sitemap"></i> Munki versions</h3>

				</div>
				<div class="list-group scroll-box">

					<?php
						$munkireport = new Munkireport();
						$sql = "SELECT version, COUNT(1) AS count
								FROM munkireport
								GROUP BY version
								ORDER BY version ASC";
					?>
					
					<?foreach($munkireport->query($sql) as $obj):?>
						<a href="<?=url('show/listing/munki/#'.$obj->version)?>" class="list-group-item"><?=$obj->version?>
							<span class="badge pull-right"><?=$obj->count?></span>
						</a>
					<?endforeach?>

				</div><!-- /scroll-box -->

			</div><!-- /panel -->

		</div><!-- /col -->