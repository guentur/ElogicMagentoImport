<?php

namespace ElogicCo\ImportMagento\Api\DataProvider;

interface DataProviderPoolInterface
{
    /**
     * @param string $name
     * @return \ElogicCo\ImportMagento\Api\DataProvider\DataProviderInterface
     */
    public function getDataProvider(string $name): DataProviderInterface;
}
