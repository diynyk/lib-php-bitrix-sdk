<?php

namespace Diynyk\Bitrix\Crm\Measure;

use Diynyk\Bitrix\Crm\CrmClientAbstract;
use Diynyk\Bitrix\Crm\CrmClientInterface;
use Diynyk\Bitrix\Crm\Entities\MeasureEntiy;

/**
 * Class Measure
 * @package Diynyk\Bitrix
 */
class Measure extends CrmClientAbstract implements CrmClientInterface
{
    const ENTITY_CLASS = MeasureEntiy::class;
}