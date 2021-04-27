<?php

namespace Diynyk\Bitrix;

use Diynyk\Bitrix\Entities\LeadUserfieldEntity;

/**
 * Class LeadUserfield
 * @package Diynyk\Bitrix
 */
class LeadUserfield extends ClientAbstract implements ClientInterface
{
    const ENTITY_CLASS = LeadUserfieldEntity::class;
}