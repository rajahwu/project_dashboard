<!doctype html>

<html lang="en">

<head>
  <title>php oop mysql <?php if (isset($page_title)) {
                          echo '- ' . h($page_title);
                        } ?></title>
  <meta charset="utf-8">
  <link rel="stylesheet" media="all" href="<?php echo url_for('/stylesheets/public.css'); ?>" />
  <script defer src="<?php echo url_for('/js/public.js') ?>"></script>
</head>
<body>

  <header>
    <nav>
      <a href="<?php echo url_for('/index.php') ?>">HOME</a>
      <a href="<?php echo url_for('/about/index.php') ?>">About</a>
    </nav>
  </header>