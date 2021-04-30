<?php

namespace Diynyk\Bitrix;

use Diynyk\Bitrix\Entities\QuoteUserfieldEntity;

/**
 * Class QuoteUserfield
 * @package Diynyk\Bitrix
 */
class QuoteUserfield extends ClientAbstract implements ClientInterface
{
    const ENTITY_CLASS = QuoteUserfieldEntity::class;
}