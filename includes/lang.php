<?php
// Language detection: URL param > Cookie > Default (sv)
$lang = $_GET['lang'] ?? $_COOKIE['lang'] ?? 'sv';
if (!in_array($lang, ['sv', 'en'])) {
  $lang = 'sv';
}

// Set cookie if changed via URL
if (isset($_GET['lang']) && in_array($_GET['lang'], ['sv', 'en'])) {
  setcookie('lang', $lang, time() + (365 * 24 * 60 * 60), '/');
}

$TRANSLATIONS = [
  // Navigation
  'nav_services' => ['sv' => 'Läkarintyg', 'en' => 'Medical Certificates'],
  'nav_booking' => ['sv' => 'Boka tid', 'en' => 'Book Appointment'],
  'nav_company' => ['sv' => 'Företag', 'en' => 'Business'],
  'nav_faq' => ['sv' => 'FAQ', 'en' => 'FAQ'],
  'nav_main_menu' => ['sv' => 'Huvudmeny', 'en' => 'Main menu'],
  'nav_mobile_menu' => ['sv' => 'Mobilmeny', 'en' => 'Mobile menu'],
  'nav_open_menu' => ['sv' => 'Öppna meny', 'en' => 'Open menu'],
  'nav_menu' => ['sv' => 'Meny', 'en' => 'Menu'],

  // Language toggle
  'lang_svenska' => ['sv' => 'Svenska', 'en' => 'Swedish'],
  'lang_english' => ['sv' => 'English', 'en' => 'English'],
  'lang_current' => ['sv' => 'English', 'en' => 'Svenska'],
  'lang_toggle_to' => ['sv' => 'en', 'en' => 'sv'],

  // Meta
  'meta_desc' => ['sv' => 'Specialister på läkarintyg. Boka tid snabbt och enkelt online.', 'en' => 'Specialists in medical certificates. Book an appointment quickly and easily online.'],

  // Index page - Hero
  'hero_title' => ['sv' => 'Läkarintyg för Körkortsintyg', 'en' => 'Medical Certificates for Driving Licenses'],
  'hero_subtitle' => ['sv' => 'Enkelt · Snabbt · Korrekt', 'en' => 'Easy · Fast · Accurate'],
  'hero_book_today' => ['sv' => 'Boka idag', 'en' => 'Book Today'],
  'hero_our_services' => ['sv' => 'Våra tjänster', 'en' => 'Our Services'],
  'hero_licensed_doctors' => ['sv' => 'Intyg utfärdade av legitimerade läkare', 'en' => 'Certificates issued by licensed doctors'],
  'contact_info' => ['sv' => 'Kontaktinformation', 'en' => 'Contact Information'],
  'phone_number' => ['sv' => 'Telefonnummer', 'en' => 'Phone Number'],
  'email_address' => ['sv' => 'Mejladress', 'en' => 'Email Address'],
  'website' => ['sv' => 'Websida', 'en' => 'Website'],
  'visiting_address' => ['sv' => 'Besöksadress', 'en' => 'Visiting Address'],

  // Index page - About
  'about_us' => ['sv' => 'Om oss', 'en' => 'About Us'],
  'about_text_1' => ['sv' => 'Skandiva Intyg drivs av två legitimerade läkare med lång erfarenhet av utfärdande av olika typer av medicinska intyg, inklusive körkortsintyg.', 'en' => 'Skandiva Intyg is run by two licensed doctors with extensive experience in issuing various types of medical certificates, including driving license certificates.'],
  'about_text_2' => ['sv' => 'Vi har fokus på kvalitet, tillgänglighet och smidig hantering för våra patienter.', 'en' => 'We focus on quality, accessibility, and smooth handling for our patients.'],
  'about_text_3' => ['sv' => 'Vi är baserade i Tranemo och arbetar effektivt för att du ska få ditt intyg snabbt, tryggt och korrekt. Vi erbjuder i vissa fall mobil tjänst och kan anpassa oss för att möta dig på en annan plats.', 'en' => 'We are based in Tranemo and work efficiently to ensure you receive your certificate quickly, safely, and accurately. In some cases, we offer mobile services and can adapt to meet you at another location.'],

  // Index page - Why choose us
  'why_choose_us' => ['sv' => 'Därför väljer kunder oss', 'en' => 'Why Customers Choose Us'],
  'why_choose_intro' => ['sv' => 'Vi erbjuder pålitliga medicinska intyg med fokus på kvalitet, tillgänglighet och snabb service.', 'en' => 'We offer reliable medical certificates with a focus on quality, accessibility, and fast service.'],
  'why_1' => ['sv' => 'Fri konsultation – svar inom 24 timmar', 'en' => 'Free consultation – response within 24 hours'],
  'why_2' => ['sv' => 'Intyg utfärdas samma dag', 'en' => 'Certificates issued same day'],
  'why_3' => ['sv' => 'Elektroniska intyg skickas direkt till Transportstyrelsen', 'en' => 'Electronic certificates sent directly to the Transport Agency'],
  'why_4' => ['sv' => 'Tillgängliga och flexibla tider', 'en' => 'Available and flexible hours'],
  'why_5' => ['sv' => 'Mobil tjänst vid gruppbokning – Gratis inom närområdet – Extra kostnad tillkommer vid längre avstånd', 'en' => 'Mobile service for group bookings – Free locally – Extra charge for longer distances'],
  'why_6' => ['sv' => '15 % rabatt vid gruppbokning av 3 personer eller fler', 'en' => '15% discount for group bookings of 3 or more people'],

  // Index page - Services
  'our_services' => ['sv' => 'Våra tjänster', 'en' => 'Our Services'],
  'services_intro' => ['sv' => 'Vi erbjuder ett brett utbud av medicinska intyg som utfärdas effektivt och i enlighet med gällande regelverk.', 'en' => 'We offer a wide range of medical certificates issued efficiently and in accordance with applicable regulations.'],
  'other_certificates' => ['sv' => 'Andra medicinska intyg vid behov', 'en' => 'Other medical certificates as needed'],
  'book' => ['sv' => 'Boka', 'en' => 'Book'],

  // Index page - Contact section
  'contact_us' => ['sv' => 'Kontakta oss', 'en' => 'Contact Us'],
  'contact_text' => ['sv' => 'Besök vår webbplats eller skanna QR-koden för att boka direkt – vi återkommer samma dag.', 'en' => 'Visit our website or scan the QR code to book directly – we will respond the same day.'],
  'book_today_response' => ['sv' => 'Boka idag – vi återkommer samma dag', 'en' => 'Book today – we respond the same day'],

  // Index page - CTA
  'extra_urgent' => ['sv' => 'Extra bråttom?', 'en' => 'In a hurry?'],
  'call_us_text' => ['sv' => 'Ring oss så försöker vi hitta en tid som passar – ofta samma dag.', 'en' => 'Call us and we\'ll try to find a time that suits you – often the same day.'],
  'call_now' => ['sv' => 'Ring nu', 'en' => 'Call Now'],

  // Services page
  'page_title_services' => ['sv' => 'Läkarintyg & undersökningar', 'en' => 'Medical Certificates & Examinations'],
  'search_placeholder' => ['sv' => 'Sök tjänst…', 'en' => 'Search service…'],
  'search' => ['sv' => 'Sök', 'en' => 'Search'],
  'clear' => ['sv' => 'Rensa', 'en' => 'Clear'],
  'no_results' => ['sv' => 'Inga träffar', 'en' => 'No results'],
  'no_results_hint' => ['sv' => 'Testa en annan sökning, t.ex. "körkort" eller "sjöfart".', 'en' => 'Try another search, e.g. "license" or "maritime".'],

  // Booking page
  'page_title_booking' => ['sv' => 'Boka tid • Medicinska intyg', 'en' => 'Book Appointment • Medical Certificates'],
  'booking_title' => ['sv' => 'Boka tid', 'en' => 'Book Appointment'],
  'quick_booking' => ['sv' => 'Snabb bokning online', 'en' => 'Quick online booking'],
  'select_time_service' => ['sv' => 'Välj tid och tjänst', 'en' => 'Select time and service'],
  'form_intro' => ['sv' => 'Fyll i formuläret så återkommer vi med bekräftelse.', 'en' => 'Fill in the form and we will confirm your booking.'],
  'select_service' => ['sv' => 'Välj tjänst…', 'en' => 'Select service…'],
  'select_city' => ['sv' => 'Välj stad…', 'en' => 'Select city…'],
  'fullname_placeholder' => ['sv' => 'För- och efternamn', 'en' => 'Full name'],
  'email_placeholder' => ['sv' => 'E-post', 'en' => 'Email'],
  'phone_placeholder' => ['sv' => 'Telefonnummer', 'en' => 'Phone number'],
  'continue' => ['sv' => 'Fortsätt', 'en' => 'Continue'],
  'booking_system_hint' => ['sv' => 'Du kan koppla detta till t.ex. Bokadirekt, TimeCenter eller eget system.', 'en' => 'You can connect this to e.g. Bokadirekt, TimeCenter, or your own system.'],
  'contact' => ['sv' => 'Kontakt', 'en' => 'Contact'],
  'questions_hint' => ['sv' => 'Har du frågor om vilket intyg du behöver?', 'en' => 'Do you have questions about which certificate you need?'],
  'need_appointment_today' => ['sv' => 'Behöver du en tid idag?', 'en' => 'Need an appointment today?'],
  'call_us_solve' => ['sv' => 'Ring oss så försöker vi lösa det.', 'en' => 'Call us and we\'ll try to help.'],

  // Company page
  'page_title_company' => ['sv' => 'Företag • Medicinska intyg', 'en' => 'Business • Medical Certificates'],
  'company_title' => ['sv' => 'Företag', 'en' => 'Business'],
  'contact_us_btn' => ['sv' => 'Kontakta oss', 'en' => 'Contact Us'],
  'agreements_volumes' => ['sv' => 'Avtal & volymer', 'en' => 'Agreements & Volumes'],
  'company_text' => ['sv' => 'Vi kan hjälpa företag med planerade hälsoundersökningar och läkarintyg. Kontakta oss för paketpris och tider.', 'en' => 'We can help businesses with planned health examinations and medical certificates. Contact us for package prices and schedules.'],
  'how_it_works' => ['sv' => 'Så fungerar det', 'en' => 'How it works'],
  'how_it_works_steps' => ['sv' => '1) Ni beskriver behovet → 2) vi föreslår upplägg → 3) bokning/leverans.', 'en' => '1) Describe your needs → 2) we propose a solution → 3) booking/delivery.'],
  'book_consultation' => ['sv' => 'Boka konsultation', 'en' => 'Book Consultation'],

  // FAQ page
  'page_title_faq' => ['sv' => 'FAQ • Frågor & svar', 'en' => 'FAQ • Questions & Answers'],
  'faq_title' => ['sv' => 'Vanliga frågor', 'en' => 'Frequently Asked Questions'],
  'faq_q1' => ['sv' => 'Hur snabbt får jag mitt intyg?', 'en' => 'How quickly will I get my certificate?'],
  'faq_a1' => ['sv' => 'Ofta direkt efter besöket om all information är komplett.', 'en' => 'Often immediately after the visit if all information is complete.'],
  'faq_q2' => ['sv' => 'Behöver jag ta med något?', 'en' => 'Do I need to bring anything?'],
  'faq_a2' => ['sv' => 'Legitimation och eventuella tidigare journal/handlingar om relevant.', 'en' => 'ID and any previous medical records if relevant.'],
  'faq_q3' => ['sv' => 'Kan ni hjälpa med Transportstyrelsen?', 'en' => 'Can you help with the Transport Agency?'],
  'faq_a3' => ['sv' => 'Ja, vi arbetar ofta med krav för körkortsintyg och kompletteringar.', 'en' => 'Yes, we often work with driving license certificate requirements and supplements.'],

  // Footer
  'footer_quick_links' => ['sv' => 'Snabblänkar', 'en' => 'Quick Links'],
  'footer_locations' => ['sv' => 'Mottagningar', 'en' => 'Locations'],
  'footer_data_policy' => ['sv' => 'Datapolicy', 'en' => 'Data Policy'],
  'footer_hours' => ['sv' => 'Vardagar 08:00–17:00', 'en' => 'Weekdays 08:00–17:00'],
  'footer_rights' => ['sv' => 'All rights reserved', 'en' => 'All rights reserved'],
];

// Service translations
$SERVICE_TRANSLATIONS = [
  'Körkortsintyg' => [
    'title' => ['sv' => 'Körkortsintyg', 'en' => 'Driving License Certificate'],
    'desc' => ['sv' => 'Medicinskt körkortsintyg utfärdas effektivt och korrekt.', 'en' => 'Medical driving license certificate issued efficiently and correctly.'],
  ],
  'Reseintyg' => [
    'title' => ['sv' => 'Reseintyg', 'en' => 'Travel Certificate'],
    'desc' => ['sv' => 'Intyg för resa som uppfyller gällande krav.', 'en' => 'Travel certificate that meets applicable requirements.'],
  ],
  'Intyg för studier, utbildning och arbete' => [
    'title' => ['sv' => 'Intyg för studier, utbildning och arbete', 'en' => 'Certificate for Studies, Education and Work'],
    'desc' => ['sv' => 'Intyg anpassade efter studier, utbildning eller arbetsgivare.', 'en' => 'Certificates customized for studies, education, or employer.'],
  ],
  'Förstadagsintyg' => [
    'title' => ['sv' => 'Förstadagsintyg', 'en' => 'First Day Certificate'],
    'desc' => ['sv' => 'Förstadagsintyg utfärdas smidigt vid behov.', 'en' => 'First day certificate issued smoothly when needed.'],
  ],
  'Intyg för idrott och fysisk aktivitet' => [
    'title' => ['sv' => 'Intyg för idrott och fysisk aktivitet', 'en' => 'Certificate for Sports and Physical Activity'],
    'desc' => ['sv' => 'Medicinska intyg för idrott eller fysisk aktivitet.', 'en' => 'Medical certificates for sports or physical activity.'],
  ],
];

// Helper function to get translation
function t(string $key): string {
  global $TRANSLATIONS, $lang;
  return $TRANSLATIONS[$key][$lang] ?? $key;
}

// Helper function for service translation
function ts(string $swedish_title, string $field): string {
  global $SERVICE_TRANSLATIONS, $lang;
  return $SERVICE_TRANSLATIONS[$swedish_title][$field][$lang] ?? $swedish_title;
}

// Get current language
function get_lang(): string {
  global $lang;
  return $lang;
}

// Get language code for HTML lang attribute
function get_html_lang(): string {
  global $lang;
  return $lang;
}
