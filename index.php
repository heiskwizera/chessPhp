<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Djazi - Chess Game</title>
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




    <!-- Section 11 -->
    <section class="relative py-2 bg-gradient-to-br bg-black">
        <div class="flex items-center justify-between h-20 px-8 mx-auto max-w-7xl">

            <a href="#_" class="relative z-10 flex items-center w-auto text-2xl font-extrabold leading-none text-white select-none">
                ChessGame.
            </a>

            <nav class="items-center justify-center hidden space-x-8 text-gray-200 md:flex">



                <a href="home.php" class="inline-flex items-center justify-center px-4 py-2 text-base font-medium leading-6 text-blue-500 whitespace-no-wrap border border-blue-300 rounded-md shadow-sm bg-blue-50 focus:ring-offset-blue-600 hover:bg-white hover:text-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-100">
                    <?php
                    $value = "";
                    if (session_status() === PHP_SESSION_NONE) {
                        session_start();
                        if (!isset($_SESSION['user'])) {
                            $value = "Login";
                        } else {
                            $value = $_SESSION['user'];
                        }
                    }
                    echo $value;

                    ?>
                </a>
            </nav>

            <!-- Mobile Button -->
            <div class="flex items-center justify-center h-full text-white md:hidden">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8h16M4 16h16"></path>
                </svg>
            </div>

        </div>
    </section>




    <!-- Section 2 -->
    <section class="w-full bg-gray-100">
        <div class="py-10 mx-auto max-w-7xl md:px-8">


            <div class="flex flex-col mt-10 md:flex-row md:mt-8 md:space-x-8">
                <div class="flex flex-col items-center justify-center flex-1 overflow-hidden text-center bg-white md:rounded-xl">
                    <div class="flex flex-col px-10 pb-5 space-y-6 pt-14 md:px-8">
                        <h3 class="text-4xl font-semibold leading-none md:text-5xl">
                            Chess Game
                        </h3>
                        <p class="text-xl font-light text-gray-800">Get started now and enjoy Chess Game</p>

                    </div>
                    <img src="img/cover.jpg" class="w-2/3">
                </div>
                <div class="relative flex flex-col items-center justify-center flex-1 py-32 mt-10 overflow-hidden text-center bg-white md:rounded-xl md:mt-0">
                    <img src="https://cdn.devdojo.com/images/april2021/iphone-12-security.png" class="w-20 h-auto">
                    <div class="flex flex-col px-10 space-y-6 md:px-8">
                        <h3 class="text-3xl font-semibold leading-none md:text-4xl">
                            Djazi Project
                        </h3>
                        <p class="text-xl font-light text-gray-800">Great chess in crafted terretories.</p>

                    </div>
                </div>
            </div>

        </div>
    </section>




</body>

</html>