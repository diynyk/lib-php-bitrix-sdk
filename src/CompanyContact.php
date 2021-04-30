<?php

namespace Diynyk\Bitrix;

use Diynyk\Bitrix\Entities\CompanyContactEntity;

/**
 * Class CompanyContact
 * @package Diynyk\Bitrix
 */
class CompanyContact extends ClientAbstract implements ClientInterface
{
    const ENTITY_CLASS = CompanyContactEntity::class;

}