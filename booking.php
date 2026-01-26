<?php
require_once __DIR__ . "/includes/data.php";
require_once __DIR__ . "/includes/header.php";
$page_title = t('page_title_booking');

$selected_service = trim($_GET["service"] ?? "");
?>

<section>
  <div class="container">
    <div class="section-title">
      <h2><?= h(t('booking_title')) ?></h2>
      <div class="muted" style="font-weight:800;"><?= h(t('quick_booking')) ?></div>
    </div>

    <div class="split">
      <div>
        <div class="card">
          <h3><?= h(t('select_time_service')) ?></h3>
          <p><?= h(t('form_intro')) ?></p>

          <form method="post" action="#" style="display:grid; gap:10px;">
            <select class="input" name="service">
              <option value=""><?= h(t('select_service')) ?></option>
              <?php foreach ($SERVICES as $s): ?>
                <?php $title = $s["title"]; ?>
                <option value="<?= h($title) ?>" <?= $selected_service === $title ? "selected" : "" ?>>
                  <?= h(ts($title, 'title')) ?> (<?= h($s["price"]) ?>)
                </option>
              <?php endforeach; ?>
            </select>

            <select class="input" name="city">
              <option value=""><?= h(t('select_city')) ?></option>
              <?php foreach ($LOCATIONS as $loc): ?>
                <option value="<?= h($loc["city"]) ?>"><?= h($loc["city"]) ?></option>
              <?php endforeach; ?>
            </select>

            <input class="input" type="text" name="fullname" placeholder="<?= h(t('fullname_placeholder')) ?>" required />
            <input class="input" type="email" name="email" placeholder="<?= h(t('email_placeholder')) ?>" required />
            <input class="input" type="tel" name="phone" placeholder="<?= h(t('phone_placeholder')) ?>" required />

            <button class="btn btn-primary" type="submit"><?= h(t('continue')) ?></button>
            <div class="tiny"><?= h(t('booking_system_hint')) ?></div>
          </form>
        </div>
      </div>

      <div>
        <div class="card">
          <h3><?= h(t('contact')) ?></h3>
          <p><?= h(t('questions_hint')) ?></p>
          <div class="tiny"><?= h($SITE["phone"]) ?></div>
          <div class="tiny"><?= h($SITE["email"]) ?></div>
        </div>

        <div style="margin-top:14px;" class="cta">
          <div>
            <strong><?= h(t('need_appointment_today')) ?></strong>
            <span><?= h(t('call_us_solve')) ?></span>
          </div>
          <a class="btn btn-outline" style="background:rgba(255,255,255,.14); border-color: rgba(255,255,255,.32); color:#fff;" href="tel:0700230023">
            <?= h(t('call_now')) ?>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<?php require_once __DIR__ . "/includes/footer.php"; ?>
