<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Infitech\Example\Observer;

use Magento\Framework\Event\ObserverInterface;

class Productdesc implements ObserverInterface
{
    public $product;

    public $reg;

    public function __construct(
        \Magento\Framework\Registry $reg
    ) {
        $this->reg = $reg;
    }

    /**
     * @param \Magento\Framework\Event\Observer $observer
     * @return void
     */
    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        $data = $observer->getEvent()->getData();
        $controller = $observer->getEvent()->getController();

        $result = $this->reg->registry('current_product');
        $desProduct = $result->getDescription();
        $des = $this->getH2($desProduct);
        if($des){
            $result->setProductDesc($des);
            $result->save();
        }

    }

    public function getH2($str){
        $res = null;
        $req = '/<h2>(.*)<\/h2>/';
        preg_match($req,$str,$match);
        if($match && count($match) == 2){
            return $match[1];
        }
        return $res;
    }
}
