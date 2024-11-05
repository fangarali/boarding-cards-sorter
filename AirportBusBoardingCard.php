
<?php

require_once 'BoardingCard.php';

// Concrete class for Airport Bus boarding card
class AirportBusBoardingCard extends BoardingCard
{
    public function getTransportDescription(): string
    {
        return "Take the airport bus from {$this->departure} to {$this->arrival}. No seat assignment.";
    }
}

?>
