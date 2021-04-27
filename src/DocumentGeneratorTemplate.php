<?php

namespace Diynyk\Bitrix;

use Diynyk\Bitrix\Entities\DocumentGeneratorTemplateEntity;

/**
 * Class DocumentGeneratorTemplate
 * @package Diynyk\Bitrix
 */
class DocumentGeneratorTemplate extends ClientAbstract implements ClientInterface
{
    const ENTITY_CLASS = DocumentGeneratorTemplateEntity::class;
}