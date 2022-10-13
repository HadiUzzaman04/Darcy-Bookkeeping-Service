@extends('layouts.master')
@section('content')

<div class="page-heading about-heading header-text" style="background-image: url({{url('website/images/bookkeeping.jpg')}});">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-content">
                    <h2>Accounts Payable</h2>
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
                <p>Use our years of experience and best practice methods to ensure your accounts payable is managed efficiently and with care. We make sure you pay suppliers and contractors on time maintaining your reputation, licences, and flow of materials and services. Our bookkeepers understand the importance of keeping on top of payment schedules and cashflow, so your credit is not affected with suppliers and lenders and all available GST credits are claimed.</p>
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
      <td>DEntering bills and spend money transactions within accounting software. Check bills against Purchase Order where needed.</td>
      <td>Up to date view of your cashflow and a digital filing system for your transactions that is easy to locate and review as required. Ensure compliance where all GST credits are claimed where applicable. Allocate expenses accurately so your Profit & Loss statement makes sense.</td>
    </tr>
    <tr>
      <td>Pay Bills</td>
      <td>Create and record bill payments in line with your agreed payment schedules and due dates. Send remittance advices.</td>
      <td>By using our bookkeeping service, you can be assured your bills are paid on time and recorded accurately which maintains your relationships with suppliers, keeps your business operating without supply delays and gives you important cashflow data for your future.</td>
    </tr>
    <tr>
      <td>Reconcile</td>
      <td>Reconcile payments through bank statement data.</td>
      <td>We reconcile the bank statements to your accounting software and check for errors to ensure direct debits and payments have been made correctly. By doing this regularly we can raise a creditor report showing what is owed to your suppliers at any point in time and safeguard your cashflow.</td>
    </tr>
    <tr>
      <td>Reporting</td>
      <td>Weekly, Monthly or Quarterly accounts payable reports.</td>
      <td>Reporting your accounts payable position regularly you can ensure you have a clear overview of your situation in line with your available credit, cash, and due dates.</td>
    </tr>
    <tr>
      <td>Manage</td>
      <td>Corresponding with your suppliers</td>
      <td>We can work directly with your suppliers and contractors, so no bills get missed and check bills against monthly supplier statements for accuracy, so supplier materials and services are uninterrupted. This will save you business time and is more cost effective.</td>
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
                <p>Our client in the solar and electrical installation industry, like most businesses, has been affected by Covid and the ever-changing building industry over the last few years. The previous bookkeeper was making multiple errors in their accounting software which resulted in over and under payments to many suppliers. This affected delivery of their required materials to continue work. Our bookkeeper was able to correct the software settings to locate these errors, review and contact all suppliers reconcile the accounts to the correct information, negotiate payment plans and remove debts quickly to maintain supply and the business operational during this time. The business owner is now able to accurately view their accounts payable information on a weekly basis, maintain cashflow and track their due dates.</p>
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
                            <h4>For Accounts Payable service</h4>
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
                            <a href="{{route('accounts.recievable')}}" class="filled-button">Accounts Recivable</a>
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