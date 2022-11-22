<?php

declare(strict_types=1);

namespace ElogicCo\ImportMagento\Model\Data;

use ElogicCo\ImportMagento\Api\Data\RememberedEntitySearchResultInterface;
use Magento\Framework\Api\SearchResults;

/**
 * Service Data Object with RememberedEntity search results.
 */
class RememberedEntitySearchResults extends SearchResults implements RememberedEntitySearchResultInterface
{
}
