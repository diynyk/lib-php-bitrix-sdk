<?php

namespace Diynyk\Bitrix\Crm\InvoiceUserfield;

use Diynyk\Bitrix\Crm\CrmClientAbstract;
use Diynyk\Bitrix\Crm\CrmClientInterface;
use Diynyk\Bitrix\Crm\Entities\InvoiceUserfieldEntity;

/**
 * Class InvoiceUserfield
 * @package Diynyk\Bitrix
 */
class InvoiceUserfield extends CrmClientAbstract implements CrmClientInterface
{
    const ENTITY_CLASS = InvoiceUserfieldEntity::class;
}