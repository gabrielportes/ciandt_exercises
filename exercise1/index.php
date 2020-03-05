<?php

$location = [];
$location[] = getALocation('Washington', 'EUA');
$location[] = getALocation('Brasília', 'Brasil');
$location[] = getALocation('Madrid', 'Espanha');
$location[] = getALocation('Sydney', 'Austrália');
$location[] = getALocation('Ottawa', 'Canáda');
usort(
    $location,
    function ($a, $b) {
        return strcmp($a['capital'], $b['capital']);
    }
);
echo locationToString($location);

/**
 * Monta uma array unidimensional com uma localidade
 *
 * @param  string $capital
 * @param  string $pais
 *
 * @return array unidimensional
 */
function getALocation(string $capital, string $pais): array
{
    return [
        'capital' => $capital,
        'country' => $pais
    ];
}

/**
 * Monta uma string com as localizações
 *
 * @param  array $location Array multidimensional
 *
 * @return string
 */
function locationToString(array $location): string
{
    return array_reduce(
        $location,
        function ($carry, $item) {
            $carry .= "<p>A capital do {$item['capital']} é {$item['country']}</p>";
            return $carry;
        }
    );
}
