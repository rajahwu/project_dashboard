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

  <header class="navbar text-sm breadcrumbs bg-neutral text-neutral-content">
    <ul>
      <li>
        <a href="<?php echo url_for('/index.php') ?>">Home</a>

      </li>
      <li>
        <a href="<?php echo url_for('/about/index.php') ?>">About</a>
      </li>
    </ul>
  </header>