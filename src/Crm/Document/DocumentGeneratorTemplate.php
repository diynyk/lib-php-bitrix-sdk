<?php

namespace Diynyk\Bitrix\Crm\DocumentGeneratorTemplate;

use Diynyk\Bitrix\Crm\CrmClientAbstract;
use Diynyk\Bitrix\Crm\CrmClientInterface;
use Diynyk\Bitrix\Crm\Entities\DocumentGeneratorTemplateEntity;

/**
 * Class DocumentGeneratorTemplate
 * @package Diynyk\Bitrix
 */
class DocumentGeneratorTemplate extends CrmClientAbstract implements CrmClientInterface
{
    const ENTITY_CLASS = DocumentGeneratorTemplateEntity::class;
}