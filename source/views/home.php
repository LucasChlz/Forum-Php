<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?= URL_PATH; ?>/source/style/home/style.css" />
  <title>Forum</title>
</head>
<body>
    <header>
        <div class="container">
            <p>you are in: forums</p>

            <form method="POST">
                <label>create a forum</label>
                <input type="text" name="forum_name" placeholder="forum name">
                <input type="text" name="forum_description" placeholder="description">
                <input type="submit" name="register_forum">
            </form>
            <div class="clear"></div>
        </div><!--container-->
    </header>
</body>
</html>