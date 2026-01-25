<?php

function h(string $text): string {
  return htmlspecialchars($text, ENT_QUOTES, 'UTF-8');
}

function current_page(): string {
  return basename(parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH));
}

function is_active(string $file): string {
  return current_page() === $file ? "active" : "";
}

function site_url(string $path = ""): string {
  $base = rtrim($GLOBALS["SITE"]["base_path"] ?? "", "/");
  $trimmed = ltrim($path, "/");

  if ($base === "") {
    return $trimmed === "" ? "/" : "/" . $trimmed;
  }

  return $trimmed === "" ? $base . "/" : $base . "/" . $trimmed;
}
