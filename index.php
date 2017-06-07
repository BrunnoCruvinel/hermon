<?php include 'header.php';?>
<main>
    <section class="container-fluid banner relative no-left no-right">
        <ul class="bxslider" data-call="bxslider" data-options="autoReload:true, oneToOneTouch:false, controls:false, pager:false">
            <li>
                <div class="slide" style="background-image: url('img/banner.jpg')">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-6">
                                <h2>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="overlay absolute"></div>
            </li>
        </ul>
    </section>
    <section class="container blog">
        <div class="row">
            <div class="col-md-4">
                <!--Post-->
                <article class="first">
                    <a href="single.php">
                        <!--Imagem Destacada-->
                        <img src="img/blog.png" alt="" class="feat">
                        <!--Título do Post-->
                        <h4>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh</h4>
                        <!--Resumo-->
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh </p>
                        <!--Meramente decorativo-->
                        <p class="ler">Ler o post</p>
                    </a>
                </article>
            </div>
            <div class="col-md-7 col-md-offset-1">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Blog</h2>
                    </div>
                </div>
                <div class="row flex">
                    <div class="col-md-6">
                        <article>
                            <a href="single.php">
                                <!--Título do Post-->
                                <h4>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh</h4>
                                <!--Meramente decorativo-->
                                <p class="ler">Ler o post</p>
                            </a>
                        </article>
                    </div>
                    <div class="col-md-6">
                        <article>
                            <a href="single.php">
                                <!--Título do Post-->
                                <h4>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh</h4>
                                <!--Meramente decorativo-->
                                <p class="ler">Ler o post</p>
                            </a>
                        </article>
                    </div>
                </div>
                <div class="row flex">
                    <div class="col-md-6">
                        <article>
                            <a href="single.php">
                                <!--Título do Post-->
                                <h4>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh</h4>
                                <!--Meramente decorativo-->
                                <p class="ler">Ler o post</p>
                            </a>
                        </article>
                    </div>
                    <div class="col-md-6">
                        <article>
                            <a href="single.php">
                                <!--Título do Post-->
                                <h4>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh</h4>
                                <!--Meramente decorativo-->
                                <p class="ler">Ler o post</p>
                            </a>
                        </article>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 mais">
                        <a href="blog.php"><p class="ler">Ver mais posts</p></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container-fluid cadastre">
        <div class="container">
            <div class="row">
                <form>
                    <div class="col-md-5">
                        <h3><b>Cadastre-se</b> para receber as novidades!</h3>
                    </div>
                    <div class="col-md-4">
                        <input type="email" placeholder="E-mail">
                    </div>
                    <div class="col-md-2 col-md-offset-1">
                        <input type="submit" value="Enviar">
                    </div>
                </form>
            </div>
        </div>
    </section>
</main>

<?php include 'footer.php';?>
