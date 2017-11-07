<?php
function titre($numero, $nom, $prenom, $branch, $num,$regle) {
    echo "
          <table cellspacing='0' cellpadding='0' border='0'>
        <tbody><tr>
          <td>
            <table class='resume' cellspacing='0' cellpadding='0'>
              <tbody>
              <tr>
                <td>
                  <table style='border:0' width='100%' cellspacing='0' cellpadding='0' border='0'>
                    <tbody><tr style='border:0'>
                      <td style='border:0' align='left'>
                        <span>&nbsp;";
    echo $nom . "    " . $prenom;
    echo "
                        </span>
                      </td>
                      <td style='border:0' align='right'>
                        <span>";
    echo "$prenom.$nom";
    echo "@utt.fr</span>
                        N° 
                        <b>";
    echo "$numero";
    echo "</b>
                      </td>
                    </tr>
                  </tbody></table>
                </td>
              </tr>

              <tr>
                <td>

                    <b>Dernière inscription</b>
                    <span>";
    echo $branch;
    echo "</span>

                </td>
              </tr>
            </tbody></table>
          </td>
          <td style='padding-left:5px;padding-right:5px' valign='top' align='center'>
            <ul style='text-align:left' id='autresLien'>
              
	              
	              <li>
	                <a onclick='Element.show('busy10');' href='../action/ExportCSV.php'>Export de cursus via des fichiers csv </a>
	              </li>
                    <li>";if(!isset($regle)||$regle=="actuel"){
                    echo " <a  href='../Environnement numerique de travail - UTT_files/cursus_f.php'>Règle future</a>";
                    }else{
                    echo " <a  href='../Environnement numerique de travail - UTT_files/cursus.php'>Règle actuel</a>";
                    }
                    echo "
              </li>
              <br>
            </ul>
          </td>
        </tr>
      </tbody></table>";
}

?>
     