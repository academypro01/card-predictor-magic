# Card Predictor (Magic)

Card Magic script to predict spectator card!

## Installation

Just upload the files and Enjoy ;)

## Usage

On the first page of the program, you must enter a 6-digit code.
These 6 digits determine the type of card, so be careful
The first 3 digits determine the type of card and the second 3 digits are only for completing the number of digits and have nothing to do with the selected card.
So the most important part is the first 3 digits.
The order of the digits determines the type of card as follows:
### - The first digit:
This number indicates what type of card:
* 1: `Spades`
* 2: `Diamond`
* 3: `Heart`
* 4: `Clubs`
### - The second digit:
This number indicates whether the selected card is a face or a number
Face Cards: `King`, `Queen`, `Jack`, `Ace`
* 0 for number
* 1 for the face
### - Third digit:
This number indicates the card number.
##### If our card was face:
* 1: `Jack`
* 2: `Queen`
* 3: `King`
* 4-9: `Ace`
##### If our card was a number:
Decrease the card number from `10` and enter the result
And if the card number was `10`, we enter `0`.

## Example
* If the selected card is `4 of hearts`, you must enter `306123`
* Or if it is the `king of diamonds`, we must enter `213123`
* "The second three digits do not matter at all"

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License
[MIT](https://choosealicense.com/licenses/mit/)