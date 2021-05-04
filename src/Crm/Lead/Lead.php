<?php

namespace Diynyk\Bitrix\Crm\Lead;

use Diynyk\Bitrix\Crm\CrmClientAbstract;
use Diynyk\Bitrix\Crm\CrmClientInterface;
use Diynyk\Bitrix\Crm\Entities\LeadEntity;

/**
 * Class Lead
 * @package Diynyk\Bitrix
 */
class Lead extends CrmClientAbstract implements CrmClientInterface
{
    const ENTITY_CLASS = LeadEntity::class;

}