<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?= URL_PATH; ?>/source/style/general/style.css" />
  <title>Forum</title>
</head>
<body>
    <header>
        <div class="container">
            <p>you are in: <a href="<?= URL_PATH; ?>">forums</a> > <a href="<?= URL_PATH.'/topics/'.$forumsInfo['slug_forum'] ?>"><?= $forumsInfo['name_forum']; ?></a> > <p><?= $topicsInfo['name_topic'] ?></p></p>
            <div class="clear"></div>
        </div><!--container-->
    </header>

    <section class="create_post">
        <form method="POST">
            <h2>create your post</h2>

            <input type="text" name="name" placeholder="your name">
            <input type="text" name="subject" placeholder="post subject">
            <textarea name="message" placeholder="your content"></textarea>
            <input type="submit" name="create_post">
        </form>
    </section>
</body>
</html>