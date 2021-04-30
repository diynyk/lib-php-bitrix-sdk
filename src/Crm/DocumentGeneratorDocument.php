<?php

namespace Diynyk\Bitrix;

use Diynyk\Bitrix\Entities\DocumentGeneratorDocumentEntity;

/**
 * Class Documentgenerator
 * @package Diynyk\Bitrix
 */
class DocumentgeneratorDocument extends ClientAbstract implements ClientInterface
{
    const ENTITY_CLASS = DocumentGeneratorDocumentEntity::class;
}