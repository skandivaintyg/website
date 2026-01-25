        <a href="<?= h(site_url("booking.php")) ?>">Boka tid</a>
        <a href="<?= h(site_url("services.php")) ?>">Läkarintyg</a>
        <a href="<?= h(site_url("company.php")) ?>">Företag</a>
        <a href="<?= h(site_url("faq.php")) ?>">Datapolicy</a>
        <a href="<?= h(site_url("booking.php#stockholm")) ?>">Stockholm</a>
        <a href="<?= h(site_url("booking.php#goteborg")) ?>">Göteborg</a>
        <a href="<?= h(site_url("booking.php#malmo")) ?>">Malmö</a>
      </div>
    </div>

  <div class="container footer-grid">
    <div>
      <div class="footer-title"><?= h($SITE["name"]) ?></div>
      <div class="footer-list">
        <div>📞 <?= h($SITE["phone"]) ?></div>
        <div>✉️ <?= h($SITE["email"]) ?></div>
        <div class="muted" style="opacity:.75;">Vardagar 08:00–17:00</div>
      </div>
    </div>

    <div>
      <div class="footer-title">Snabblänkar</div>
      <div class="footer-list">
        <a href="/booking.php">Boka tid</a>
        <a href="/services.php">Läkarintyg</a>
        <a href="/company.php">Företag</a>
        <a href="/faq.php">Datapolicy</a>
      </div>
    </div>

    <div>
      <div class="footer-title">Mottagningar</div>
      <div class="footer-list">
        <a href="/booking.php#stockholm">Stockholm</a>
        <a href="/booking.php#goteborg">Göteborg</a>
        <a href="/booking.php#malmo">Malmö</a>
      </div>
    </div>
  </div>

  <div class="container" style="margin-top:18px; opacity:.7; font-weight:600; font-size:13px;">
    © <?= date("Y") ?> <?= h($SITE["name"]) ?> • All rights reserved
  </div>
</footer>

<script>
  const hamburger = document.getElementById("hamburger");
  const panel = document.getElementById("mobilePanel");
  hamburger?.addEventListener("click", () => panel.classList.toggle("open"));
</script>

</body>
</html>
