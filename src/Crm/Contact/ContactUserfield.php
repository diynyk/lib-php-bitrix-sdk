<?php

namespace Diynyk\Bitrix;

use Diynyk\Bitrix\Entities\ContactUserfieldEntity;

/**
 * Class ContactUserfield
 * @package Diynyk\Bitrix
 */
class ContactUserfield extends ClientAbstract implements ClientInterface
{
    const ENTITY_CLASS = ContactUserfieldEntity::class;

}