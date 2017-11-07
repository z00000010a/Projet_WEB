
<html>
    <head>
        <?php require_once("../database/Tetudiant.php") ?>
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
            .bodycontainer { max-height: 450px; width: 100%; margin: 0; overflow-y: auto; }
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
                                    <?php
                                    $info= $_GET['key'];
                                    echo ("<p class='text-danger'> Résultat pour $info &nbsp&nbsp </p>");
                                    ?>  
                               </th>
                                <!-- back -->
                                <th> <a href="page_admi.php" class='text-info'>BACK</a></th>
                                <!--ajouter -->
                                <th>
                                    <div class="pull-right">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Ajouter un(e) étudiant(e)
                                        <a href="ajoute_etu.html">
                                            <span class="glyphicon glyphicon-plus"></span> Ajouter
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
                                <!-- faire apparaitre la liste d'etudiant -->
                                <?php
                                $info = $_GET['key'];
                                $liste = getListeEtudiant();
                                $trouve = FALSE;
                                foreach ($liste as $value) {
                                    if (($value[0] == $info) || ($value[1] == $info) || ($value[2] == $info) || ($value[3] == $info)||($info==substr($value[3],0,strlen($value[3])-1))) {
                                        echo("<tr>");
                                        echo("<td>$value[0]</td>");
                                        echo("<td>$value[1]</td>");
                                        echo("<td>$value[2]</td>");
                                        echo("<td>$value[3]</td>");
                                        echo "
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
                                        echo("</tr>");
                                        $trouve = TRUE;
                                    }
                                         }
                               
                                    if ($trouve == FALSE) {
                                        echo("<tr>");
                                        echo("<td>Aucun resultat pour $info</td>");
                                        echo("</tr>");
                                }
                                ?>
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


