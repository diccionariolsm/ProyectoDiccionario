<div class="row">
        <div class="col-md-10 col-md-offset-2 tabla">
          <h2 class="sub-header">Videos</h2>
           <!--<button type="button" class="btn btn-primary" href='<?php echo base_url();?>add_user'>-->
            <a class="btn btn-primary" href="<?php echo base_url()?>index.php/addvideo"><i class="fa fa-plus-circle fa-fg"></i></a>
                <!-- <i class="fa fa-plus-circle fa-fg" aria-hidden="true"></i>-->
            </button>
          <table id="example" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Opciones</th>
            </tr>
        </tfoot>
        <tbody>
         
            <?php foreach($videos as $video):?>
            <tr>
                <td><?php echo $video['idvideo'];?></td>
                <td><?php echo $video['nombre'];?></td>
                <td><?php echo $video['descripcion'];?></td>
                <td>
                    <a class="btn btn-success " href="<?php echo base_url()?>/index.php/editvideo/info_v/<?php echo $video['idvideo']?>"><i class="fa fa-pencil fa-fg"></i></a>
                    <a class="btn btn-warning" href="<?php echo base_url()?>/index.php/deletevideo/delete_v/<?php echo $video['idvideo']?>"> <i class="fa fa-trash fa-fg"></i></a>
                </td>
            </tr>
            <?php endforeach; ?>
            
        </tbody>
        </table>
        </div>
      </div>
