<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Notes App</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
  <link href="/public/style.css" rel="stylesheet">
</head>
<body>
  <div class="wrapper">
    <header class="header">
      <h1><i class="far fa-clipboard"></i>My notes</h1>
    </header>

    <div class="container">
      <nav class="menu">
        <ul>
          <li><a href="/">Home</a></li>
          <li><a href="/?action=create">New note</a></li>
        </ul>
      </nav>

      <main class="page">
        <?php require_once("templates/pages/$page.php"); ?>
      </main>
    </div>

    <footer class="footer">
      <p>Notes - project in course PHP</p>
    </footer>
  </div>
</body>
</html>