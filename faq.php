<?php
$page_title = "FAQ • Frågor & svar";
require_once __DIR__ . "/includes/header.php";
?>

<section>
  <div class="container">
    <div class="section-title">
      <h2>Vanliga frågor</h2>
      <a class="btn btn-outline" href="<?= h(site_url("booking.php")) ?>">Boka tid</a>
    </div>

    <div class="grid-3">
      <div class="card">
        <h3>Hur snabbt får jag mitt intyg?</h3>
        <p>Ofta direkt efter besöket om all information är komplett.</p>
      </div>
      <div class="card">
        <h3>Behöver jag ta med något?</h3>
        <p>Legitimation och eventuella tidigare journal/handlingar om relevant.</p>
      </div>
      <div class="card">
        <h3>Kan ni hjälpa med Transportstyrelsen?</h3>
        <p>Ja, vi arbetar ofta med krav för körkortsintyg och kompletteringar.</p>
      </div>
    </div>
  </div>
</section>

<?php require_once __DIR__ . "/includes/footer.php"; ?>
