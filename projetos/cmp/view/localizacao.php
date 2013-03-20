<?php include '../includes/config.php';?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <title>CMP Móveis - Pagnocelli e Filho</title>
        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
        <meta content="marcenaria moveis pagnocelli moveis pato branco" name="description">
		<link rel="shortcut icon" type="image/ico" href="../favicon.png" />

        <link href="../css/geral.css" media="screen" rel="stylesheet" type="text/css">
		<script type="text/javascript" src="../js/jquery-1.4.4.js"></script>
        <script src="http://maps.google.com/maps/api/js?sensor=true&amp;language=pt-BR" type="text/javascript"></script>
        <script type="text/javascript" src="../js/localizacao.js"></script>

    </head>

    <body class="static-pages">

        <?php include '../templates/header.php'; ?>

        </div>
        <div id="page"><div class="inner">
                <div class="contents clearfix">

                    <div id="comochegar">
                    <h2>Como chegar?</h2>
                    <p>Digite o seu endereço(Ex.: Rua sua rua, 72 sua cidade):</p>
                    <input type="text" name="suaCidade" id="suaCidade" value="" maxlength="100" size="60"/>
                    <input type="button" id="tracarRota" value="TRA&Ccedil;AR ROTA"/>
                </div>

                <div id="mapa_evento"></div>
                <div id="rota_evento"></div>

                </div>
                <div class="bottom"></div>
            </div></div>

        <div class="container">

        </div>

    <?php include '../templates/footer.html'; ?>
    