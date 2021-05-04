<?php

namespace Diynyk\Bitrix\Crm\TimelineComment;

use Diynyk\Bitrix\Crm\CrmClientAbstract;
use Diynyk\Bitrix\Crm\CrmClientInterface;
use Diynyk\Bitrix\Crm\Entities\TimelineCommentEntity;

/**
 * Class TimelineComment
 * @package Diynyk\Bitrix
 */
class TimelineComment extends CrmClientAbstract implements CrmClientInterface
{
    const ENTITY_CLASS = TimelineCommentEntity::class;
}