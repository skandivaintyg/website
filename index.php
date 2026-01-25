<?php
$page_title = "Boka tid för läkarintyg • Medicinska intyg";
require_once __DIR__ . "/includes/data.php";
require_once __DIR__ . "/includes/header.php";
?>

<main class="hero">
  <div class="container hero-grid">
    <div>
      <span class="pill">✔ Registrerad vårdgivare • Snabb handläggning</span>
      <h1>Boka tid för läkarintyg<br/>snabbt och enkelt</h1>
      <p>
        Specialiserad mottagning för läkarintyg, hälsoundersökningar och medicinska bedömningar.
        Ofta tider samma dag så du kan få ditt intyg utan onödig väntan.
      </p>

      <div style="display:flex; gap:10px; flex-wrap:wrap;">
        <a class="btn btn-primary" href="/booking.php">Boka online</a>
        <a class="btn btn-outline" href="/services.php">Se tjänster</a>
      </div>

      <div style="margin-top:14px;">
        <div class="check"><i>✓</i> Undersökning av hjärta, lungor och blodtryck ingår</div>
        <div class="check"><i>✓</i> Digital hantering och tydliga instruktioner inför besöket</div>
        <div class="check"><i>✓</i> Centrala mottagningar och flexibel bokning</div>
      </div>
    </div>

    <aside class="hero-card" aria-label="Snabb bokning">
      <h3>Hitta rätt intyg</h3>

      <!-- Simple demo form (GET) -->
      <form class="hero-form" method="get" action="/services.php">
        <input class="input" type="text" name="q" placeholder="Sök: körkort, sjöfart, taxi…" />
        <select class="input" name="city">
          <option value="">Välj stad…</option>
          <?php foreach ($LOCATIONS as $loc): ?>
            <option value="<?= h($loc["city"]) ?>"><?= h($loc["city"]) ?></option>
          <?php endforeach; ?>
        </select>
        <button class="btn btn-primary" type="submit">Sök</button>
        <div class="tiny">Tips: ring oss om du har extra bråttom.</div>
      </form>
    </aside>
  </div>
</main>

<section>
  <div class="container">
    <div class="section-title">
      <h2>Våra vanligaste tjänster</h2>
      <div class="muted" style="font-weight:800;">Tryck “Boka” för att komma vidare</div>
    </div>

    <div class="grid-3">
      <?php foreach ($SERVICES as $s): ?>
        <article class="card">
          <h3><?= h($s["title"]) ?></h3>
          <p><?= h($s["desc"]) ?></p>
          <div class="card-footer">
            <div>
              <div class="price"><?= h($s["price"]) ?></div>
              <div class="tiny"><?= h($s["time"]) ?></div>
            </div>
            <a class="btn btn-outline" href="/booking.php?service=<?= urlencode($s["title"]) ?>">Boka</a>
          </div>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section>
  <div class="container">
    <div style="margin-top: 10px;" class="cta">
      <div>
        <strong>Extra bråttom?</strong>
        <span>Ring oss så försöker vi hitta en tid som passar – ofta samma dag.</span>
      </div>
      <a class="btn btn-outline" style="background:rgba(255,255,255,.14); border-color: rgba(255,255,255,.32); color:#fff;" href="tel:0851258800">
        📞 Ring nu
      </a>
    </div>
  </div>
</section>

<?php require_once __DIR__ . "/includes/footer.php"; ?>
