<?php
session_start(); // Inicia a sessão antes de qualquer saída
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mano Taless</title>
    <meta name="author" content="©Henryque_Nonato">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="vendors/slick/slick.css" />

    <link rel="stylesheet" type="text/css" href="vendors/slick/slick-theme.css" />

    <link rel="stylesheet" href="js/animation.js">
    <link rel="stylesheet" href="js/script.js">

    <link rel="shortcut icon" href="img/logo_icon.png" type="image/x-icon">

    <link rel="stylesheet" href="css/reset.css">

    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php require_once('template/loader.php') ?>
    <?php require_once('template/pg_contato/topo_contato.php') ?>
    <main>
        <?php require_once('template/pg_contato/redes.php') ?>
        <div class="space"></div>
        <?php require_once('template/pg_contato/contato_email.php') ?>
    </main>
    <?php require_once('template/upper.php') ?>
    <?php require_once('template/footer.php') ?>

    <script src="https://kit.fontawesome.com/bedd2811b0.js" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

    <script type="text/javascript" src="//code.jquery.com/jquery-3.7.1.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="vendors/slick/slick.min.js"></script>
    <script type="text/javascript" src="js/animation.js"></script>
    <script type="text/javascript" src="js/script.js" defer></script>
</body>

</html>