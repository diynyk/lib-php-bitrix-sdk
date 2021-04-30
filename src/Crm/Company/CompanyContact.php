<?php

namespace Diynyk\Bitrix;

use Diynyk\Bitrix\Crm\CrmClientAbstract;
use Diynyk\Bitrix\Crm\CrmClientInterface;
use Diynyk\Bitrix\Entities\CompanyContactEntity;

/**
 * Class CompanyContact
 * @package Diynyk\Bitrix
 */
class CompanyContact extends CrmClientAbstract implements CrmClientInterface
{
    const ENTITY_CLASS = CompanyContactEntity::class;

}