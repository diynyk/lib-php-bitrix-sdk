<?php

namespace Diynyk\Bitrix;

use Diynyk\Bitrix\Entities\TimelineCommentEntity;

/**
 * Class TimelineComment
 * @package Diynyk\Bitrix
 */
class TimelineComment extends ClientAbstract implements ClientInterface
{
    const ENTITY_CLASS = TimelineCommentEntity::class;
}