# Boarding Cards Sorter Project

This project is a PHP-based solution forr sorting a set of unordered boarding cards to produce a complete journey itinerary.

## Project Structure

The project consists of the following PHP files:

1. **BoardingCardInterface.php**: Defines the interface for a boarding card.
2. **BoardingCard.php**: Abstract class that implements the `BoardingCardInterface`.
3. **TrainBoardingCard.php**: Represents a boarding card for a train.
4. **AirportBusBoardingCard.php**: Represents a boarding card for an airport bus.
5. **FlightBoardingCard.php**: Represents a boarding card for a flight.
6. **BoardingCardsSorter.php**: Contains logic to sort the boarding cards and generate the journey description.
7. **index.php**: The main application file that demonstrates the usage of the boarding card sorter.
8. **BoardingCardsSorterTest.php**: PHPUnit test file to validate the sorting logic.

## Features

- Implements the SOLID design principles.
- Provides a flexible structure for adding new types of transportation.
- Includes unit tests using PHPUnit to ensure reliability.

## Installation

### Prerequisites

- **PHP 8.x**: Make sure PHP is installed on your machine.
- **Composer**: Install Composer for managing dependencies.
- **Git**: Required for cloning the repository.

### Step-by-Step Installation

1. **Clone the Repository**

   Clone the project repository from GitHub:
   ```bash
   git clone https://github.com/fangarali/boarding-cards-sorter.git
   cd boarding-cards-sorter
   ```

2. **Install Dependencies**


   Run the following command to install any project dependencies:
   ```bash
   composer install
   ```

3. **Run the Main Script**

   Execute the `index.php` file to see the sorted journey:
   ```bash
   php index.php
   ```

### Running Unit Tests

1. **Install PHPUnit**

   If PHPUnit is not already installed, you can install it via Composer:
   ```bash
   composer require --dev phpunit/phpunit
   ```

2. **Execute the Tests**

   Run the unit tests to validate the sorting logic:
   ```bash
   ./vendor/bin/phpunit BoardingCardsSorterTest.php
   ```

## Example Output

The output for the sample boarding cards in `index.php` will be:

```
Take train 78A from Madrid to Barcelona. Sit in seat 45B.
Take the airport bus from Barcelona to Gerona Airport. No seat assignment.
From Gerona Airport, take flight SK455 to Stockholm. Gate 45B, seat 3A. Baggage drop at ticket counter 344.
From Stockholm, take flight SK22 to New York JFK. Gate 22, seat 7B. Baggage will be automatically transferred from your last leg.
You have arrived at your final destination.
```

## Project Design

- **SOLID Principles**: The code follows the SOLID design principles to ensure maintainability and extensibility.
  - **Single Responsibility**: Each class has a single responsibility, such as representing a specific type of boarding card or sorting the cards.
  - **Open/Closed Principle**: The system can easily be extended to support new types of transport without modifying existing classes.

- **Unit Testing**: The `BoardingCardsSorterTest.php` file includes unit tests that validate the sorting algorithm and the journey description.

## Compatibility

This project is compatible with:

- **macOS**: Ensure PHP and Composer are installed via Homebrew or other package managers.
- **Windows**: Install PHP and Composer manually from their official websites.

## Contribution

Feel free to fork the repository and submit pull requests. Contributions are welcome!

## License

This project is open-source and licensed under the MIT License.
