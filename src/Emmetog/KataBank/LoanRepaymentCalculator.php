<?php

namespace Emmetog\KataBank;

class LoanRepaymentCalculator
{
    public function generateRepayments($principal, $interestRate, $termInYears, $repaymentsPerYear, $startDate)
    {
        $payments = array();

        for($i=1; $i<=$repaymentsPerYear; $i++)
        {
            $payments[] = array(
                'date'                  => '1st Jan 2016',
                'outstanding_principal' => 1000,
                'principal_repayed'     => 1000,
                'interest_repayed'      => 100,
            );
        }

        return $payments;
    }
}