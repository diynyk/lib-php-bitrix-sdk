<?php

namespace Diynyk\Bitrix;

use Diynyk\Bitrix\Entities\OnCrmDealEntiy;

/**
 * Class OnCrmDeal
 * @package Diynyk\Bitrix
 */
class OnCrmDeal extends ClientAbstract implements ClientInterface
{
    const ENTITY_CLASS = OnCrmDealEntiy::class;
}