
<?php

require_once 'BoardingCard.php';

// Concrete class for Flight boarding card
class FlightBoardingCard extends BoardingCard
{
    private string $flightNumber; // Flight number
    private ?string $gate; // Gate information (optional)
    private string $seat; // Seat assignment
    private ?string $baggage; // Baggage information (optional)

    
    public function __construct(string $departure, string $arrival, string $flightNumber, string $seat, ?string $gate = null, ?string $baggage = null)
    {
        parent::__construct($departure, $arrival);
        $this->flightNumber = $flightNumber;
        $this->seat = $seat;
        $this->gate = $gate;
        $this->baggage = $baggage;
    }

    // Get the transport description for the flight
    public function getTransportDescription(): string
    {
        $description = "From {$this->departure}, take flight {$this->flightNumber} to {$this->arrival}. Gate {$this->gate}, seat {$this->seat}.";
        if ($this->baggage) {
            $description .= " {$this->baggage}.";
        }
        return $description;
    }
}

?>
