<?php
require_once __DIR__ . "/includes/header.php";
$page_title = t('page_title_company');
?>

<section>
  <div class="container">
    <div class="section-title">
      <h2><?= h(t('company_title')) ?></h2>
      <a class="btn btn-outline" href="<?= h(site_url("booking.php")) ?>"><?= h(t('contact_us_btn')) ?></a>
    </div>

    <div class="split">
      <div class="card">
        <h3><?= h(t('agreements_volumes')) ?></h3>
        <p><?= h(t('company_text')) ?></p>
        <div class="tiny"><?= h($SITE["email"]) ?></div>
      </div>

      <div class="card">
        <h3><?= h(t('how_it_works')) ?></h3>
        <p><?= h(t('how_it_works_steps')) ?></p>
        <a class="btn btn-primary" href="<?= h(site_url("booking.php")) ?>"><?= h(t('book_consultation')) ?></a>
      </div>
    </div>
  </div>
</section>

<?php require_once __DIR__ . "/includes/footer.php"; ?>
