<?php

namespace Diynyk\Bitrix\Crm\OnCrmTimelineComment;

use Diynyk\Bitrix\Crm\CrmClientAbstract;
use Diynyk\Bitrix\Crm\CrmClientInterface;
use Diynyk\Bitrix\Crm\Entities\OnCrmTimelineCommentEntity;

/**
 * Class OnCrmTimelineComment
 * @package Diynyk\Bitrix
 */
class OnCrmTimelineComment extends CrmClientAbstract implements CrmClientInterface
{
    const ENTITY_CLASS = OnCrmTimelineCommentEntity::class;
}