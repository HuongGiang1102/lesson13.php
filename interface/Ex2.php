<?php
interface Logger {
    public function logInfo($message);
    public function logWarning($message);
    public function logError($message);
}

class FileLogger implements Logger {
    public function logInfo($message) {
        file_put_contents('logs.txt', "[INFO] " . $message . "\n", FILE_APPEND);
    }

    public function logWarning($message) {
        file_put_contents('logs.txt', "[WARNING] " . $message . "\n", FILE_APPEND);
    }

    public function logError($message) {
        file_put_contents('logs.txt', "[ERROR] " . $message . "\n", FILE_APPEND);
    }
}

class DatabaseLogger implements Logger {
    public function logInfo($message) {
        $this->saveToDatabase('INFO', $message);
    }

    public function logWarning($message) {
        $this->saveToDatabase('WARNING', $message);
    }

    public function logError($message) {
        $this->saveToDatabase('ERROR', $message);
    }

    private function saveToDatabase($level, $message) {
    }
}


$fileLogger = new FileLogger();
$fileLogger->logInfo("This is an information message");
$fileLogger->logWarning("This is a warning message");
$fileLogger->logError("This is an error message");

$databaseLogger = new DatabaseLogger();
$databaseLogger->logInfo("This is an information message");
$databaseLogger->logWarning("This is a warning message");
$databaseLogger->logError("This is an error message");

?>