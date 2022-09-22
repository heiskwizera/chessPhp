<?php
include './secure.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="lib/chessboardjs/css/chessboard-0.3.0.css">
    <link rel="stylesheet" href="style.css">
    <link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet'>
    <script src="https://cdn.tailwindcss.com">
    </script>
    <link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet'>

    <style>
        body {
            font-family: 'QuickSand';
            /* background-image: url('img/bg.jpg'); */
        }
    </style>

</head>

<body>


    <?php
    include 'includes/nav.php';
    ?>

    <center>
        <br>
        <h1 style="font-weight: bolder;font-size:30px;">CHESS GAME</h1>
    </center>





    <div id="board" class="board"></div>
    <div class="info">
        <label style="display:none;">Search depth:
            <select id="search-depth">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3" selected>3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
        </label>
        <br>
        <span>Positions evaluated: <span id="position-count"></span></span>
        <br>
        <span>Time: <span id="time"></span></span>
        <br>
        <span>Positions/s: <span id="positions-per-s"></span> </span>
        <br>
        <br>
        <div id="move-history" class="move-history">
        </div>
    </div>
    <script src="lib/jquery/jquery-3.2.1.min.js"></script>
    <script src="lib/chessboardjs/js/chess.js"></script>
    <script src="lib/chessboardjs/js/chessboard-0.3.0.js"></script>
    <script src="script.js"></script>
    <script>

    </script>
</body>

</html>