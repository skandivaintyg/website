<?php
require_once __DIR__ . "/includes/header.php";
$page_title = t('page_title_faq');
?>

<section>
  <div class="container">
    <div class="section-title">
      <h2><?= h(t('faq_title')) ?></h2>
      <a class="btn btn-outline" href="<?= h(site_url("booking.php")) ?>"><?= h(t('nav_booking')) ?></a>
    </div>

    <div class="grid-3">
      <div class="card">
        <h3><?= h(t('faq_q1')) ?></h3>
        <p><?= h(t('faq_a1')) ?></p>
      </div>
      <div class="card">
        <h3><?= h(t('faq_q2')) ?></h3>
        <p><?= h(t('faq_a2')) ?></p>
      </div>
      <div class="card">
        <h3><?= h(t('faq_q3')) ?></h3>
        <p><?= h(t('faq_a3')) ?></p>
      </div>
    </div>
  </div>
</section>

<?php require_once __DIR__ . "/includes/footer.php"; ?>
