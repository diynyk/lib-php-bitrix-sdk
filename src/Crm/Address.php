<?php

namespace Diynyk\Bitrix\Crm\Adress;

use Diynyk\Bitrix\Crm\CrmClientAbstract;
use Diynyk\Bitrix\Crm\CrmClientInterface;
use Diynyk\Bitrix\Crm\Entities\AddressEntity;

/**
 * Class Address
 * @package Diynyk\Bitrix
 */
class Address extends CrmClientAbstract implements CrmClientInterface
{
    const ENTITY_CLASS = AddressEntity::class;
}