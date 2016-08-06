<div class="row">

    <div class="col-md-6 col-md-offset-3 Registro">
  <div class="panel panel-info">
      <div class="panel-heading">
        <i class="fa fa-sign-in"></i> Agregar video
      </div>

      <div class="panel-body">
      <form method='post' action='<?php echo base_url();?>/index.php/editvideo/edit_v' enctype="multipart/form-data">

    <div class="form-group <?php if(form_error('nombre') != '') echo 'has-error';?>">
      <label for="Nombre">Nombre del video</label>
      <input name="nombre" type="text" class="form-control" id="nombre" value="<?=$nombre?>">
      <?php echo form_error('nombre');?>
      </div>
      
      <div class="form-group <?php if(form_error('descripciom') != '') echo 'has-error';?>">
        <label for="Descripcion">Descripción</label>
        <input name="descripcion" type="descripcion" class="form-control" id="descripcion" value="<?=$descripcion?>">
        <?php echo form_error('password');?>
      </div>
      
      <div class="form-group <?php if(form_error('archivo') != '') echo 'has-error';?>">
        <label for="Archivo">Archivo</label>
        <input name="archivo" type="file" class="form-control" id="archivo" value="<?=$archivo?>">
        <?php echo form_error('archivo');?>
      </div>

       <button type="submit" name="editar_v" class="btn btn-primary rigth" value="editar_v">Editar</button>
       
     
      </form>
    </div>
</div> 
</div>
