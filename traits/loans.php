<?php
trait Loan{
    public function calculateLoans($amount, $repayment_duration,$interest){
      $totalLoan = (($interest/$repayment_duration)*$amount);
      return $totalLoan;
    }
    public function calculateInstallmentAmount($amount, $repayment_duration,$interest){
        $monthly_installment = ($this->calculateLoans($amount, $repayment_duration,$interest)/ $repayment_duration);
        return $monthly_installment;
    }

}
