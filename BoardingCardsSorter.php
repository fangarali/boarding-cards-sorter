
<?php

require_once 'TrainBoardingCard.php';
require_once 'AirportBusBoardingCard.php';
require_once 'FlightBoardingCard.php';

// Class responsible for sorting the boarding cards and generating the journey description
class BoardingCardsSorter
{
    // Sort the boarding cards in the correct order
    public function sortCards(array $cards): array
    {
        $departureMap = []; // Map to keep track of departure locations
        $arrivalMap = []; // Map to keep track of arrival locations

        foreach ($cards as $card) {
            $departureMap[$card->getDeparture()] = $card;
            $arrivalMap[$card->getArrival()] = $card;
        }

        // Find the starting point of the journey
        $start = null;
        foreach ($departureMap as $departure => $card) {
            if (!isset($arrivalMap[$departure])) {
                $start = $card;
                break;
            }
        }

        // Build the sorted journey from the starting point
        $sortedJourney = [];
        while ($start) {
            $sortedJourney[] = $start;
            $start = $departureMap[$start->getArrival()] ?? null;
        }

        return $sortedJourney;
    }

    // Generate a descriptive itinerary for the sorted journey
    public function generateJourneyDescription(array $sortedJourney): string
    {
        $description = [];

        foreach ($sortedJourney as $card) {
            $description[] = $card->getTransportDescription();
        }

        $description[] = "You have arrived at your final destination.";

        return implode("\n", $description);
    }
}

?>
