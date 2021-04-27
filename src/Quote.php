<?php

namespace Diynyk\Bitrix;

use Diynyk\Bitrix\Entities\QuoteEntity;

/**
 * Class Quote
 * @package Diynyk\Bitrix
 */
class Quote extends ClientAbstract implements ClientInterface
{
    const ENTITY_CLASS = QuoteEntity::class;
}