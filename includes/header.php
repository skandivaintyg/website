<?php
require_once __DIR__ . "/config.php";
require_once __DIR__ . "/functions.php";
?>
<!DOCTYPE html>
<html lang="<?= h($SITE["lang"]) ?>">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title><?= h($page_title ?? $SITE["name"]) ?></title>
  <meta name="description" content="<?= h($page_desc ?? "Specialister på läkarintyg. Boka tid snabbt och enkelt online.") ?>" />
  <link rel="stylesheet" href="<?= h(site_url("assets/style.css")) ?>">
</head>
<body>
  <div class="topbar">
    <div class="container topbar-inner">
      <div class="topbar-left">
        <span class="chip">📞 <strong><?= h($SITE["phone"]) ?></strong></span>
        <span class="chip">✉️ <strong><?= h($SITE["email"]) ?></strong></span>
      </div>
      <div class="topbar-right">
        <span class="chip">🌐 Svenska</span>
        <span class="chip">in LinkedIn</span>
      </div>
    </div>
  </div>

  <header class="header">
    <div class="container nav">
      <a class="brand" href="<?= h(site_url("index.php")) ?>">
        <div class="brand-badge" aria-hidden="true"></div>
        <span><?= h($SITE["name"]) ?></span>
      </a>

      <nav class="nav-links" aria-label="Huvudmeny">
        <a class="<?= is_active("services.php") ?>" href="<?= h(site_url("services.php")) ?>">Läkarintyg</a>
        <a class="<?= is_active("booking.php") ?>" href="<?= h(site_url("booking.php")) ?>">Boka tid</a>
        <a class="<?= is_active("company.php") ?>" href="<?= h(site_url("company.php")) ?>">Företag</a>
        <a class="<?= is_active("faq.php") ?>" href="<?= h(site_url("faq.php")) ?>">FAQ</a>
      </nav>

      <div class="nav-actions">
        <button class="hamburger" id="hamburger" type="button" aria-label="Öppna meny">☰ Meny</button>
        <a class="btn btn-primary" href="<?= h(site_url("booking.php")) ?>">Boka tid</a>
      </div>
    </div>

    <div class="container mobile-panel" id="mobilePanel" aria-label="Mobilmeny">
      <a href="<?= h(site_url("services.php")) ?>">Läkarintyg</a>
      <a href="<?= h(site_url("booking.php")) ?>">Boka tid</a>
      <a href="<?= h(site_url("company.php")) ?>">Företag</a>
      <a href="<?= h(site_url("faq.php")) ?>">FAQ</a>
    </div>
  </header>
    <a class="brand" href="/index.php">
      <div class="brand-badge" aria-hidden="true"></div>
      <span><?= h($SITE["name"]) ?></span>
    </a>

    <nav class="nav-links" aria-label="Huvudmeny">
      <a class="<?= is_active("services.php") ?>" href="/services.php">Läkarintyg</a>
      <a class="<?= is_active("booking.php") ?>" href="/booking.php">Boka tid</a>
      <a class="<?= is_active("company.php") ?>" href="/company.php">Företag</a>
      <a class="<?= is_active("faq.php") ?>" href="/faq.php">FAQ</a>
    </nav>

    <div class="nav-actions">
      <button class="hamburger" id="hamburger" type="button" aria-label="Öppna meny">☰ Meny</button>
      <a class="btn btn-primary" href="/booking.php">Boka tid</a>
    </div>
  </div>

  <div class="container mobile-panel" id="mobilePanel" aria-label="Mobilmeny">
    <a href="/services.php">Läkarintyg</a>
    <a href="/booking.php">Boka tid</a>
    <a href="/company.php">Företag</a>
    <a href="/faq.php">FAQ</a>
  </div>
</header>
