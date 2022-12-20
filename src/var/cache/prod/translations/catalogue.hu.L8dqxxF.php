<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('hu', array (
  'validators' => 
  array (
    'This value should be false.' => 'Ennek az értéknek hamisnak kell lennie.',
    'This value should be true.' => 'Ennek az értéknek igaznak kell lennie.',
    'This value should be of type {{ type }}.' => 'Ennek az értéknek {{ type }} típusúnak kell lennie.',
    'This value should be blank.' => 'Ennek az értéknek üresnek kell lennie.',
    'The value you selected is not a valid choice.' => 'A választott érték érvénytelen.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Legalább {{ limit }} értéket kell kiválasztani.|Legalább {{ limit }} értéket kell kiválasztani.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Legfeljebb {{ limit }} értéket lehet kiválasztani.|Legfeljebb {{ limit }} értéket lehet kiválasztani.',
    'One or more of the given values is invalid.' => 'A megadott értékek közül legalább egy érvénytelen.',
    'This field was not expected.' => 'Nem várt mező.',
    'This field is missing.' => 'Ez a mező hiányzik.',
    'This value is not a valid date.' => 'Ez az érték nem egy érvényes dátum.',
    'This value is not a valid datetime.' => 'Ez az érték nem egy érvényes időpont.',
    'This value is not a valid email address.' => 'Ez az érték nem egy érvényes e-mail cím.',
    'The file could not be found.' => 'A fájl nem található.',
    'The file is not readable.' => 'A fájl nem olvasható.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'A fájl túl nagy ({{ size }} {{ suffix }}). A legnagyobb megengedett méret {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'A fájl MIME típusa érvénytelen ({{ type }}). Az engedélyezett MIME típusok: {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Ez az érték legfeljebb {{ limit }} lehet.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Ez az érték túl hosszú. Legfeljebb {{ limit }} karaktert tartalmazhat.|Ez az érték túl hosszú. Legfeljebb {{ limit }} karaktert tartalmazhat.',
    'This value should be {{ limit }} or more.' => 'Ez az érték legalább {{ limit }} kell, hogy legyen.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Ez az érték túl rövid. Legalább {{ limit }} karaktert kell tartalmaznia.|Ez az érték túl rövid. Legalább {{ limit }} karaktert kell tartalmaznia.',
    'This value should not be blank.' => 'Ez az érték nem lehet üres.',
    'This value should not be null.' => 'Ez az érték nem lehet null.',
    'This value should be null.' => 'Ennek az értéknek nullnak kell lennie.',
    'This value is not valid.' => 'Ez az érték nem érvényes.',
    'This value is not a valid time.' => 'Ez az érték nem egy érvényes időpont.',
    'This value is not a valid URL.' => 'Ez az érték nem egy érvényes URL.',
    'The two values should be equal.' => 'A két értéknek azonosnak kell lennie.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'A fájl túl nagy. A megengedett maximális méret: {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'A fájl túl nagy.',
    'The file could not be uploaded.' => 'A fájl nem tölthető fel.',
    'This value should be a valid number.' => 'Ennek az értéknek érvényes számnak kell lennie.',
    'This file is not a valid image.' => 'Ez a fájl nem egy érvényes kép.',
    'This is not a valid IP address.' => 'Ez az érték nem egy érvényes IP cím.',
    'This value is not a valid language.' => 'Ez az érték nem egy érvényes nyelv.',
    'This value is not a valid locale.' => 'Ez az érték nem egy érvényes területi beállítás.',
    'This value is not a valid country.' => 'Ez az érték nem egy érvényes ország.',
    'This value is already used.' => 'Ez az érték már használatban van.',
    'The size of the image could not be detected.' => 'A kép méretét nem lehet megállapítani.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'A kép szélessége túl nagy ({{ width }}px). A megengedett legnagyobb szélesség {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'A kép szélessége túl kicsi ({{ width }}px). Az elvárt legkisebb szélesség {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'A kép magassága túl nagy ({{ height }}px). A megengedett legnagyobb magasság {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'A kép magassága túl kicsi ({{ height }}px). Az elvárt legkisebb magasság {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Ez az érték a felhasználó jelenlegi jelszavával kell megegyezzen.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Ennek az értéknek pontosan {{ limit }} karaktert kell tartalmaznia.|Ennek az értéknek pontosan {{ limit }} karaktert kell tartalmaznia.',
    'The file was only partially uploaded.' => 'A fájl csak részben lett feltöltve.',
    'No file was uploaded.' => 'Nem lett fájl feltöltve.',
    'No temporary folder was configured in php.ini.' => 'Nincs ideiglenes könyvtár beállítva a php.ini-ben.',
    'Cannot write temporary file to disk.' => 'Az ideiglenes fájl nem írható a lemezre.',
    'A PHP extension caused the upload to fail.' => 'Egy PHP bővítmény miatt a feltöltés nem sikerült.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Ennek a gyűjteménynek legalább {{ limit }} elemet kell tartalmaznia.|Ennek a gyűjteménynek legalább {{ limit }} elemet kell tartalmaznia.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Ez a gyűjtemény legfeljebb {{ limit }} elemet tartalmazhat.|Ez a gyűjtemény legfeljebb {{ limit }} elemet tartalmazhat.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Ennek a gyűjteménynek pontosan {{ limit }} elemet kell tartalmaznia.|Ennek a gyűjteménynek pontosan {{ limit }} elemet kell tartalmaznia.',
    'Invalid card number.' => 'Érvénytelen kártyaszám.',
    'Unsupported card type or invalid card number.' => 'Nem támogatott kártyatípus vagy érvénytelen kártyaszám.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Érvénytelen nemzetközi bankszámlaszám (IBAN).',
    'This value is not a valid ISBN-10.' => 'Ez az érték nem egy érvényes ISBN-10.',
    'This value is not a valid ISBN-13.' => 'Ez az érték nem egy érvényes ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Ez az érték nem egy érvényes ISBN-10 vagy ISBN-13.',
    'This value is not a valid ISSN.' => 'Ez az érték nem egy érvényes ISSN.',
    'This value is not a valid currency.' => 'Ez az érték nem egy érvényes pénznem.',
    'This value should be equal to {{ compared_value }}.' => 'Ez az érték legyen {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Ez az érték nagyobb legyen, mint {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Ez az érték nagyobb vagy egyenlő legyen, mint {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Ez az érték ugyanolyan legyen, mint {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Ez az érték kisebb legyen, mint {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Ez az érték kisebb vagy egyenlő legyen, mint {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Ez az érték ne legyen {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Ez az érték ne legyen ugyanolyan, mint {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'A képarány túl nagy ({{ ratio }}). A megengedett legnagyobb képarány {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'A képarány túl kicsi ({{ ratio }}). A megengedett legkisebb képarány {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'A kép négyzet alakú ({{ width }}x{{ height }}px). A négyzet alakú képek nem engedélyezettek.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'A kép fekvő tájolású ({{ width }}x{{ height }}px). A fekvő tájolású képek nem engedélyezettek.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'A kép álló tájolású ({{ width }}x{{ height }}px). Az álló tájolású képek nem engedélyezettek.',
    'An empty file is not allowed.' => 'Üres fájl nem megengedett.',
    'The host could not be resolved.' => 'Az állomásnevet nem lehet feloldani.',
    'This value does not match the expected {{ charset }} charset.' => 'Ez az érték nem az elvárt {{ charset }} karakterkódolást használja.',
    'This is not a valid Business Identifier Code (BIC).' => 'Érvénytelen nemzetközi bankazonosító kód (BIC/SWIFT).',
    'Error' => 'Hiba',
    'This is not a valid UUID.' => 'Érvénytelen egyedi azonosító (UUID).',
    'This value should be a multiple of {{ compared_value }}.' => 'Ennek az értéknek oszthatónak kell lennie a következővel: {{ compared_value }}',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'Ez a Bankazonosító kód (BIC) nem kapcsolódik az IBAN kódhoz ({{ iban }}).',
    'This value should be valid JSON.' => 'Ez az érték érvényes JSON kell, hogy legyen.',
    'This value should be positive.' => 'Ennek az értéknek pozitívnak kell lennie.',
    'This value should be either positive or zero.' => 'Ennek az értéknek pozitívnak vagy nullának kell lennie.',
    'This value should be negative.' => 'Ennek az értéknek negatívnak kell lennie.',
    'This value should be either negative or zero.' => 'Ennek az értéknek negatívnak vagy nullának kell lennie.',
    'This collection should contain only unique elements.' => 'Ez a gyűjtemény csak egyedi elemeket tartalmazhat.',
    'This value is not a valid timezone.' => 'Ez az érték nem egy érvényes időzóna.',
    'This password has been leaked in a data breach, it must not be used. Please use another password.' => 'Ez a jelszó korábban egy adatvédelmi incidens során illetéktelenek kezébe került, így nem használható. Kérjük, használjon másik jelszót.',
    'This value should be between {{ min }} and {{ max }}.' => 'Ennek az értéknek {{ min }} és {{ max }} között kell lennie.',
    'This value is not a valid hostname.' => 'Ez az érték nem egy érvényes állomásnév (hosztnév).',
    'The number of elements in this collection should be a multiple of {{ compared_value }}.' => 'A gyűjteményben lévő elemek számának oszthatónak kell lennie a következővel: {{ compared_value }}.',
    'This value should satisfy at least one of the following constraints:' => 'Ennek az értéknek meg kell felelni legalább egynek a következő feltételek közül:',
    'Each element of this collection should satisfy its own set of constraints.' => 'A gyűjtemény minden elemének meg kell felelni a saját feltételeinek.',
  ),
));

$catalogueDefault = new MessageCatalogue('default', array (
));
$catalogue->addFallbackCatalogue($catalogueDefault);

return $catalogue;
