<?php

namespace Diynyk\Bitrix\Crm\Company;

use Diynyk\Bitrix\Crm\CrmClientAbstract;
use Diynyk\Bitrix\Crm\CrmClientInterface;
use Diynyk\Bitrix\Crm\Entities\CompanyEntity;

/**
 * Class Company
 * @package Diynyk\Bitrix
 */
class Company extends CrmClientAbstract implements CrmClientInterface
{
    const ENTITY_CLASS = CompanyEntity::class;

}