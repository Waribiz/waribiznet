<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="stylesheet" href="./views/style.css">
     <link rel="stylesheet" href="../bootstrap/css1/bootstrap.min.css">
    <link rel="stylesheet" href="../bootstrap/js1/bootstrap.min.js">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title >WARIBIZNET </title>

</head>
<body style=" ">
    
<div class="logo">
        <div>
             <img src="./images/wariRond.png" alt="logo" width="80px" height="80px">
             
         </div>
              
            
                <?php //if(isset($_POST['close'])) :?>
                    <form  method="post" class="open">
                        <button name="open"class="btn btn-primary">menu </button>
                    </form>
                    <?php //endif ?>
          
                <?php if(isset($_POST['open']) AND !isset($_POST['close'])):?>
            <div class="menu">
                    
                            <form  method="post">
                <button  name="close" class="btn btn-danger">fermer</button>
                </form>

                <ul class="list-group">
                    <a href="index.php" title="aller sur accueil"><li class="rounded-pill"><span> ACCUEIL</span></li></a>
                    <a href="formationFree.php" title="contenu gratuit"><li class="rounded-pill"><span> CONTENU GRATUIT</span></li></a>
                    <a href="formations.php" title="formations"><li class="rounded-pill"><span> NOS FORMATIONS</span></li></a>
                    <a href="#" title="discussion"><li class="rounded-pill"><span> BLOG</span></li></a> 
                    <a href="#" title="information sur waribiznet"><li class="rounded-pill"><span> A PROPOS</span></li></a>
                    <a href="#" title="nos contacts"><li class="rounded-pill"><span> CONTACTS</span></li></a> 
                </ul>
                
            </div>
        <?php endif ?>
     
  
</div> 
  
        
        <a href="" class="logoWhatsapp">
            <img src="images\watsapp.png" width="60px" height="60px" class="rounded-pill">
        </a> 
   






</body>
</html>