<?php
namespace App\Services;
class Learning {
    private string $a;
    public function setData($data) {
        $this->a = $data;
    }
    public function getData() {
        return $this->a;
    }
}
