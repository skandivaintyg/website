<?php
$page_title = "Läkarintyg • Tjänster";
require_once __DIR__ . "/includes/data.php";
require_once __DIR__ . "/includes/header.php";

$q = trim($_GET["q"] ?? "");
$q_lower = mb_strtolower($q);

$filtered = array_filter($SERVICES, function($s) use ($q_lower) {
  if ($q_lower === "") return true;
  return mb_strpos(mb_strtolower($s["title"]), $q_lower) !== false
      || mb_strpos(mb_strtolower($s["desc"]), $q_lower) !== false;
});
?>

<section>
  <div class="container">
    <div class="section-title">
      <h2>Läkarintyg & undersökningar</h2>
      <a class="btn btn-outline" href="/booking.php">Boka tid</a>
    </div>

    <div class="card" style="margin-bottom:14px;">
      <form method="get" action="/services.php" style="display:flex; gap:10px; flex-wrap:wrap;">
        <input class="input" style="flex:1; min-width:220px;" type="text" name="q" value="<?= h($q) ?>" placeholder="Sök tjänst…" />
        <button class="btn btn-primary" type="submit">Sök</button>
        <a class="btn btn-outline" href="/services.php">Rensa</a>
      </form>
    </div>

    <div class="grid-3">
      <?php if (count($filtered) === 0): ?>
        <div class="card">
          <h3>Inga träffar</h3>
          <p>Testa en annan sökning, t.ex. “körkort” eller “sjöfart”.</p>
        </div>
      <?php endif; ?>

      <?php foreach ($filtered as $s): ?>
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

<?php require_once __DIR__ . "/includes/footer.php"; ?>
