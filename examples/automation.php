<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Diynyk\Bitrix\Entities\EntityContact;
use Diynyk\Bitrix\Helpers\BitrixConnectionCredentials;
use Diynyk\Bitrix\Automation;

require_once 'credentials.php';

$cred = new BitrixConnectionCredentials();
$cred
    ->setUrl(CONNECTION_URL)
    ->setUserId(USER_ID)
    ->setToken(USER_TOKEN);


    $deal = new Automation ($cred);

$deals = $deal->index();
$dealId = end($deals);
$dealEn = $deal->get($dealId);
die(var_dump($dealEn));
die(var_dump($lead->index()));

foreach ($lead->index() as $index) {
    $data = $lead->get($index);
    die(var_dump($data));
    echo vsprintf("%s\t\t%s\t\t%s\t\t%s\n", [$data->ID, $data->NAME, $data->LAST_NAME, $data->CURRENCY_ID]);
}