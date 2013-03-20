<!DOCTYPE HTML >
<html>
    <head>
        <title>CMP M�veis - Pagnocelli e Filho</title>
        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
        <meta content="marcenaria moveis pagnocelli moveis pato branco" name="description">
		<link rel="shortcut icon" type="image/ico" href="../favicon.png" />
        <link href="../css/geral.css" media="screen" rel="stylesheet" type="text/css">
		<link href="../css/themes/bar/bar.css" media="screen" rel="stylesheet" type="text/css">
        <script type="text/javascript" src="../js/jquery.js"></script>
        <script type="text/javascript" src="../js/scripts.js"></script>

    </head>


    <body id="home">

        <?php include '../templates/header.php'; ?>

        <div class="intro">
            <h1><span>CMP - M�veis</span></h1>

            <p>
                Confira nossa galeria de projetos, entre em contato conosco e agende uma visita. N�o perca Tempo!
            </p>

            <p><a href="galeria.php"><img alt="Confira nossa Galeria" src="../images/confiraColecao.png"></a></p>
        </div>

        <div id="slide-holder" class="slider-wrapper theme-bar">

            <div id="slide"> 
                <a href="produtos.php"><img src="../images/slider1.png" class="slide" alt="#" title=""/></a>
				<a href="produtos.php"><img src="../images/slider2.png" class="slide" alt="#" title=""/></a>
				<a href="produtos.php"><img src="../images/slider3.png" class="slide" alt="#" title=""/></a>
				<a href="produtos.php"><img src="../images/slider4.png" class="slide" alt="#" title=""/></a>
            </div>

        </div>

    </div>

    <div class="container">

        <ul id="categories">
            <li id="imagemMarca1"><a href="galeria.php?id=1"></a></li>
            <li id="imagemMarca2"><a href="galeria.php?id=2"></a></li>
            <li id="imagemMarca3" class="last"><a href="galeria.php?id=3"></a></li>
        </ul>

        <hr class="space">

    </div>

    <div class="container">
        <div id="callouts">

            <div class="item" id="garantia">
                <h3>Garantia</h3>
                <p>Nossa loja virtual oferece uma seleta cole��o
                    da mais alta classe de �culos, as melhores marcas.
                    Sabendo disso optamos por oferecer ao cliente a melhor
                    garantia do mercado. Nossos produtos tem garantia de 3 anos.</p>
            </div>

            <div class="item" id="txProdutos">
                <h3>Produtos</h3>
                <p>Sabemos que nem todas as pessoas tem a poss�bilidade
                    de fazer a compra de um produto importado, pensando
                    nisso resolvemos disponibilizar os melhores produtos
                    e as marcas mais famosas do mundo aqui.</p>
            </div>

            <div class="item last" id="precosbaixos">
                <h3>Os pre�os mais baixos</h3>
                <p>Como? Tendo em vista que a maioria das nossas marcas
                    dispon�veis s�o marcas importadas, nos certificamos
                    importar o produto direto do fabricante deixando assim
                    os produtos com as menores taxas poss�veis.</p>
            </div>

        </div>

    </div>

   

    <script type="text/javascript">
    $(document).ready(function(){

        $('head').append('<script type="text/javascript" src="../js/jquery.nivo.slider.pack.js"><\/script>');
        $('head').append('<link rel="stylesheet" href="../css/nivo-slider.css" type="text/css" media="screen" />');
        $('head').append('<script type="text/javascript">$(document).ready(function(){$(\'#slide\').nivoSlider({effect:\'random\',directionNav:false,directionNavHide:false,controlNav:true,controlNavThumbs:false,controlNavThumbsFromRel:false});});<\/script>');
    });

    </script>

    <?php include '../templates/footer.html'; ?>

