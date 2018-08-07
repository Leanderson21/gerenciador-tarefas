
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="./assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    GERENCIADOR
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="./assets/css/material-dashboard.css?v=2.1.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="./assets/demo/demo.css" rel="stylesheet" />
  <style>.wd{width: 150%;}</style>
</head>
 
                              <!-- CORPO --> 
<body class="">
      <div class="wd">
      <div class="content">
        <div class="container-fluid">
          <div class="row">
             <div class="col-md-8">
              <div class="card">                  <!-- TITULO -->
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Cadastrar tarefa</h4>
                  
                </div>
                <div class="card-body">
                  <form method="post" action="cadastro.php">
                    <div class="row">              
                     <div class="col-md-3">
                        <div class="form-group">
                        </div>         
                      </div>
                    </div>
                    <div class="row">      
                      <div class="col-md-12">            
                        <div class="form-group">            <!-- CAMPO TAREFA -->
                          <div class="form-group">
                            <label class="bmd-label-floating"> Digite aqui sua tarefa....</label>
                            <textarea name="descricao" class="form-control" rows="5"></textarea>
                          </div>
                        </div>
                      </div>
                    </div>                                   <!-- BOTÃO ENVIAR DADOS -->
                    <button type="submit" name="btn-cad" class="btn btn-primary pull-right">Cadastrar</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
           
   
          
  <!--   CHAMADAS JS   -->
  <script src="./assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="./assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="./assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
  <script src="./assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chartist JS -->
  <script src="./assets/js/plugins/chartist.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="./assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="./assets/js/material-dashboard.min.js?v=2.1.0" type="text/javascript"></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="./assets/demo/demo.js"></script>
</body>

</html>