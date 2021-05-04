<?php

namespace Diynyk\Bitrix\Crm\Userfield;

use Diynyk\Bitrix\Crm\CrmClientAbstract;
use Diynyk\Bitrix\Crm\CrmClientInterface;
use Diynyk\Bitrix\Crm\Entities\UserfieldEntity;

/**
 * Class Userfield
 * @package Diynyk\Bitrix
 */
class Userfield extends CrmClientAbstract implements CrmClientInterface
{
    const ENTITY_CLASS = UserfieldEntity::class;
}