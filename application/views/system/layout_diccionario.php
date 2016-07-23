<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">


    <title>LSME</title>

    <!-- Bootstrap core CSS -->
    <link href="<?=base_url()?>/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
    <style type="text/css">
    	/*
		 * Base structure
		 */

		/* Move down content because we have a fixed navbar that is 50px tall */
		body {
		  padding-top: 50px;
		}


		/*
		 * Global add-ons
		 */

		.sub-header {
		  padding-bottom: 10px;
		  border-bottom: 1px solid #eee;
		}

		/*
		 * Top navigation
		 * Hide default border to remove 1px line.
		 */
		.navbar-fixed-top {
		  border: 0;
		}

		/*
		 * Sidebar
		 */

		/* Hide for mobile, show later */
		.sidebar {
		  display: none;
		}
		@media (min-width: 768px) {
		  .sidebar {
		    position: fixed;
		    top: 51px;
		    bottom: 0;
		    left: 0;
		    z-index: 1000;
		    display: block;
		    padding: 20px;
		    overflow-x: hidden;
		    overflow-y: auto; /* Scrollable contents if viewport is shorter than content. */
		    background-color: #f5f5f5;
		    border-right: 1px solid #eee;
		  }
		}

		/* Sidebar navigation */
		.nav-sidebar {
		  margin-right: -21px; /* 20px padding + 1px border */
		  margin-bottom: 20px;
		  margin-left: -20px;
		}
		.nav-sidebar > li > a {
		  padding-right: 20px;
		  padding-left: 20px;
		}
		.nav-sidebar > .active > a,
		.nav-sidebar > .active > a:hover,
		.nav-sidebar > .active > a:focus {
		  color: #fff;
		  background-color: #428bca;
		}


		/*
		 * Main content
		 */

		.main {
		  padding: 20px;
		}
		@media (min-width: 768px) {
		  .main {
		    padding-right: 40px;
		    padding-left: 40px;
		  }
		}
		.main .page-header {
		  margin-top: 0;
		}


		/*
		 * Placeholder dashboard ideas
		 */

		.placeholders {
		  margin-bottom: 30px;
		  text-align: center;
		}
		.placeholders h4 {
		  margin-bottom: 0;
		}
		.placeholder {
		  margin-bottom: 20px;
		}
		.placeholder img {
		  display: inline-block;
		  border-radius: 50%;
		}
    </style>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <!-- PANEL DE DICCIONARIO -->
    <div clsss="">
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Settings</a></li>
            <li><a href="#">Profile</a></li>
            <li><a href="#">Help</a></li>
          </ul>
        </div>
      </div>
    </nav>
    
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-1 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="#A">A <span class="sr-only">(current)</span></a></li>
            <li><a href="#B">B</a></li>
            <li><a href="#C">C</a></li>
            <li><a href="#D">D</a></li>
            <li><a href="#E">E</a></li>
            <li><a href="#F">F</a></li>
            <li><a href="#">G</a></li>
          </ul>
        </div>





        <div class="col-sm-10 col-sm-offset-2 col-md-11 col-md-offset-1 main">
          <h1 class="page-header">Diccionario</h1>
          <div class="col-xs-6 col-md-3 col-md-offset-9"  >
            <form action="<?=base_url()?>index.php/Diccionario_e_lsm/buscar" method="post" class="navbar-form navbar-right">
              <input type="text" name="pal_buscar" class="form-control" id="busqueda" placeholder="Search...">
            </form>
          </div>

          
          
          <div id="resultado">
            <?php 
              if (isset($palabra)) 
                 echo  $palabra;
               
            ?>
          </div>
          <div class="col-xs-12 col-sm-12 placeholder">
             <center><h2><a name="A">A</a></h2></center> 
              
            </div>
          <div class="row placeholders">
            <div class="col-xs-4 col-sm-2 placeholder">
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-4 col-sm-2 placeholder">
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-4 col-sm-2 placeholder">
              
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-4 col-sm-2 placeholder">
              
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-4 col-sm-2 placeholder">
              
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-4 col-sm-2 placeholder">
              
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-4 col-sm-2 placeholder">
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-4 col-sm-2 placeholder">
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-4 col-sm-2 placeholder">
              
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-4 col-sm-2 placeholder">
              
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-4 col-sm-2 placeholder">
              
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-4 col-sm-2 placeholder">
              
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-4 col-sm-2 placeholder">
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-4 col-sm-2 placeholder">
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-4 col-sm-2 placeholder">
              
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-4 col-sm-2 placeholder">
              
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-4 col-sm-2 placeholder">
              
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-4 col-sm-2 placeholder">
              
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-4 col-sm-2 placeholder">
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-4 col-sm-2 placeholder">
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-4 col-sm-2 placeholder">
              
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-4 col-sm-2 placeholder">
              
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-4 col-sm-2 placeholder">
              
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-4 col-sm-2 placeholder">
              
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
          </div>


          <div class="col-xs-12 col-sm-12 placeholder">
             <center><h2><a name="B">B</a></h2></center> 
              
            </div>
          <div class="row placeholders">
            <div class="col-xs-4 col-sm-2 placeholder">
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-4 col-sm-2 placeholder">
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-4 col-sm-2 placeholder">
              
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-4 col-sm-2 placeholder">
              
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-4 col-sm-2 placeholder">
              
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-4 col-sm-2 placeholder">
              
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-4 col-sm-2 placeholder">
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-4 col-sm-2 placeholder">
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-4 col-sm-2 placeholder">
              
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-4 col-sm-2 placeholder">
              
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-4 col-sm-2 placeholder">
              
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-4 col-sm-2 placeholder">
              
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-4 col-sm-2 placeholder">
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-4 col-sm-2 placeholder">
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-4 col-sm-2 placeholder">
              
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-4 col-sm-2 placeholder">
              
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-4 col-sm-2 placeholder">
              
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-4 col-sm-2 placeholder">
              
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
          </div>

          <div class="col-xs-12 col-sm-12 placeholder">
             <center><h2><a name="C">C</a></h2></center> 
              
            </div>
          <div class="row placeholders">
            <div class="col-xs-4 col-sm-2 placeholder">
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-4 col-sm-2 placeholder">
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-4 col-sm-2 placeholder">
              
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-4 col-sm-2 placeholder">
              
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-4 col-sm-2 placeholder">
              
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-4 col-sm-2 placeholder">
              
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
          </div>

          <div class="col-xs-12 col-sm-12 placeholder">
             <center><h2><a name="D">D</a></h2></center> 
              
            </div>
          <div class="row placeholders">
            <div class="col-xs-4 col-sm-2 placeholder">
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-4 col-sm-2 placeholder">
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-4 col-sm-2 placeholder">
              
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-4 col-sm-2 placeholder">
              
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-4 col-sm-2 placeholder">
              
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-4 col-sm-2 placeholder">
              
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-4 col-sm-2 placeholder">
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-4 col-sm-2 placeholder">
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-4 col-sm-2 placeholder">
              
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-4 col-sm-2 placeholder">
              
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-4 col-sm-2 placeholder">
              
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-4 col-sm-2 placeholder">
              
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-4 col-sm-2 placeholder">
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-4 col-sm-2 placeholder">
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-4 col-sm-2 placeholder">
              
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-4 col-sm-2 placeholder">
              
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-4 col-sm-2 placeholder">
              
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-4 col-sm-2 placeholder">
              
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-4 col-sm-2 placeholder">
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-4 col-sm-2 placeholder">
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-4 col-sm-2 placeholder">
              
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-4 col-sm-2 placeholder">
              
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-4 col-sm-2 placeholder">
              
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-4 col-sm-2 placeholder">
              
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
          </div>



        </div>








      </div>
    </div>

    </div>



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
                     //alert("pasando");           
            var consulta;
                                                                              
             //hacemos focus al campo de búsqueda
            //$("#busqueda").focus();
                                                                                                        
            //comprobamos si se pulsa una tecla
            $("#busqueda").keyup(function(e){
                                         
                  //obtenemos el texto introducido en el campo de búsqueda
                  consulta = $("#busqueda").val();
                   //document.getElementById("contenido").style.display = "none";
                  //hace la búsqueda
                                                                                      
                  $.ajax({
                        type: "POST",
                        url: "<?=base_url()?>index.php/Diccionario_e_lsm/buscar",
                        data: "b="+consulta,
                        dataType: "html",
                        success: function(data){                                                    
                              $("#resultado").empty();
                              $("#resultado").append(data);
                                                                 
                        }
                  });
                                                                                      
                                                                               
            });
                                                                       
    }); 
    </script>
    
		</script>
  </body>
  
</html>
