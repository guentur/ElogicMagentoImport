<?php

namespace ElogicCo\ImportMagento\Api\DataImporter;

use ElogicCo\ImportMagento\Api\Extensions\RememberProcessor\RememberProcessorInterface;

interface ImporterRememberInterface extends DataImporterInterface
{
    public function getRememberProcessor(): RememberProcessorInterface;

    public function setRememberProcessor(RememberProcessorInterface $rememberProcessor);
}
