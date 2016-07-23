<div class="row">
  
  <div class="col-md-6 col-md-offset-3 Registro">
 <div class="panel panel-info">
      <div class="panel-heading">
        <i class="fa fa-sign-in"></i> Alta de seña
      </div>

   <div class="panel-body">
    <?php if(isset($message)):?>
        <p><?php echo $message; ?></p>
    <?php endif; ?>
    
  <form method='post' action='<?php echo base_url();?>index.php/adduser'>

    <div class="form-group <?php if(form_error('idsegna') != '') echo 'has-error';?>">
      <label for="Numero_dedos">Numero de dedos</label>
      <input name="numero_dedos" type="text" class="form-control" id="idsegna" placeholder="1..5">
      <?php echo form_error('idsegna');?>
      </div>
      
      <div class="form-group <?php if(form_error('idcnf_manual') != '') echo 'has-error';?>">
        <label for="">Configuracion Manual</label>
        <input name="idcnf_manual" type="text" class="form-con" id="idcnf_manual" placeholder="Configuracion Manual">
        <?php echo form_error('idcnf_manual');?>
      </div>
      
      <div class="form-group <?php if(form_error('idpofc') != '') echo 'has-error';?>">
        <label for="">Punto de articulacion</label>
        <input name="idpofc" type="text" class="form-con" id="idpofc" placeholder="puntos de articulacion">
        <?php echo form_error('idpofc');?>
      </div>

      <div class="form-group <?php if(form_error('idvideo') != '') echo 'has-error';?>">
        <label for="">Video</label>
        <input name="idvideo" type="text" class="form-con" id="idvideo" placeholder="Video">
        <?php echo form_error('idvideo');?>
      </div>
     
      <button type="submit" class="btn btn-primary rigth">Aceptar</button>
      </form>
    </div>
</div>
</div>
</div>
