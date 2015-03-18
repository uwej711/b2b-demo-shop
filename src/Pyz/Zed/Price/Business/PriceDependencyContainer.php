<?php

namespace Pyz\Zed\Price\Business;

use Generated\Zed\Ide\FactoryAutoCompletion\PriceBusiness;
use ProjectA\Zed\Price\Business\PriceDependencyContainer as SprykerPriceDependencyContainer;
use Psr\Log\LoggerInterface;
use Pyz\Zed\Price\Business\Internal\DemoData\PriceInstall;

class PriceDependencyContainer extends SprykerPriceDependencyContainer
{

    /**
     * @var PriceBusiness
     */
    protected $factory;

    /**
     * @param LoggerInterface $logger
     *
     * @return PriceInstall
     */
    public function getDemoDataInstaller(LoggerInterface $logger = null)
    {
        $installer = $this->factory->createInternalDemoDataPriceInstall(
            $this->locator->price()->facade()
        );
        $installer->setLogger($logger);

        return $installer;
    }

}