<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title><?= $title ?? 'My Website' ?></title>
<link rel="stylesheet" href="<?= base_url('/style.css');?>">
</head>
<body>
<div id="container">
<header>
<h1>Layout Sederhana</h1>
</header>
<nav>
<a href="<?= base_url('/');?>" class="active">Home</a>
<a href="<?= base_url('/artikel');?>">Artikel</a>
<a href="<?= base_url('/about');?>">About</a>
<a href="<?= base_url('/contact');?>">Contact</a>

<?php if (session()->get('logged_in')): ?>
        <a href="<?= base_url('/user/logout'); ?>" class="logout">Logout</a>
    <?php else: ?>
        <a href="<?= base_url('/user/login'); ?>">Login</a>
    <?php endif; ?>
</nav>
<section id="wrapper">
<section id="main">
    <?= $this->renderSection('content') ?>
</section>
<aside id="sidebar">
<div class="widget-box">
    <H3 class="title">Artikel Terkini</H3>
    <?= view_cell('App\\Cells\\ArtikelTerkini::tampil') ?>
</div>
<div class="widget-box">
<h3 class="title">Widget Text</h3>
<p>Vestibulum lorem elit, iaculis in nisl volutpat, malesuada tincidunt arcu. Proin in leo fringilla, vestibulum mi porta, faucibus felis. Integer pharetra est nunc, nec pretium nunc pretium ac.</p>
</div>
</aside>
</section>
<footer>
<p>&copy; 2021 - Universitas Pelita Bangsa</p>
</footer>
</div>
</body>
</html>