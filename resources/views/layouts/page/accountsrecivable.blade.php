@extends('layouts.master')
@section('content')

<div class="page-heading about-heading header-text" style="background-image: url({{url('website/images/bookkeeping.jpg')}});">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-content">
                    <h2>Accounts Recivable</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<div class="team-members">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>WHY CHOOSE US</h2>
                </div>
                <p>Our team of bookkeepers understand how important a strong handle on the accounts receivable part of your business is. Our bookkeepers use years of experience gained across many different industries and the power of software applications to provide the outcomes your business needs, saving time and money whilst boosting cash flow.</p>
            </div>
        </div>
    </div>
</div>
<br>
<h4>How do we do it </h4>
<br>
<table class="table table-bordered table-dark">
  <thead>
    <tr>
      <th scope="col">Service</th>
      <th scope="col">How</th>
      <th scope="col">Result</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Data Entry</td>
      <td>Entering customer invoices and received money</td>
      <td>Our bookkeepers can complete your invoicing and data entry on time to maintain regular cashflow, ensure accuracy and maintain ATO compliance whilst reducing errors and saving you time.</td>
    </tr>
    <tr>
      <td>Reconciling</td>
      <td>Reconcile incoming funds</td>
      <td>Our bookkeepers use your bank statement and accounting software to match the income records of your accounts. By reconciling on a regular basis, you can ensure you are getting paid on time, preventing outstanding debts from becoming overdue and turning into bad debts. This will reduce financial stress and hardship paying your suppliers and staff.</td>
    </tr>
    <tr>
      <td>Debtor management</td>
      <td>Contacting customers with overdue invoices and maintain records</td>
      <td>When a small business suffers from cash flow problems caused by slow paying customers or unpaid accounts, accumulated debt can snowball. This can drastically impact the business's growth and even its survival. We can help ensure you get paid what you are owed using proven methods that have immediate positive affects on cash flow.</td>
    </tr>
    <tr>
      <td>Reporting</td>
      <td>Weekly, Monthly or Quarterly reports</td>
      <td>Accurate records of income allow you to view real time data on what you are owed, how your income is generated, areas to improve on and where your income stream is highest. Our bookkeepers can create reporting fields to use your software to create these reports whenever you require to improve your business operations.</td>
    </tr>
    <tr>
      <td>GST</td>
      <td>Coding GST and reporting Business Activity Statements.</td>
      <td>Good and Services Tax is calculated either inclusive or exclusive of your sale total and is owed to the ATO on your BAS reports. Our bookkeepers are experts in the field to make certain you are maintaining your lodgement compliance and reporting accurate data from your business.</td>
    </tr>
  </tbody>
</table>

<div class="team-members">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>Case Study</h2>
                </div>
                <p>The client receives over 300 transactions per day through online sales and many different payment platforms that were not synced to their software. Their accounting software was incorrectly reconciled to the wrong invoice and payment methods for a year before we intervened.</p>
                <p>Our bookkeeper was able to clean up this web of transactions to correctly show who had paid and what was outstanding. Once the clean-up was completed the integrations experts amended the synchronizing of the software platforms to feed into their bank accounts reducing the time required to reconcile daily transactions, remove the opportunity for errors, give a clear view on outstanding invoices, and introduced processes to monitor debtors which resulted in maintaining steady cashflow for business operations and increasing their profit.</p>
            </div>
        </div>
    </div>
</div>

<div class="call-to-action">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="inner-content">
                    <div class="row">
                        <div class="col-md-8">
                            <h4>For Accounts Recivable service</h4>
                            <p>Contact us or request a cllback from us</p>
                        </div>
                        <div class="col-lg-4 col-md-6 text-right">
                            <a href="{{route('contactus')}}" class="filled-button">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<div class="call-to-action">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="inner-content">
                    <div class="row">
                        <div class="col-md-12">
                            <h4>Other Bookkeeping Service we offer</h4>
                            <a href="{{route('payroll.service')}}" class="filled-button">Payroll Service</a>
                            <a href="{{route('account.payable')}}" class="filled-button">Accounts Payable</a>
                            <a href="{{route('virtual.cfo')}}" class="filled-button">Virtual CFO</a>
                            <a href="{{route('bas.service')}}" class="filled-button">BAS Service</a>
                            <a href="{{route('catch.up.bookkeeping')}}" class="filled-button">Catch up Bookkeeping</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br>



@endsection