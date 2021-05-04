<?php

namespace Diynyk\Bitrix\Crm\DocumentGeneratorDocument;

use Diynyk\Bitrix\Crm\CrmClientAbstract;
use Diynyk\Bitrix\Crm\CrmClientInterface;
use Diynyk\Bitrix\Crm\Entities\DocumentGeneratorDocumentEntity;

/**
 * Class Documentgenerator
 * @package Diynyk\Bitrix
 */
class DocumentgeneratorDocument extends CrmClientAbstract implements CrmClientInterface
{
    const ENTITY_CLASS = DocumentGeneratorDocumentEntity::class;
}