<?php

namespace Diynyk\Bitrix\Crm\DealContact;

use Diynyk\Bitrix\Crm\CrmClientAbstract;
use Diynyk\Bitrix\Crm\CrmClientInterface;
use Diynyk\Bitrix\Crm\Entities\DealContactEntity;

/**
 * Class DealContact
 * @package Diynyk\Bitrix
 */
class DealContact extends CrmClientAbstract implements CrmClientInterface
{
    const ENTITY_CLASS = DealContactEntity::class;
}