<?php

namespace FondOfSpryker\Yves\Usercentrics\Plugin\Twig;

use FondOfSpryker\Yves\Usercentrics\UsercentricsConfig;
use FondOfSpryker\Yves\Usercentrics\UsercentricsFactory;
use Spryker\Service\Container\ContainerInterface;
use Spryker\Shared\TwigExtension\Dependency\Plugin\TwigPluginInterface;
use Spryker\Yves\Kernel\AbstractPlugin;
use Twig\Environment;

/**
 * @method UsercentricsFactory getFactory()
 * @method UsercentricsConfig getConfig()
 */
class UsercentricsTwigPlugin extends AbstractPlugin implements TwigPluginInterface
{
    public const USERCENTRICS_ID = 'usercentricsId';

    /**
     * Specification:
     * - Allows to extend Twig with additional functionality (e.g. functions, global variables, etc.).
     *
     * @param \Twig\Environment $twig
     * @param \Spryker\Service\Container\ContainerInterface $container
     *
     * @return \Twig\Environment
     * @api
     *
     */
    public function extend(Environment $twig, ContainerInterface $container): Environment
    {
        $this->addUsercentricsIdGlobalVariable($twig);

        return $twig;
    }

    /**
     * @param Environment $twig
     *
     * @return Environment
     */
    protected function addUsercentricsIdGlobalVariable(Environment $twig): Environment
    {
        $twig->addGlobal(static::USERCENTRICS_ID, $this->getConfig()->getUsercentricsId());

        return $twig;
    }
}
