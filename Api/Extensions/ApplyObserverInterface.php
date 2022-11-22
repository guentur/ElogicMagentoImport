<?php

namespace ElogicCo\ImportMagento\Api\Extensions;

use ElogicCo\ImportMagento\Api\Data\DataImportInfoInterface;

interface ApplyObserverInterface
{
    /**
     * @param array $dataItem
     * @param DataImportInfoInterface $dataImportInfo
     * @return array
     */
    public function callObserver(array $dataItem, DataImportInfoInterface $dataImportInfo): array;

    /**
     * @param DataImportInfoInterface $dataImportInfo
     * @return string
     */
    public function getFullEventName(DataImportInfoInterface $dataImportInfo): string;
}
