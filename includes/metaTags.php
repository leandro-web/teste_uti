<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Página de teste para vaga de desenvolvedor web na agência UTI das idéias">
<meta name="keywords" content="Leandro, teste, programador, uti das idéias">
<meta name="author" content="Leandro Rafael de Oliveira">
<link href="http://utidasideias.com.br/assets/lay-img/icon.png" rel="shortcut icon" type="image/png">
<title>Teste UTI da idéias</title>
<!-- CSS Bootstrap -->
<link href="https://getbootstrap.com/docs/3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- CSS Leandro -->
<link href="assets/css/main.css" rel="stylesheet">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


<script>
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event) {
            event.preventDefault();
            $('html,body').animate({
                scrollTop: $(this.hash).offset().top
            }, 800);
        });
    });

    $(document).ready(function() { 
        $("#maisNoticias").click(function() {
            $("#NoticiasEscondidos").toggle(1000);
        });
    });
</script>