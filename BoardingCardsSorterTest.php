
<?php

use PHPUnit\Framework\TestCase;

require_once 'BoardingCardsSorter.php';

class BoardingCardsSorterTest extends TestCase
{
    public function testSortCards()
    {
        $cards = [
            new TrainBoardingCard('Madrid', 'Barcelona', '78A', '45B'),
            new FlightBoardingCard('Gerona Airport', 'Stockholm', 'SK455', '3A', '45B', 'Baggage drop at ticket counter 344'),
            new AirportBusBoardingCard('Barcelona', 'Gerona Airport'),
            new FlightBoardingCard('Stockholm', 'New York JFK', 'SK22', '7B', '22', 'Baggage will be automatically transferred from your last leg'),
        ];

        $sorter = new BoardingCardsSorter();
        $sortedJourney = $sorter->sortCards($cards);
        $this->assertEquals('Madrid', $sortedJourney[0]->getDeparture());
        $this->assertEquals('New York JFK', end($sortedJourney)->getArrival());
    }

    public function testGenerateJourneyDescription()
    {
        $cards = [
            new TrainBoardingCard('Madrid', 'Barcelona', '78A', '45B'),
            new FlightBoardingCard('Gerona Airport', 'Stockholm', 'SK455', '3A', '45B', 'Baggage drop at ticket counter 344'),
            new AirportBusBoardingCard('Barcelona', 'Gerona Airport'),
            new FlightBoardingCard('Stockholm', 'New York JFK', 'SK22', '7B', '22', 'Baggage will be automatically transferred from your last leg'),
        ];

        $sorter = new BoardingCardsSorter();
        $sortedJourney = $sorter->sortCards($cards);
        $journeyDescription = $sorter->generateJourneyDescription($sortedJourney);

        $this->assertStringContainsString('Take train 78A from Madrid to Barcelona. Sit in seat 45B.', $journeyDescription);
        $this->assertStringContainsString('You have arrived at your final destination.', $journeyDescription);
    }
}

?>
