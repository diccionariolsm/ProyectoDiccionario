<div class="row">
        <div class="col-md-10 col-md-offset-2 tabla">
          <h2 class="sub-header">Usuarios</h2>
           <!--<button type="button" class="btn btn-primary" href='<?php echo base_url();?>add_user'>-->
            <a class="btn btn-primary" href="<?php echo base_url()?>index.php/adduser"><i class="fa fa-plus-circle fa-fg"></i></a>
                <!-- <i class="fa fa-plus-circle fa-fg" aria-hidden="true"></i>-->
            </button>
          <table id="example" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Id</th>
                <th>Usuario</th>
                <th>Password</th>
                <th>Correo</th>
                <th>Opciones</th>
                
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>ID</th>
                <th>Usuario</th>
                <th>Password</th>
                <th>Correo</th>
                <th>Opciones</th>
            </tr>
        </tfoot>
        <tbody>
         
            <?php foreach($users as $user):?>
            <tr>
                <td><?php echo $user['iduser'];?></td>
                <td><?php echo $user['username'];?></td>
                <td><?php echo $user['password'];?></td>
                <td><?php echo $user['mail'];?></td>
                <td>
                    <a class="btn btn-success " href="<?php echo base_url()?>/index.php/edituser/info_u/<?php echo $user['iduser']?>"><i class="fa fa-pencil fa-fg"></i></a>
                    <a class="btn btn-warning" href="<?php echo base_url()?>/index.php/deleteuser/delete_u/<?php echo $user['iduser']?>"> <i class="fa fa-trash fa-fg"></i></a>
                </td>
            </tr>
            <?php endforeach; ?>
            
        </tbody>
        </table>
        </div>
      </div>
