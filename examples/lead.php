<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Diynyk\Bitrix\Entities\LeadEntity;
use Diynyk\Bitrix\Lead;

$cred = new \Diynyk\Bitrix\Helpers\BitrixConnectionCredentials();
$cred
    ->setUrl('https://seopromo.bitrix24.ua/rest')
    ->setUserId(1)
    ->setToken('CHANGE_ME');


$o = new LeadEntity(
    $cred,
    [
        'ADDRESS' => 'Bool shit',
        'NAME' => 'Ololo',
        'ololo' => 'fsadgsdf'
    ]
);

$o->ADDRESS_2 = 'test';

//var_dump($o->toArray());


$lead = new Lead ($cred);

foreach ($lead->index() as $index) {
    $data = $lead->get($index);
    echo vsprintf("%s\t\t%s\t\t%s\t\t%s\n", [$data->ID, $data->NAME, $data->LAST_NAME, $data->CURRENCY_ID]);
}

//$lead->delete(10);


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


//$entity = $lead->get(14);
//$entity->NAME = $entity->NAME . '2';
//$lead->update($entity);
