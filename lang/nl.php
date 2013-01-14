<?php

$lang = array(
// -- home

  // header
  'main-form-page-title'         => 'Hermes',
  'pick-up-line'                 => 'NMBS Europa heeft jouw persoonlijke gegevens gelekt,<br/>laat je stem horen !',
  'abstract'                     => '<p><strong>Hermes</strong> is vrije software ontwikkeld door NURPA als reactie op de <a href="http://nurpa.be/actualites/2012/12/SNCB-personal-data-leak">data lek</a> die milioenen gegevens van NMBS Europe klanten verspreid heeft in 2012. Deze applicatie heeft als doel het administratieve process te vereenvoudigen door je helpen toegang te geven tot informatie, bij het neerleggen van een klacht bij de Belgische Privacycommissie of om bezwaar te maken tegen het gebruik van jouw persoonlijke gegevens.</p><p>All persoonlijke gegevens die gevraagd worden door deze tool worden enkel en alleen gebruikt voor het aanmaken van gepersonaliseerde documenten.<strong>Geen enkel gegeven of document zal bewaard worden</strong>. De <a href="https://github.com/nurpa/hermes/">broncode</a> van deze applicatie is geheel vrij beschikbaar online.</p>',

  // form
  'type-of-letter'               => 'Type brieven',
  'information-checkbox-label'   => '<strong>Informatie aanvraag:</strong><br> Vraag de SNCB/NMBS en de <abbr title="Commissie voor de bescherming von de persoonlijke levenssfeer">CBPL</abbr> of je persoonlijke gegevens al dan niet gelekt werden.',
  'opposition-checkbox-label'    => '<strong>Bezwaar maken tegen het gebruik van jouw gegevens:</strong><br> Vraag de SNCB/NMBS of ze jouw gegevens al dan niet bewaren en, als dat het geval is, vraag hen dan om te stoppen met deze gegevens te gebruiken.',
  'complaint-checkbox-label'     => '<strong>Klacht:</strong><br  /> Vraag de <abbr title="Commissie voor de bescherming von de persoonlijke levenssfeer">CBPL</abbr> of jouw persoonlijke gegevens werden gelekt en, als dat het geval is, om een klacht neer te leggen tegen de SNCB/NMBS.',
  'person-contact-details'       => 'Contact details',
  'firstname'                    => 'Voornaam',
  'lastname'                     => 'Achternaam',
  'postal-address'               => 'Adres',
  'postal-code'                  => 'Postcode',
  'city'                         => 'Woonplaats',
  'country'                      => 'Land',
  'email'                        => 'E-mail',
  'make-letters'                 => 'Aanmaken',
  'error-missing-args'           => '',
  'error-pdf-cration-failed'     => '',
  'error-missing-dependencies'   => '',

  // steps
  'what-should-i-do'             => 'Wat moet ik nu doen?',
  'step-print-pdf'               => 'Druk het PDF bestand dat net aangemaakt werd af;',
  'step-print-id'                => 'Aangezien je je identiteit moet aantonen bij elke aanvraag moet je een kopie van je identiteitskaart, als fotokopie of als ingescande kopie, toevoegen bij elke brief;',
  'step-mail-cpvp'               => 'Verzend deze tekst via email naar <a href="mailto:commission@privacycommission.be">commission@privacycommission.be</a> ;<div class="mail"></div>',
  'step-mail-sncb'               => 'Verzend deze tekst via email naar <a href="mailto:internet-int@b-rail.be">internet-int@b-rail.be</a> ;<div class="mail"></div>',
  'step-mails'                   => 'Verzend deze tekst via email naar <a href="mailto:internet-int@b-rail.be">internet-int@b-rail.be</a> (SNCB) en naar <a href="mailto:commission@privacycommission.be">commission@privacycommission.be</a>  (<abbr title="Commissie voor de bescherming von de persoonlijke levenssfeer">CBPL</abbr>)<div class="mail"></div>',
  'step-send-letters'            => 'Verstuur de afgedrukte brief/brieven naar het/de betreffende adres(sen). Deze staan vermeld op de brieven;',
  'step-wait'                    => 'Nu moet je geduldig wachten op een antwoord.',

  // footer
  'footer-text'                  => 'Deze tool werd u aangeboden door <a href="http://nurpa.be">NURPA</a> en is als vrije software beschikbaar onder de <a href="https://www.gnu.org/licenses/agpl-3.0.html">aGPLv3+ Licentie</a><br/>Fotografie CC BY-NC-SA <a href="https://secure.flickr.com/photos/andrew_bolin/3909446250/">« Train Station » by Andrew Bolin</a>',
  'footer-logo'                  => '',

// -- templates

  // opposition letter
  'opposition' => '
<div class="page opposition __lang__">
<p class="lang">__lang__</p>
<p class="sender">
__firstname__ __lastname__<br/>
__postal_address__<br/>
__postal_code__ __city__<br/>
__country__<br/><br/>
__email__
</p>

<p class="date">__city__, __date__</p>

<p class="recipient">
SNCB Europe<br/>
Bureau B-EU 046<br/>
Avenue de la Porte de Hal 40<br/>
1060 Bruxelles
</p>

<h1>
  <span>Onderwerp:</span>
  <span>Informatieaanvraag betreffende de verspreiding van persoonlijke gegevens in 2012 en mijn mogelijkheden tot het maken van bezwaar.</span>
</h1>

<p>Beste Heer of Dame,</p>

<p>Met deze brief wens ik informatie aan te vragen betreffende de verspreiding van mijn persoonlijke gegevens als resultaat van de data lek veroorzaakt door SNCB Europe in 2012 <sup>1</sup>.</p>
<p>In de veronderstelling dat sommige of meerdere van bovengenoemde informatie aanwezig is in de gelekte database, zou ik alle relevante informatie betreffende deze informatie in extenso willen ontvangen. Vervolgens zou ik ook van mijn recht gebruik willen maken om bezwaar in te dienen tegen het verwerken van mijn gegevens.</p>
<p>Op grond van Art. 12 van de wet van 8 December 1992, de zogenaamde "Privacy Wetgeving" <sup>2</sup>, bent u verplicht mij binnen een maand na ontvangst te informeren over hoe u deze aanvraag gevolg zal geven. Verder bent u verplicht, binnen de zelfde termijn, alle mogelijke ontvangers van mijn gegevens op de hoogte te stellen van dit bezwaar.</p>
<p>In bijlage kan u een kopie van mijn identiteitskaart vinden, waarmee ik mijn identiteit aantoon. Alvast dank op voorhand voor uw acties betreffende deze zaak.</p>
<p>Hoogachtend,</p>

<p class="signature">__firstname__ __lastname__</p>

<ol class="footnotes">
  <li>http://www.lalibre.be/actu/belgique/article/788247/fuite-de-donnees-a-la-sncb-le-fichier-etait-disponible-depuis-mai.html</li>
  <li>8 december 1992 Wet tot bescherming van de persoonlijke levenssfeer ten opzichte van de verwerking van persoonsgegevens. Zie http://www.privacycommission.be</li>
</ol>
</div>',

  // complaint letter
  'complaint' => '
<div class="page complaint __lang__">
<p class="lang">__lang__</p>
<p class="sender">
__firstname__ __lastname__<br/>
__postal_address__<br/>
__postal_code__ __city__<br/>
__country__<br/><br/>
__email__
</p>

<p class="date">__city__, __date__</p>

<p class="recipient">
Commission de la protection de la vie privée<br/>
Rue de la Presse, 35<br/>
1000 Bruxelles
</p>

<h1>
  <span>Onderwerp:</span>
  <span>Informatieaanvraag betreffende de verspreiding van mijn  persoonlijke gegevens door SNCB Europe en het neerleggen van een klacht.</span>
</h1>

<p>Beste Heer of Dame,</p>

<p>Met deze brief wens ik informatie aan te vragen betreffende de verspreiding van mijn persoonlijke gegevens als resultaat van de data lek veroorzaakt door SNCB Europe in 2012 <sup>1</sup>.</p>
<p>In de veronderstelling  dat sommige of meerdere van bovengenoemde informatie aanwezig is in de  gelekte database, zou ik alle relevante informatie betreffende deze  informatie in extenso willen ontvangen. Vervolgens zou ik ook van mijn  recht gebruik willen maken om bezwaar in te dienen tegen het verwerken  van mijn gegevens. Ook wens ik een klacht neer te leggen op grond van niet-geautoriseerde verspreiding van mijn persoonlijke gegevens door nalatigheid of onvoorzichtigheid.</p>
<p>In bijlage kan u een kopie van mijn identiteitskaart vinden, waarmee ik mijn identiteit aantoon.</p>
<p>Alvast dank op voorhand voor uw acties betreffende deze klacht.</p>
<p>Hoogachtend,</p>

<p class="signature">__firstname__ __lastname__</p>

<ol class="footnotes">
  <li>http://www.lalibre.be/actu/belgique/article/788247/fuite-de-donnees-a-la-sncb-le-fichier-etait-disponible-depuis-mai.html</li>
</ol>
</div>',

  // mail info
  'mail' => '
<p>Onderwerp: Informatieaanvraag  betreffende de verspreiding van mijn  persoonlijke gegevens door SNCB  Europe in 2012.</p>

<p>Beste Heer of Dame,</p>

<p>Met deze brief wens ik  informatie aan te vragen betreffende de verspreiding van mijn  persoonlijke gegevens als resultaat van de data lek veroorzaakt door SNCB Europe in 2012 <sup>1</sup>.</p>
<p>In de veronderstelling  dat sommige of meerdere van bovengenoemde informatie aanwezig is in de  gelekte database, zou ik alle relevante informatie betreffende deze  informatie in extenso willen ontvangen. Vervolgens zou ik ook van mijn  recht gebruik willen maken om bezwaar in te dienen tegen het verwerken  van mijn gegevens.</p>
<p>Alvast dank op voorhand voor uw acties betreffende deze zaak.</p>
<p>Hoogachtend,</p>

<p>__firstname__ __lastname__</p>
<p>
__postal_address__<br/>
__postal_code__ __city__<br/>
__country__</p>
<p>__email__</p>

<p>[1] http://www.lalibre.be/actu/belgique/article/788247/fuite-de-donnees-a-la-sncb-le-fichier-etait-disponible-depuis-mai.html</p>',
);

?>
