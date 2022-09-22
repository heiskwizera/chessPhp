  <!-- Section 11 -->
  <section class="relative py-2 bg-gradient-to-br bg-black">
      <div class="flex items-center justify-between h-20 px-8 mx-auto max-w-7xl">

          <a href="index.php" class="relative z-10 flex items-center w-auto text-2xl font-extrabold leading-none text-white select-none">
              Welcome <?php echo $_SESSION['user']; ?>.
          </a>

          <nav class="items-center justify-center hidden space-x-8 text-gray-200 md:flex">



              <a href="logout.php" class="inline-flex items-center justify-center px-4 py-2 text-base font-medium leading-6 text-blue-500 whitespace-no-wrap border border-blue-300 rounded-md shadow-sm bg-blue-50 focus:ring-offset-blue-600 hover:bg-white hover:text-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-100">
                  Logout
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