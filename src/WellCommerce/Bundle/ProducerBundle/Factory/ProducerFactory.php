<?php
/*
 * WellCommerce Open-Source E-Commerce Platform
 * 
 * This file is part of the WellCommerce package.
 *
 * (c) Adam Piotrowski <adam@wellcommerce.org>
 * 
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed with this source code.
 */

namespace WellCommerce\Bundle\ProducerBundle\Factory;

use WellCommerce\Bundle\DoctrineBundle\Factory\EntityFactory;
use WellCommerce\Bundle\ProducerBundle\Entity\ProducerInterface;

/**
 * Class ProducerFactory
 *
 * @author  Adam Piotrowski <adam@wellcommerce.org>
 */
class ProducerFactory extends EntityFactory
{
    public function create() : ProducerInterface
    {
        /** @var  $producer ProducerInterface */
        $producer = $this->init();
        $producer->setDeliverers($this->createEmptyCollection());
        $producer->setShops($this->getDefaultShops());
        
        return $producer;
    }
}
