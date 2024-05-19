<?php
// Display CAT facts upon launching the application
$catFactsData = file_get_contents("https://cat-fact.herokuapp.com/facts");
$catFacts = json_decode($catFactsData);
$catFact = $catFacts[array_rand($catFacts)];
echo "😻 $catFact->text\n";