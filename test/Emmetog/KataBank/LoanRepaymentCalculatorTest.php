<?php

namespace Emmetog\KataBank;

use PHPUnit_Framework_TestCase;

require_once dirname( dirname(dirname( __DIR__ ))) . '/src/Emmetog/KataBank/LoanRepaymentCalculator.php';

class LoanRepaymentCalculatorTest extends PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        $this->obj = new LoanRepaymentCalculator();
    }

    public function generateRepaymentsProvider()
    {
        return array(
            'one single repayment' => array(
                'inputs' => array(
                    'principal' => 1000,
                    'interest_rate' => 0.10,
                    'term_in_years' => 1,
                    'repayments_per_year' => 1,
                    'start_date' => '1st Jan 2015',
                ),
                'expected_repayments' => array(
                    array(
                        'date' => '1st Jan 2016',
                        'outstanding_principal' => 1000,
                        'principal_repayed' => 1000,
                        'interest_repayed' => 100,
                    ),
                ),
            ),
        );
    }

    /**
     * @dataProvider generateRepaymentsProvider
     */
    public function testGenerateRepayments($inputs, $expectedRepayments)
    {
        $principal = $inputs['principal'];
        $interestRate = $inputs['interest_rate'];
        $termInYears = $inputs['term_in_years'];
        $repaymentsPerYear = $inputs['repayments_per_year'];
        $startDate = $inputs['start_date'];

        $payments = $this->obj->generateRepayments($principal, $interestRate, $termInYears, $repaymentsPerYear, $startDate);

        $this->assertEquals($expectedRepayments, $payments);
    }
}