<?php
$page_title = "Skandiva Intyg AB";
require_once __DIR__ . "/includes/data.php";
require_once __DIR__ . "/includes/header.php";
?>

<main class="hero">
  <div class="container hero-grid">
    <div>
      <span class="pill">Skandiva Intyg AB</span>
      <h1>Läkarintyg för Körkortsintyg</h1>
      <p>Enkelt · Snabbt · Korrekt</p>

      <div style="display:flex; gap:10px; flex-wrap:wrap;">
        <a class="btn btn-primary" href="<?= h(site_url("booking.php")) ?>">Boka idag</a>
        <a class="btn btn-outline" href="<?= h(site_url("services.php")) ?>">Våra tjänster</a>
      </div>

      <div style="margin-top:14px;">
        <div class="check"><i>✓</i> Intyg utfärdade av legitimerade läkare</div>
      </div>
    </div>

    <aside class="hero-card" aria-label="Kontaktinformation">
      <h3>Kontaktinformation</h3>
      <div class="contact-list">
        <div><strong>Telefonnummer:</strong> <?= h($SITE["phone"]) ?></div>
        <div><strong>Mejladress:</strong> <?= h($SITE["email"]) ?></div>
        <div><strong>Websida:</strong> <?= h($SITE["website"]) ?></div>
        <div><strong>Besöksadress:</strong> <?= h($SITE["address"]) ?></div>
      </div>
    </aside>
  </div>
</main>

<section>
  <div class="container">
    <div class="section-title">
      <h2>Om oss</h2>
    </div>
    <div class="card">
      <p>
        Skandiva Intyg drivs av två legitimerade läkare med lång erfarenhet av utfärdande av olika typer av
        medicinska intyg, inklusive körkortsintyg.
      </p>
      <p>
        Vi har fokus på kvalitet, tillgänglighet och smidig hantering för våra patienter.
      </p>
      <p>
        Vi är baserade i Tranemo och arbetar effektivt för att du ska få ditt intyg snabbt, tryggt och korrekt.
        Vi erbjuder i vissa fall mobil tjänst och kan anpassa oss för att möta dig på en annan plats.
      </p>
    </div>
  </div>
</section>

<section>
  <div class="container">
    <div class="section-title">
      <h2>Därför väljer kunder oss</h2>
    </div>
    <div class="card">
      <p>Vi erbjuder pålitliga medicinska intyg med fokus på kvalitet, tillgänglighet och snabb service.</p>
      <div style="display:grid; gap:8px; font-weight:700; color:var(--muted);">
        <div>✓ Fri konsultation – svar inom 24 timmar</div>
        <div>✓ Intyg utfärdas samma dag</div>
        <div>✓ Elektroniska intyg skickas direkt till Transportstyrelsen</div>
        <div>✓ Tillgängliga och flexibla tider</div>
        <div>✓ Mobil tjänst vid gruppbokning – Gratis inom närområdet – Extra kostnad tillkommer vid längre avstånd</div>
        <div>✓ 15 % rabatt vid gruppbokning av 3 personer eller fler</div>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="container">
    <div class="section-title">
      <h2>Våra tjänster</h2>
    </div>
    <div class="card" style="margin-bottom:14px;">
      <p>Vi erbjuder ett brett utbud av medicinska intyg som utfärdas effektivt och i enlighet med gällande regelverk.</p>
    </div>

    <div class="grid-3">
      <?php foreach ($SERVICES as $s): ?>
        <article class="card">
          <h3><?= h($s["title"]) ?></h3>
          <p><?= h($s["desc"]) ?></p>
          <div class="card-footer">
            <div>
              <div class="price"><?= h($s["price"]) ?></div>
              <?php if (!empty($s["time"])): ?>
                <div class="tiny"><?= h($s["time"]) ?></div>
              <?php endif; ?>
            </div>
            <a class="btn btn-outline" href="<?= h(site_url("booking.php")) ?>?service=<?= urlencode($s["title"]) ?>">Boka</a>
          </div>
        </article>
      <?php endforeach; ?>
    </div>
    <div class="muted" style="margin-top:12px; font-weight:700;">Andra medicinska intyg vid behov</div>
  </div>
</section>

<section>
  <div class="container">
    <div class="section-title">
      <h2>Kontakta oss</h2>
    </div>
    <div class="split">
      <div class="card">
        <p>Besök vår webbplats eller skanna QR-koden för att boka direkt – vi återkommer samma dag.</p>
        <div class="tiny"><?= h($SITE["name"]) ?></div>
        <div class="tiny"><strong>Boka idag – vi återkommer samma dag</strong></div>
        <div class="price"><?= h($SITE["phone"]) ?></div>
      </div>
      <div class="card">
        <h3>Kontaktinformation</h3>
        <div class="contact-list">
          <div><strong>Telefonnummer:</strong> <?= h($SITE["phone"]) ?></div>
          <div><strong>Mejladress:</strong> <?= h($SITE["email"]) ?></div>
          <div><strong>Websida:</strong> <?= h($SITE["website"]) ?></div>
          <div><strong>Besöksadress:</strong> <?= h($SITE["address"]) ?></div>
        </div>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="container">
    <div class="cta" style="margin-top: 10px;">
      <div>
        <strong>Extra bråttom?</strong>
        <span>Ring oss så försöker vi hitta en tid som passar – ofta samma dag.</span>
      </div>
      <a class="btn btn-outline" style="background:rgba(255,255,255,.14); border-color: rgba(255,255,255,.32); color:#fff;" href="tel:+46000000000">
        📞 Ring nu
      </a>
    </div>
  </div>
</section>

<?php require_once __DIR__ . "/includes/footer.php"; ?>
