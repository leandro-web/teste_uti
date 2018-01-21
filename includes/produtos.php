<session id="produtos">
    <div class="espaco-50"></div>
    <h1 class="text-center">Produtos</h1>
    <p class="text-center">Sed ut perspiciatis unde omnis iste natus error sit voluptatem</p>
    <div class="espaco-50"></div>
    <div class="row">
        <?php for($a=1; $a<=8; $a++){ ?>
        <div class="col-md-3">
            <h3>Lorem Ipsum Dolor Sit Amet</h3>            
            <img src="assets/img/produtos/<?= $a; ?>.jpg" alt="Imagem do produto" class="img-responsive img-item">
            <div class="btn-ground text-center">
                <button type="button" class="btn btn-2 btn-block" data-toggle="modal" data-target="#product_view_<?= $a; ?>">Veja +</button>
            </div>            
        </div>
        <?php } ?>    
        
        <div id="produtosEscondidos" style="display:none;">
            <?php for($a=1; $a<=8; $a++){ ?>
            <div class="col-md-3">
                <h3>Lorem Ipsum Dolor Sit Amet</h3>            
                <img src="assets/img/produtos/<?= $a; ?>.jpg" alt="Imagem do produto" class="img-responsive img-item">
                <div class="btn-ground text-center">
                    <button type="button" class="btn btn-2 btn-block" data-toggle="modal" data-target="#product_view_<?= $a; ?>">Veja +</button>
                </div>            
            </div>
            <?php } ?> 
        </div>
            
    </div>
    <div class="col-md-2 col-md-offset-5 ">
        <a id="maisProdutos" class="btn btn-1 btn-block">+ produtos</a>
    </div>
    <div class="clearfix"></div>
    <div class="espaco-50"></div>
    
    
    <?php for($a=1; $a<=8; $a++){ ?>
        <div class="modal fade product_view" id="product_view_<?= $a; ?>">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <a href="#" data-dismiss="modal" class="class pull-right"><span class="glyphicon glyphicon-remove"></span></a>
                        <h3 class="modal-title">Nome do produto</h3>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6 product_img">
                                <img src="assets/img/produtos/<?= $a; ?>.jpg" class="img-responsive">
                            </div>
                            <div class="col-md-6 product_content">
                                <h4>Referência: <span>51526</span></h4>
                                <div class="rating">
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span> (10 avaliações)
                                </div>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                <h3 class="cost">R$ 2100.00 <small class="pre-cost">R$ 2600.00</small></h3>
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <select class="form-control" name="select">
                                        <option value="" selected="">Cor</option>
                                        <option value="preto">Preto</option>
                                        <option value="branco">Branco</option>
                                        <option value="dourado">Dourado</option>
                                        <option value="rosa">Rosa</option>
                                    </select>
                                    </div>
                                    <!-- end col -->
                                    <div class="col-md-6 col-sm-12">
                                        <select class="form-control" name="select">
                                        <option value="" selected="">Qtd</option>
                                        <option value="">1</option>
                                        <option value="">2</option>
                                        <option value="">3</option>
                                    </select>
                                    </div>
                                    <!-- end col -->
                                </div>
                                <div class="space-ten"></div>
                                <div class="btn-ground">
                                    <button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-shopping-cart"></span> Adicionar no carrinho</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?> 
    
</session>