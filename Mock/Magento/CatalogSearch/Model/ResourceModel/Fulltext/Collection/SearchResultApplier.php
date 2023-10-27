<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magento\CatalogSearch\Model\ResourceModel\Fulltext\Collection;

use Magento\Framework\Api\Search\SearchResultInterface;
use Magento\Framework\Data\Collection;

class SearchResultApplier implements SearchResultApplierInterface
{
    public function __construct(
        Collection $collection,
        SearchResultInterface $searchResult,
        array $orders
    ) {
    }

    /**
     *
     */
    public function apply()
    {
    }
}