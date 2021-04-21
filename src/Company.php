<?php

namespace Diynyk\Bitrix;

use Diynyk\Bitrix\Entities\CompanyEntity;

/**
 * Class Company
 * @package Diynyk\Bitrix
 */
class Company extends ClientAbstract implements ClientInterface
{
    const ENTITY_CLASS = CompanyEntity::class;

}