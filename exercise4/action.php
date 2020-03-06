<?php

const FILENAME = './registros.txt';

$contentFromFile = file(FILENAME);
if (is_writable(FILENAME)) {

    if (emailExists($_POST['email'])) {
        echo "Email address already taken";
        exit;
    }

    if (!$handle = fopen(FILENAME, 'a+')) {
        echo "Cannot open file (FILENAME)";
        exit;
    }

    $newContent = '';
    if (!$contentFromFile) {
        $newContent = "name;last_name;phone;email;pwd\n";
    }

    $newContent .= getContentToSave();

    if (fwrite($handle, $newContent) === FALSE) {
        echo "Cannot write to file (FILENAME)";
        exit;
    }

    fclose($handle);

    echo 'Registered successfully';
} else {
    echo 'The file ' . FILENAME . ' is not writable';
}

/**
 * Retorna uma linha com os dados a serem salvos
 *
 * @return string
 */
function getContentToSave(): string
{
    return sprintf(
        "%s;%s;%s;%s;%s\n",
        $_POST['name'],
        $_POST['last_name'],
        $_POST['phone'],
        $_POST['email'],
        encryptPassword($_POST['pwd'])
    );
}

/**
 * Encripta uma senha
 *
 * @param  string $password
 *
 * @return string
 */
function encryptPassword(string $password): string
{
    return password_hash($password, PASSWORD_BCRYPT);
}

/**
 * Verifica se já existe um email igual salvo no arquivo de registro
 *
 * @param  string $email
 *
 * @return bool
 */
function emailExists(string $email): bool
{
    $contentFromFile = file(FILENAME);

    foreach ($contentFromFile as $lineNumber => $line) {
        $data = explode(';', $line);
        if ($lineNumber == 0) {
            $keyFromEmail = array_flip($data)['email'];
            continue;
        }

        if (
            isset($data[$keyFromEmail])
            && $email == $data[$keyFromEmail]
        ) {
            return true;
        }
    }

    return false;
}
