<?php
//Verificar se o btn foi clicado
if(isset($_POST['Enviar'])):
    $nome=$_POST['nome'];
    $sms=$_POST['sms'];
    require_once('conexao.php');
    //INSERIR NA BASE DE DADOS
    $cmdSql="INSERT INTO `tbmgs`(`nome`, `mgs`, `data`) VALUES ('$sms','$sms',now())";
    if (mysqli_query($conn, $cmdSql)) :
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
        <style>
        .Mensagem{
            display: flex;
    background: yellow;
    color: black;
    width: 50%;
    height: 128px;
    justify-content: center;
    text-align: justify;
        }
        </style>
        </head>
        <body>
        <div class="Mensagem">
            <?php
            $query="SELECT nome,sms FROM `tbmgs`";
            $result= mysqli_query($conn, $query );
            
              
            echo "Nome:".$nome."<br>"; 
                
              echo"Mensagem: ".$sms;
                
                

            ?>

</div>
        </body>
        </html>
        <?php
  else:
        echo "Error: " . $cmdSql . "<br>" . mysqli_error($conn);
  
  mysqli_close($conn);
  
    endif;
endif;
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="dist/css/nosso.css">
    <link rel="stylesheet" href="dist/fontawesome/css/all.min.css">
    <title>Projecto</title>
</head>
<body>   
<div>


</div>
    <!-- HEADER -->
    <div class="pos-f-t">
  <div class="collapse" id="navbarToggleExternalContent">
    <div class="bg-dark p-4">
      <h4 class="text-white">Collapsed content</h4>
      <span class="text-muted">Toggleable via the navbar brand.</span>
    </div>
  </div>
  <nav class="navbar navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </nav>
</div>
    <!-- Mensagem -->
    <section class="py-5 bg-white" id="cadastro">
    <div class="container">
            <form action="" method="post">
            <input type="text" placeholder="Nome" name="nome" id="">

<div class="mb-3">
  <label for="exampleFormControlTextarea1" placeholder="Mensagem" class="form-label">Mensagem</label>
  <textarea class="form-control" name="sms" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>
            <input type="submit" value="Enviar" name="Enviar" id="">
            </form>
             </div>
        </section>

    <!-- ALUNOS -->
        <section class="py-5 bg-light" id="alunos">  
   

    <!-- FOOTER -->
<section style="position: absolute; top:100%; width:100%" class="py-5 bg-warning">
<div class="container">
    <div class="row">
        <div class="col-3">
        <a href="https://free.facebook.com/profile.php?id=100063619845043">
               <i class="fab fa-facebook fa-2x"></i>
            </a>
       </div>
       <div class="col-3">
             <a href="https://www.gmail.com/">
               <i class="fab fa-google-plus-g fa-2x"></i>
            </a>
       </div>
       <div class="col-3">
            <a href="https://www.twitter.com">
               <i class="fab fa-twitter fa-2x"></i>
            </a>
       </div>
       <div class="col-3">
            <a href="https://www.linkedin.com">
               <i class="fab fa-linkedin fa-2x"></i>
            </a>
       </div>

     </div>
     </div>
</section>
</body>
</html>