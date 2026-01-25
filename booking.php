<?php
$page_title = "Boka tid • Medicinska intyg";
require_once __DIR__ . "/includes/data.php";
require_once __DIR__ . "/includes/header.php";

$selected_service = trim($_GET["service"] ?? "");
?>

<section>
  <div class="container">
    <div class="section-title">
      <h2>Boka tid</h2>
      <div class="muted" style="font-weight:800;">Snabb bokning online</div>
          <div class="tiny">📞 <?= h($SITE["phone"]) ?></div>
          <div class="tiny">✉️ <?= h($SITE["email"]) ?></div>
        </div>

        <div style="margin-top:14px;" class="cta">
          <div>
            <strong>Behöver du en tid idag?</strong>
            <span>Ring oss så försöker vi lösa det.</span>
          </div>
          <a class="btn btn-outline" style="background:rgba(255,255,255,.14); border-color: rgba(255,255,255,.32); color:#fff;" href="tel:+46000000000">
            📞 Ring nu
          </a>
        </div>

        <form method="post" action="#" style="display:grid; gap:10px;">
          <select class="input" name="service">
            <option value="">Välj tjänst…</option>
            <?php foreach ($SERVICES as $s): ?>
              <?php $title = $s["title"]; ?>
              <option value="<?= h($title) ?>" <?= $selected_service === $title ? "selected" : "" ?>>
                <?= h($title) ?> (<?= h($s["price"]) ?>)
              </option>
            <?php endforeach; ?>
          </select>

          <select class="input" name="city">
            <option value="">Välj stad…</option>
            <?php foreach ($LOCATIONS as $loc): ?>
              <option value="<?= h($loc["city"]) ?>"><?= h($loc["city"]) ?></option>
            <?php endforeach; ?>
          </select>

          <input class="input" type="text" name="fullname" placeholder="För- och efternamn" required />
          <input class="input" type="email" name="email" placeholder="E-post" required />
          <input class="input" type="tel" name="phone" placeholder="Telefonnummer" required />

          <button class="btn btn-primary" type="submit">Fortsätt</button>
          <div class="tiny">Du kan koppla detta till t.ex. Bokadirekt, TimeCenter eller eget system.</div>
        </form>
      </div>

      <div>
        <div class="card">
          <h3>Kontakt</h3>
          <p>Har du frågor om vilket intyg du behöver?</p>
          <div class="tiny">📞 <?= h($SITE["phone"]) ?></div>
          <div class="tiny">✉️ <?= h($SITE["email"]) ?></div>
        </div>

        <div style="margin-top:14px;" class="cta">
          <div>
            <strong>Behöver du en tid idag?</strong>
            <span>Ring oss så försöker vi lösa det.</span>
          </div>
          <a class="btn btn-outline" style="background:rgba(255,255,255,.14); border-color: rgba(255,255,255,.32); color:#fff;" href="tel:0851258800">
            📞 Ring nu
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<?php require_once __DIR__ . "/includes/footer.php"; ?>
