<div style="margin-top:80px; width:30px;"></div>
	<div class="jumbotron">
		<div class="row">

		 <div  class="col-md-4">
			 <img src="assets/imagenes/diccionario.jpg"  alt="Engrane" width="404" height="436" align="lefth" /> 
		 </div>
		 <div  class="col-md-4">
		 </div>
		 <div  class="col-md-4">
				<div class="panel panel-primary ">
					<div class="panel-heading">
						<h4><i class="fa fa-user-plus  "></i> Login</h4>
					</div>
					<div class="panel-body">
						<div class="form-group <?php if(form_error('username') != '') echo 'has-error';?> ">
							<form method='post' action='<?php echo base_url();?>ctrl_access'>
							<label for="username"> Usuario</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa-fw" aria-hidden="true"></i></span>
									<input name="username" type="text" class="form-control" id="username" placeholder="Nombre de Usuario" value="<?php echo set_value('username');?>">
									<?php echo form_error('username');?>
								</div>
						</div>
		
						<div class="form-group <?php if(form_error('username') != '') echo 'has-error';?>">
							<label for="password">Password</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-key fa-fw" aria-hidden="true"></i></span>
									<input class="form-control" type="password" placeholder="Password">
									<?php echo form_error('password');?>
								</div>
						</div>
						<button  type="submit" class="btn btn-success">Login</button>
					</div>
				</div>
				</div>
			</div>
		</div>
</div>


			    

 
