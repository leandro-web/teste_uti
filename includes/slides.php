<session>
    <div id="themeSlider" class="carousel slide carousel-tema" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#themeSlider" data-slide-to="0" class="active"></li>
            <li data-target="#themeSlider" data-slide-to="1"></li>
            <li data-target="#themeSlider" data-slide-to="2"></li>
            <li data-target="#themeSlider" data-slide-to="3"></li>
        </ol>

        <div class="carousel-inner">
            <?php for($a=1; $a<=4; $a++){ ?>
            <div class="item <?php echo($a == 1?"active":""); ?>">
                <img src="assets/img/slides/<?= $a; ?>.jpg" alt="slide">
            </div>
            <?php } ?>
        </div>

        <a class="left carousel-control" href="#themeSlider" data-slide="prev">
            <span class="fa fa-chevron-left"></span>
        </a>
        <a class="right carousel-control"href="#themeSlider" data-slide="next">
            <span class="fa fa-chevron-right"></span>
        </a>
    </div>
</session>