<?php
/*session_start();
if (isset($_SESSION['upload_success'])) {
 }
 * 
 */
include('func/display.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Food_Reviewer</title>
        <link rel="stylesheet" href="css/normalize.css"> 
        <link rel="stylesheet" href="css/main.css"> 
     </head>
 <body>
        <div class="container">
            <header>
            <h1>Food Review</h1>
            </header>
            <nav>
  <ul>
    <li><a href="write.php">Write a Review</a></li>
    <li><a href="silly.php">Silly</a></li>
  </ul>
</nav>
            <?php
  $files = glob("images/*.*");
   display_items($files)        
  ?>
<footer>Copyright &copy; CEG4110_Team8</footer>

        </div>
    </body>
    </html>
