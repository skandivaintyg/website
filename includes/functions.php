<?php
// includes/functions.php

function h(string $text): string {
  return htmlspecialchars($text, ENT_QUOTES, 'UTF-8');
}

function current_page(): string {
  return basename(parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH));
}

function is_active(string $file): string {
  return current_page() === $file ? "active" : "";
}
