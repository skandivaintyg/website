      <a class="btn btn-outline" href="<?= h(site_url("booking.php")) ?>">Kontakta oss</a>
        <a class="btn btn-primary" href="<?= h(site_url("booking.php")) ?>">Boka konsultation</a>
$page_title = "Företag • Medicinska intyg";
require_once __DIR__ . "/includes/header.php";
?>

<section>
  <div class="container">
    <div class="section-title">
      <h2>Företag</h2>
      <a class="btn btn-outline" href="/booking.php">Kontakta oss</a>
    </div>

    <div class="split">
      <div class="card">
        <h3>Avtal & volymer</h3>
        <p>
          Vi kan hjälpa företag med planerade hälsoundersökningar och läkarintyg.
          Kontakta oss för paketpris och tider.
        </p>
        <div class="tiny">✉️ <?= h($SITE["email"]) ?></div>
      </div>

      <div class="card">
        <h3>Så fungerar det</h3>
        <p>1) Ni beskriver behovet → 2) vi föreslår upplägg → 3) bokning/leverans.</p>
        <a class="btn btn-primary" href="/booking.php">Boka konsultation</a>
      </div>
    </div>
  </div>
</section>

<?php require_once __DIR__ . "/includes/footer.php"; ?>
