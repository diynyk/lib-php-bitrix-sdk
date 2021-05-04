<?php

namespace Diynyk\Bitrix\Crm\ContactCompany;

use Diynyk\Bitrix\Crm\CrmClientAbstract;
use Diynyk\Bitrix\Crm\CrmClientInterface;
use Diynyk\Bitrix\Crm\Entities\ContactCompanyEntity;

/**
 * Class ContactCompany
 * @package Diynyk\Bitrix
 */
class ContactCompany extends CrmClientAbstract implements CrmClientInterface
{
    const ENTITY_CLASS = ContactCompanyEntity::class;

}