<?php

namespace Diynyk\Bitrix\Crm\ExternalChannel;

use Diynyk\Bitrix\Crm\CrmClientAbstract;
use Diynyk\Bitrix\Crm\CrmClientInterface;
use Diynyk\Bitrix\Crm\Entities\ExternalChannelEntity;

/**
 * Class ExternalChannel
 * @package Diynyk\Bitrix
 */
class ExternalChannel extends CrmClientAbstract implements CrmClientInterface
{
    const ENTITY_CLASS = ExternalChannelEntity::class;
}