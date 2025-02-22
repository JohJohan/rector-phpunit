<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\PHPUnit\CodeQuality\Rector\MethodCall\AssertComparisonToSpecificMethodRector;
use Rector\PHPUnit\CodeQuality\Rector\MethodCall\AssertFalseStrposToContainsRector;
use Rector\PHPUnit\CodeQuality\Rector\MethodCall\AssertSameBoolNullToSpecificMethodRector;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->import(__DIR__ . '/../../../../config/config.php');

    $rectorConfig->rules([
        AssertComparisonToSpecificMethodRector::class,
        AssertFalseStrposToContainsRector::class,
        AssertSameBoolNullToSpecificMethodRector::class,
    ]);
};
