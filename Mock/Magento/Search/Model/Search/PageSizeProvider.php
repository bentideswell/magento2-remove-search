<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Magento\Search\Model\Search;

class PageSizeProvider
{
    /**
     * @return integer
     */
    public function getMaxPageSize() : int
    {
        return PHP_INT_MAX;
    }
}