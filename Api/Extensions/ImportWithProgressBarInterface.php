<?php

namespace ElogicCo\ImportMagento\Api\Extensions;

use ElogicCo\ImportMagento\Model\Extensions\ProgressBarWrapper;

interface ImportWithProgressBarInterface
{
    public function runImportWithProgressBar(array $dataToInsert);

    public function setProgressBarWrapper(ProgressBarWrapper $progressBarWrapper);

    public function getProgressBarWrapper(): ProgressBarWrapper;
}
