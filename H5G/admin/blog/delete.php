<?php

  session_start();

  include_once('../includes/connection.php');
  include_once('../includes/article.php');

  $article = new Article;

  if(isset($_SESSION['logged_in'])){
    if(isset($_GET['id'])){
      $id = $_GET['id'];

      $query = $pdo->prepare('DELETE FROM articles WHERE article_id = ?');
      $query->bindValue(1, $id);
      $query->execute();

      header('Location: delete.php');
    }

    $articles = $article->fetch_all();

?>

  <html lang="en" dir="ltr">

    <head>
      <meta charset="utf-8">
      <title>CMS Tutorial</title>
      <link rel="stylesheet" href="../assets/styles.css">
    </head>

    <body>
      <h1>Admin Blog Post Deletion</h1>
      <div class="container">
        <h3><a href="index.php" id="logo">CMS</a></h3>

        <h4>Select and Article to Delete</h4>
        <form action="delete.php" method="get">
          <select onchange="this.form.submit();">
            <?php foreach($articles as $article){ ?>
              <option value="" <?php echo $article['article_id']; ?> >
                <?php echo $article['article_title']; ?>
              </option>
            <?php } ?>
          </select>
        </form>
        <a href="index.php">&larr; Back</a>
    </div>

    </body>

  </html>

<?php
  } else{
    header('Location: index.php');
  }

?>
