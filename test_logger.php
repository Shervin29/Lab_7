<?php
require 'vendor/autoload.php';

use App\AppLogger;  // Import the AppLogger class from the App namespace

$logger = new AppLogger();
$logger->logInfo('This is an informational log entry.');
$logger->logError('This is an error log entry.');