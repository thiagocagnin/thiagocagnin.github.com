<?php include '../includes/config.php';?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
		<title>CMP M�veis - Pagnocelli e Filho</title>
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
    <div id="page">
        <div class="inner">
            <div class="contents clearfix">

                <div id="main">
                    <h1>Fale conosco</h1>
                    
                        <form action="/user_session" method="post"><div style="margin: 0pt; padding: 0pt; display: inline;"><input name="authenticity_token" value="Oeu2utPtXXi1Lo6fsTXytNKWWbzaUzpkkOiHqWnWGCM=" type="hidden"></div>
                            <div id="password-credentials">
                                <p>
                                    <label for="user_session_login">Nome</label><br>
                                    <input class="title" id="user_session_login" name="user_session[login]" size="30" type="text">
                                </p>
                                <p>
                                    <label for="user_session_login">Email</label><br>
                                    <input class="title" id="user_session_login" name="user_session[login]" size="30" type="text">
                                </p>
                                <p>
                                    <label for="user_session_password">Mensagem</label><br>
                                    <textarea class="title" id="user_session_password" name="user_session[password]" rows="5" cols="45"></textarea>
                                </p>
                            </div>

                            <p><input class="button primary" name="commit" value="Enviar" type="submit"></p>

                        </form>

                </div>

            </div>
            <div class="bottom">

            </div>
        </div>

    </div>

    <div class="container">

    </div>

    <?php include '../templates/footer.html'; ?>
    