<?php session_start();
      error_reporting(0);
 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">


  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body style="background-color:#13f2b4">


  <br>  
  <button type="button" class="btn btn-info" onclick="location.href='ingresar.php' ">Stock</button>
  
  
    
      <section class="content">
            <div class="row">
              <section>
                <h1></h1>
                <div style="text-align: center;">
            <h1><strong>Sistema de ventas</strong></h1><br>
            <form id="fo3" action="envio.php" method="get" name="fo3">
            <input size="45" type="text" name="skills"  id="skills" placeholder="Ingresa el nombre o codigo del producto" > 
            <input name="mysubmit" type="submit" value="Agregar" />
            </form>
  
</section>
</div>

<div id="result"></div>

<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <script>
  $(function() {
    $( "#skills" ).autocomplete({
      source: 'search.php'
    });
  });
  </script>
</head>
<body>
 


          </div>
          
      <br>
         <br>
          <?php 

      include("database.php");
      $categoria = $database->prepare("SELECT * FROM yara.Carrito");
            $categoria->execute();

            $resultado = $categoria->fetchall();
           ?>
           

      <div class="box" >
                  <div class="box-header">
                    <h3 class="box-title">Productos actuales</h3>
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body no-padding">
                    <table class="table table-striped">
                      <tr>
                        <th style="width: 10px;text-align: center">Codigo</th>
                        <th style="width: 40%;text-align: center">Producto</th>
                        <th style="width: 10%;text-align: center" >Precio * unidad</th>
                        <th style="text-align: center">Cantidad</th>
                        <th style="text-align: center">Total </th>
                        
                        <th style="width: 40px;text-align: center">Añadir</th>
                        <th style="width: 40px;text-align: center">Quitar</th>
                        <th style="width: 40px;text-align: center">Eliminar</th>
                        
                      </tr>
          
                  


<?php 
        $_Session["suma"] = 0;
            foreach ($resultado as $key => $value) {     
              $_Session["suma"] = $_Session["suma"]+($value[2]* $value[3]);
            ?>                  
                 
              <tr>
                        <td style="text-align: center"><?php echo $value[0] ?></td>
                        <td style="text-align: center"><?php echo $value[1] ?></td>
                        <td style="text-align: center">
                          <?php echo $value[2] ?>
                        </td>
                        <td style="text-align: center"><?php echo $value[3] ?></td>
                        <td style="text-align: center"><?php echo $value[3]*$value[2] ?></td>
                        
                        <td style="text-align: center"><button><span class="badge bg-green boton">+</span></button>
                        </td>
                        <td><button><span class="badge bg-yellow resta">-</span></button>
                        </td>
                        <td><button><span class="badge bg-red elimina">x</span></button>
                        </td>
                      </tr>
              <?php
            }
            
         ?>   
</table>
         
      </div> 
          <br><br><br>
          <style>
            .linea
              {
                  display: inline-block;
              }
          </style>
          <div >
          <div class="col-xs-4 col-md-4">
            <h2>Total venta : <?php echo $_Session['suma'] ?> </h2>
    </div>
    <div class="col-xs-4 col-md-6 col-md-push-2">
        <button type="button" class="btn btn-block pull-middle linea" name="vender" data-toggle="modal" data-target="#modal-default">
                      Vender
                    </button> 
    </div>
    
          
     
  <section class="content">
     <!-- Trigger/Open The Modal -->

      
<script>
function cal() {
  try {
    var a = parseInt(document.f.num1.value),
        b = parseInt(document.f.num2.value);
    document.f.sum.value = b - a;
  } catch (e) {
  }
}
</script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.22/angular.min.js"></script>

<div class="modal fade" id="modal-default">
  <div ng-app="">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                
          <form name="f" action="vender.php" method="post">
  <h4 class="modal-title">Total a pagar</h4><input type="number" name="num1" value=<?php echo $_Session['suma'] ?> readonly="true" />

  
  <h4 class="modal-title">Pagaras con</h4><input type="number" name="num2" value="0" onchange="cal()" />

  <h4 class="modal-title">Vuelto</h4><input type="number" name="sum" value="0" readonly="readonly" />

          </div>
              </div>
              <div class="modal-footer">
                <a href="index.php"><button type="button" class="btn btn-default pull-left" data-dismiss="modal"> Cancelar Venta</button></a>
                <button type="submit" class="btn btn-primary ">Vender</button>
              </div>
            </div>
        </form> 
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
    </section>
    </section>
<input type="hidden" name="oculto" id="oculto" >
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js" type="text/javascript"></script>
 
    <script>
    $(document).ready(function(){
        $(".boton").click(function(){
 
            var valores="";
 
            // Obtenemos todos los valores contenidos en los <td> de la fila
            // seleccionada
            $(this).parents("tr").find("td").each(function(){
                valores+=$(this).html()+"\n";
            });
            var res = valores.split("\n");
            
            document.getElementById("skills").value = res[0];
            window.location.replace("envio.php?skills="+res[0]);

            
            }); 

        });
    

    $(document).ready(function(){
        $(".resta").click(function(){
 
            var valores="";
 
            // Obtenemos todos los valores contenidos en los <td> de la fila
            // seleccionada
            $(this).parents("tr").find("td").each(function(){
                valores+=$(this).html()+"\n";
            });
            var res = valores.split("\n");
            
            document.getElementById("skills").value = res[0];
            window.location.replace("resta.php?skills="+res[0]);

            
            }); 

        });

    $(document).ready(function(){
        $(".elimina").click(function(){
 
            var valores="";
 
            // Obtenemos todos los valores contenidos en los <td> de la fila
            // seleccionada
            $(this).parents("tr").find("td").each(function(){
                valores+=$(this).html()+"\n";
            });
            var res = valores.split("\n");
            
            document.getElementById("skills").value = res[0];
            if (confirm("Seguro que deseas eliminar "+res[1])) 
            {
              window.location.replace("elimina.php?skills="+res[0]);  
            }
            

            
            }); 

        });
    
    </script>

<script>

// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

        </section>
      </div>
      

      

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Mamores   Studio</a>.</strong> All rights
    reserved.
  </footer>
  </section>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="bower_components/raphael/raphael.min.js"></script>
<script src="bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="bower_components/moment/min/moment.min.js"></script>
<script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
</body>
</html>
