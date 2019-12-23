<?php

include_once('includes/status_messages.php');

function DisplayTelegramConfig($username, $password)
{
    $status = new StatusMessages();
    if (isset($_POST['UpdateTelegramToken'])) {
        if (!file_exists(RASPI_TELEGRAM_CONFIG)) {
            $tmpauth = fopen(RASPI_TELEGRAM_CONFIG, 'w');
            fclose($tmpauth);
        }

        if ($auth_file = fopen(RASPI_TELEGRAM_CONFIG, 'w')) {
            fwrite($auth_file, $_POST['telegramtoken'].PHP_EOL);
            fclose($auth_file);
            $status->addMessage('Telegram token updated');
        } else {
            $status->addMessage('Failed to update Telegram token', 'danger');
        }
    }

    echo renderTemplate("telegram", compact("status", "username"));
}
