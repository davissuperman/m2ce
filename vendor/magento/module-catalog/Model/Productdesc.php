<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Catalog\Model;

use Magento\Framework\Event\ObserverInterface;

class Productdesc implements ObserverInterface
{


    /**
     * @param DimensionFactory $dimensionFactory
     * @param ConfigInterface $indexerConfig
     * @param IndexerHandlerFactory $indexerHandlerFactory
     */
    public function __construct(
    ) {

    }


    /**
     * @param \Magento\Framework\Event\Observer $observer
     * @return void
     */
    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        $writer = new \Zend\Log\Writer\Stream(BP . '/var/log/test.log');
        $logger = new \Zend\Log\Logger();
        $logger->addWriter($writer);
        $logger->info('Your text message');
    }
}
