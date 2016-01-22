<?php 
    session_start();
    $rol = $_SESSION['sess_userrole'];
    if(!isset($_SESSION['sess_username']) && $rol!="user"){
      header('Location: index.php?err=2');
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <meta name="description" content="Sistema de Control  y Registro de Calificaciones">
    <meta name="author" content="Lic. Esdras y Mtro. Isaías">
    <title>MicroSISE</title>

    <!-- Framework Bootstrap  (para el diseño) -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Navegacion</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="http://localhost/login/userInicio.php">Estructuras de Datos Avanzadas</a>
        </div>

        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Usuario : <?php echo $_SESSION['sess_nombre'];?></a></li>
            <li><a href="salir.php">Salir</a></li>
          </ul>
        </div>
      </div>
    </div>

    <div class="container homepage">

  <!-- ----------------------Inicio del código-------------- -->
            <div class="mail-box">
                <aside class="sm-side">
                    <div class="user-head">
                        <a class="inbox-avatar" href="javascript:;">
                            <img width="64" hieght="60" src="./images/programador.png">
                        </a>
                        <div class="user-name">
                            <h5><a href="#"><?php echo $_SESSION['sess_nombre'];?></a></h5>
                            <span><a href="#"><?php echo $_SESSION['sess_username'];?>@upb.edu.mx</a></span>
                        </div>
                        <a class="mail-dropdown pull-right" href="javascript:;">
                            <i class="fa fa-chevron-down"></i>
                        </a>
                    </div>
                    <div class="inbox-body">
                        <a href="#myModal" data-toggle="modal" title="Compose" class="btn btn-compose">
                              Actividades
                          </a>
                        <!-- Modal -->
                        <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade" style="display: none;">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                        <h4 class="modal-title">Compose</h4>
                                    </div>
                                    <div class="modal-body">
                                        <form role="form" class="form-horizontal">
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label">To</label>
                                                <div class="col-lg-10">
                                                    <input type="text" placeholder="" id="inputEmail1" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label">Cc / Bcc</label>
                                                <div class="col-lg-10">
                                                    <input type="text" placeholder="" id="cc" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label">Subject</label>
                                                <div class="col-lg-10">
                                                    <input type="text" placeholder="" id="inputPassword1" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label">Message</label>
                                                <div class="col-lg-10">
                                                    <textarea rows="10" cols="30" class="form-control" id="" name=""></textarea>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-lg-offset-2 col-lg-10">
                                                    <span class="btn green fileinput-button">
                                                        <i class="fa fa-plus fa fa-white"></i>
                                                        <span>Attachment</span>
                                                    <input type="file" name="files[]" multiple="">
                                                    </span>
                                                    <button class="btn btn-send" type="submit">Send</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>
                        <!-- /.modal -->
                    </div>
                    <ul class="inbox-nav inbox-divider">
                        <li class="active">
                            <a href="#"><i class="fa fa-inbox"></i> Avisos <span class="label label-danger pull-right">2</span></a>

                        </li>
                        <li>
                            <a href="#"><i class="fa fa-envelope-o"></i> Archivos</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bookmark-o"></i> Tareas</a>
                        </li>
                        <li>
                            <a href="#"><i class=" fa fa-external-link"></i> Evaluación<span class="label label-info pull-right">30</span></a>
                        </li>

                    </ul>
                    <ul class="nav nav-pills nav-stacked labels-info inbox-divider">
                        <li>
                            <h4>Tópicos</h4> </li>
                        <li>
                            <a href="#"> <i class=" fa fa-sign-blank text-danger"></i> Mapa mental </a>
                        </li>
                        <li>
                            <a href="#"> <i class=" fa fa-sign-blank text-success"></i> Diseño </a>
                        </li>
                        <li>
                            <a href="#"> <i class=" fa fa-sign-blank text-info "></i> Programas </a>
                        </li>
                        <li>
                            <a href="#"> <i class=" fa fa-sign-blank text-warning "></i> Java </a>
                        </li>
                        <li>
                            <a href="#"> <i class=" fa fa-sign-blank text-primary "></i> PHP </a>
                        </li>
                    </ul>
                    <ul class="nav nav-pills nav-stacked labels-info ">
                        <li>
                            <h4>Notas</h4> </li>
                        <li>
                            <a href="#"> <i class=" fa fa-circle text-success"></i>En tiempo
                                <p>Puedes subir tarea</p>
                            </a>
                        </li>
                        <li>
                            <a href="#"> <i class=" fa fa-circle text-danger"></i>Atrasado
                                <p>No aceptado</p>
                            </a>
                        </li>

                    </ul>

                    <div class="inbox-body text-center">
                        <div class="btn-group">
                            <a class="btn mini btn-primary" href="javascript:;">
                                <i class="fa fa-plus"></i>
                            </a>
                        </div>
                        <div class="btn-group">
                            <a class="btn mini btn-success" href="javascript:;">
                                <i class="fa fa-phone"></i>
                            </a>
                        </div>
                        <div class="btn-group">
                            <a class="btn mini btn-info" href="javascript:;">
                                <i class="fa fa-cog"></i>
                            </a>
                        </div>
                    </div>

                </aside>
                <aside class="lg-side">
                    <div class="inbox-head">
                        <h3>Localizar tarea</h3>
                        <form action="#" class="pull-right position">
                            <div class="input-append">
                                <input type="text" class="sr-input" placeholder="Buscar">
                                <button class="btn sr-btn" type="button"><i class="fa fa-search"></i></button>
                            </div>
                        </form>
                    </div>
                    <div class="inbox-body">
                        <div class="mail-option">
                            <div class="chk-all">
                                <input type="checkbox" class="mail-checkbox mail-group-checkbox">
                                <div class="btn-group">
                                    <a data-toggle="dropdown" href="#" class="btn mini all" aria-expanded="false">
                                         Todo
                                         <i class="fa fa-angle-down "></i>
                                     </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#"> Nada</a></li>
                                        <li><a href="#"> Leído</a></li>
                                        <li><a href="#"> No leído</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="btn-group">
                                <a data-original-title="Refresh" data-placement="top" data-toggle="dropdown" href="#" class="btn mini tooltips">
                                    <i class=" fa fa-refresh"></i>
                                </a>
                            </div>

                            <ul class="unstyled inbox-pagination">
                                <li><span>1-10 of 22</span></li>
                                <li>
                                    <a class="np-btn" href="#"><i class="fa fa-angle-left  pagination-left"></i></a>
                                </li>
                                <li>
                                    <a class="np-btn" href="#"><i class="fa fa-angle-right pagination-right"></i></a>
                                </li>
                            </ul>
                        </div>
                        <table class="table table-inbox table-hover">
                            <tbody>
                                <tr class="unread">
                                    <td class="inbox-small-cells">
                                        <input type="checkbox" class="mail-checkbox">
                                    </td>
                                    <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                                    <td class="view-message  dont-show">Multiplicación de matrices</td>
                                    <td class="view-message ">Realizar el producto de 2 matrices y almacenar resultado</td>
                                    <td class="view-message  inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                                    <td class="view-message  text-right">9:27 AM</td>
                                </tr>
                                <tr class="unread">
                                    <td class="inbox-small-cells">
                                        <input type="checkbox" class="mail-checkbox">
                                    </td>
                                    <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                                    <td class="view-message dont-show">Programa Recursivo </td>
                                    <td class="view-message">Programa que obtiene el factorial de un número</td>
                                    <td class="view-message inbox-small-cells"></td>
                                    <td class="view-message text-right">31 Ene</td>
                                </tr>
                                <tr class="">
                                    <td class="inbox-small-cells">
                                        <input type="checkbox" class="mail-checkbox">
                                    </td>
                                    <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                                    <td class="view-message dont-show">Mapa mental</td>
                                    <td class="view-message">Mapa mental de árboles binarios </td>
                                    <td class="view-message inbox-small-cells"></td>
                                    <td class="view-message text-right">Feb 02</td>
                                </tr>

                                <tr class="">
                                    <td class="inbox-small-cells">
                                        <input type="checkbox" class="mail-checkbox">
                                    </td>
                                    <td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
                                    <td class="view-message dont-show">Investigación <span class="label label-danger pull-right">urgente</span></td>
                                    <td class="view-message">Arboles binarios</td>
                                    <td class="view-message inbox-small-cells"></td>
                                    <td class="view-message text-right">Feb 03</td>
                                </tr>
                                <tr class="">
                                    <td class="inbox-small-cells">
                                        <input type="checkbox" class="mail-checkbox">
                                    </td>
                                    <td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
                                    <td class="view-message dont-show">Recursividad </td>
                                    <td class="view-message">Investigación conceptos</td>
                                    <td class="view-message inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                                    <td class="view-message text-right">Feb 14</td>
                                </tr>

                                <tr class="">
                                    <td class="inbox-small-cells">
                                        <input type="checkbox" class="mail-checkbox">
                                    </td>
                                    <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                                    <td class="view-message dont-show">Exposición<span class="label label-success pull-right">En clase</span></td>
                                    <td class="view-message view-message">Exposición ordenamientos</td>
                                    <td class="view-message inbox-small-cells"></td>
                                    <td class="view-message text-right">Feb 04</td>
                                </tr>

                                <tr class="">
                                    <td class="inbox-small-cells">
                                        <input type="checkbox" class="mail-checkbox">
                                    </td>
                                    <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                                    <td class="view-message dont-show">Colaborativo<span class="label label-info pull-right">En línea</span></td>
                                    <td class="view-message view-message">Conceptos colaborativos</td>
                                    <td class="view-message inbox-small-cells"></td>
                                    <td class="view-message text-right">Ene 24</td>
                                </tr>
                                <tr class="">
                                    <td class="inbox-small-cells">
                                        <input type="checkbox" class="mail-checkbox">
                                    </td>
                                    <td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
                                    <td class="view-message dont-show">Participación</td>
                                    <td class="view-message">Prototipo</td>
                                    <td class="view-message inbox-small-cells"></td>
                                    <td class="view-message text-right">Ene 09</td>
                                </tr>
                                <tr class="">
                                    <td class="inbox-small-cells">
                                        <input type="checkbox" class="mail-checkbox">
                                    </td>
                                    <td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
                                    <td class="dont-show">Trabajo no. 4</td>
                                    <td class="view-message">Resumen de tema</td>
                                    <td class="view-message inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                                    <td class="view-message text-right">Feb 14</td>
                                </tr>
                                <tr class="">
                                    <td class="inbox-small-cells">
                                        <input type="checkbox" class="mail-checkbox">
                                    </td>
                                    <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                                    <td class="view-message dont-show">Uso de la herramienta </td>
                                    <td class="view-message">Dominio de Java </td>
                                    <td class="view-message inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                                    <td class="view-message text-right">Ene 25</td>
                                </tr>


                            </tbody>
                        </table>
                    </div>
                </aside>
            </div>
            <!-- --Find el programa---------------------------------  -->
    </div>    

    <!-- jQuery (necesario para Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!--  Se incluye el framework de boostrap (solo es para el diseño) -->
    <script src="js/bootstrap.min.js"></script>
    </body>
</html>
