<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('cy', array (
  'validators' => 
  array (
    'This value should be false.' => 'Dylid bod y gwerth hwn yn ffug.',
    'This value should be true.' => 'Dylid bod y gwerth hwn yn wir.',
    'This value should be of type {{ type }}.' => 'Dylid bod y gwerth hwn bod o fath {{ type }}.',
    'This value should be blank.' => 'Dylid bod y gwerth hwn yn wag.',
    'The value you selected is not a valid choice.' => 'Nid yw\'r gwerth â ddewiswyd yn ddilys.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Rhaid dewis o leiaf {{ limit }} opsiwn.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Rhaid dewis dim mwy na {{ limit }} opsiwn.',
    'One or more of the given values is invalid.' => 'Mae un neu fwy o\'r gwerthoedd a roddwyd yn annilys.',
    'This field was not expected.' => 'Nid oedd disgwyl y maes hwn.',
    'This field is missing.' => 'Mae\'r maes hwn ar goll.',
    'This value is not a valid date.' => 'Nid yw\'r gwerth yn ddyddiad dilys.',
    'This value is not a valid datetime.' => 'Nid yw\'r gwerth yn datetime dilys.',
    'This value is not a valid email address.' => 'Nid yw\'r gwerth yn gyfeiriad ebost dilys.',
    'The file could not be found.' => 'Ni ddarganfyddwyd y ffeil.',
    'The file is not readable.' => 'Ni ellir darllen y ffeil.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Mae\'r ffeil yn rhy fawr ({{ size }} {{ suffix }}). Yr uchafswm â ganiateir yw {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Nid yw math mime y ffeil yn ddilys ({{ type }}). Dyma\'r mathau â ganiateir {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Dylai\'r gwerth hwn fod yn {{ limit }} neu lai.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Mae\'r gwerth hwn rhy hir. Dylai gynnwys {{ limit }} nodyn cyfrifiadurol neu lai.',
    'This value should be {{ limit }} or more.' => 'Dylai\'r gwerth hwn fod yn {{ limit }} neu fwy.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Mae\'r gwerth hwn yn rhy fyr. Dylai gynnwys {{ limit }} nodyn cyfrifiadurol neu fwy.',
    'This value should not be blank.' => 'Ni ddylai\'r gwerth hwn fod yn wag.',
    'This value should not be null.' => 'Ni ddylai\'r gwerth hwn fod yn null.',
    'This value should be null.' => 'Dylai\'r gwerth fod yn null.',
    'This value is not valid.' => 'Nid yw\'r gwerth hwn yn ddilys.',
    'This value is not a valid time.' => 'Nid yw\'r gwerth hwn yn amser dilys.',
    'This value is not a valid URL.' => 'Nid yw\'r gwerth hwn yn URL dilys.',
    'The two values should be equal.' => 'Rhaid i\'r ddau werth fod yn gyfystyr a\'u gilydd.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Mae\'r ffeil yn rhy fawr. Yr uchafswm â ganiateir yw {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Mae\'r ffeil yn rhy fawr.',
    'The file could not be uploaded.' => 'Methwyd ag uwchlwytho\'r ffeil.',
    'This value should be a valid number.' => 'Dylai\'r gwerth hwn fod yn rif dilys.',
    'This file is not a valid image.' => 'Nid yw\'r ffeil hon yn ddelwedd dilys.',
    'This is not a valid IP address.' => 'Nid yw hwn yn gyfeiriad IP dilys.',
    'This value is not a valid language.' => 'Nid yw\'r gwerth hwn yn iaith ddilys.',
    'This value is not a valid locale.' => 'Nid yw\'r gwerth hwn yn locale dilys.',
    'This value is not a valid country.' => 'Nid yw\'r gwerth hwn yn wlad dilys.',
    'This value is already used.' => 'Mae\'r gwerth hwn eisoes yn cael ei ddefnyddio.',
    'The size of the image could not be detected.' => 'Methwyd â darganfod maint y ddelwedd.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'Mae lled y ddelwedd yn rhy fawr ({{ width }}px). Y lled mwyaf â ganiateir yw {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'Mae lled y ddelwedd yn rhy fach ({{ width }}px). Y lled lleiaf â ganiateir yw {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'Mae uchder y ddelwedd yn rhy fawr ({{ width }}px). Yr uchder mwyaf â ganiateir yw {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'Mae uchder y ddelwedd yn rhy fach ({{ width }}px). Yr uchder lleiaf â ganiateir yw {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Dylaid bod y gwerth hwn yn gyfrinair presenol y defnyddiwr.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Dylai\'r gwerth hwn fod yn union {{ limit }} nodyn cyfrifiadurol o hyd.',
    'The file was only partially uploaded.' => 'Dim ond rhan o\'r ffeil ag uwchlwythwyd.',
    'No file was uploaded.' => 'Ni uwchlwythwyd unrhyw ffeil.',
    'No temporary folder was configured in php.ini.' => 'Nid oes ffolder dros-dro wedi\'i gosod yn php.ini.',
    'Cannot write temporary file to disk.' => 'Methwyd ag ysgrifennu\'r ffeil dros-dro ar ddisg.',
    'A PHP extension caused the upload to fail.' => 'Methwyd ag uwchlwytho oherwydd ategyn PHP.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Dylai\'r casgliad hwn gynnwys {{ limit }} elfen neu fwy.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Dylai\'r casgliad hwn gynnwys {{ limit }} elfen neu lai.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Dylai\'r casgliad hwn gynnwys union {{ limit }} elfen.',
    'Invalid card number.' => 'Nid oedd rhif y cerdyn yn ddilys.',
    'Unsupported card type or invalid card number.' => 'Unai ni dderbynir y math yna o gerdyn, neu nid yw rhif y cerdyn yn ddilys.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Nid yw hwn yn Rhif Cyfrif Banc Rhyngwladol (IBAN) dilys.',
    'This value is not a valid ISBN-10.' => 'Nid yw\'r gwerth hwn yn ISBN-10 dilys.',
    'This value is not a valid ISBN-13.' => 'Nid yw\'r gwerth hwn yn ISBN-13 dilys.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Nid yw\'r gwerth hwn yn Rhif ISBN-10 dilys nac yn ISBN-13 dilys.',
    'This value is not a valid ISSN.' => 'Nid yw\'r gwerth hwn yn ISSN dilys.',
    'This value is not a valid currency.' => 'Nid yw\'r gwerth hwn yn arian dilys.',
    'This value should be equal to {{ compared_value }}.' => 'Dylai\'r gwerth hwn fod yn gyfartal â {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Dylai\'r gwerth hwn fod yn fwy na {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Dylai\'r gwerth hwn fod yn fwy na neu\'n hafal i {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Dylai\'r gwerth hwn fod yn union yr un fath â {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Dylai\'r gwerth hwn fod yn llai na {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Dylai\'r gwerth hwn fod yn llai na neu\'n hafal i {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Ni ddylai\'r gwerth hwn fod yn hafal i {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Ni ddylai\'r gwerth hwn fod yn union yr un fath â {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'Mae\'r gymhareb delwedd yn rhy fawr ({{ ratio }}). Y gymhareb uchaf a ganiateir yw {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'Mae\'r gymhareb delwedd yn rhy fach ({{ ratio }}). Y gymhareb isaf a ddisgwylir yw {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'Mae\'r ddelwedd yn sgwâr ({{ width }}x{{ height }}px). Ni chaniateir delweddau sgwâr.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'Mae\'r ddelwedd mewn fformat tirlun ({{ width }}x{{ height }}px). Ni chaniateir delweddau mewn fformat tirlun.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'Mae\'r ddelwedd mewn fformat portread ({{ width }}x{{ height }}px). Ni chaniateir delweddau mewn fformat portread.',
    'An empty file is not allowed.' => 'Ni chaniateir ffeil wag.',
    'The host could not be resolved.' => 'Ni fu modd datrys y gwesteiwr.',
    'This value does not match the expected {{ charset }} charset.' => 'Nid yw\'r gwerth hwn yn cyfateb â\'r {{ charset }} set nodau ddisgwyliedig.',
    'This is not a valid Business Identifier Code (BIC).' => 'Nid yw hwn yn God Adnabod Busnes (BIC) dilys.',
    'Error' => 'Gwall',
    'This is not a valid UUID.' => 'Nid yw hyn yn UUID dilys.',
    'This value should be a multiple of {{ compared_value }}.' => 'Dylai\'r gwerth hwn fod yn luosrif o {{ compared_value }}.',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'Nid yw\'r Cod Adnabod Busnes (BIC) hwn yn gysylltiedig ag IBAN {{ iban }}.',
  ),
));

$catalogueDefault = new MessageCatalogue('default', array (
));
$catalogue->addFallbackCatalogue($catalogueDefault);

return $catalogue;
