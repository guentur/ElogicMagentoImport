<?php

namespace ElogicCo\ImportMagento\Api\Extensions\RememberProcessor;

use ElogicCo\ImportMagento\Api\Data\DataImportInfoInterface;

interface RememberedEntitiesProviderInterface
{
    public function getRememberedEntitiesByScope(string $entityScope);

    public function getRememberedEntities(): array;
}
