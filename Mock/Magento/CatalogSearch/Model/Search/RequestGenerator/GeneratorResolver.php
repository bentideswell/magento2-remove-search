<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\CatalogSearch\Model\Search\RequestGenerator;

class GeneratorResolver
{
    /**
     * @param string $type
     * @return GeneratorInterface
     * @throws \InvalidArgumentException
     * @since 100.1.6
     */
    public function getGeneratorForType($type)
    {
        throw new \InvalidArgumentException(
            'Generator must implement ' . GeneratorInterface::class
        );
    }
}
