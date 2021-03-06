kata-bank
=========

A coding kata exercise.

The situation is this: you are hired at a large well-known bank which is trying to modernise
their loan application processing system.  They want you to help them create a system which
can calculate the details of the loan repayments that a customer will have to pay.  Any
mistake in the algorithm could mean that the bank looses a lot of money or make the customer
get very angry, so be careful!

The Criteria
------------

The loan repayment calculator must take into account the following information when
calculating the loan repayments:
* The full principal (amount of loan)
* The yearly interest rate
* The term of the loan in years
* The amount of repayments per year
* The date when the loan starts

The calculator should return the following information for each repayment:
* The date that each payment should be made
* The outstanding principal before each payment
* The amount repaid against the principal
* The amount repaid as interest

Interest
--------

The interest is calculated using Simple Interest for now (but this could change in the future).
Simple Interest is calculated by the following formula:

Interest = Yearly interest rate * Outstanding principal * Duration in years

However, later on the bank asks you to implement a more sophisticated interest algorithm
(implement the simple interest algorithm first, then try to add this new algorithm).  They want
to use the following formula to calculate the interest:

Interest = Outstanding principal * ( ( 1 + interest rate ) ^( 1 / # of yearly payments ) ) - 1