<?php

$files = getAllFilesOnCurrentPath();
printArray('Arquivos encontrados na pasta atual:', $files);
$extensionsFromFiles = extractExtensionsFromFiles($files);
printArray('Extensões dos arquivos encontrados:', $extensionsFromFiles);
sort($extensionsFromFiles);
printArray('Extensões dos arquivos encontrados ordenada por ordem alfabética:', $extensionsFromFiles);

/**
 * Printa na tela o conteúdo de uma array
 *
 * @param  string $contentTitle
 * @param  array  $array Array unidimensional
 *
 * @return void
 */
function printArray(string $contentTitle, array $array): void
{
    echo $contentTitle;
    echo '<p>' . arrayToList($array) . '</p>';
}

/**
 * Converte uma array de strings em uma lista numerada
 *
 * @param  array $array Array unidimensional
 *
 * @return string
 */
function arrayToList(array $array): string
{
    $string = '';
    foreach ($array as $key => $value) {
        $key++;
        $string .= "<p>{$key} -> {$value}</p>";
    }

    return $string;
}

/**
 * Extrai as extensões de uma array de nomes de arquivos
 *
 * @param  array $files Array unidimensional
 *
 * @return array Array unidimensional
 */
function extractExtensionsFromFiles(array $files): array
{
    return array_map(
        function ($item) {
            return pathinfo($item)['extension'];
        },
        $files
    );
}

/**
 * Retorna todos os arquivos encontrados no diretório atual
 *
 * @return array Array unidimensional
 */
function getAllFilesOnCurrentPath(): array
{
    $filesInCurrentPath = scandir(getcwd(), 1);
    return removeNonFiles($filesInCurrentPath);
}

/**
 * Remove os itens que não um arquivo de uma array de nomes de arquivos
 *
 * @param  array $files Array unidimensional
 *
 * @return array Array unidimensional
 */
function removeNonFiles(array $files): array
{
    return array_filter(
        $files,
        function ($item) {
            return is_file($item);
        }
    );
}
