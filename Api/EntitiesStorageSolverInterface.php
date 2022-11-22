<?php

namespace ElogicCo\ImportMagento\Api;

interface EntitiesStorageSolverInterface
{
    public function execute(string $storagePath): string;
}
