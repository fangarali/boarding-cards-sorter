
<?php

require_once 'BoardingCard.php';

// Concrete class for Train boarding card
class TrainBoardingCard extends BoardingCard
{
    private string $trainNumber; // Train number
    private string $seat; // Seat assignment

    public function __construct(string $departure, string $arrival, string $trainNumber, string $seat)
    {
        parent::__construct($departure, $arrival);
        $this->trainNumber = $trainNumber;
        $this->seat = $seat;
    }

    // Get the transport description for the train
    public function getTransportDescription(): string
    {
        return "Take train {$this->trainNumber} from {$this->departure} to {$this->arrival}. Sit in seat {$this->seat}.";
    }
}

?>
