#include <iostream>
#include <cmath>

using namespace std;

int main()
{
	// Set basic values.
	unsigned long loan_amount = 375000; // financed amount
	float annual_interest_rate = 6.0; // 6%
	unsigned short loand_length = 30; // 30 years
	const unsigned short MONTHS_IN_YEARS = 12;
	bool approved = true; // Approved for a loan

	// Establish comparison values as constants.
	const unsigned short LOW_MAX = 500;
	const unsigned short MODERATE_MAX = 1500;
	const unsigned short PRICEY_MAX = 3000;
	const unsigned short EXPENSIVE_MAX = 10000;

	// Perform basic calculations.
	float monthly_interest_rate = annual_interest_rate / MONTHS_IN_YEARS;
	monthly_interest_rate = monthly_interest_rate / 100; // Monthly rate as decimal.

	unsigned short number_payments = loand_length * MONTHS_IN_YEARS;

	// Mortgage payment calculation broken down into subparts.
	float monthly_payment = 1 - pow((1 + monthly_interest_rate), -number_payments);
	monthly_payment = monthly_interest_rate / monthly_payment;
	monthly_payment = loan_amount * monthly_payment;

	// Print the basic information.
	cout << "Assuming a loan in the amount of GBP" << loan_amount << ", at " << annual_interest_rate << "% interest, over " << loand_length << " years, the monthly payment would be GBP";

	// Adjust the formatting.
	cout.setf(ios_base::fixed);
	cout.setf(ios_base::showpoint);
	cout.precision(2);

	// Print the monthly payment.
	cout << monthly_payment << ".\n\n";

	// How expensive is the monthly payment?
	if (monthly_payment < LOW_MAX) {
		cout << "Your mortgage payment is a steal!\n\n";
	} else if (monthly_payment < MODERATE_MAX) {
		cout << "Your mortgage payment seems reasonable\n\n";
	} else if (monthly_payment < PRICEY_MAX) {
		cout << "The budget is getting a little tight.\n\n";
	} else if (monthly_payment < EXPENSIVE_MAX) {
		cout << "Ouch!\n\n";
	} else {
		cout << "I hope your name is Kiyosaki\n\n";
	}

	if (approved) {
		cout << "According to our information, you are already approved for this loan.\n";
	} else {
		cout << "According to our information, you are not already approved for this loan\n";
	}

	// As a ternary statement:
	cout << "According to our information, you ";
	cout << ((approved) ?  "are" : "are not");
	cout << " already approved for this loan.\n";

	cout << sizeof monthly_payment << " byte(s)\n\n";

	// Let the reader know what to do next.
	cout << "Press enter to continue.\n";
	cin.get();

	return 0;
}
