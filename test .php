<?php session_start(); include 'header.php'; ?>

      
       
         
        <div id="Page">

            quelle date souhaitez vous  ? 

           
           
           <?php 
           $to ="selma.elkharroubi@gmail.com";
           $subject ="selma";
           $message="coucou selma";
           if(mail( $to, $subject, $message)) {
               echo "Mail envoyé avec succès."; 
           } else {
              echo "Un problème est survenu."; 
            exit; 
           }
            
            
           
            ?> 
        
        </div>

        <footer>
            <p>
            © Fresh home IDF - SIRET : 89518531200017 Adresse : 7 sq. du village 95110 Sannois. Téléphone : 06.69.44.50.78  <br> Hébergeur : CY Tech - 2 avenue du Parc 95000 Cergy. Téléphone : 07.67.83.06.11 
            </p>
        </footer>
    </body> 
</html>