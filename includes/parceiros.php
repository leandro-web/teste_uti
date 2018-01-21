<session>
    <div class="row">
        <div class="espaco-50"></div>
        <h1 class="text-center">Parceiros</h1>
        <p class="text-center">Sed ut perspiciatis unde omnis iste natus error sit voluptatem</p>
        <div class="espaco-50"></div>
        <div id="Carousel" class="carousel slide">            

            <!-- Carousel items -->
            <div class="carousel-inner">
                <?php for($a=1; $a<=2; $a++){ ?>
                    <div class="item <?php echo ($a=='1'?'active':'');?>">
                        <div class="row">
                            <?php for($b=1; $b<=4; $b++){ ?>
                                <div class="col-md-3"><a href="#" target="_blank"><img src="assets/img/parceiros/<?= $b; ?>.jpg" alt="Image"></a></div>
                            <?php } ?>
                        </div>
                        <!--.row-->
                    </div>
                    <!--.item-->
                <?php } ?>                

            </div>
            <!--.carousel-inner-->
            <a data-slide="prev" href="#Carousel" class="left carousel-control ctr-2">‹</a>
            <a data-slide="next" href="#Carousel" class="right carousel-control ctr-2">›</a>
        </div>
        <!--.Carousel-->
        <div class="espaco-50"></div>
    </div>
    
</session>