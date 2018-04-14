<?php $config = require './config.php' ?>

<head>
    <title><?= $config['appname']; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../css/style.css"></script>
    <link rel="stylesheet" type="text/css" href="../vendor/twbs/bootstrap/dist/css/bootstrap.min.css"></script>
    <script src="../components/jquery/jquery.min.js"></script>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-dark" style="background-color: #3dc895;">
        <h1><a href="index.php"><?= $config['appname']; ?></a></h1>
        <div class="float-right" id="nav-urls">
            <ul class="list-unstyled list-inline">
                <li class="list-inline-item"><a href="./index.php">Home</a></li>
                <li class="list-inline-item"><a href="./login.php">Login</a></li>
                <li class="list-inline-item"><a href="./register.php">Register</a></li>
            </ul>
        </div>
    </nav>
