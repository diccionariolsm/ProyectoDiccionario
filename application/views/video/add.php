	<div class="row">

  	<div class="col-md-6 col-md-offset-3 Registro">
 	<div class="panel panel-info">
      <div class="panel-heading">
        <i class="fa fa-sign-in"></i> Agregar video
      </div>

      <div class="panel-body">
      <form method='post' action='<?php echo base_url();?>/index.php/addvideo/insert_v' enctype="multipart/form-data" >

    <div class="form-group <?php if(form_error('nombre') != '') echo 'has-error';?>">
      <label for="Nombre">Nombre del video</label>
      <input name="nombre" type="text" class="form-control" id="nombre" placeholder="Nombre">
      <?php echo form_error('nombre');?>
      </div>
      
      <div class="form-group <?php if(form_error('descripciom') != '') echo 'has-error';?>">
        <label for="Descripcion">Descripción</label>
        <input name="descripcion" type="descripcion" class="form-control" id="descripcion" placeholder="Descripcion">
        <?php echo form_error('password');?>
      </div>
      
      <div class="form-group <?php if(form_error('archivo') != '') echo 'has-error';?>">
        <label for="Archivo">Archivo</label>
        <input name="archivo" type="file" class="form-control" id="archivo">
        <?php echo form_error('archivo');?>
      </div>

       <button type="submit" class="btn btn-primary rigth">Aceptar</button>
       <a class="btn btn-success lefth" href="<?php echo base_url()?>/index.php/videos">Ver todos</a>



















<!--
   <div class="panel-body">
    <form method="post" action='<?php echo base_url();?>/index.php/addvideo/insert_v' enctype="multipart/form-data"  class="form-horizontal">
		<div class="form-group">
			
		</div>
		<div class="form-group <?php if(form_error('nombre') != '') echo 'has-error';?>">
			<label class="col-sm-2 control-label">Nombre:</label>	
			<div class="col-sm-8">
				<input type="text" name="nombre" class="form-control" placeholder="Nombre" value="<?php echo set_value('nombre');?>"></input>
				<?php echo form_error('nombre');?>
			</div>	
		</div>

		<div class="form-group <?php if(form_error('descripcion') != '') echo 'has-error';?>">
			<label class="col-sm-2 control-label">Descripci&oacute;n:</label>	
			<div class="col-sm-8">
				<input type="text" name="descripcion" class="form-control" placeholder="Descripción" value="<?php echo set_value('descripcion');?>"></input>
				<?php echo form_error('descripcion');?>
			</div>	
		</div>

		<div class="form-group <?php if(form_error('archivo') != '') echo 'has-error';?>">
			<label class="col-sm-2 control-label">Archivo de Video</label>	
			<div class="col-sm-8">
				<input type="file" name="archivo" class="form-control"  value="<?php echo set_value('archivo');?>"></input>
				<?php echo form_error('archivo');?>
			</div>	
		</div>

		<button type="submit" class="btn btn-primary rigth">Aceptar</button>
        <a class="btn btn-success lefth" href="<?php echo base_url()?>/index.php/users">Ver todos</a>  -->

    </form>
  </div>
</div>
</div>