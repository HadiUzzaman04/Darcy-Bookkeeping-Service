@extends('layouts.master')
@section('content')

<div class="page-heading about-heading header-text" style="background-image: url({{url('website/images/bookkeeping.jpg')}});">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-content">
                    <h2>Virtual CFO</h2>
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
                    <h2>WHY CHOOSE OUR VIRTUAL CFO SERVICE</h2>
                </div>
                <p>Our Virtual CFO service has time proven systems using the services of our high calibre accountants to provide an unequalled oversight of the financial activities in your business. From accounting policies and procedures through to structured controls, and cash flow management we can ensure your accounting department is working at the optimum level.</p>
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
      <td>Accounting policies & procedures</td>
      <td>Helpful software products and expert services to leverage your profitability and secure your financial position</td>
      <td>Your accounting department utilises accounting best practice and software where applicable, to suit the business's industry and ensure compliance with the Tax Office, ASIC and other governmental bodies where required. Reduce the ability for fraud, embezzlement and any other illegal activity to take place by an employee, contractors or outside party affecting the business.</td>
    </tr>
    <tr>
      <td>Management of the Integrity of accounts</td>
      <td>Audit and report on accounting discrepancies</td>
      <td>Enabling a business,to have critical periodical reporting and analysis to support improved decision making and drive accountability at every level of the organisation. Ensure every dollar the business spends is properly accounted for.</td>
    </tr>
    <tr>
      <td>Cash Flow Management and Budgeting</td>
      <td>Creating a rolling budget and Cash Flow forecast</td>
      <td>Keeping a tight leash on cash flow management to ensure viability of the business by meeting debt obligations when they fall due. Ensure budgets are met to create surplus cash reserves for investment back into the business.</td>
    </tr>
    <tr>
      <td>Financial Oversight</td>
      <td>Analysis of reports to provide recommendations for improvement and opportunities</td>
      <td>Identifying cost saving measures and opportunities for investment into key areas of the business that will increase sales, decrease expenses and drive profitability. Identifying underperforming areas of the business and provide recommendations to turns these areas around.</td>
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
                <p>When our client came to us they were very good at working hard, providing a service for their customers but was trying to navigate a tricky period involving the growth of the business and difficult market conditions. Our virtual CFO was able to come into the business and take charge of the finances with immediate impact. Since engaging Darcy Bookkeeping our client has grown in many ways including the introduction of effective financial reporting, improved processes and operations, reduced overheads and debt while increasing profits.</p>
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
                            <h4>For Virtual CFO service</h4>
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