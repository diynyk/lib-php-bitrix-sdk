<?php

namespace Diynyk\Bitrix\Crm\DocumentGeneratorNumerator;

use Diynyk\Bitrix\Crm\CrmClientAbstract;
use Diynyk\Bitrix\Crm\CrmClientInterface;
use Diynyk\Bitrix\Crm\Entities\DocumentGeneratorNumeratorEntity;

/**
 * Class DocumentGeneratorNumerator
 * @package Diynyk\Bitrix
 */
class DocumentGeneratorNumerator extends CrmClientAbstract implements CrmClientInterface
{
    const ENTITY_CLASS = DocumentGeneratorNumeratorEntity::class;
}