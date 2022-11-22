<?php

namespace ElogicCo\ImportMagento\Model\Csv;

use ElogicCo\ImportMagento\Api\DataProvider\TableDataProviderInterface;
use ElogicCo\ImportMagento\Model\Csv\Validator\CsvFileValidator;

class CsvDataProvider implements TableDataProviderInterface
{
    private $validator;

    public function __construct(
        CsvFileValidator $validator
    ) {
        $this->validator = $validator;
    }

    public function getData(string $dataProviderPath): array
    {
        $this->validator->validatePath($dataProviderPath);

        $allRows = [];
        $resource = fopen($dataProviderPath, 'r');
        $header = fgetcsv($resource);
        //@todo optimize
        while ($row = fgetcsv($resource)) {
            $allRows[] = array_combine($header, $row);
        }
        fclose($resource);

        return $allRows;
    }

    public function getColumnNames(string $dataProviderPath): array
    {
        $this->validator->validatePath($dataProviderPath);

        $resource = fopen($dataProviderPath, 'r');
        $header = fgetcsv($resource, 1000, ",");
        fclose($resource);

        return $header;
    }
}
