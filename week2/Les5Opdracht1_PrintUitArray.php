<?php

/*

```php
$film = [
  'title' => 'Black Panther',
  'year' => 2018,
  'director' => 'Ryan Coogler',
  'stars' => ['Chadwick Boseman', 'Michael B. Jordan'],
  'imageURL' => 'https://m.medi a-amazon.com/images/M/MV5BMTg1MTY2MjYzNV5BMl5BanBnXkFtZTgwMTc4NTMwNDI@._V1_UX182_CR0,0,182,268_AL_.jpg'
];
```



Web Technology
Arrays | Lesprogramma

    Voorbereiding
    Doelen
    Behandeling theorie (~60 min.)
    Opdracht 1: Print data uit array (~10 min.)
        Opdracht 1a:
        Opdracht 1b:
    Opdracht 2: array_slice (~15 min.)
    Opdracht 3: Functie maken die met data uit een array een HTML-element maakt (~30 min.)
    Opdracht 4: vul de webpagina aan met herhaalbare blokken (~30 min.)

Voorbereiding
Doelen

Je leert met PHP:

    Gebruikmaken van arrays.
    Gebruikmaken van arrayfuncties.
    Functies maken die gebruik maken arrays.
    Complexere data structuren uitlezen.
    Functies en variabelen uit andere bestanden gebruiken.

Behandeling theorie (~60 min.)

    Beantwoorden van vragen uit de voorbereiding.
    Korte demo over verschillende typen arrays.
    Behandelen van arrayfuncties.
    Voorbeeld van hoe een functie uit een andere file werkt.

Opdracht 1: Print data uit array (~10 min.)

In de volgende broncode staat een associatieve array met allerlei informatie over een film.

$film = [
  'title' => 'Black Panther',
  'year' => 2018,
  'director' => 'Ryan Coogler',
  'stars' => ['Chadwick Boseman', 'Michael B. Jordan'],
  'imageURL' => 'https://m.media-amazon.com/images/M/MV5BMTg1MTY2MjYzNV5BMl5BanBnXkFtZTgwMTc4NTMwNDI@._V1_UX182_CR0,0,182,268_AL_.jpg'
];

Opdracht 1a:

Schrijf een functie die een stuk html retourneert met de data in een tabel met de volgende kolommen:

    titel;
    jaar;
    regisseur;
    hoofdrolspelers.

Zoals onderstaande:

<table>
  <tr>
    <td>Black Panther</td>
    <td>2018</td>
    <td>Ryan Coogler</td>
    <td>Chadwick Boseman, Michael B. Jordan</td>
  </tr>
</table>

Opdracht 1b:

Schrijf ook een functie die het plaatje retourneert in HTML (💡: vervang het `src`-attribuut en voeg toe alt="Poster")
*/

function filmTabel($filmArray) : string{
    // Schrijf hier je broncode
}


function filmPlaatje($filmArray) : string{
    // Schrijf hier je broncode
}