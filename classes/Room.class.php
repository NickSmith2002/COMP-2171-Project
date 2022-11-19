<?php

class Room {
    // Properties
    private $roomNumber;
    private $roomType;
    private $block;
    private $availability;

    public function __construct($roomNumber, $roomType, $block, $availability)
    {
        $this->roomNumber = $roomNumber;
        $this->roomType = $roomType;
        $this->block = $block;
        $this->availability = $availability;
    }

    // Methods

    // GETTERS
    public function get_roomNumber()
    {
        return $this->roomNumber;
    }
    public function get_roomType()
    {
        return $this->roomType;
    }
    public function get_block()
    {
        return $this->block;
    }
    public function get_availability()
    {
        return $this->availability;
    }

    // SETTERS
    public function set_availability($newStatus)
    {
        $this->availability = $newStatus;
    }
}

?>