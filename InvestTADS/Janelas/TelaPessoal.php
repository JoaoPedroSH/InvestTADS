<?php
include "valida_cookies.inc";
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

  <!-- Meta tags -->
  <meta charset="UTF-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <link rel="stylesheet" href="Styles/TelaPessoal.css">

  <script type="text/javascript" src="CalculaSaldo.js"></script>

  <title>Plano Pessoal</title>

</head>

<body style="background-color: #d3cfca98;">
  <style>
    body {
      background-image: url("imagens/set.jpg");
      background-size: cover;
  height: 800px;
  position: relative;
    }
</style>



  <!-- Navbar -->
  <nav class="navbar navbar-light bg-light site-header sticky-top py-1"><img src="imagens/logo.png" class="img-fluid rounded " id="logo" alt="Imagem responsiva" style="margin-right: 30px;">
  
    <!-- Histórico/Navbar -->
    <div>

      <a class="btn btn-warning" href="HistoricoPessoal.php" role="button" style="margin-right:5px; background-color: #fa2b40; margin-right:5px;"><span style="color: #f1eeee;">Histórico</span></a>

    </div>

    <!-- Educacional/Navbar -->
    <div class="dropdown">

      <button class="btn btn-warning dropdown-toggle" type="button" id="dropdown-educacional" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="margin-right:5px; background-color: #fa2b40; margin-right:5px;">

        <span style="color: #f1eeee;">Educacional</span>

      </button>

      <div class="dropdown-menu" aria-labelledby="dropdown-educacional" >

        <a class="dropdown-item" href="https://www.youtube.com/watch?v=aGGYFxLdFMw" target="_blank">Guia bem Básico para começar a Investir (Me poupe!)</a><hr>

        <a class="dropdown-item" href="https://youtu.be/yHuNhkntc-I" target="_blank">Guia Básico para Investir (O Primo Rico)</a><hr>

        <a class="dropdown-item" href="https://www.youtube.com/watch?v=dJyJ77GkhBE" target="_blank">Como começar a Investir (O Primo Rico)</a><hr>

        <a class="dropdown-item" href="https://www.youtube.com/watch?v=PtAkxzMhobQ" target="_blank">Como começar a Investir (Jovens de Negócios)</a><hr>

        <a class="dropdown-item" href="https://www.youtube.com/watch?v=-sGOvusS5NI" target="_blank">3 Investimentos para Iniciantes (O Primo Rico)</a>

      </div>

    </div>

    <!-- Plataformas/Navbar -->
    <div class="dropdown">

      <button class="btn btn-warning dropdown-toggle" type="button" id="dropdown-plataformas" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="margin-right:5px; background-color: #fa2b40; margin-right:5px;">

        <span style="color: #f1eeee;">Plataformas</span>
            
      </button>

      <div class="dropdown-menu" aria-labelledby="dropdown-plataformas">

        <a class="dropdown-item" href="https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&cad=rja&uact=8&ved=2ahUKEwjpqZmKzq_xAhXVqZUCHe7ECV8QFjAAegQICRAD&url=https%3A%2F%2Fwww.xpi.com.br%2F&usg=AOvVaw37hN5c1rO_oWzVFb3GFE-t" target="_blank"><img src="imagens/xp.jpg"></a><!--https://logospng.org/download/xp-investimentos/logo-xp-investimentos-2048.png-->

        <hr>

        <a class="dropdown-item" href="https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&cad=rja&uact=8&ved=2ahUKEwjvob6bzq_xAhXyr5UCHW_pCk4QFjAAegQIBhAD&url=https%3A%2F%2Fcorretora.clear.com.br%2F&usg=AOvVaw0lz1qnpBwG7FQ3J3-ItywV" target="_blank"><img src="imagens/clear.jpg"></a>
        <!--https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQpMUhiTHM8mLm6cJcmYoLLEBsh-fHUx77Xxc-KR4zilErzXuIzd7kvqEPOFi2PQnBzTJ0&usqp=CAU-->

        <hr>

        <a class="dropdown-item" href="https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&cad=rja&uact=8&ved=2ahUKEwjnr8S0zq_xAhWAlZUCHQV4C-QQFjAAegQIEBAD&url=https%3A%2F%2Fwww.modalmais.com.br%2Fguia-de-plataformas%2Fplataforma-de-investimento-como-escolher&usg=AOvVaw3BXjDuDCnv07SBZNWq9ICJ" target="_blank"><img src="imagens/modalmais.jpg"></a>
        <!--https://blogsupereconomica.com/wp-content/uploads/2018/12/modalmais-%C3%A9-boa.jpg-->

        <hr>

        <a class="dropdown-item" href="https://www.rico.com.vc/home/?cta-d&campaignid=12503633456&adgroupid=122705626047&feeditemid=&targetid=aud-949262104314:kwd-305867202439&loc_interest_ms=&loc_physical_ms=1001617&matchtype=e&network=g&device=c&devicemodel=&ifmobile=&ifmobile=0&ifsearch=1&ifsearch=&ifcontent=0&ifcontent=&creative=395108875124&keyword=site%20de%20investimentos&placement=&target=&utm_source=google&utm_medium=cpc&utm_term=site%20de%20investimentos&utm_campaign=GGLE_PESQ_Generica&hsa_kw=site%20de%20investimentos&hsa_acc=7134496929&hsa_ad=395108875124&hsa_net=adwords&hsa_src=g&hsa_tgt=aud-949262104314:kwd-305867202439&hsa_grp=122705626047&hsa_mt=e&hsa_cam=6460378010&hsa_ver=3&gclid=CjwKCAjwt8uGBhBAEiwAayu_9fTxWdujdVZsHMxQy6rmmw1UPnnDfNLJ_56I-aI2p5t01BQB07vMkhoCrUkQAvD_BwE" target="_blank"><img src="imagens/rico.jpg"></a>
        <!--https://investidorsardinha.r7.com/wp-content/uploads/2020/09/a-rico-corretora-e-boa-descubra-vantagens-desvantagens-e-como-abrir-uma-conta.jpg-->

        <hr>

        <a class="dropdown-item" href="https://www.easynvest.com.br"  target="_blank"><img src="imagens/easynvest.jpg"></a>
        <!--https://www.conta-corrente.com/conta-digital/nuconta/nubank-negocia-compra-da-corretora-easynvest/-->

      </div>

    </div>

    <hr class="mb-5">

    <center><a class="navbar-brand" href="TelaPessoal.php">

    <a class="btn btn-primary btn btn-outline-warning" href="https://wa.me/qr/RCJAMHP5EHJNH1" role="button">Suporte</a>

      <a class="btn btn-primary btn btn-outline-danger" href="Logout.php" role="button">Logout</a>

    </a></center>

  </nav> 
<section>
  <div class="container col-md-3" id="container-form-gestao" style="background-color: #dad4ce98;">

    <center><form method="post" action="GestaoPessoal.php">
  
      <hr>
      
      <h4 id="h4-gestaopessoal">GESTÃO PESSOAL</h4>

      <div class="form-group col-md-10">

        <label for="inputGanhos"></label>

        <input  type="number" name="ganhos" class="num1" id="inputValGanhos" placeholder="Valor de Ganhos" required="">

      </div>

      <div class="form-group col-md-10">

        <label for="inputDespesas"></label>

          <input type="number" name="despesas" class="num2" id="inputValDespesas" placeholder="Valor de Despesas" required="">

      </div>

      <div class="form-group col-md-10">

        <label for="inputInvestimento"></label>

        <a class="btn btn-lg btn-block btn-secondary" href="https://www.youtube.com/watch?v=qbTzY38auew" role="button" target="_blank">Dicas para Investir</a>

        <input type="number" name="investimentos" class="num3" id="inputValInvestimentos" placeholder="Valor para Investimentos" required="">

      </div>

      <button type="button" onclick="calcular()" class="btn btn-secondary" style="margin-bottom: 10px;">Calcular Saldo</button>

      <label for="inputInvest"></label>

     <p class="resultado" name="saldofinal"></p>

      <hr>

      <div class="form-group col-md-10">

        <label for="inputemail"></label>

          <input type="text" name="email" class="form-control" id="inputemail" placeholder="Informe aqui seu E-mail!" required="">

      </div>

      <hr>
      <div class="form-group col-md-10"></div>

        <button type="submit" class="btn btn-primary btn btn-warning" style="background-color: #ffad15; color: #f1eeee; margin-bottom: 10px;">Gerar Relatório</button>

        <button type="submit" class="btn btn-primary btn btn-danger" style="background-color: #fa2b40; margin-bottom: 10px;">Finalizar</button>

      </div>

    </form></center>

  </div>
</section>
<!-- Rodapé -->
<footer class="my-5 pt-5 text-muted text-center text-small">

  <p class="mb-1">© 2020-2021 Invest TADS</p>

</footer>

<!-------------------------------------------------------------------------------------------------------------->  
	  
<!-- jQuery, Popper.js, Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>