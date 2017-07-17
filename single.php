<?php include 'header.php';?>
  <main>
    <?php $cor = "laranjao"; include 'contribuir.php';?>

      <section class="container blog">
        <div class="row">
          <div class="col-md-12">
            <h2>Blog</h2>
          </div>
        </div>

        <div class="row nopadding">
          <div class="col-md-8">
            <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor </h3>
            <br><span><b class="cm">15</b> de Abril</span><br><br>
            <p>
              incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
              Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>

            <!-- DISQUS -->
            <div class="disqus">
              <h3 class="cm">Deixe seu comentário</h3>
              <br>
              <div class="bb">
                <strong>ATENÇÃO:</strong> Os comentários abaixo são de inteira responsabilidade de seus respectivos autores e não representam, necessariamente, a opnião da Fundação Hermon
              </div>
              <!-- COD DISQUS VAI AQUI -->
            </div>

          </div>
          <div class="col-md-1"></div>
          <?php include 'sidebar.php';?>



        </div>




      </section>
  </main>
  <?php include 'footer.php';?>
