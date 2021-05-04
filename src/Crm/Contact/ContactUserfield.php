<?php

namespace Diynyk\Bitrix;

use Diynyk\Bitrix\Crm\CrmClientAbstract;
use Diynyk\Bitrix\Crm\CrmClientInterface;
use Diynyk\Bitrix\Crm\Entities\ContactUserfieldEntity;

/**
 * Class ContactUserfield
 * @package Diynyk\Bitrix
 */
class ContactUserfield extends CrmClientAbstract implements CrmClientInterface
{
    const ENTITY_CLASS = ContactUserfieldEntity::class;

}