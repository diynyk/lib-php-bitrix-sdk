<?php

namespace Diynyk\Bitrix\Test\Crm\Company;

use Diynyk\Bitrix\Crm\Company\Company;
use Diynyk\Bitrix\Helpers\BitrixConnectionCredentials;
use Diynyk\Bitrix\Test\Crm\TestEntity;
use PHPUnit\Framework\TestCase;

/**
 * Class CompanyTest
 * @package Diynyk\Bitrix\Test\Crm\Company
 */
class CompanyTest extends TestCase
{

    /**
     * @throws \Exception
     * @covers \Diynyk\Bitrix\Crm\Company\Company::get
     */
    public function testGet()
    {
        $cred = new BitrixConnectionCredentials();

        $mock = $this->getMockBuilder(Company::class)
            ->setConstructorArgs([$cred])
            ->onlyMethods(['makeRequest', 'getEntityDtoClassName'])
            ->getMock();

        $mock->expects($this->exactly(1))
            ->method('makeRequest')
            ->willReturn(['result' => ['TITLE' => 'test']]);

        $mock->expects($this->exactly(1))
            ->method('getEntityDtoClassName')
            ->willReturn(TestEntity::class);

        $result = $mock->get(1);
        $this->assertEquals('test', $result->TITLE);
    }

    /**
     * @throws \Exception
     * @covers \Diynyk\Bitrix\Crm\Company\Company::get
     */
    public function testGetFailed()
    {
        $cred = new BitrixConnectionCredentials();

        $mock = $this->getMockBuilder(Company::class)
            ->setConstructorArgs([$cred])
            ->onlyMethods(['makeRequest', 'getEntityDtoClassName'])
            ->getMock();

        $mock->expects($this->exactly(1))
            ->method('makeRequest')
            ->willReturn(['nothing' => ['TITLE' => 'test']]);

        $this->expectException(\Exception::class);
        $this->expectExceptionMessage('fuck');

        $mock->get(1);
    }


}


