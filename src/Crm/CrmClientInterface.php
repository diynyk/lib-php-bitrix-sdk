<?php

namespace Diynyk\Bitrix\Crm;


use Diynyk\Bitrix\Crm\Entities\EntityAbstract;

/**
 * Interface ClientInterface
 * @package Diynyk\Bitrix
 */
interface CrmClientInterface
{
    /**
     * @param int $page
     * @return int[]
     */
    function index($page = 0): array;

    /**
     * @param int $id
     * @return EntityAbstract
     */
    function get(int $id): EntityAbstract;

    /**
     * @param EntityAbstract $entity
     * @return EntityAbstract
     */
    function add(EntityAbstract $entity): EntityAbstract;

    /**
     * @param EntityAbstract $entity
     * @return EntityAbstract
     */
    function update(EntityAbstract $entity): EntityAbstract;

    /**
     * @param int $id
     * @return bool
     */
    function delete(int $id): bool;
}