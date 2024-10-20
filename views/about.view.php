<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Определите переменную $home для страницы "About"
$home = 'About'; // Вы можете задать любое значение, которое хотите

require('partials/head.php');  
require('partials/nav.php'); 
require('partials/banner.php'); // Здесь $home будет доступна

?>

<main>
  <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      <p>its about page</p>
  </div>
</main>

<?php require('partials/footer.php'); ?>
