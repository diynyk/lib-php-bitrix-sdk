<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Diynyk\Bitrix\Entities\EntityContact;
use Diynyk\Bitrix\Helpers\BitrixConnectionCredentials;
use Diynyk\Bitrix\Lead;

require_once 'credentials.php';

$cred = new BitrixConnectionCredentials();
$cred
    ->setUrl(CONNECTION_URL)
    ->setUserId(USER_ID)
    ->setToken(USER_TOKEN);

/*
$o = new LeadEntity(
    $cred,
    [
        'ADDRESS' => 'Bool shit',
        'NAME' => 'Ololo',
        'ololo' => 'fsadgsdf'
    ]
);

$o->ADDRESS_2 = 'test';
*/
//var_dump($o->toArray());


$lead = new Lead ($cred);

foreach ($lead->index() as $index) {

    $data = $lead->get($index);

   // die(var_dump($data->toArray()));
    echo vsprintf("%s\t\t%s\t\t%s\t\t%s\n", [$data->ID, $data->NAME, $data->LAST_NAME, $data->CURRENCY_ID]);
    foreach ($data->PHONE as $entityContact) {
        /**
         * @var EntityContact $entityContact
         */
        echo $entityContact->VALUE . PHP_EOL;

        $entityContact->VALUE .= ':)';

        //$lead->update($data);
    }
}

//$lead->delete(2);

/*
$lead->add(
    new LeadEntity(
        $cred,
        [
            'ADDRESS' => 'Bool shit',
            'NAME' => 'Ololo',
            'ololo' => 'fsadgsdf'
        ]
    )
);

*/
//$entity = $lead->get(16);
//$entity->NAME = 'kek';//$entity->NAME . '5';
//$lead->update($entity);
