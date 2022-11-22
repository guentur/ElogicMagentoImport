<?php

namespace ElogicCo\ImportMagento\Model\ResourceModel\RememberedEntity;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(\ElogicCo\ImportMagento\Model\RememberedEntity::class,
                     \ElogicCo\ImportMagento\Model\ResourceModel\RememberedEntity::class);
    }
}
