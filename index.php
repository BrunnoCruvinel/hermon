<?php include 'header.php';?>
<main>
    <section class="container-fluid banner relative no-left no-right">
        <ul class="bxslider" data-call="bxslider" data-options="autoReload:true, oneToOneTouch:false, controls:false, pager:false">
            <!--FIXME: Slides invadindo o anterior-->
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
            </li>
        </ul>
        <div class="overlay absolute"></div>
    </section>
</main>
<?php include 'footer.php';?>
