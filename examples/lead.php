<?php

require_once __DIR__ . '/../vendor/autoload.php';
use Diynyk\Bitrix\Lead;
$cred = new \Diynyk\Bitrix\Helpers\BitrixConnectionCredentials();
$cred
    ->setUrl('https://seopromo.bitrix24.ua/rest')
    ->setUserId(1)
    ->setToken('CHANGE_ME');

/*
$o = new \Diynyk\Bitrix\Entities\LeadEntity(
    $cred,
    [
        'ADDRESS' => 'Bool shit',
        'ololo' => 'fsadgsdf'
    ]
);

$o->ADDRESS_2 = 'test';
*/
//var_dump($o->toArray());
$lead=new Lead ($cred);
var_dump($lead->index());