<?php

namespace Diynyk\Bitrix;

use Diynyk\Bitrix\Entities\LeadEntity;

/**
 * Class Lead
 * @package Diynyk\Bitrix
 */
class Lead extends ClientAbstract implements ClientInterface
{
    const ENTITY_CLASS = LeadEntity::class;

}