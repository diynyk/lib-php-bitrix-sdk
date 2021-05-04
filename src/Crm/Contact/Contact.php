<?php

namespace Diynyk\Bitrix\Crm\Contact;

use Diynyk\Bitrix\Crm\CrmClientAbstract;
use Diynyk\Bitrix\Crm\CrmClientInterface;
use Diynyk\Bitrix\Crm\Entities\ContactEntity;

/**
 * Class Contact
 * @package Diynyk\Bitrix
 */
class Contact extends CrmClientAbstract implements CrmClientInterface
{
    const ENTITY_CLASS = ContactEntity::class;

}