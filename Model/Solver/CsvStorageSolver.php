<?php

namespace ElogicCo\ImportMagento\Model\Solver;

use ElogicCo\ImportMagento\Api\EntitiesStorageSolverInterface;

class CsvStorageSolver implements EntitiesStorageSolverInterface
{
    public function execute(string $storagePath): string
    {
        $resource = fopen($storagePath, "a");
        fclose($resource);

        return 'Success';
    }
}
