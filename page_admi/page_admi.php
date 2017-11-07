<?php
require_once("../database/ajoute.php");
$ls_etu=new Ajoute();
$listEtu=$ls_etu->getEtu();
?>

<html>
    <head>

        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>projet</title>
        <!-- CSS Files Fonts and Icons-->
        <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" />
        <link href="../bootstrap/css/paper-bootstrap-wizard.css" rel="stylesheet" />
        <link href="../bootstrap/css/themify-icons.css" rel="stylesheet">
        <link rel="stylesheet" href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css">
        <!--ie浏览器兼容-->
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <!--end ie浏览器兼容--> 
        <!--滚动栏--> 
        <style type="text/css">
            .bodycontainer { max-height: 400px; width: 100%; margin: 0; overflow-y: auto; }
            .table-scrollable { margin: 0; padding: 0; }
        </style>
    </head>
    <body>
        <div class="image-container set-full-height" style="background-image: url('../bootstrap/img/paper-2.jpg')"> 
            <div class="col-sm-8 col-sm-offset-2">
                <br><br><br>                   
                <div class="panel panel-default">
                    <!-- Default panel contents -->
                    <div class="panel-heading">
                        <!-- liste des etudiant-->
                        <table>
                            <tr>
                                <th> 
                                    LISTE DES ETUDIANTS &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                </th>
                                <!-- chercher-->
                                <!-- chercher-->
                                <th>
                                    <form action="page_chercher.php" method="get" class="form-horizontal">
                                        <div class="input-group search-input-group">
                                            <input type="hidden" name="scope" value="1">
                                            <input name="key" autocomplete="off" type="text" class="form-control" placeholder="Entrer le nom de l'étudiant" >
                                            <span class="input-group-addon">
                                                <button type="submit">
                                                    <span class="glyphicon glyphicon-search"></span>
                                                </button> 
                                            </span>
                                        </div>
                                    </form>
                                </th>
                                <!--ajouter -->
                                <th>

                                    <div class="pull-right">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Ajouter un(e) étudiant(e)
                                        <a href="../page_admi/ajoute_etu.html">
                                            <span class="glyphicon glyphicon-plus"></span>
                                        </a>
                                        <a href="../action/joute_csv.html">
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Import_CSV
                                            <span class="glyphicon glyphicon-plus"></span>
                                        </a>
                                    </div>
                                </th>

                            </tr>
                        </table>                       
                    </div>

                    <!-- Table -->
                    <div class="bodycontainer scrollable">
                        <table id="testTable" class="table table-hover table-scrollable">

                            <thead>
                                <tr>
                                    <th>N°Etudiant</th>
                                    <th>Nom</th>
                                    <th>Prenom</th>
                                    <th>Formation</th>
                                    <th>Consultation</th>
                                    <th>Modification</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($listEtu as $value){
                                    echo "<tr>
                                    <td>";echo $value[0];
                                    echo "</td>
                                    <td>";echo $value[1];
                                    echo "</td>
                                    <td>";echo $value[2];
                                    echo "</td>
                                    <td>";echo $value[3];
                                     echo "</td>
                                    <td><form action='../action/consultation.php' method='post'>
                                             <input type='hidden' name='numero' value='";
                                     echo $value[0];
                                     echo "'>
                                            <button type='submit' class='btn btn-warning btn-xs'>Consulter</button>
                                    </form>
                                    </td>
                                    <td><form action='../action/modifier.php' method='post'>
                                             <input type='hidden' name='numero' value='";
                                     echo $value[0];
                                     echo "'>
                                            <button type='submit' class='btn btn-warning btn-xs'>&nbsp&nbspModifier&nbsp&nbsp</button>
                                    </form>
                                    </td>
                                </tr>";
                                }
                                
                                ?>
                                
                                <!-- fin test -->


                            </tbody>  
                        </table>
                    </div> 

                </div> 
            </div>
        </div>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="../bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>


