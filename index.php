
<?php

require_once 'BoardingCardsSorter.php';

// Example usage
$cards = [
    new TrainBoardingCard('Madrid', 'Barcelona', '78A', '45B'),
    new FlightBoardingCard('Gerona Airport', 'Stockholm', 'SK455', '3A', '45B', 'Baggage drop at ticket counter 344'),
    new AirportBusBoardingCard('Barcelona', 'Gerona Airport'),
    new FlightBoardingCard('Stockholm', 'New York JFK', 'SK22', '7B', '22', 'Baggage will be automatically transferred from your last leg'),
];

$sorter = new BoardingCardsSorter();
$sortedJourney = $sorter->sortCards($cards);
$journeyDescription = $sorter->generateJourneyDescription($sortedJourney);

echo $journeyDescription;

?>
