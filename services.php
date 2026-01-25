    <div class="section-title">
      <h2>Våra tjänster</h2>
      <a class="btn btn-outline" href="<?= h(site_url("booking.php")) ?>">Boka tid</a>
    </div>

    <div class="card" style="margin-bottom:14px;">
      <p>Vi erbjuder ett brett utbud av medicinska intyg som utfärdas effektivt och i enlighet med gällande regelverk.</p>
    </div>
      <form method="get" action="<?= h(site_url("services.php")) ?>" style="display:flex; gap:10px; flex-wrap:wrap;">
        <a class="btn btn-outline" href="<?= h(site_url("services.php")) ?>">Rensa</a>
    <div class="grid-3">
      <?php if (count($filtered) === 0): ?>
        <div class="card">
          <h3>Inga träffar</h3>
          <p>Testa en annan sökning, t.ex. “körkort” eller “sjöfart”.</p>
          <div class="card-footer">
            <div>
              <div class="price"><?= h($s["price"]) ?></div>
              <?php if (!empty($s["time"])): ?>
                <div class="tiny"><?= h($s["time"]) ?></div>
              <?php endif; ?>
            </div>
            <a class="btn btn-outline" href="<?= h(site_url("booking.php")) ?>?service=<?= urlencode($s["title"]) ?>">Boka</a>
          </div>
      <?php endforeach; ?>
    </div>
    <div class="muted" style="margin-top:12px; font-weight:700;">Andra medicinska intyg vid behov</div>
  </div>
</section>
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

