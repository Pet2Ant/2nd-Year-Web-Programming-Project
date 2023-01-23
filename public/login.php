<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Kleppit</title>
  <link rel="icon" href="../assets/kleppit-website-favicon-color.png" />
  <link rel="stylesheet" href="./css/style.css">
</head>

<body class="bg-zinc-900">
      <!-- Loader -->
      <div id="loader" class="loader fixed top-0 right-0 h-screen w-screen z-50 flex justify-center items-center">
        <div class="animate-spin rounded-full h-32 w-32 border-t-2 border-b-2 border-[#ff4057]"></div>
     </div>
  <div class="py-12 mt-12">
    <div class="container mx-auto">
      <div class="flex w-960 mx-auto">
        <div class="max-w-sm mx-auto px-6 ">
          <img src="../assets/kleppit-high-resolution-logo-color-on-transparent-background.png" alt="logo"
            class="h-22 py-3">
          <div class="">
            <div class="w-full relative ">
              <div class="mt-6 ">
                <div class="text-center font-semibold text-3xl text-[#ff4057]">
                  Log in
                </div>
                <form class="mt-8">
                  <div class="mx-auto max-w-lg ">
                    <div class="py-1">
                      <span class="px-1 text-md text-[#ff4057]">Email</span>
                      <input name="emailorusername" placeholder="Email/Username" type="text"
                        class="text-sm block px-3 py-2 rounded-lg w-full bg-zinc-800 border-2 border-zinc-700 placeholder-zinc-600 shadow-md focus:placeholder-zinc-500 focus:bg-zinc-800 focus:border-zinc-600 text-[#ff4957] focus:outline-none">
                    </div>
                  </div>
                  <div class="py-1">
                    <span class="px-1 text-md text-[#ff4057]">Password</span>
                    <input placeholder="Password..."  name="pwd" type="password"
                      class="text-sm block px-3 py-2 rounded-lg w-full bg-zinc-800 border-2 border-zinc-700 placeholder-zinc-600 shadow-md focus:placeholder-zinc-500 focus:bg-zinc-800 focus:border-zinc-600 text-[#ff4957] focus:outline-none">
                  </div>
                </form>
              </div>
              <div class="flex justify-start">
                <a href="./forgotPassword.html"
                  class="italic text-sm text-red-900 transition duration-300 ease-in-out hover:text-red-700 px-1 py-2">
                  Forgot Password?
                </a>
              </div>
              <button type="submit" name="submit"
                class="w-full text-md font-bold bg-gray-300 transition duration-500 ease-in-out hover:bg-gray-400 rounded-full p-1">Log
                in
              </button>
              <ul>
                <li class="flex items-center py-1">
                  <p class="text-sm text-red-900">Not a member?</p>
                  <a href="./signup.php"
                    class="underline text-sm text-red-900 transition duration-300 ease-in-out hover:text-red-700 px-1 py-1">Sign
                    up!</a>
                </li>
              </ul>
            </div>

          </div>
        </div>
      </div>
    </div>

  </div>

  </div>
  <?php
//checking connection
if (isset($_POST["submit"])) {

    //getting the user data
    $username = $_POST["emailorusername"];
    $pwd = $_POST["pwd"];
    include "databasecon\dbcon.php";
    include "login\loginquery.php";
    include "login\loginerror.php";




    $login = new LoginEr($username, $pwd);
    //errors
    $login->loginUser();
    header('location: error.php');
}

     
?>
  <script src="./main.js"></script>
</body>

</html>