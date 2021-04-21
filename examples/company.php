<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Diynyk\Bitrix\Company;
use Diynyk\Bitrix\Entities\CompanyEntity;
use Diynyk\Bitrix\Helpers\BitrixConnectionCredentials;

require_once 'credentials.php';

$cred = new BitrixConnectionCredentials();
$cred
    ->setUrl(CONNECTION_URL)
    ->setUserId(USER_ID)
    ->setToken(USER_TOKEN);

$o = new CompanyEntity(
    $cred,
    [
        'ADDRESS' => 'Bool shit',
        'NAME' => 'Ololo',
        'ololo' => 'fsadgsdf'
    ]
);

$o->ADDRESS_2 = 'test';

//var_dump($o->toArray());


$lead = new Company ($cred);

foreach ($lead->index() as $index) {
    $data = $lead->get($index);

    echo vsprintf("%s\t\t%s\n", [$data->ID, $data->INDUSTRY]);
}

//$lead->delete(2);

//var_dump($lead->add($o));

//$entity = $lead->get(14);
//$entity->NAME = 'lol'; //$entity->NAME . 'lol';
//$lead->update($entity);
