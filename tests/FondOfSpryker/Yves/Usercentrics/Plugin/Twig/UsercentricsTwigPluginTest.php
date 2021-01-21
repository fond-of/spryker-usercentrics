<?php

namespace FondOfSpryker\Yves\Usercentrics\Plugin\Twig;

use Codeception\Test\Unit;
use FondOfSpryker\Yves\Usercentrics\UsercentricsConfig;
use Spryker\Service\Container\ContainerInterface;
use Twig\Environment;

class UsercentricsTwigPluginTest extends Unit
{
    /**
     * @return void
     */
    public function testExtend(): void
    {
        $configMock = $this->getMockBuilder(UsercentricsConfig::class)
            ->disableOriginalConstructor()
            ->getMock();

        $twigMock = $this->getMockBuilder(Environment::class)
            ->disableOriginalConstructor()
            ->getMock();

        $containerMock = $this->getMockBuilder(ContainerInterface::class)
            ->disableOriginalConstructor()
            ->getMock();

        $twigMock->expects($this->atLeastOnce())
            ->method('addGlobal');

        $configMock->expects($this->atLeastOnce())
            ->method('getUsercentricsId')
            ->willReturn('usercentricsId');

        $plugin = new UsercentricsTwigPlugin();
        $plugin->setConfig($configMock);
        $plugin->extend($twigMock, $containerMock);
    }
}
