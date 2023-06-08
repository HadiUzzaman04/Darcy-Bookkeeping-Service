@extends('layouts.master')
@section('content')

<div class="page-heading about-heading header-text" style="background-image: url({{url('website/images/bookkeeping.jpg')}});">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-content">
                    <h2>Accounting Service</h2>
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
                    <h2>WHY CHOOSE OUR Accounting SERVICES</h2>
                </div>
                <p>Never stress about a late lodgement again. As Registered Accounting Agents we lodge hundreds of Business Activity Statements for businesses every quarter. We are experts at ensuring you claim the maximum amount of GST credits you are entitled too. Our process is paperless, which means minimal administration on your part.</p>
            </div>
        </div>
    </div>
</div>
<br>
<div style="margin-left: 20px;">
<h4>How do we do it </h4>
</div>
<br>
<table class="table table-bordered table-dark" style="width:98%; margin-left: 10px;">
  <thead>
    <tr>
      <th scope="col">Service</th>
      <th scope="col">How</th>
      <th scope="col">Result</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Bank reconciliation for the quarter</td>
      <td>Use products like Xero, MYOB and Quickbooks to record transaction</td>
      <td>Ensures all transactions that have occurred throughout the quarter are recorded accurately with the correct GST code and nothing has been missed.</td>
    </tr>
    <tr>
      <td>Review of GST and Payroll reports</td>
      <td>Checking through line by line to ensure nothing is amiss</td>
      <td>Books are completely accurate, and all transactions have been recorded to correct accounts. This ensures your balance sheet and profit &loss statement are in line with your business activity for the quarter.</td>
    </tr>
    <tr>
      <td>Calculate PAYG Instalment, PAYG Withholding and GST liabilities and credits</td>
      <td>Email to you with final balances showing final balance for refund or payment</td>
      <td>Final check for your peace of mind and in accordance with ATO guidelines that you must review and sign prior to any Accounting lodgement taking place.This serves as a double check to confirm accuracy of Accounting calculations.</td>
    </tr>
    <tr>
      <td>Final Lodgement of Accounting</td>
      <td>Lodgement via our Accounting Agent Portal</td>
      <td>Accounting is lodged with the ATO after you have signed our online document outlining liability or refund. Document is paperless to avoid delays with printing and administration. The document outlines date for payment where required.</td>
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
                <P>We took over the bookkeeping and Accounting duties for this client who has multiple business entities. We changed the current Accounting process that the business was used to into something much simpler that would ensure accuracy timely processing. The document arrives via email, the client reviews, signs online, gets payment details, makes payment and completes the process.</P>
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
                            <h4>For Accounting service</h4>
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
                            <a href="{{route('accounts.recievable')}}" class="filled-button">Accounts Recivable</a>
                            <a href="{{route('virtual.cfo')}}" class="filled-button">Virtual CFO</a>
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