<?php

/*
In de voorbereiding zijn we bezig geweest met het vullen van de data van het detailoverzicht met data uit een array. Maak daar nu een functie van die:

    Eén associatieve array als input krijgt (zoals het eerste item uit de array in het voorbeeld met de keys: 'title', 'year', 'director', 'stars', 'imageURL');
    de data invult in een stuk HTML; en
    HTML-broncode teruggeeft.

We kunnen nu ook de data op de overzichtpagina met alle films tevoorschijn toveren als we een soortgelijke functie daar gebruiken. Tijdens de volgende les behandelen we lussen (for-loops etc.). Die zouden nu wel heel handig zijn. Maar voor nu mag je het ook per item in de array proberen. Het idee is dat je de $html-variabele steeds verder aanvult door de enkeleFilmNaarHTML(array $film) te gebruiken die je zelf definiëert.

<?php
$html = '';
$html .= enkeleFilmNaarHTML($films[0]);
$html .= enkeleFilmNaarHTML($films[1]);
$html .= enkeleFilmNaarHTML($films[2]);
?>
// Hier staat de verdere HTML-broncode.

Zorg er dus voor dat in het overzicht:

    verschillende films met een en dezelfde functie tevoorschijn kunnen komen;
    je ziet hoeveel films er op de pagina te zien zijn (denk aan de count-functie);
    dat de HTML nog steeds geldig is, zoals in je vorige beroepsproduct;
    je de CSS gebruikt zoals in het vorige beroepsproduct.


*/

