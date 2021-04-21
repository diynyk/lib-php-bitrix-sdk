<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Diynyk\Bitrix\Currency;
use Diynyk\Bitrix\Entities\CurrencyEntity;
use Diynyk\Bitrix\Helpers\BitrixConnectionCredentials;
use Diynyk\Bitrix\Lead;

require_once 'credentials.php';

$cred = new BitrixConnectionCredentials();
$cred
    ->setUrl(CONNECTION_URL)
    ->setUserId(USER_ID)
    ->setToken(USER_TOKEN);


$o = new CurrencyEntity(
    $cred,
    [
        'ADDRESS' => 'Bool shit',
        'NAME' => 'Ololo',
        'ololo' => 'fsadgsdf'
    ]
);

//die(var_dump($o->toArray()));

//$o->ADDRESS_2 = 'test';

//var_dump($o->toArray());


$lead = new Currency ($cred);


die(var_dump($lead->index()));

foreach ($lead->index() as $index) {
    $data = $lead->get($index);
    die(var_dump($data));
    echo vsprintf("%s\t\t%s\t\t%s\t\t%s\n", [$data->ID, $data->NAME, $data->LAST_NAME, $data->CURRENCY_ID]);
}

//$lead->delete(2);

//var_dump($lead->add($o));

//$entity = $lead->get(14);
//$entity->NAME = 'lol'; //$entity->NAME . 'lol';
//$lead->update($entity);
