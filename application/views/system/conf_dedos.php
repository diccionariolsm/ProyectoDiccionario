<div class="row" style="margin-top:200px;">
	
	<?php 
		foreach ($name_image as $image) {
			echo '	
					<a href="'.base_url().'index.php/Conf_dedos/confi/'.$image['idcfg_manual'].'">
						<div class="col-xs-4 col-md-2">
						<img src="'.base_url().'assets/images/'.$image['descripcion'].'"  class="img-thumbnail">
						</div>
					</a>';
		}

	?>
	<!--
	<div class="col-xs-4 col-md-2">
		<img src="<?=base_url()?>assets/images/<?php echo $imagen; ?>" alt="..." class="img-thumbnail">
	</div>
	-->
</div>