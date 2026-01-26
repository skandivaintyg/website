<?php
require_once __DIR__ . "/config.php";
require_once __DIR__ . "/functions.php";
require_once __DIR__ . "/lang.php";
?>
<!DOCTYPE html>
<html lang="<?= h(get_html_lang()) ?>">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title><?= h($page_title ?? $SITE["name"]) ?></title>
  <meta name="description" content="<?= h($page_desc ?? t('meta_desc')) ?>" />
  <link rel="stylesheet" href="<?= h(site_url("assets/style.css")) ?>">
</head>
<body>
  <div class="topbar">
    <div class="container topbar-inner">
      <div class="topbar-left">
        <span class="chip"><?= h($SITE["phone"]) ?></span>
        <span class="chip"><?= h($SITE["email"]) ?></span>
      </div>
      <div class="topbar-right">
        <?php
          $toggle_lang = t('lang_toggle_to');
          $current_url = $_SERVER['REQUEST_URI'];
          $separator = strpos($current_url, '?') !== false ? '&' : '?';
          // Remove existing lang parameter if present
          $clean_url = preg_replace('/([?&])lang=[^&]*(&|$)/', '$1', $current_url);
          $clean_url = rtrim($clean_url, '?&');
          $separator = strpos($clean_url, '?') !== false ? '&' : '?';
          $toggle_url = $clean_url . $separator . 'lang=' . $toggle_lang;
        ?>
        <a href="<?= h($toggle_url) ?>" class="chip lang-toggle">🌐 <?= h(t('lang_current')) ?></a>
      </div>
    </div>
  </div>

  <header class="header">
    <div class="container nav">
      <a class="brand" href="<?= h(site_url("index.php")) ?>">
        <img src="<?= h(site_url("assets/logo.svg")) ?>" alt="<?= h($SITE["name"]) ?>" class="brand-logo" />
      </a>

      <nav class="nav-links" aria-label="<?= h(t('nav_main_menu')) ?>">
        <a class="<?= is_active("services.php") ?>" href="<?= h(site_url("services.php")) ?>"><?= h(t('nav_services')) ?></a>
        <a class="<?= is_active("booking.php") ?>" href="<?= h(site_url("booking.php")) ?>"><?= h(t('nav_booking')) ?></a>
        <a class="<?= is_active("company.php") ?>" href="<?= h(site_url("company.php")) ?>"><?= h(t('nav_company')) ?></a>
        <a class="<?= is_active("faq.php") ?>" href="<?= h(site_url("faq.php")) ?>"><?= h(t('nav_faq')) ?></a>
      </nav>

      <div class="nav-actions">
        <button class="hamburger" id="hamburger" type="button" aria-label="<?= h(t('nav_open_menu')) ?>"><?= h(t('nav_menu')) ?></button>
        <a class="btn btn-primary" href="<?= h(site_url("booking.php")) ?>"><?= h(t('nav_booking')) ?></a>
      </div>
    </div>

    <div class="container mobile-panel" id="mobilePanel" aria-label="<?= h(t('nav_mobile_menu')) ?>">
      <a href="<?= h(site_url("services.php")) ?>"><?= h(t('nav_services')) ?></a>
      <a href="<?= h(site_url("booking.php")) ?>"><?= h(t('nav_booking')) ?></a>
      <a href="<?= h(site_url("company.php")) ?>"><?= h(t('nav_company')) ?></a>
      <a href="<?= h(site_url("faq.php")) ?>"><?= h(t('nav_faq')) ?></a>
    </div>
  </header>
