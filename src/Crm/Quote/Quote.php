<?php

namespace Diynyk\Bitrix\Crm\Quote;

use Diynyk\Bitrix\Crm\CrmClientAbstract;
use Diynyk\Bitrix\Crm\CrmClientInterface;
use Diynyk\Bitrix\Crm\Entities\QuoteEntity;

/**
 * Class Quote
 * @package Diynyk\Bitrix
 */
class Quote extends CrmClientAbstract implements CrmClientInterface
{
    const ENTITY_CLASS = QuoteEntity::class;
}