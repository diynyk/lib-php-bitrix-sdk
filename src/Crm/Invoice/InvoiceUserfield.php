<?php

namespace Diynyk\Bitrix;

use Diynyk\Bitrix\Entities\InvoiceUserfieldEntity;

/**
 * Class InvoiceUserfield
 * @package Diynyk\Bitrix
 */
class InvoiceUserfield extends ClientAbstract implements ClientInterface
{
    const ENTITY_CLASS = InvoiceUserfieldEntity::class;
}