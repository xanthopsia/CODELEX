<?php
class ResultDisplay {
    public function displayRecords($records) {
        foreach ($records as $record) {
            echo "Name: " . $record->name . PHP_EOL;
            echo "SEPA: " . $record->sepa . PHP_EOL;
            echo "Address: " . $record->address . PHP_EOL;
            echo PHP_EOL;
        }
    }
}
