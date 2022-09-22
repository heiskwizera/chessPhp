<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Djazi | Sign Up</title>
    <script src="https://cdn.tailwindcss.com">
    </script>
    <link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet'>

    <style>
        body {
            font-family: 'QuickSand';
        }
    </style>


</head>

<body class="bg-gray-100">
    <section class="relative py-2 bg-gradient-to-br bg-black">
        <div class="flex items-center justify-between h-20 px-8 mx-auto max-w-7xl">

            <a href="index.php" class="relative z-10 flex items-center w-auto text-2xl font-extrabold leading-none text-white select-none">
                ChessGame.
            </a>

            <nav class="items-center justify-center hidden space-x-8 text-gray-200 md:flex">



                <a href="signin.php" class="inline-flex items-center justify-center px-4 py-2 text-base font-medium leading-6 text-blue-500 whitespace-no-wrap border border-blue-300 rounded-md shadow-sm bg-blue-50 focus:ring-offset-blue-600 hover:bg-white hover:text-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-100">
                    Login
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
    <!-- Section 1 -->
    <section class="w-full px-8 py-16 bg-gray-100 xl:px-8">
        <div class="max-w-5xl mx-auto">
            <div class="flex flex-col items-center md:flex-row">

                <div class="w-full space-y-5 md:w-3/5 md:pr-16">
                    <p class="font-medium text-blue-500 uppercase">PhPWoRk - Chess Game</p>
                    <h2 class="text-2xl font-extrabold leading-none text-black sm:text-3xl md:text-5xl">
                        Create Account
                    </h2>
                    <p class="text-xl text-gray-600 md:pr-16">Sign Up now and enjoy Single Player - Chess Game! I'ts worth playing game inspired by class assignment in IT Y1 Information technology </p>
                </div>

                <div class="w-full mt-16 md:mt-0 md:w-2/5">
                    <form method="POST" action="controllers/account.php" class="relative z-10 h-auto p-8 py-10 overflow-hidden bg-white border-b-2 border-gray-300 rounded-lg shadow-2xl px-7">
                        <h3 class="mb-6 text-2xl font-medium text-center">Sign in to your Account</h3>
                        <input type="text" name="username" class="block w-full px-4 py-3 mb-4 border border-2 border-transparent border-gray-200 rounded-lg focus:ring focus:ring-blue-500 focus:outline-none" placeholder="Username" required>

                        <input type="text" name="email" class="block w-full px-4 py-3 mb-4 border border-2 border-transparent border-gray-200 rounded-lg focus:ring focus:ring-blue-500 focus:outline-none" placeholder="Email address" required>
                        <input type="password" name="password" class="block w-full px-4 py-3 mb-4 border border-2 border-transparent border-gray-200 rounded-lg focus:ring focus:ring-blue-500 focus:outline-none" placeholder="Password" min="6" required>
                        <input type="password" name="confirm" class="block w-full px-4 py-3 mb-4 border border-2 border-transparent border-gray-200 rounded-lg focus:ring focus:ring-blue-500 focus:outline-none" placeholder="Confirm Password" min="6" required>

                        <div class="block">
                            <button class="w-full px-3 py-4 font-medium text-white bg-blue-600 rounded-lg">Create</button>
                        </div>
                        <p class="w-full mt-4 text-sm text-center text-gray-500">Don't have an account? <a href="signin.php" class="text-blue-500 underline">Login here</a></p>
                    </form>
                </div>

            </div>
        </div>
    </section>

</body>

</html>