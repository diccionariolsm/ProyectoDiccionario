<div class="row">
  
  <div class="col-md-6 col-md-offset-3 Registro">
 <div class="panel panel-info">
      <div class="panel-heading">
        <i class="fa fa-sign-in"></i> Editar usuario
      </div>

   <div class="panel-body">
    <?php if(isset($message)):?>
        <p><?php echo $message; ?></p>
    <?php endif; ?>

  <form method='post' action='<?php echo base_url();?>index.php/edituser/editar_u/<?=$iduser?>' >

        <div class="form-group <?php if(form_error('username') != '') echo 'has-error';?>">
      <label for="User">Nombre de usuario</label>
      <input name="username" type="text" class="form-control" id="username" value="<?=$username?>">
      <?php echo form_error('username');?>
      </div>

      
      <div class="form-group <?php if(form_error('password') != '') echo 'has-error';?>">
        <label for="Pass">Contraseña</label>
        <input name="password" type="password" class="form-control" id="password" value="<?=$password?>">
        <?php echo form_error('password');?>
      </div>
      
      <div class="form-group <?php if(form_error('mail') != '') echo 'has-error';?>">
        <label for="Email">Correo</label>
        <input name="mail" type="email" class="form-control" id="mail" value="<?=$mail?>">
        <?php echo form_error('mail');?>
      </div>

       <button type="submit" name="editar_u" class="btn btn-primary rigth" value="editar_u">Editar</button>
       
     
      </form>
    </div>
</div> 
</div>