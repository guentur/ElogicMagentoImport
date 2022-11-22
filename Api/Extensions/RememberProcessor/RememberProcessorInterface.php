<?php

namespace ElogicCo\ImportMagento\Api\Extensions\RememberProcessor;

use ElogicCo\ImportMagento\Api\Data\DataImportInfoInterface;
use ElogicCo\ImportMagento\Api\Data\RememberedEntitySearchResultInterface;

interface RememberProcessorInterface
{
    /**
     * @todo remove Exception param
     *
     * @param int $entityKey
     * @param DataImportInfoInterface $dataImportInfo
     * @param \RuntimeException $exception
     * @return mixed
     */
    public function rememberEntity(int $entityKey, DataImportInfoInterface $dataImportInfo, \RuntimeException $exception);

    /**
     * @param array $array
     * @param DataImportInfoInterface $dataImportInfo
     * @return array
     */
    public function getArraySinceRememberedEntity(array $array, DataImportInfoInterface $dataImportInfo): array;

    /**
     * @param array $dataForImport
     * @param DataImportInfoInterface $dataImportInfo
     * @return array
     */
    public function getRememberedStateDataForImport(array $dataForImport, DataImportInfoInterface $dataImportInfo): array;

    /**
     * @param int $entityKey
     * @param DataImportInfoInterface $dataImportInfo
     * @return mixed
     */
    public function forgetEntity(int $entityKey, DataImportInfoInterface $dataImportInfo);

    /**
     * @param DataImportInfoInterface $dataImportInfo
     * @return RememberedEntitySearchResultInterface
     */
    public function getRememberedEntitiesByScope(DataImportInfoInterface $dataImportInfo): RememberedEntitySearchResultInterface;
}
