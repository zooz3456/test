<?php
namespace App\Services;
class MessageInstance {
    public Array $messageBox;
    public function addMessage($data): void
    {
        $this->messageBox[] = $data;
    }
    public function printMessage(): string
    {
        return join("<br/>", $this->messageBox);
    }
}
