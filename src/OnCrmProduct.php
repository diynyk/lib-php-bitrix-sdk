<?php

namespace Diynyk\Bitrix;

use Diynyk\Bitrix\Entities\OnCrmProductEntiy;

/**
 * Class OnCrmProduct
 * @package Diynyk\Bitrix
 */
class OnCrmProduct extends ClientAbstract implements ClientInterface
{
    const ENTITY_CLASS = OnCrmProductEntiy::class;
}