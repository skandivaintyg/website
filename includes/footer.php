<footer>
  <div class="container footer-grid">
    <div>
      <div class="footer-title"><?= h($SITE["name"]) ?></div>
      <div class="footer-list">
        <div><?= h($SITE["phone"]) ?></div>
        <div><?= h($SITE["email"]) ?></div>
        <div class="muted" style="opacity:.75;"><?= h(t('footer_hours')) ?></div>
      </div>
    </div>

    <div>
      <div class="footer-title"><?= h(t('footer_quick_links')) ?></div>
      <div class="footer-list">
        <a href="<?= h(site_url("booking.php")) ?>"><?= h(t('nav_booking')) ?></a>
        <a href="<?= h(site_url("services.php")) ?>"><?= h(t('nav_services')) ?></a>
        <a href="<?= h(site_url("company.php")) ?>"><?= h(t('nav_company')) ?></a>
        <a href="<?= h(site_url("faq.php")) ?>"><?= h(t('footer_data_policy')) ?></a>
      </div>
    </div>

    <div>
      <div class="footer-title"><?= h(t('footer_locations')) ?></div>
      <div class="footer-list">
        <a href="<?= h(site_url("booking.php#stockholm")) ?>">Stockholm</a>
        <a href="<?= h(site_url("booking.php#goteborg")) ?>">Göteborg</a>
        <a href="<?= h(site_url("booking.php#malmo")) ?>">Malmö</a>
      </div>
    </div>
  </div>

  <div class="container" style="margin-top:18px; opacity:.7; font-weight:600; font-size:13px;">
    © <?= date("Y") ?> <?= h($SITE["name"]) ?> • <?= h(t('org_number')) ?>: 559564-3825 • <?= h(t('footer_rights')) ?>
  </div>
</footer>

<script>
  const hamburger = document.getElementById("hamburger");
  const panel = document.getElementById("mobilePanel");
  hamburger?.addEventListener("click", () => panel.classList.toggle("open"));
</script>

</body>
</html>
