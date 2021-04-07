<?php

namespace Diynyk\Bitrix\Entities;

use Diynyk\Bitrix\Exceptions\InvalidPropertyExcepton;

/**
 * @property string ADDRESS
 * @property string ADDRESS_2
 */

class LeadEntity
{

    private static $fields = [
        'ADDRESS' => ['name' => 'Адрес контакта', 'type' => 'string'],
        'ADDRESS_2' => ['name' => 'Вторая страница адреса', 'type' => 'string'],


        'ADDRESS_CITY' => ['name' => 'Город', 'type' => 'string'],
        'ADDRESS_COUNTRY' => ['name' => 'Страна', 'type' => 'string'],
        'ADDRESS_COUNTRY_CODE' => ['name' => 'Код страны', 'type' => 'string'],
        'ADDRESS_POSTAL_CODE' => ['name' => 'Почтовый индекс', 'type' => 'string'],
        'ADDRESS_PROVINCE' => ['name' => 'Область', 'type' => 'string'],
        'ADDRESS_REGION' => ['name' => 'Район', 'type' => 'string'],
        'ASSIGNED_BY_ID' => ['name' => 'Связано с пользователем по ID', 'type' => 'user'],
        'BIRTHDATE' => ['name' => 'Дата рождения', 'type' => 'date'],
        'COMMENTS' => ['name' => 'Комментарии', 'type' => 'string'],
        'COMPANY_ID' => ['name' => 'Привязка лида к компании', 'type' => 'crm_company'],
        'COMPANY_TITLE' => ['name' => 'Название компании, привязанной к лиду', 'type' => 'crm_company'],
        'CONTACT_ID' => ['name' => 'Привязка лида к контакту', 'type' => 'crm_contact'],
        'CREATED_BY_ID' => ['name' => 'Кем создана', 'type' => 'user'],
        'DATE_CREATE' => ['name' => 'Дата создания', 'type' => 'datetime'],
        'DATE_MODIFY' => ['name' => 'Дата изменения', 'type' => 'datetime'],
        'EMAIL' => ['name' => 'Адрес электронной почты', 'type' => 'crm_multifield'],
        'HAS_EMAIL' => ['name' => 'Проверка заполненности поля электронной почты', 'type' =>    'char'],
        'HAS_PHONE' => ['name' => 'Проверка заполненности поля телефон', 'type' => 'char'],
        'HONORIFIC' => ['name' => 'Вид обращения', 'type' => 'crm_status'],
        'ID' => ['name' => 'Идентификатор контакта', 'type' => 'integer'],
        'IM' => ['name' => 'Мессенджеры', 'type' => 'crm_multifield'],
        'IS_RETURN_CUSTOMER' => ['name' => 'Признак повторного лида', 'type' => 'char'],
        'MODIFY_BY_ID' => ['name' => 'Идентификатор автора последнего изменения', 'type' => 'user'],
        'NAME' => ['name' => 'Имя', 'type' => 'string'],
        'OPENED' =>    ['name' => 'Доступен для всех', 'type' => 'char'],
        'ORIGINATOR_ID' => ['name' => 'Идентификатор источника данных', 'type' => 'string'],
        'ORIGIN_ID' => ['name' => 'Идентификатор элемента в источнике данных', 'type' => 'string'],
        'ORIGIN_VERSION' => ['name' => 'Оригинальная версия', 'type' => 'string'],
        'PHONE' => ['name' => 'Телефон контакта', 'type' => 'crm_multifield'],
        'POST' => ['name' => 'Должность', 'type' => 'string'],
        'SECOND_NAME' => ['name' => 'Отчество', 'type' => 'string'],
        'SOURCE_DESCRIPTION' => ['name' => 'Описание источника', 'type' => 'string'],
        'SOURCE_ID' => ['name' => 'Идентификатор источника', 'type' => 'crm_status'],
        'STATUS_DESCRIPTION' => ['name' => '', 'type' => 'string'],
        'STATUS_ID' => ['name' => '', 'type' => 'string'],
        'STATUS_SEMANTIC_ID' => ['name' => '', 'type' => 'string'],
        'TITLE' => ['name' => 'Название лида', 'type' => 'string'],
        'UTM_CAMPAIGN' => ['name' => 'Обозначение рекламной кампании', 'type' => 'string'],
        'UTM_CONTENT' => ['name' => 'Содержание кампании', 'type' => 'string'],
        'UTM_MEDIUM' => ['name' => 'Тип трафика', 'type' => 'string'],
        'UTM_SOURCE' => ['name' => 'Рекламная система', 'type' => 'string'],
        'UTM_TERM' => ['name' => 'Условие поиска кампании', 'type' => 'string'],
        'WEB' => ['name' => 'URL ресурсов лида', 'type' => 'crm_multifield'],

    ];
    private $state;

    public function __construct(array $state = [])
    {
        foreach (self::$fields as $id => $properties) {
            if (!empty($state[$id])) {
                $this->state[$id] = $state[$id];
            } else {
                $this->state[$id] = $properties['type'] === 'string' ? '' : 0;
            }
        }
    }
    private function validateField($name)
    {
        return !empty(self::$fields[$name]);
    }
    public function __set($name, $value)
    {
        if ($this->validateField($name)) {
            $this->state[$name] = $value;
        }
        throw new InvalidPropertyExcepton(vsprintf('Invalid property %s', [$name]));
    }

    public function __get($name)
    {
        if ($this->validateField($name)) {
            return $this->state[$name];
        }
        throw new InvalidPropertyExcepton(vsprintf('Invalid property %s', [$name]));
    }
    public function __toString()
    {
    }
}
