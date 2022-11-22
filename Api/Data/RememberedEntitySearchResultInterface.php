<?php

namespace ElogicCo\ImportMagento\Api\Data;

/**
 * @api
 */
interface RememberedEntitySearchResultInterface extends \Magento\Framework\Api\SearchResultsInterface
{
    /**
     * Get attributes list.
     *
     * @return \ElogicCo\ImportMagento\Api\Data\RememberedEntityInterface[]
     */
    public function getItems();

    /**
     * Set attributes list.
     *
     * @param \ElogicCo\ImportMagento\Api\Data\RememberedEntityInterface[] $items
     * @return $this
     */
    public function setItems(array $items);
}
