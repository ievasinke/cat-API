<?php
// Display CAT facts upon launching the application
$catFactsData = file_get_contents("https://cat-fact.herokuapp.com/facts");
$catFacts = json_decode($catFactsData);
foreach ($catFacts as $catFact) {
    echo "😻 $catFact->text\n";
}
