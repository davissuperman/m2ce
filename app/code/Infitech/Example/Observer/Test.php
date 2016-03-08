<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace  Infitech\Example\Observer;

use Magento\Framework\Event\ObserverInterface;
use Magento\Catalog\Model\Product\Compare\Item;

/**
 * Catalog Compare Item Model
 *
 */
class Test implements ObserverInterface
{
    /**
     * @param Item $item
     */
    public function __construct(
        Item $item
    ) {
        $this->item = $item;
    }

    /**
     * Customer login bind process
     * @param \Magento\Framework\Event\Observer $observer
     * @return $this
     *
     * @SuppressWarnings(PHPMD.UnusedLocalVariable)
     */
    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        \Magento\Framework\App\ObjectManager::getInstance()
            ->get('Psr\Log\LoggerInterface')
            ->info(   'testtttttttttttttttttttttttt' );
    }
}
