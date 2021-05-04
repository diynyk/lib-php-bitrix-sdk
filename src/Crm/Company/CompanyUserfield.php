<?php

namespace Diynyk\Bitrix\Crm\CompanyUserfield;

use Diynyk\Bitrix\Crm\CrmClientAbstract;
use Diynyk\Bitrix\Crm\CrmClientInterface;
use Diynyk\Bitrix\Crm\Entities\CompanyUserfieldEntity;

/**
 * Class CompanyUserfield
 * @package Diynyk\Bitrix
 */
class CompanyUserfield extends CrmClientAbstract implements CrmClientInterface
{
    const ENTITY_CLASS = CompanyUserfieldEntity::class;

}