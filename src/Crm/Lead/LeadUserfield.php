<?php

namespace Diynyk\Bitrix\Crm\LeadUserfield;

use Diynyk\Bitrix\Crm\CrmClientAbstract;
use Diynyk\Bitrix\Crm\CrmClientInterface;
use Diynyk\Bitrix\Entities\LeadUserfieldEntity;

/**
 * Class LeadUserfield
 * @package Diynyk\Bitrix
 */
class LeadUserfield extends CrmClientAbstract implements CrmClientInterface
{
    const ENTITY_CLASS = LeadUserfieldEntity::class;
}