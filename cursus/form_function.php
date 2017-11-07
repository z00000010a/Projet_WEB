<?php

function ligne_chaque_sem($sems, $numsem, $branch,$les_sem,$filiere_arr) {
    $fi = FALSE;
    $newstr = substr($branch,0,strlen($branch)-1);
    echo "<tr>
                    <td class='entete-haut sem'>
                      <b>Automne 2016 </b>
                      <br>
                      <span> $newstr  $numsem </span>
                      <br>
                      <br>
                    </td>

                      <td class='uvs'>
                        <table cellspacing='0' cellpadding='0' border='0'>
                              <tbody>";
    if (isset($sems[0])) {
        foreach ($sems[0] as $cle => $value) {
            echo "<tr>
                                <td style='width:95%;padding:0;white-space:nowrap'>
                                  $cle&nbsp;$value&nbsp;6&nbsp;
                                </td>
                                <td style='width:5%;padding:0;line-height:12px;' class='symb symb9650'>";
            foreach ($filiere_arr as $value) {
                if ($value == $cle) {
                    $fi = TRUE;
                }
            }
            if ($fi == FALSE) {
                echo "▲";
            } else {
                echo " ●";
                $fi = FALSE;
            }
            echo "</td>
                              </tr>";
        }
    }
    echo "</tbody></table>
                      </td>
                      
                        <td class='uvs'>
                        <table cellspacing='0' cellpadding='0' border='0'>
                              <tbody>";
    if (isset($sems[1])) {
        foreach ($sems[1] as $cle => $value) {
            echo "<tr>
                                <td style='width:95%;padding:0;white-space:nowrap'>
                                  $cle&nbsp;$value&nbsp;6&nbsp;
                                </td>
<td style='width:5%;padding:0;line-height:12px;' class='symb symb9650'>";
            foreach ($filiere_arr as $value) {
                if ($value == $cle) {
                    $fi = TRUE;
                }
            }
            if ($fi == FALSE) {
                echo "▲";
            } else {
                echo " ●";
                $fi = FALSE;
            }
            echo "</td>                              </tr>";
        }
    }
    echo "</tbody></table>
                      </td>
                       
                            
                        

                        <td class='uvs'>
                        <table cellspacing='0' cellpadding='0' border='0'>
                              <tbody>";
    if (isset($sems[2])) {
        foreach ($sems[2] as $cle => $value) {
            echo "<tr>
                                <td style='width:95%;padding:0;white-space:nowrap'>
                                  $cle&nbsp;$value&nbsp;6&nbsp;
                                </td>
                                <td style='width:5%;padding:0;line-height:12px;' class='symb symb9650'></td>
                              </tr>";
        }
    }
    echo "</tbody></table>
                      </td>
                        

                        <td class='uvs'>
                        <table cellspacing='0' cellpadding='0' border='0'>
                              <tbody>";
    if (isset($sems[3])) {
        foreach ($sems[3] as $cle => $value) {
            echo "<tr>
                                <td style='width:95%;padding:0;white-space:nowrap'>
                                  $cle&nbsp;$value&nbsp;4&nbsp;
                                </td>
<td style='width:5%;padding:0;line-height:12px;' class='symb symb9650'></td>                              </tr>";
        }
    }
    echo "</tbody></table>
                      </td>

                      <td class='uvs'>
                        <table cellspacing='0' cellpadding='0' border='0'>
                              <tbody>";
    if (isset($sems[4])) {
        foreach ($sems[4] as $cle => $value) {
            echo "<tr>
                                <td style='width:95%;padding:0;white-space:nowrap'>
                                  $cle&nbsp;$value&nbsp;4&nbsp;
                                </td>
                                <td style='width:5%;padding:0;line-height:12px;' class='symb symb9650'></td>
                              </tr>";
        }
    }
    echo "</tbody></table>
                      </td>
                    
                      
                      <td class='uvs'>
                        <table cellspacing='0' cellpadding='0' border='0'>
                              <tbody>";
    if (isset($sems[5])) {
        foreach ($sems[5] as $cle => $value) {
            echo "<tr>
                                <td style='width:95%;padding:0;white-space:nowrap'>
                                  $cle&nbsp;$value&nbsp;4&nbsp;
                                </td>
                                <td style='width:5%;padding:0;line-height:12px;' class='symb symb9650'></td>
                              </tr>";
        }
    }
    echo "</tbody></table>
                      </td>
                    
                      
                      <td class='uvs'>
                        <table cellspacing='0' cellpadding='0' border='0'>
                              <tbody>";
    if (isset($sems[6])) {
        foreach ($sems[6] as $cle => $value) {
            echo "<tr>
                                <td style='width:95%;padding:0;white-space:nowrap'>
                                  $cle&nbsp;$value&nbsp;6&nbsp;
                                </td>
                                <td style='width:5%;padding:0;line-height:12px;' class='symb symb9650'></td>
                              </tr>";
        }
    }
    echo "</tbody></table>
                      </td>
                    
                      

                      </td>
                  </tr>
                  
                  <!-- fin testIci -->
                  <tr class='stotal odd'>
                    <td class='lib-stotal'>
                        <b>Total semestre</b>
                    </td>
                    
                      <td class='stotal'>
                        <span>
                        ";
    if (isset($sems[0])) {
        $totale = 0;
        foreach ($sems[0] as $cle => $value) {
            $totale = $totale + 6;
        }
        if ($totale != 0) {
            echo $totale;
        }
    }
    echo "
                        </span>
                      </td>
                    
                      <td class='stotal'>
                        <span>";
    if (isset($sems[1])) {
        $totale = 0;
        foreach ($sems[1] as $cle => $value) {
            $totale = $totale + 6;
        }
        if ($totale != 0) {
            echo $totale;
        }
    }
    echo "
                            </span>
                      </td>
                    
                      <td class='stotal'>
                        <span>";
    if (isset($sems[2])) {
        $totale = 0;
        foreach ($sems[2] as $cle => $value) {
            $totale = $totale + 6;
        }
        if ($totale != 0) {
            echo $totale;
        }
    }
    echo "
                            </span>
                      </td>
                    
                      <td class='stotal'>
                        <span>";
    if (isset($sems[3])) {
        $totale = 0;
        foreach ($sems[3] as $cle => $value) {
            $totale = $totale + 4;
        }
        if ($totale != 0) {
            echo $totale;
        }
    }
    echo "
                            </span>
                      </td>
                    
                      <td class='stotal'>
                        <span>";
    if (isset($sems[4])) {
        $totale = 0;
        foreach ($sems[4] as $cle => $value) {
            $totale = $totale + 4;
        }
        if ($totale != 0) {
            echo $totale;
        }
    }
    echo "
                            </span>
                      </td>
                    
                      <td class='stotal'>
                        <span></span>
                      </td>
                    
                      <td class='stotal'>
                        <span>";
    if (isset($sems[5])) {
        $totale = 0;
        foreach ($sems[5] as $cle => $value) {
            $totale = $totale + 4;
        }
        if ($totale != 0) {
            echo $totale;
        }
    }
    echo "
                            </span>
                      </td>
                    
                      <td class='stotal'>
                        <span>";
    if (isset($sems[6])) {
        $totale = 0;
        foreach ($sems[6] as $cle => $value) {
            $totale = $totale + 6;
        }
        if ($totale != 0) {
            echo $totale;
        }
    }
    echo "
                            </span>
                      </td>
                    
                  </tr>";
}

?>