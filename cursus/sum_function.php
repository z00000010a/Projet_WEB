<?php
             
             function totale($credit,$regle){
                 echo "
              <h5>Totaux</h5>
              <span omit-tag=''></span><table class='profil' summary='profil' cellspacing='0' cellpadding='0'>
                <tbody><tr>
                  <td class='coin-sg'></td>
                  
                    <th class='entete-haut ent-categ'>CS</th>
                  
                    <th class='entete-haut ent-categ'>TM</th>
                  
                    <th class='entete-haut ent-categ'>ST</th>
                  
                    <th class='entete-haut ent-categ'>EC</th>
                  
                    <th class='entete-haut ent-categ'>ME</th>
                  
                    <th class='entete-haut ent-categ'>CT</th>
                  
                    <th class='entete-haut ent-categ'>HP</th>
                  
                    <th class='entete-haut ent-categ'>REGLE</th>
                  
                  <td style='border: none'></td>
                </tr>
                
                  <tr>
                    <td class='entete-haut sem'>
                      <b>TCBR</b>
                    </td>
                          <td colspan='2.0' align='center'>
                            <span>
                              <b>
                                <span>";
                                echo $credit[0];
                                echo "
                                </span>
                                
                                  <span>";
                                    if($regle=="actuel"){
                                        echo "/52";
                                    }else{
                                        echo "/42";
                                    }
                                  echo "</span>
                                
                              </b>
                              
                            </span>
                          </td>

                    <td colspan='7' style='border: none'></td>
                  </tr>

                  <tr>
                    <td class='entete-haut sem'>
                      <b>FIL</b>
                    </td>

                          <td colspan='2.0' align='center'>
                            <span>
                              <b>
                                <span>";
                                echo $credit[1];
                                echo "
                                </span>
                                
                                  <span>";
                                    if($regle=="actuel"){
                                        echo "/30";
                                    }else{
                                        echo "/18";
                                    }
                                  echo "</span>
                                
                              </b>
                              
                            </span>
                          </td>

                    <td colspan='7' style='border: none'></td>
                  </tr>

                  <tr>
                    <td class='entete-haut sem'>
                      <b>TCBR+FIL</b>
                    </td>
                    
                        
                          <td colspan='1.0' align='center'>
                            <span>
                              <b>
                                <span>";
                                echo $credit[2];
                                echo "
                                </span>
                                
                                  <span>";
                                    if($regle=="actuel"){
                                        echo "/30";
                                    }else{
                                        echo "/24";
                                    }
                                  echo "</span>
                                
                              </b>
                              
                            </span>
                          </td>
                        
                        
                          <td colspan='1.0' align='center'>
                            <span>
                              <b>
                                <span>";
                                echo $credit[3];
                                echo "
                                </span>
                                
                                  <span>";
                                    if($regle=="actuel"){
                                        echo "/30";
                                    }else{
                                        echo "/24";
                                    }
                                  echo "</span>
                                
                              </b>
                              
                            </span>
                          </td>

                    <td colspan='7' style='border: none'></td>
                  </tr>
                  
                
                  <tr>
                    <td class='entete-haut sem'>
                      <b>Global</b>
                    </td>

                          <td colspan='1.0' align='center'>
                            <span>
                              <b>
                                <span>";
                                echo $credit[4];
                                echo "
                                </span>
                                
                              </b>
                              
                            </span>
                          </td>
                        
                          <td colspan='1.0' align='center'>
                            <span>
                              <b>
                                <span>";
                                echo $credit[5];
                                echo "
                                </span>
                                
                              </b>
                              
                            </span>
                          </td>
                        
                      
                    
                      
                        
                          <td colspan='1.0' align='center'>
                            <span>
                              <b>
                                <span>";
                                echo $credit[6];
                                echo "
                                </span>
                                
                                  <span>/60</span>
                                
                              </b>
                              
                            </span>
                          </td>
                        
                      
                    
                      
                        
                          <td colspan='1.0' align='center'>
                            <span>
                              <b>
                                <span>";
                                echo $credit[7];
                                echo "
                                </span>
                                
                                  <span>/12</span>
                                
                              </b>
                              
                            </span>
                          </td>
                        
                      
                    
                      
                        
                          <td colspan='1.0' align='center'>
                            <span>
                              <b>
                                <span>";
                                echo $credit[8];
                                echo "
                                </span>
                                
                                  <span>/4</span>
                                
                              </b>
                              
                            </span>
                          </td>
                        
                      
                    
                      
                        
                          <td colspan='1.0' align='center'>
                            <span>
                              <b>
                                <span>";
                                echo $credit[9];
                                echo "
                                </span>
                                
                                  <span>/4</span>
                                
                              </b>
                              
                            </span>
                          </td>
                        
                      
                    
                      
                        
                          <td colspan='1.0' align='center'>
                            <span>
                              <b>
                                <span>";
                                echo $credit[10];
                                echo "
                                </span>
                                
                              </b>
                              
                            </span>
                          </td>
                        
                      
                    
                      
                        
                          <td colspan='1.0' align='center'>
                            <span>
                              <b>
                                <span>
                                
                                
                                </span>
                                
                              </b>
                              
                            </span>
                          </td>
                        
                      
                    
                      
                        
                          <td colspan='1.0' align='center'>
                            <span>
                              <b>
                                <span>";
                                echo $credit[11];
                                echo "
                                </span>
                                
                                  <span>/180</span>
                                
                              </b>
                              
                            </span>
                          </td>
                        
                    <td colspan='7' style='border: none'></td>
                  </tr>
                  
                    <tr>
                            <td colspan='1.0' style='border: none'></td>
                            <td colspan='2.0' align='center'>
                              <span>
                                <b>
                                <span>";
                                    if($regle=="actuel"){
                                        echo "Pas de besoin";
                                    }else{
                                        echo "$credit[12]"."</span>";
                                        echo "<span>/84";
                                    }
                                  echo "</span>
                                
                            </td>
                            <td colspan='1' style='border: none'></td>
                    
                    
                            <td colspan='1.0' style='border: none'></td>
                            <td colspan='2.0' align='center'>
                              <span>
                                <b>
                                  <span>";
                                echo $credit[13];
                                echo "
                                </span>
                                    <span>/16</span>
                                </b>
                                
                              </span>
                            </td>
                            <td colspan='6' style='border: none'></td>  
                    </tr>
              </tbody></table>
             <br>";}
            ?>
