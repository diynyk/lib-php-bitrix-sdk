<?php

namespace Diynyk\Bitrix;

use Diynyk\Bitrix\Entities\MeasureEntiy;

/**
 * Class Measure
 * @package Diynyk\Bitrix
 */
class Measure extends ClientAbstract implements ClientInterface
{
    const ENTITY_CLASS = MeasureEntiy::class;
}