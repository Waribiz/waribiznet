<?php

require ("actions/formationsAction.php");

?>

<?php
    include 'views\hearder.php';



    if(!isset($variable)) :
    if(!isset($postuler)) : ?>

        <nav class=" formations"><br><br>
            <h1 ><span class="welcome"> POSTULEZ A NOS FORMATIONS PROFESSIONELLES</span><br><br>
                <span class="waribiz ">WARIBIZ NET </span>
            </h1><br><br>
        
        </nav><br><br>




    <!-- LIENS VERS LES FORMATIONS  -->

    <div class="formFormation">
        <center><h1>Consultez l'une des formations TRADING  </h1></center>
        <form  method="post">
                <input type="hidden" name="forex" value="1">
                <button class="">formation FOREX</button>
        </form>
        <form  method="post">
                <input type="hidden" name="crypto" value="2">
                <button class="">formation CRYPTO MONNAIES</button>
        </form>
        <form  method="post">
                <input type="hidden" name="indices" value="3">
                <button class="">formation INDICES SYNTHETIQUES</button>
        </form>
    </div>
    
        <?php endif;
        
        endif ?>


    <!-- LES FORMATIONS SELON LE CHOIX DE L'USER -->

    <?php
    
    
   if(isset($variable)) { 
            switch ($variable) {
            
            case '1':  //FORMATION FOREX?>

                <div class="forexbg"><!-- DIAPO LORS DE L'ARRIVEE -->
                    
            </div>
                <p class="forextext">
                        Si vous manipulez les devises sans stratégie vous allez (sur du long terme) gagner une fois sur deux, 
                        et perdre une fois sur deux. Globalement Il n’y aurait aucun intérêt.
                        Par contre si vous apprenez les ficelles du Forex et que vous êtes capables de déceler si le cours 
                        d'une parité de devises a plus de probabilité de monter ou de baisser, alors vous serrez capable 
                        d'ouvrir et de fermer des positions, acheteuses ou vendeuses, aux moments opportuns. Vous serez 
                        alors à même de générer des profits substantiels et de faire fructifier votre capital. <br>
                       
                        <img src="images/sacforex.png" alt="image" width="40%" >

                             WARIBIZNET     vous donne accès pour cela aux informations critiques qui influent le marché et aux 
                        études qui permettent de prévoir si le cours d’une parité a plus de probabilité de tendre à la hausse 
                        ou à la baisse. Des outils seront mis à votre disposition cours de cette formation  dans la rubrique « Prévisions ».
                        De plus nous sommes fiers de pouvoir partager avec vous le savoir et l’expérience de toute une 
                        communauté qui saura vous accueillir et vous conseiller sur vos investissements dans la section 
                        communauté forex à l'issu de la formation.

                       <center>
                            <form  method="post">
                                <input type="hidden" name="postuler" value="1">
                                <input type="hidden" name="value" value="FORMATION FOREX">
                                <button name="postule" class="btn btn-primary">Postulez maintenant</button>
                          </form>
                       </center> 
                </p>
                  



            <?php      break;
                case '2'://FORMATION CRYPTO ?>
                  <div class="forexbg"><br><br><br><br><br><br><br> <!-- DIAPO LORS DE L'ARRIVEE -->
                  <p class="forextext">bonsoir formation crypto<br><br>
                  
                  Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est, sequi obcaecati, et maxime distinctio esse cum quaerat dolores perferendis nemo accusamus similique eum eaque commodi nobis facilis velit nihil maiores!
                  Explicabo corporis placeat culpa earum a, quisquam enim non veritatis est maxime distinctio. Laborum aspernatur minima aperiam minus. Perspiciatis rerum impedit tempore itaque molestiae debitis magni. Laborum non accusamus in!
                  Sunt reiciendis cupiditate iure molestiae! Pariatur maiores harum enim minima dicta voluptates dignissimos amet qui vel tempore natus laborum, voluptatum labore explicabo iure sunt voluptas nam, sed, reiciendis porro cum?
                  Nemo rerum modi quas adipisci debitis ducimus consequatur necessitatibus eligendi, vitae est, deserunt animi? Culpa, asperiores dolorem molestias dolor sunt odio repudiandae aperiam et illo maiores, distinctio at reprehenderit cupiditate?
                  Expedita quibusdam ipsam, repellendus ad nisi labore perferendis alias eius obcaecati nulla corrupti ea quas. Deserunt minima natus exercitationem officiis ad molestiae doloremque? Optio, eaque iusto. Amet fugit ad ipsa!
                  
                  
                  
                  
                  
                  <center>
                            <form  method="post">
                                <input type="hidden" name="postuler" value="1">
                                <input type="hidden" name="value" value="FORMATION CRYPTO">
                                <button name="postule" class="btn btn-primary">Postulez maintenant</button>
                          </form>
                       </center> 
                  </p>  
                <?php  break;
                
                case '3': //FORMATION INDICES?>
                     
                <div class="forexbg"><br><br><br><br><br><br><br> <!-- DIAPO LORS DE L'ARRIVEE -->
                  <p class="forextext">bonsoir formation indice<br><br>
                  
                  Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est, sequi obcaecati, et maxime distinctio esse cum quaerat dolores perferendis nemo accusamus similique eum eaque commodi nobis facilis velit nihil maiores!
                  Explicabo corporis placeat culpa earum a, quisquam enim non veritatis est maxime distinctio. Laborum aspernatur minima aperiam minus. Perspiciatis rerum impedit tempore itaque molestiae debitis magni. Laborum non accusamus in!
                  Sunt reiciendis cupiditate iure molestiae! Pariatur maiores harum enim minima dicta voluptates dignissimos amet qui vel tempore natus laborum, voluptatum labore explicabo iure sunt voluptas nam, sed, reiciendis porro cum?
                  Nemo rerum modi quas adipisci debitis ducimus consequatur necessitatibus eligendi, vitae est, deserunt animi? Culpa, asperiores dolorem molestias dolor sunt odio repudiandae aperiam et illo maiores, distinctio at reprehenderit cupiditate?
                  Expedita quibusdam ipsam, repellendus ad nisi labore perferendis alias eius obcaecati nulla corrupti ea quas. Deserunt minima natus exercitationem officiis ad molestiae doloremque? Optio, eaque iusto. Amet fugit ad ipsa!
                  
                  
                 
                 
                 
                 
                 <center>
                            <form  method="post">
                                <input type="hidden" name="postuler" value="1">
                                <input type="hidden" name="value" value="FORMATION INDICES">
                                <button name="postule" class="btn btn-primary">Postulez maintenant</button>
                          </form>
                 </center> 
                 </p>  
                 <?php  break;      
            } //endswitch
    }//FIN IF ISSET $variable
    ?>
    
    
    
    


  <!-- FORMULAIRE POUR POSTULER A FOREX  -->
    <?php
    if(isset($postuler)) { 
            switch ($postuler) {
            
            case '1': ?>
            <br><br><br>
         <center class="titreForm">
                <h3>FORMULAIRE D'INSCRIPTION </h3>
                <h1><?=$value ?> </h1>
         </center>
        <form class="formInscription">
          <center>   
              <div class="form-row" >
                    <div class="form-group col-md-6" style="display:block">
                        <label for="">PRENOMS</label>
                         <input type="text" class="form-control"  required placeholder="prenoms ici...">
                    </div><br><br>
                    <div class="form-group col-md-6" style="display:block">
                    <label for="">NOMS</label>
                            <input type="text" class="form-control"  required placeholder="noms ici...">
                    </div>
                </div><br>
                <div class="form-row" >
                    <div class="form-group col-md-6"style="display:block">
                        <label >EMAIL</label>
                        <input type="email" class="form-control"   required placeholder="email ici...">
                    </div><br><br>
                    
                    <div class="form-group col-md-6 " style="display:block">
                        <label >PAYS</label>
                        <input type="text" class="form-control"  required placeholder="pays de résidence ici..." >
                    </div>
                </div><br><br>
            
                <div class="form-row" >
                <div class="form-group col-md-6" style="display:block">
                        <label >NUMERO</label>
                        <input type="tel" class="form-control"   required placeholder="numero ici...">
                    </div><br><br>
                    
                    <div class="form-group col-md-6" style="display:block">
                        <label >PROFESSION</label>
                        <input type="text" class="form-control" required placeholder="PROFESSION ici..." >
                    </div>
                   
                </div> <br><br>
           
                <div class="form-group" style="display:flex"  > 
                  <div id="select">
                    <label >TYPE</label>
                    <select  class="form-group col-md-6" >
                        
                            <option   value="coaching">COACHING</option>
                            <option selected value="formationComplete">FORMATION COMPLETE</option>
                            
                    </select><br><br>
                </div>
                <div id="select1">
                        <label >SEXE</label>
                        <select  class="form-group col-md-6" >
                            
                            <option selected value="homme">HOMME</option>
                            <option value="femme">FEMME</option>
                            
                        </select>
                 </div>
             </div><br><br>
              </center> 
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" required="veuillez accepter les conditions">
                        <label class="form-check-label" >
                            Accepter les conditions
                        </label>
                    </div>
                    <label style="color:red">FRAIS: 150.000 Fcfa </label>
                        <span style="color:rgb(163, 154, 154);">(formation complète)</span> <br>
                    <label style="color:red">FRAIS: 80.000 Fcfa </label>
                        <span style="color:rgb(163, 154, 154);">(coaching)</span> 
                </div> <br><br>
         <center>
                <button type="submit" class="btn btn-danger">POSTULER</button>
                <!-- <button type="reset" class="btn btn-secondary"><h6> ANNULER</h6></button> -->
        </center> 
                <br><br>
        <marquee class="confidence">
                    Vos informations sont gardées confidentielles
                     et nous les utilisons afin de mieux vous connaitre
                     et faciliter votre insertion dans la communauté WARIBIZNET TRADING.

        </marquee>
        </form>

    <?php  break;      
            } //endswitch
    }//FIN IF ISSET $postuler
    ?>


































































































<?php
    include 'views\footer.php';

 ?>