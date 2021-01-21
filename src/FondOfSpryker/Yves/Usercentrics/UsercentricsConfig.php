<?php

namespace FondOfSpryker\Yves\Usercentrics;

use Spryker\Yves\Kernel\AbstractBundleConfig;
use FondOfSpryker\Shared\Usercentrics\UsercentricsConstants;

class UsercentricsConfig extends AbstractBundleConfig
{
    /**
     * @return string
     */
    public function getUsercentricsId(): string
    {
        return $this->get(UsercentricsConstants::USERCENTRICS_ID, 'NO_ID_FOUND');
    }
}
