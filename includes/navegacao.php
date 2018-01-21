<!-- Fixed navbar -->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><img src="assets/img/logo.png" title="logo da empresa" alt="Logo da empresa"></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a class="scroll" href="#home">HOME</a></li>
                <li><a class="scroll" href="#quem_somos">QUEM SOMOS</a></li>
                <li><a class="scroll" href="#produtos">PRODUTOS</a></li>
                <li><a class="scroll" href="#noticias">NOTÍCIAS</a></li>
                <li><a href="" data-toggle="modal" data-target="#contato" data-original-title>CONTATO</a></li>
                <li><a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook-official"></i></a></li>
            </ul>
        </div>
        <!--/.nav-collapse -->

    </div>
</nav>
<!-- / Fixed navbar -->


<!-- Contato -->

<div class="modal fade" id="contato" tabindex="-1" role="dialog" aria-labelledby="contactLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="panel bg-cor">
            <div class="panel-heading">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="panel-title texto-branco" id="contactLabel"><span class="glyphicon glyphicon-info-sign"></span> Alguma pergunta? Sinta-se livre para nos contatar.</h4>
            </div>
            <form action="#" method="post" accept-charset="utf-8">
                <div class="modal-body" style="padding: 5px;">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6" style="padding-bottom: 10px;">
                            <input class="form-control" name="firstname" placeholder="Nome" type="text" required autofocus />
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6" style="padding-bottom: 10px;">
                            <input class="form-control" name="lastname" placeholder="Sobrenome" type="text" required />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12" style="padding-bottom: 10px;">
                            <input class="form-control" name="email" placeholder="E-mail" type="text" required />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12" style="padding-bottom: 10px;">
                            <input class="form-control" name="subject" placeholder="Assunto" type="text" required />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <textarea style="resize:vertical;" class="form-control" placeholder="Mensagem..." rows="6" name="comment" required></textarea>
                        </div>
                    </div>
                </div>
                <div class="panel-footer" style="margin-bottom:-14px;">
                    <input type="submit" class="btn bg-cor texto-branco" value="Enviar" />
                    <button style="float: right;" type="button" class="btn bg-cor texto-branco" data-dismiss="modal">Fechar</button>
                </div>
            </form>
        </div>
    </div>
</div>