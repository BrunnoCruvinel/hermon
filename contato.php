<?php include 'header.php';?>
  <main>
    <?php $cor = "roxo"; require "contribuir.php" ?>

      <div class="container">
        <div class="row contato">
          <div class="col-md-6">
            <h2>Contato</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
              <br><br>
              <form class="col-md-9 nopadding" action="" method="post">
              <select class="cm" name="falar">
                <option value="">Falar com</option>
                <option value="">Comercial</option>
                <option value="">Financeiro</option>
              </select>

                <input class="col-md-12" type="text" name="nome" placeholder="Nome">
                <input class="col-md-12" type="text" name="email" placeholder="E-mail">
                <input class="col-md-12" type="text" name="telefone" placeholder="Telefone">
                <input class="col-md-12" type="text" name="msg" placeholder="Mensagem">
                <input type="hidden" name="contato" value="-1">
                <input id="anexo" type="file" name="" class="hidden"><br><br>
                <button type="button" class="pull-right" id="anexar">Anexar arquivo</button><br style="clear:both">
                <button class="btn-black pull-right" type="submit" style="min-width: 200px;margin-top: 20px;margin-bottom: 20px;">Enviar</button>
              </form>

          </div>
          <div class="col-md-6">
            <select class="cm" name="falar">
              <option value="">Selecione uma unidade </option>
              <option value="">Comercial</option>
              <option value="">Financeiro</option>
            </select>
<br>
            <h4>Matriz Florianópolis</h4>
            <p>
              <span class="glyphicon glyphicon-map-marker cm"></span> Rua dos Ilhéus, 46 sala 502, 88010-560 - Florianópolis/SC
              <br>
              <span class="glyphicon glyphicon-earphone cm"></span> 48 3222-9123
              <br>
              <span class="glyphicon glyphicon-envelope cm"></span> fundacaohermon@fundacaohermon.com.br
            </p>



          </div>
          <div class="col-md-6"><br><br>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3535.900650860399!2d-48.55047198494034!3d-27.596609582837857!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9527383b33959c35%3A0x50d4501488195abd!2sR.+dos+Ilh%C3%A9us%2C+46+-+502+-+Centro%2C+Florian%C3%B3polis+-+SC%2C+88010-560!5e0!3m2!1spt-BR!2sbr!4v1500316121637"
              style="right: 0px; "
             width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
        </div>
      </div>

<br><br><br><br><br><br><br><br>
  </main>
  <?php include 'footer.php';?>
