<?php 
  declare(strict_types=1);
  namespace App;
  require_once("src/utilities/debug.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Notes App</title>
</head>
<body>
  <header>
    <h1>My notes</h1>
  </header>

  <div>
    <nav>
      <ul>
        <li>
          <a href="/">List notes</a>
        </li>
         <li>
          <a href="/?action=create">New note</a>
        </li>
      </ul>
    </nav>
    <main>Content</main>
  </div>
  
  <footer>Footer</footer>
</body>
</html>