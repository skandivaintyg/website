<?php
$page_title = "Skandiva Intyg AB";
require_once __DIR__ . "/includes/data.php";
require_once __DIR__ . "/includes/header.php";
?>

<main class="hero">
  <div class="container hero-grid">
    <div>
      <span class="pill">Skandiva Intyg AB</span>
      <h1><?= h(t('hero_title')) ?></h1>
      <p><?= h(t('hero_subtitle')) ?></p>

      <div style="display:flex; gap:10px; flex-wrap:wrap;">
        <a class="btn btn-primary" href="<?= h(site_url("booking.php")) ?>"><?= h(t('hero_book_today')) ?></a>
        <a class="btn btn-outline" href="<?= h(site_url("services.php")) ?>"><?= h(t('hero_our_services')) ?></a>
      </div>

      <div style="margin-top:14px;">
        <div class="check"><i>✓</i> <?= h(t('hero_licensed_doctors')) ?></div>
      </div>
    </div>

    <aside class="hero-card" aria-label="<?= h(t('contact_info')) ?>">
      <h3><?= h(t('contact_info')) ?></h3>
      <div class="contact-list">
        <div><strong><?= h(t('phone_number')) ?>:</strong> <?= h($SITE["phone"]) ?></div>
        <div><strong><?= h(t('email_address')) ?>:</strong> <?= h($SITE["email"]) ?></div>
        <div><strong><?= h(t('website')) ?>:</strong> <?= h($SITE["website"]) ?></div>
        <div><strong><?= h(t('visiting_address')) ?>:</strong> <?= h($SITE["address"]) ?></div>
      </div>
    </aside>
  </div>
</main>

<section>
  <div class="container">
    <div class="section-title">
      <h2><?= h(t('about_us')) ?></h2>
    </div>
    <div class="card">
      <p><?= h(t('about_text_1')) ?></p>
      <p><?= h(t('about_text_2')) ?></p>
      <p><?= h(t('about_text_3')) ?></p>
    </div>
  </div>
</section>

<section>
  <div class="container">
    <div class="section-title">
      <h2><?= h(t('why_choose_us')) ?></h2>
    </div>
    <div class="card">
      <p><?= h(t('why_choose_intro')) ?></p>
      <div style="display:grid; gap:8px; font-weight:700; color:var(--muted);">
        <div>✓ <?= h(t('why_1')) ?></div>
        <div>✓ <?= h(t('why_2')) ?></div>
        <div>✓ <?= h(t('why_3')) ?></div>
        <div>✓ <?= h(t('why_4')) ?></div>
        <div>✓ <?= h(t('why_5')) ?></div>
        <div>✓ <?= h(t('why_6')) ?></div>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="container">
    <div class="section-title">
      <h2><?= h(t('our_services')) ?></h2>
    </div>
    <div class="card" style="margin-bottom:14px;">
      <p><?= h(t('services_intro')) ?></p>
    </div>

    <div class="grid-3">
      <?php foreach ($SERVICES as $s): ?>
        <article class="card">
          <h3><?= h(ts($s["title"], 'title')) ?></h3>
          <p><?= h(ts($s["title"], 'desc')) ?></p>
          <div class="card-footer">
            <div>
              <div class="price"><?= h($s["price"]) ?></div>
              <?php if (!empty($s["time"])): ?>
                <div class="tiny"><?= h($s["time"]) ?></div>
              <?php endif; ?>
            </div>
            <a class="btn btn-outline" href="<?= h(site_url("booking.php")) ?>?service=<?= urlencode($s["title"]) ?>"><?= h(t('book')) ?></a>
          </div>
        </article>
      <?php endforeach; ?>
    </div>
    <div class="muted" style="margin-top:12px; font-weight:700;"><?= h(t('other_certificates')) ?></div>
  </div>
</section>

<section>
  <div class="container">
    <div class="section-title">
      <h2><?= h(t('contact_us')) ?></h2>
    </div>
    <div class="split">
      <div class="card">
        <p><?= h(t('contact_text')) ?></p>
        <div class="tiny"><?= h($SITE["name"]) ?></div>
        <div class="tiny"><strong><?= h(t('book_today_response')) ?></strong></div>
        <div class="price"><?= h($SITE["phone"]) ?></div>
      </div>
      <div class="card">
        <h3><?= h(t('contact_info')) ?></h3>
        <div class="contact-list">
          <div><strong><?= h(t('phone_number')) ?>:</strong> <?= h($SITE["phone"]) ?></div>
          <div><strong><?= h(t('email_address')) ?>:</strong> <?= h($SITE["email"]) ?></div>
          <div><strong><?= h(t('website')) ?>:</strong> <?= h($SITE["website"]) ?></div>
          <div><strong><?= h(t('visiting_address')) ?>:</strong> <?= h($SITE["address"]) ?></div>
        </div>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="container">
    <div class="cta" style="margin-top: 10px;">
      <div>
        <strong><?= h(t('extra_urgent')) ?></strong>
        <span><?= h(t('call_us_text')) ?></span>
      </div>
      <a class="btn btn-outline" style="background:rgba(255,255,255,.14); border-color: rgba(255,255,255,.32); color:#fff;" href="tel:0700230023">
        <?= h(t('call_now')) ?>
      </a>
    </div>
  </div>
</section>

<?php require_once __DIR__ . "/includes/footer.php"; ?>
