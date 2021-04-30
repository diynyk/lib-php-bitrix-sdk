<?php

namespace Diynyk\Bitrix;

use Diynyk\Bitrix\Entities\ContactCompanyEntity;

/**
 * Class ContactCompany
 * @package Diynyk\Bitrix
 */
class ContactCompany extends ClientAbstract implements ClientInterface
{
    const ENTITY_CLASS = ContactCompanyEntity::class;

}