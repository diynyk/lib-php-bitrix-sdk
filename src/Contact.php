<?php

namespace Diynyk\Bitrix;

use Diynyk\Bitrix\Entities\ContactEntity;

/**
 * Class Contact
 * @package Diynyk\Bitrix
 */
class Contact extends ClientAbstract implements ClientInterface
{
    const ENTITY_CLASS = ContactEntity::class;

}