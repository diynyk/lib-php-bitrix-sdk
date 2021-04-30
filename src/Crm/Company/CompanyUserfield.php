<?php

namespace Diynyk\Bitrix;

use Diynyk\Bitrix\Crm\CrmClientAbstract;
use Diynyk\Bitrix\Crm\CrmClientInterface;
use Diynyk\Bitrix\Entities\CompanyUserfieldEntity;

/**
 * Class CompanyUserfield
 * @package Diynyk\Bitrix
 */
class CompanyUserfield extends CrmClientAbstract implements CrmClientInterface
{
    const ENTITY_CLASS = CompanyUserfieldEntity::class;

}