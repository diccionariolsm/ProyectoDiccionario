<div class="row">
  
  <div class="col-md-6 col-md-offset-3 Registro">
 <div class="panel panel-info">
      <div class="panel-heading">
        <i class="fa fa-sign-in"></i> Agregar usuario
      </div>

   <div class="panel-body">
    <?php if(isset($message)):?>
        <p><?php echo $message; ?></p>
    <?php endif; ?>
    
  <form method='post' action='<?php echo base_url();?>index.php/add'>

    <div class="form-group <?php if(form_error('username') != '') echo 'has-error';?>">
      <label for="User">Nombre de usuario</label>
      <input name="username" type="text" class="form-control" id="username" placeholder="nombre">
      <?php echo form_error('username');?>
      </div>
      
      <div class="form-group <?php if(form_error('password') != '') echo 'has-error';?>">
        <label for="Pass">Contraseña</label>
        <input name="password" type="password" class="form-control" id="password" placeholder="***********">
        <?php echo form_error('password');?>
      </div>
      
      <div class="form-group <?php if(form_error('mail') != '') echo 'has-error';?>">
        <label for="Email">Correo</label>
        <input name="mail" type="email" class="form-control" id="mail" placeholder="mimail@mail.com">
        <?php echo form_error('mail');?>
      </div>

       <button type="submit" class="btn btn-primary rigth">Aceptar</button>
        <a class="btn btn-success lefth" href="<?php echo base_url()?>/index.php/users">Ver todos</a>
     
      </form>
    </div>
</div>
</div>