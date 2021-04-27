<?php

namespace Diynyk\Bitrix;

use Diynyk\Bitrix\Entities\OnCrmDealUserFieldEntiy;

/**
 * Class OnCrmDealUserField
 * @package Diynyk\Bitrix
 */
class OnCrmDealUserField extends ClientAbstract implements ClientInterface
{
    const ENTITY_CLASS = OnCrmDealUserFieldEntiy::class;
}