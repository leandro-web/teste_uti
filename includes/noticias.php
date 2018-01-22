<session id="noticias">
    <div class="row">
        <h1>Notícias</h1>
        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</p>
        <div class="espaco-50"></div>
        <?php for($a=1; $a<=6; $a++){ ?>
        <div class="col-md-6 col-sm-6 col-xs-12 nopadding blc-noticia">
            <div class="col-md-4 col-xs-6 nopadding">
                <img class="img-responsive img-noticia img-rounded" src="assets/img/noticias/<?= $a; ?>.jpg">
            </div>
            <div class="col-md-8 col-xs-6">
                <h3 class="texto-escuro">Lorem Ipsum Dolor Sit Amet Consectetur unde omnis</h3>
                <div>
                    <a href="#" target="_blank"><i class="fa fa-facebook-official redes-noticia"></i></a>
                    <a href="#" target="_blank"><i class="fa fa-twitter-square redes-noticia"></i></a>
                    <a href="#" target="_blank"><i class="fa fa-instagram redes-noticia"></i></a>
                </div>
            </div>
        </div>
        <?php } ?>

        <div id="NoticiasEscondidos" style="display:none;">
            <?php for($a=1; $a<=6; $a++){ ?>
                <div class="col-md-6 col-sm-6 col-xs-12 nopadding blc-noticia">
                    <div class="col-md-4 col-xs-6 nopadding">
                        <img class="img-responsive img-noticia img-rounded" src="assets/img/noticias/<?= $a; ?>.jpg">
                    </div>
                    <div class="col-md-8 col-xs-6">
                        <h3 class="texto-escuro">Lorem Ipsum Dolor Sit Amet Consectetur unde omnis</h3>
                        <div>
                            <a href="#" target="_blank"><i class="fa fa-facebook-official redes-noticia"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-twitter-square redes-noticia"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-instagram redes-noticia"></i></a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
    <div class="col-md-2 col-md-offset-5 ">
        <a id="maisNoticias" class="btn btn-1 btn-block">+ notícias</a>
    </div>
    <div class="clearfix"></div>
    <div class="espaco-50"></div>
</session>