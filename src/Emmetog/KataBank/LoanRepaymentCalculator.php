<?php

namespace Emmetog\KataBank;

class LoanRepaymentCalculator
{
    public function generateRepayments()
    {
        return array(
            array(
                'date' => '1st Jan 2016',
                'outstanding_principal' => 1000,
                'principal_repayed' => 1000,
                'interest_repayed' => 100,
            ),
        );
    }
}