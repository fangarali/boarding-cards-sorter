
<?php

require_once 'BoardingCardInterface.php';

// Abstract class implementing the BoardingCardInterface
abstract class BoardingCard implements BoardingCardInterface
{
    protected string $departure; // Departure location
    protected string $arrival; // Arrival location

    public function __construct(string $departure, string $arrival)
    {
        $this->departure = $departure;
        $this->arrival = $arrival;
    }

    // Get the departure location
    public function getDeparture(): string
    {
        return $this->departure;
    }

    // Get the arrival location
    public function getArrival(): string
    {
        return $this->arrival;
    }
}

?>
