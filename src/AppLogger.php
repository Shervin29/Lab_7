<?php
namespace App;
 
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Monolog\Level;
 
class AppLogger {
    private $logger;
 
    public function __construct() {
        $this->logger = new Logger('appLogger');
        // Add handlers for different logging channels using updated Level constants
        try {
            // Simplified handlers
            $this->logger->pushHandler(new StreamHandler(__DIR__ . '/../logs/app.log', Level::Info));
            $this->logger->pushHandler(new StreamHandler(__DIR__ . '/../logs/error.log', Level::Error));
        } catch (\Exception $e) {
            echo "Error setting up logger: " . $e->getMessage();
        }
    }
 
    public function logInfo($message) {
        $this->logger->info($message);
    }
 
    public function logError($message) {
        $this->logger->error($message);
    }
}

