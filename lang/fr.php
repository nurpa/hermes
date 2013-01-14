<?php

$lang = array(
// -- home

  // header
  'main-form-page-title'         => 'Hermes',
  'pick-up-line'                 => 'Divulgation de vos données personnelles par la SNCB Europe,<br/>faites entendre votre voix !',
  'abstract'                     => '
<p><strong>Hermes</strong> est un logiciel libre développé par la NURPA dans le cadre de la <a href="http://nurpa.be/actualites/2012/12/SNCB-fuite-donnees-personnelles">divulgation des données personnelles</a> de millions d’usagers de la SNCB Europe durant l’année 2012. Il s’agit d’une application interactive visant à faciliter les démarches administratives liées à l’obtention d’informations, au dépôt de plainte auprès de la <abbr title="Commission pour la Protection de la Vie Privée">CPVP</abbr> ou encore, à l’exercice du droit d’opposition au traitement et à l’utilisation des données à caractère personnel.</p>
<p>Les informations personnelles requises par cet outil sont exclusivement utilisées pour la génération de documents personnalisés. <strong>Aucune de ces données et aucun de ces documents n’est enregistré</strong>. Le <a href="https://github.com/nurpa/hermes/">code source</a> de cette application est intégralement et librement consultable en ligne.</p>',

  // form
  'type-of-letter'               => 'Types de lettres',
  'information-checkbox-label'   => '<strong>Demande d’informations :</strong><br> Demandez à la SNCB et à la <abbr title="Commission pour la Protection de la Vie Privée">CPVP</abbr> si vos informations personnelles se trouvent dans le fichier diffusé sur Internet.',
  'opposition-checkbox-label'    => '<strong>Opposition à l’utilisation de vos données :</strong><br> Demandez à la SNCB si elle possède des informations personnelles sur vous et, si c’est le cas, demandez-lui de cesser de les utiliser.',
  'complaint-checkbox-label'     => '<strong>Plainte :</strong><br /> Demandez à la <abbr title="Commission pour la Protection de la Vie Privée">CPVP</abbr> si des informations personnelles vous concernant se trouvent dans le fichier et, si c’est le cas, introduisez une plainte contre la SNCB.',
  'person-contact-details'       => 'Données de contact',
  'firstname'                    => 'Prénom',
  'lastname'                     => 'Nom',
  'postal-address'               => 'Adresse postale',
  'postal-code'                  => 'Code postal',
  'city'                         => 'Ville',
  'country'                      => 'Pays',
  'email'                        => 'E-mail',
  'make-letters'                 => 'Créer lettres',
  'error-missing-args'           => '',
  'error-pdf-cration-failed'     => '',
  'error-missing-dependencies'   => '',

  // steps
  'what-should-i-do'             => 'Que faire à présent ?',
  'step-print-pdf'               => 'Imprimez le fichier PDF que vous venez de créer ;',
  'step-print-id'                => 'Puisque les demandes d’opposition à l’usage des données et les plaintes nécessitent de prouver son identité, photocopiez votre carte d’identité ou imprimez une copie scannée. Joignez une copie à chaque courrier ;',
  'step-mail-cpvp'               => 'Envoyez le texte suivant par e-mail à l’adresse <a href="mailto:commission@privacycommission.be">commission@privacycommission.be</a> ;<div class="mail"></div>',
  'step-mail-sncb'               => 'Envoyez le texte suivant par e-mail à l’adresse <a href="mailto:internet-int@b-rail.be">internet-int@b-rail.be</a> ;<div class="mail"></div>',
  'step-mails'                   => 'Envoyez le texte suivant par e-mail à l’adresse <a href="mailto:internet-int@b-rail.be">internet-int@b-rail.be</a> (SNCB) et à <a href="mailto:commission@privacycommission.be">commission@privacycommission.be</a> (<abbr title="Commission pour la Protection de la Vie Privée">CPVP</abbr>)<div class="mail"></div>',
  'step-send-letters'            => 'Envoyez le(s) lettre(s) imprimée(s) aux adresses correspondantes. Celles-ci sont mentionnées sur les lettres ;',
  'step-wait'                    => 'Vous n’avez plus qu’à attendre patiemment une réponse.',

  // footer
  'footer-text'                  => 'This tool is provided by <a href="http://nurpa.be">NURPA</a> and is free software available under the <a href="https://www.gnu.org/licenses/agpl-3.0.html">aGPLv3+ License</a><br/>Illustration CC BY-NC-SA <a href="https://secure.flickr.com/photos/andrew_bolin/3909446250/">« Train Station » by Andrew Bolin</a>',
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

<p class="date">__city__, le __date__</p>

<p class="recipient">
SNCB Europe<br/>
Bureau B-EU 046<br/>
Avenue de la Porte de Hal 40<br/>
1060 Bruxelles
</p>

<h1>
  <span>Objet :</span>
  <span>Demande d’informations relatives à la divulgation de mes données à caractère personnel dans le courant de l’année 2012 et le cas échéant, exercice de mon droit d’opposition.</span>
</h1>

<p>Madame,<br/>Monsieur,</p>

<p>Par la présente, je souhaite obtenir des informations relatives à la divulgation de mes données à caractère personnel dans le cadre de la fuite dont s’est rendue coupable la SNCB Europe dans le courant de l’année 2012 <sup>1</sup>.</p>
<p>Dans l’hypothèse d’une présence positive d’une ou de plusieurs donnée(s) susmentionnée(s) dans le fichier divulgué, je souhaite obtenir <em>in extenso</em> le détail des données concernées. Je souhaite par ailleurs exercer mon droit d’opposition à leur traitement.</p>
<p>En vertu de l’article 12 de la loi du 8 décembre 1992 dite « Loi vie privée » <sup>2</sup>, vous êtes tenu de me communiquer, dans le mois qui suit la réception de la présente demande, quelle suite vous lui avez réservée. En outre, vous êtes tenu d’informer, dans le même délai, le ou les éventuels destinataires de mes données de la présente opposition au traitement.</p>
<p>Afin de prouver mon identité, je joins au présent courrier une copie de ma carte d’identité.</p>
<p>Je vous remercie d’avance de la suite que vous voudrez bien accorder à la présente et demeure dans l’attente de vos nouvelles.</p>
<p>Veuillez agréer, Madame, Monsieur, l’expression de ma considération distinguée.</p>

<p class="signature">__firstname__ __lastname__</p>

<ol class="footnotes">
  <li>http://www.lalibre.be/actu/belgique/article/788247/fuite-de-donnees-a-la-sncb-le-fichier-etait-disponible-depuis-mai.html</li>
  <li>La loi du 8 décembre 1992 relative à la protection de la vie privée à l’égard des traitements de données à caractère personnel. Tant la version coordonnée de la Loi vie privée que le texte de l’arrêté royal du 13 février 2001 qui exécute la Loi vie privée sont disponibles sur le site Internet http://www.privacycommission.be</li>
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

<p class="date">__city__, le __date__</p>

<p class="recipient">
Commission de la protection de la vie privée<br/>
Rue de la Presse, 35<br/>
1000 Bruxelles
</p>

<h1>
  <span>Objet :</span>
  <span>Demande d’informations relatives à la divulgation de mes données à caractère personnel par la SNCB Europe dans le courant de l’année 2012 et le cas échéant, introduction d’une plainte.</span>
</h1>

<p>Madame,<br/>Monsieur,</p>

<p>Par la présente, je souhaite obtenir des informations relatives à la divulgation de mes données à caractère personnel dans le cadre de la fuite dont s’est rendue coupable la SNCB Europe dans le courant de l’année 2012 <sup>1</sup>.</p>
<p>Dans l’hypothèse d’une présence positive d’une ou de plusieurs donnée(s) susmentionnée(s) dans le fichier divulgué, je souhaite obtenir <em>in extenso</em> le détail des données concernées. Je souhaite par ailleurs introduire une plainte au motif d’une divulgation non-autorisée desdites données par imprudence et/ou négligence.</p>
<p>Afin de prouver mon identité, je joins au présent courrier une copie de ma carte d’identité.</p>
<p>Je vous remercie d’avance de la suite que vous voudrez bien accorder à la présente et demeure dans l’attente de la suite que vous réserverez à la présente plainte.</p>
<p>Veuillez agréer, Madame, Monsieur, l’expression de ma considération distinguée.</p>

<p class="signature">__firstname__ __lastname__</p>

<ol class="footnotes">
  <li>http://www.lalibre.be/actu/belgique/article/788247/fuite-de-donnees-a-la-sncb-le-fichier-etait-disponible-depuis-mai.html</li>
</ol>
</div>',

  // mail info
  'mail' => '
<p>Objet : Demande d’informations relatives à la divulgation de mes données à caractère personnel par la SNCB Europe dans le courant de l’année 2012.</p>

<p>Madame,<br/>Monsieur,</p>

<p>Par la présente, je souhaite obtenir des informations relatives à la divulgation de mes données à caractère personnel dans le cadre de la fuite dont s’est rendue coupable la SNCB Europe dans le courant de l’année 2012 [1].</p>
<p>Dans l’hypothèse d’une présence positive d’une ou de plusieurs donnée(s) susmentionnée(s) dans le fichier divulgué, je souhaite obtenir <em>in extenso</em> le détail des données concernées.</p>
<p>Je vous remercie d’avance de la suite que vous voudrez bien accorder à la présente et demeure dans l’attente de vos nouvelles.</p>
<p>Veuillez agréer, Madame, Monsieur, l’expression de ma considération distinguée.</p>

<p>__firstname__ __lastname__</p>
<p>
__postal_address__<br/>
__postal_code__ __city__<br/>
__country__</p>
<p>__email__</p>

<p>[1] http://www.lalibre.be/actu/belgique/article/788247/fuite-de-donnees-a-la-sncb-le-fichier-etait-disponible-depuis-mai.html</p>',
);

?>
