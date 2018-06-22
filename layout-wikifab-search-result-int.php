<?php 
	global $wgPropsOnThumbnails;
?>

<div class="col-md-3 col-sm-6 col-xs-12">
	<div class="project-card">
		<a href="<?php echo $url; ?>">
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-5">
					<div class="project-thumbnail">
						<img src="<?php echo  WikifabExploreResultFormatter::getImageUrl($Main_Picture);?>"  alt="<?php echo $Main_Picture; ?>"/>
						<div class="project-card-lang-code lang-<?php echo $codeLang; ?>">
							<?php echo $codeLang; ?>
						</div>
					</div>
				</div>
				<div class="col-md-12 col-sm-12 col-xs-7">
					<div class="project-card-content">
						<h5 class="project-title">
							<span class="mw-headline"><?php echo $title; ?></span>
						</h5>
						<p class="project-byline">
							<?php echo $creator; ?>
							<?php if (isset($Area)):?>
							<span class="project-byline-separator">|</span>
							<span class="area-style"><?php $values = explode(',', $Area);
								$intValues = [];
								$intKeyPrefix = 'wf-propertyvalue-area-';
								foreach ($values as $v) {
									$intValues[] = wfMessage( $intKeyPrefix . trim($v));
								}
								$intValue = implode(', ', $intValues); echo $intValue; ?></span>
							<?php endif; ?>
						</p>
						<?php if (isset($Description)):?>
							<div class="project-blurb"><?php echo $Description; ?></div>
						<?php endif; ?>
						<div class="project-location">
							<ul>
								<?php if(isset($wgPropsOnThumbnails)): ?>
									<?php foreach($wgPropsOnThumbnails as $propertyData): ?>
									    <?php if (isset(${$propertyData["property_id"]})):?>
											<li>
											<i class=<?php echo '"fa '.$propertyData["fa"].'"'; ?>></i>
											<span class="location-name"><?php echo wfMessage('dokit-autopropertyvalue-'.$propertyData["property_id"].'-'.str_replace('\n','_', trim(${$propertyData["property_id"]}))); ?></span>
											</li>
										<?php endif; ?>
							    	<?php endforeach; ?>
							    <?php endif; ?>
								<?php if (isset($Duration)):?>
									<li class="last">
									<i class="fa fa-hourglass-half"></i>
									<span class="location-name"><?php echo $Duration; ?> <?php echo $Duration_type; ?></span>
									</li>
								<?php endif; ?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</a>
	</div>
</div>
