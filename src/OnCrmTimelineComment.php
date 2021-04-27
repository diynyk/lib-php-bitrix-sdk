<?php

namespace Diynyk\Bitrix;

use Diynyk\Bitrix\Entities\OnCrmTimelineCommentEntity;

/**
 * Class OnCrmTimelineComment
 * @package Diynyk\Bitrix
 */
class OnCrmTimelineComment extends ClientAbstract implements ClientInterface
{
    const ENTITY_CLASS = OnCrmTimelineCommentEntity::class;
}