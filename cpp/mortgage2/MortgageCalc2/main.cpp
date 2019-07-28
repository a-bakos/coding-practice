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

	if (approved) {
		cout << "According to our information, you are already approved for this loan.\n";
	}

	// Let the reader know what to do next.
	cout << "Press enter to continue.\n";
	cin.get();

	return 0;
}
