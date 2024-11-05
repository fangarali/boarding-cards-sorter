
<?php

// Interface defining a BoardingCard
interface BoardingCardInterface
{
    public function getDeparture(): string;
    public function getArrival(): string;
    public function getTransportDescription(): string;
}

?>
