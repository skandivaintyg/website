<?php
require_once __DIR__ . "/includes/data.php";

$page_title = t('page_title_booking');
$selected_service = trim($_GET["service"] ?? "");
$form_message = "";
$form_success = false;

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $service = trim($_POST["service"] ?? "");
    $city = trim($_POST["city"] ?? "");
    $fullname = trim($_POST["fullname"] ?? "");
    $email = trim($_POST["email"] ?? "");
    $phone = trim($_POST["phone"] ?? "");

    // Validate required fields
    if (empty($service) || empty($city) || empty($fullname) || empty($email) || empty($phone)) {
        $form_message = t('booking_validation_error');
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $form_message = t('booking_validation_error');
    } else {
        // Build email content
        $email_sent = send_booking_confirmation($service, $city, $fullname, $email, $phone);

        if ($email_sent) {
            $form_success = true;
            $form_message = t('booking_success');
        } else {
            $form_message = t('booking_error');
        }
    }
}

/**
 * Send booking confirmation email
 */
function send_booking_confirmation($service, $city, $fullname, $email, $phone) {
    global $SITE;

    $to = $email;
    $subject = t('email_subject');
    $cc_email = $SITE['booking_cc_email'];

    // Build HTML email body
    $body = build_email_body($service, $city, $fullname, $email, $phone);

    // Email headers
    $headers = [];
    $headers[] = "MIME-Version: 1.0";
    $headers[] = "Content-type: text/html; charset=UTF-8";
    $headers[] = "From: " . $SITE['name'] . " <" . $cc_email . ">";
    $headers[] = "Reply-To: " . $cc_email;
    $headers[] = "Cc: " . $cc_email;
    $headers[] = "X-Mailer: PHP/" . phpversion();

    // Send email
    return mail($to, $subject, $body, implode("\r\n", $headers));
}

/**
 * Build the email body HTML
 */
function build_email_body($service, $city, $fullname, $email, $phone) {
    global $SITE;

    $html = '<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; }
        .header { background: #2563eb; color: white; padding: 20px; text-align: center; border-radius: 8px 8px 0 0; }
        .content { background: #f9fafb; padding: 20px; border: 1px solid #e5e7eb; }
        .details { background: white; padding: 15px; border-radius: 8px; margin: 15px 0; }
        .detail-row { padding: 8px 0; border-bottom: 1px solid #f3f4f6; }
        .detail-row:last-child { border-bottom: none; }
        .label { font-weight: bold; color: #6b7280; }
        .value { color: #111827; }
        .footer { padding: 20px; text-align: center; color: #6b7280; font-size: 14px; }
        .contact { margin-top: 15px; padding: 15px; background: #eff6ff; border-radius: 8px; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1 style="margin:0;">' . h($SITE['name']) . '</h1>
        </div>
        <div class="content">
            <p><strong>' . h(t('email_greeting')) . ' ' . h($fullname) . ',</strong></p>
            <p>' . h(t('email_thank_you')) . '</p>
            <p>' . h(t('email_details_header')) . '</p>

            <div class="details">
                <div class="detail-row">
                    <span class="label">' . h(t('email_service')) . ':</span>
                    <span class="value">' . h($service) . '</span>
                </div>
                <div class="detail-row">
                    <span class="label">' . h(t('email_location')) . ':</span>
                    <span class="value">' . h($city) . '</span>
                </div>
                <div class="detail-row">
                    <span class="label">' . h(t('email_name')) . ':</span>
                    <span class="value">' . h($fullname) . '</span>
                </div>
                <div class="detail-row">
                    <span class="label">' . h(t('email_email')) . ':</span>
                    <span class="value">' . h($email) . '</span>
                </div>
                <div class="detail-row">
                    <span class="label">' . h(t('email_phone')) . ':</span>
                    <span class="value">' . h($phone) . '</span>
                </div>
            </div>

            <p>' . h(t('email_next_steps')) . '</p>

            <div class="contact">
                <p style="margin:0 0 10px 0;"><strong>' . h(t('email_questions')) . '</strong></p>
                <p style="margin:0;">📞 ' . h($SITE['phone']) . '</p>
                <p style="margin:0;">✉️ ' . h($SITE['booking_cc_email']) . '</p>
            </div>
        </div>
        <div class="footer">
            <p>' . h(t('email_regards')) . ',<br><strong>' . h($SITE['name']) . '</strong></p>
            <p>' . h($SITE['address']) . '</p>
        </div>
    </div>
</body>
</html>';

    return $html;
}

require_once __DIR__ . "/includes/header.php";
?>

<section>
  <div class="container">
    <div class="section-title">
      <h2><?= h(t('booking_title')) ?></h2>
      <div class="muted" style="font-weight:800;"><?= h(t('quick_booking')) ?></div>
    </div>

    <div class="split">
      <div>
        <div class="card">
          <?php if (!empty($form_message)): ?>
            <div class="alert <?= $form_success ? 'alert-success' : 'alert-error' ?>" style="padding: 15px; border-radius: 8px; margin-bottom: 15px; <?= $form_success ? 'background: #d1fae5; color: #065f46; border: 1px solid #10b981;' : 'background: #fee2e2; color: #991b1b; border: 1px solid #ef4444;' ?>">
              <?= h($form_message) ?>
            </div>
          <?php endif; ?>

          <?php if ($form_success): ?>
            <div style="text-align: center; padding: 20px;">
              <div style="font-size: 48px; margin-bottom: 15px;">✅</div>
              <h3><?= h(t('booking_title')) ?></h3>
              <p><?= h(t('email_next_steps')) ?></p>
              <a href="<?= site_url('booking.php') ?>" class="btn btn-primary" style="margin-top: 15px;"><?= h(t('nav_booking')) ?></a>
            </div>
          <?php else: ?>
            <h3><?= h(t('select_time_service')) ?></h3>
            <p><?= h(t('form_intro')) ?></p>

            <form method="post" action="" style="display:grid; gap:10px;">
              <select class="input" name="service" required>
                <option value=""><?= h(t('select_service')) ?></option>
                <?php foreach ($SERVICES as $s): ?>
                  <?php $title = $s["title"]; ?>
                  <option value="<?= h($title) ?>" <?= $selected_service === $title ? "selected" : "" ?>>
                    <?= h(ts($title, 'title')) ?> (<?= h($s["price"]) ?>)
                  </option>
                <?php endforeach; ?>
              </select>

              <select class="input" name="city" required>
                <option value=""><?= h(t('select_city')) ?></option>
                <?php foreach ($LOCATIONS as $loc): ?>
                  <option value="<?= h($loc["city"]) ?>"><?= h($loc["city"]) ?></option>
                <?php endforeach; ?>
              </select>

              <input class="input" type="text" name="fullname" placeholder="<?= h(t('fullname_placeholder')) ?>" required />
              <input class="input" type="email" name="email" placeholder="<?= h(t('email_placeholder')) ?>" required />
              <input class="input" type="tel" name="phone" placeholder="<?= h(t('phone_placeholder')) ?>" required />

              <button class="btn btn-primary" type="submit"><?= h(t('continue')) ?></button>
              <div class="tiny"><?= h(t('booking_system_hint')) ?></div>
            </form>
          <?php endif; ?>
        </div>
      </div>

      <div>
        <div class="card">
          <h3><?= h(t('contact')) ?></h3>
          <p><?= h(t('questions_hint')) ?></p>
          <div class="tiny"><?= h($SITE["phone"]) ?></div>
          <div class="tiny"><?= h($SITE["email"]) ?></div>
        </div>

        <div style="margin-top:14px;" class="cta">
          <div>
            <strong><?= h(t('need_appointment_today')) ?></strong>
            <span><?= h(t('call_us_solve')) ?></span>
          </div>
          <a class="btn btn-outline" style="background:rgba(255,255,255,.14); border-color: rgba(255,255,255,.32); color:#fff;" href="tel:0700230023">
            <?= h(t('call_now')) ?>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<?php require_once __DIR__ . "/includes/footer.php"; ?>
