<?php

$lang = array(
// -- home

  // header
  'main-form-page-title'         => 'Hermes',
  'pick-up-line'                 => 'SNCB Europe leaked your personal data,<br/>make your voice heard!',
  'abstract'                     => '
<p><strong>Hermes</strong> is a free software developed by NURPA in reaction to the <a href="http://nurpa.be/actualites/2012/12/SNCB-personal-data-leak">data leak</a> that disclosed millions of SNCB Europe customer details in 2012. This application aims at facilitating the administrative process to help you get access to information, to lodge a complaint with the Belgian Privacy Commission or to object to the processing of your personal data.</p>
<p>All personal data required by this tool are exclusively used for the creation of personalised documents. <strong>None of these data and documents will be retained</strong>. The <a href="https://github.com/nurpa/hermes/">source code</a> of this application is entirely and freely available online.</p>',

  // form
  'type-of-letter'               => 'Types of letters',
  'information-checkbox-label'   => '<strong>Request for information:</strong><br> Ask the SNCB/NMBS and the <abbr title="Commission for the Protection of Privacy">CPP</abbr> if your personal information was in the leaked file.',
  'opposition-checkbox-label'    => '<strong>Opposition to the use of your data:</strong><br> Ask the SNCB/NMBS whether they have information about you and, if this is the case, ask them to stop using it.',
  'complaint-checkbox-label'     => '<strong>Complaint:</strong><br /> Ask the <abbr title="Commission for the Protection of Privacy">CPP</abbr> whether your personal information was in the leaked file and, if this is the case, make a complaint against the SNCB/NMBS.',
  'person-contact-details'       => 'Contact details',
  'firstname'                    => 'First name',
  'lastname'                     => 'Last name',
  'postal-address'               => 'Postal address',
  'postal-code'                  => 'Postal code',
  'city'                         => 'City',
  'country'                      => 'Country',
  'email'                        => 'E-mail',
  'make-letters'                 => 'Create',
  'error-missing-args'           => '<strong>An error has occurred</strong><br/>You must fill in all fields order to enable to eliminate false positives when searching the database.',

  // steps
  'what-should-i-do'             => 'What should I do now?',
  'step-print-pdf'               => 'Print the PDF file you have just created;',
  'step-print-id'                => 'Since you need to prove your identity for any request to object to the processing of your personal data, please make a photo copy of your ID card or print a scanned copy and attach it to each letter;',
  'step-mail-cpvp'               => 'Send this text by email to <a href="mailto:commission@privacycommission.be">commission@privacycommission.be</a> ;<div class="mail-cpvp"></div>',
  'step-mail-sncb'               => 'Send this text by email to <a href="mailto:internet-int@b-rail.be">internet-int@b-rail.be</a> ;<div class="mail-sncb"></div>',
  'step-mails'                   => 'Send this text by email to <a href="mailto:internet-int@b-rail.be">internet-int@b-rail.be</a> (SNCB) and to <a href="mailto:commission@privacycommission.be">commission@privacycommission.be</a> (<abbr title="Commission for the Protection of Privacy">CPP</abbr>)<div class="mail-sncb"></div>',
  'step-send-letters'            => 'Send the printed letter(s) to the relevant adresse(s). These ones are mentioned in the letters;',
  'step-wait'                    => 'Now you just have to wait patiently for a reply.',

  // footer
  'footer-text'                  => 'This tool is provided by <a href="http://nurpa.be">NURPA</a> and is free software available under the <a href="https://www.gnu.org/licenses/agpl-3.0.html">aGPLv3+ License</a><br/>Illustration CC BY-NC-SA <a href="https://secure.flickr.com/photos/andrew_bolin/3909446250/">« Train Station » by Andrew Bolin</a>',

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
  <span>Subject:</span>
  <span>Request for information regarding the disclosure of my personal data in 2012 and exercise of my right of opposition.</span>
</h1>

<p>Dear Sir or Madam,</p>

<p>I hereby request access to information regarding the disclosure of my personal data as a result of the data leak caused by SNCB Europe in 2012 <sup>1</sup>.</p>
<p>Assuming that some or several of the abovementioned data are present in the leaked data base, I would like to receive all relevant information on these data in extenso. In addition, I would like to exercice my right to object to their processing.</p>
<p>Pursuant to Art. 12 of the law dated 8 December 1992, the so-called "Privacy Law" <sup>2</sup>, you are required to communicate how you are going to follow up on this request within one month upon receipt. Furthermore, you are obliged to inform, also within the same time limit, all possible recipients of my data of this statement of opposition.</p>
<p>Please find a copy of my ID card here attached in order to prove my identity. Thank you in advance for your actions in this regard.</p>
<p>Yours sincerely,</p>

<p class="signature">__firstname__ __lastname__</p>

<ol class="footnotes">
  <li>http://www.lalibre.be/actu/belgique/article/788247/fuite-de-donnees-a-la-sncb-le-fichier-etait-disponible-depuis-mai.html</li>
  <li>8 December 1992 Act on the protection of private life with respect to the processing of personal data. See http://www.privacycommission.be</li>
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
  <span>Subject:</span>
  <span>Request for information regarding the disclosure of my personal data by SNB Europe in 2012 and lodging of a complaint.</span>
</h1>

<p>Dear Sir or Madam,</p>

<p>I hereby request access to information regarding the disclosure of my personal data as a result of the data leak caused by SNCB Europe in 2012 <sup>1</sup>.</p>
<p>Assuming that some or several of the abovementioned data are present in the leaked data base, I would like to receive all relevant information on these data in extenso. In addition, I would like to exercice my right to object to their processing. In addition, I would like to lodge a complaint on the ground of the non-authorised disclosure of my personal data through negligence or carelessness.</p>
<p>Please find a copy of my ID card here attached in order to prove my identity.</p>
<p>Thank you in advance for your actions regarding this complaint.</p>
<p>Yours sincerely,</p>

<p class="signature">__firstname__ __lastname__</p>

<ol class="footnotes">
  <li>http://www.lalibre.be/actu/belgique/article/788247/fuite-de-donnees-a-la-sncb-le-fichier-etait-disponible-depuis-mai.html</li>
</ol>
</div>',

  // mail info
  'info-cpp' => '
<p>Subject: Request for information regarding the disclosure of my personal data by SNCB Europe in 2012.</p>

<p>Dear Sir or Madam,</p>

<p>I hereby request access to information regarding the disclosure of my personal data as a result of the data leak caused by SNCB Europe in 2012 [1].</p>
<p>Assuming that some or several of the abovementioned data are present in the leaked data base, I would like to receive all relevant information on these data in extenso. In addition, I would like to exercice my right to object to their processing. </p>
<p>Thank you in advance for your actions in this regard.</p>
<p>Yours sincerely,</p>

<p>__firstname__ __lastname__</p>
<p>
__postal_address__<br/>
__postal_code__ __city__<br/>
__country__</p>
<p>__email__</p>

<p>[1] http://www.lalibre.be/actu/belgique/article/788247/fuite-de-donnees-a-la-sncb-le-fichier-etait-disponible-depuis-mai.html</p>',

  // SNCB mail
  'info-sncb' => '
<p>Subject: Request for information regarding the disclosure of my personal data in 2012.</p>

<p>Dear Sir or Madam,</p>

<p>I hereby request access to information regarding the disclosure of my personal data as a result of the data leak caused by SNCB Europe in 2012 [1].</p>
<p>Assuming that some or several of the abovementioned data are present in the leaked data base, I would like to receive all relevant information on these data in extenso. In addition, I would like to exercice my right to object to their processing. </p>
<p>Thank you in advance for your actions in this regard.</p>
<p>Yours sincerely,</p>

<p>__firstname__ __lastname__</p>
<p>
__postal_address__<br/>
__postal_code__ __city__<br/>
__country__</p>
<p>__email__</p>

<p>[1] http://www.lalibre.be/actu/belgique/article/788247/fuite-de-donnees-a-la-sncb-le-fichier-etait-disponible-depuis-mai.html</p>',
);

?>
