<?php
interface Sortable {
    public function sort(array $data);
}

class ArraySorter implements Sortable {
    public function sort(array $data) {
        sort($data);
        return $data;
    }
}

class LinkedListSorter implements Sortable {
    public function sort(array $data) {
        return $data;
    }
}

$arraySorter = new ArraySorter();
$data = [4, 2, 8, 1, 5];
$sortedData = $arraySorter->sort($data);
print_r($sortedData);

$linkedListSorter = new LinkedListSorter();
$sortedData = $linkedListSorter->sort($data);
print_r($sortedData);

?>