<?php

namespace ElogicCo\ImportMagento\Api\DataImporter;

interface DataImporterPoolInterface
{
    /**
     * @param string $type
     * @return \ElogicCo\ImportMagento\Api\DataImporter\DataImporterInterface
     */
    public function getDataImporter(string $type): DataImporterInterface;
}
