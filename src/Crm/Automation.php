<?php

namespace Diynyk\Bitrix\Crm\Automation;

use Diynyk\Bitrix\Crm\CrmClientAbstract;
use Diynyk\Bitrix\Crm\CrmClientInterface;
use Diynyk\Bitrix\Crm\Entities\AutomationEntity;

/**
 * Class Automation
 * @package Diynyk\Bitrix
 */
class Automation extends CrmClientAbstract implements CrmClientInterface
{
    const ENTITY_CLASS = AutomationEntity::class;
}