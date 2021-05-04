<?php

namespace Diynyk\Bitrix\Crm\QouteUserfield;

use Diynyk\Bitrix\Crm\CrmClientAbstract;
use Diynyk\Bitrix\Crm\CrmClientInterface;
use Diynyk\Bitrix\Crm\Entities\QuoteUserfieldEntity;

/**
 * Class QuoteUserfield
 * @package Diynyk\Bitrix
 */
class QuoteUserfield extends CrmClientAbstract implements CrmClientInterface
{
    const ENTITY_CLASS = QuoteUserfieldEntity::class;
}