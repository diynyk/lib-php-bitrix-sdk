<?php

namespace Diynyk\Bitrix\Crm\Vat;

use Diynyk\Bitrix\Crm\CrmClientAbstract;
use Diynyk\Bitrix\Crm\CrmClientInterface;
use Diynyk\Bitrix\Crm\Entities\VatEntity;

/**
 * Class Vat
 * @package Diynyk\Bitrix
 */
class Vat extends CrmClientAbstract implements CrmClientInterface
{
    const ENTITY_CLASS = VatEntity::class;
}