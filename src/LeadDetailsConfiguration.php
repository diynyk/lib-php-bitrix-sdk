<?php

namespace Diynyk\Bitrix;

use Diynyk\Bitrix\Entities\LeadDetailsConfigurationEntity;

/**
 * Class LeadDetailsConfiguration
 * @package Diynyk\Bitrix
 */
class LeadDetailsConfiguration extends ClientAbstract implements ClientInterface
{
    const ENTITY_CLASS = LeadDetailsConfigurationEntity::class;
}