<?php

namespace Diynyk\Bitrix\Crm\LeadDetailsConfiguration;

use Diynyk\Bitrix\Crm\CrmClientAbstract;
use Diynyk\Bitrix\Crm\CrmClientInterface;
use Diynyk\Bitrix\Entities\LeadDetailsConfigurationEntity;

/**
 * Class LeadDetailsConfiguration
 * @package Diynyk\Bitrix
 */
class LeadDetailsConfiguration extends CrmClientAbstract implements CrmClientInterface
{
    const ENTITY_CLASS = LeadDetailsConfigurationEntity::class;
}