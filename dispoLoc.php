<?php  // vérification disponibilité 
              session_start(); 
              $date = $_POST["date"]; 
              $timestamp = strtotime($date); 
              $choix = date("d-n-y", $timestamp );


                $_SESSION['datee'] = $choix; 
                $array = array(); 
                if (($handle = fopen("./data/PlanningLoc.csv", "r+")) !== FALSE): //recup du planning
                   $i = 0;  
                   while (($data = fgetcsv($handle, 1000, ",")) !== FALSE):
                       if($i>0){
                            array_push($array, $data[0]); 
                            if (in_array($_SESSION['datee'], $array)){
                                header('Location: ../panier.php');
                                $_SESSION['reserve'] = 1; 
                            } 
                            else {
                                $_SESSION['reserve'] = 2; 
                                header('Location: ../panier.php');
                            }
                        } 
                        else {
                            $i++;
                        }
                      
                    endwhile;
                   $ajout = "\r".$_SESSION['datee'].",".$_SESSION['PanierRef'][$_SESSION['i']].",".$_SESSION['nom'].",".$_SESSION ['adresse'];
                   fwrite($handle, $ajout);
                   fclose($handle);
                endif;

            ?>