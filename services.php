<?php
require_once __DIR__ . "/includes/data.php";
require_once __DIR__ . "/includes/header.php";
$page_title = t('page_title_services');

$q = trim($_GET["q"] ?? "");
$filtered = $SERVICES;

if ($q !== "") {
  $to_lower = function (string $value): string {
    return function_exists("mb_strtolower") ? mb_strtolower($value) : strtolower($value);
  };
  $pos = function (string $haystack, string $needle): int|false {
    return function_exists("mb_strpos") ? mb_strpos($haystack, $needle) : strpos($haystack, $needle);
  };

  $q_lower = $to_lower($q);
  $filtered = array_values(array_filter($SERVICES, function (array $s) use ($q_lower, $to_lower, $pos): bool {
    // Search in both Swedish and translated content
    $title_sv = $s["title"];
    $desc_sv = $s["desc"];
    $title_translated = ts($s["title"], 'title');
    $desc_translated = ts($s["title"], 'desc');

    return $pos($to_lower($title_sv), $q_lower) !== false
      || $pos($to_lower($desc_sv), $q_lower) !== false
      || $pos($to_lower($title_translated), $q_lower) !== false
      || $pos($to_lower($desc_translated), $q_lower) !== false;
  }));
}
?>

<section>
  <div class="container">
    <div class="section-title">
      <h2><?= h(t('page_title_services')) ?></h2>
      <a class="btn btn-outline" href="<?= h(site_url("booking.php")) ?>"><?= h(t('nav_booking')) ?></a>
    </div>

    <div class="card" style="margin-bottom:14px;">
      <form method="get" action="<?= h(site_url("services.php")) ?>" style="display:flex; gap:10px; flex-wrap:wrap;">
        <input class="input" style="flex:1; min-width:220px;" type="text" name="q" value="<?= h($q) ?>" placeholder="<?= h(t('search_placeholder')) ?>" />
        <button class="btn btn-primary" type="submit"><?= h(t('search')) ?></button>
        <a class="btn btn-outline" href="<?= h(site_url("services.php")) ?>"><?= h(t('clear')) ?></a>
      </form>
    </div>

    <div class="grid-3">
      <?php if (count($filtered) === 0): ?>
        <div class="card">
          <h3><?= h(t('no_results')) ?></h3>
          <p><?= h(t('no_results_hint')) ?></p>
        </div>
      <?php endif; ?>

      <?php foreach ($filtered as $s): ?>
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
  </div>
</section>

<?php require_once __DIR__ . "/includes/footer.php"; ?>
