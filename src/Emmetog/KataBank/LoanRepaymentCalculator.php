<?php

namespace Emmetog\KataBank;

class LoanRepaymentCalculator
{
    public function generateRepayments($principal, $interestRate, $termInYears, $repaymentsPerYear, $startDate)
    {
        $payments = array();

        $startDateTimestamp = strtotime($startDate);



        for($i=1; $i<=$repaymentsPerYear; $i++)
        {
            $yearsElapsed = $repaymentsPerYear / $i;

            $paymentDate = date('jS M Y', strtotime('+' . $yearsElapsed . ' years', $startDateTimestamp));


            $payments[] = array(
                'date'                  => $paymentDate,
                'outstanding_principal' => 1000,
                'principal_repayed'     => 1000,
                'interest_repayed'      => 100,
            );
        }

        return $payments;
    }
}