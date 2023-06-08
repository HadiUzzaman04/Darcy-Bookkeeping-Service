@extends('layouts.master')
@section('content')

<div class="page-heading about-heading header-text" style="background-image: url({{url('website/images/bookkeeping.jpg')}});">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-content">
                    <h2>Catch up Bookkeeping</h2>
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
                    <h2>WHY CHOOSE OUR CATCH UP BOOKKEEPING SERVICES</h2>
                </div>
                <p>Our bookkeeping team has a proven track record of getting books up to date quickly and at an affordable cost. As Registered Accounting Agents, we also can help alleviate your stress by communicating directly with the Tax Office and letting them know that we have your books in hand and indicating a firm timeline for completion of Accounting or Tax Returns. We can also help you to negotiate with the tax office with regards to any outstanding debts you may have also.</p>
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
      <td>Software Set up (If required)</td>
      <td>Xero, MYOB or Quickbooks software customised for your business</td>
      <td>A reduction in time and cost for the input and collation of data for your business. This is far faster and more efficient than using Excel or paper based formatting of your bookkeeping records.</td>
    </tr>
    <tr>
      <td>Data entry and bank reconciliation</td>
      <td>Input of data into your accounting software</td>
      <td>All your transactional information is entered, coded and stored within the accounting software. The reconciliation will ensure that all business activity is recorded in one central place.</td>
    </tr>
    <tr>
      <td>Creation of payroll records (If required)</td>
      <td>Reviewing payments made to employees via cash and bank transfer</td>
      <td>The creation and back dating of pay runs taking into account the net amount which has been paid to employees and grossing them up to account for PAYG withholding tax where required. We also take up accruals for leave and account for allowances, deductions and superannuation. Lodgement of all outstanding Single Touch Payroll and Superannuation obligations.</td>
    </tr>
    <tr>
      <td>Review of GST, payroll and financial reports</td>
      <td>Run reports from accounting software</td>
      <td>Final review to ensure all data entered is correct and nothing has been missed. Any final adjustments are made with books now ready for Accounting, Tax or any other outstanding lodgements.</td>
    </tr>
    <tr>
      <td>Lodgement of outstanding returns</td>
      <td>Electronic lodgement via Tax Portal</td>
      <td>All outstanding lodgements are prepared and sent to you for final review and signing. Once signed we will execute the lodgements and finalise.</td>
    </tr>
    <tr>
      <td>Negotiation of outstanding debts with Tax Office (If required)</td>
      <td>As Accounting Agents we have a priority phone line to the ATO</td>
      <td>We can work with you to negotiate a suitable payment arrangement of outstanding debts with the ATO. This payment arrangement would be over a period of time that is achievable for you to enable you to trade and meet your debt obligations. This may even include the removal of late fees and interest where the ATO is agreeable to it.</td>
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
                <p>This client approached us with outstanding payroll and super obligations as well as Accounting that needed to be revised or lodged. We reconciled the bank account, undeposited funds and payroll accounts. We fixed the chart of accounts in MYOB so the Profit and Loss as well as Balance Sheet provided meaningful guidance on the financial performance of the business. The account mapping was fixed for payroll and superannuation and payment summaries were lodged. The coding of GST was corrected the and business activity statements were revised and lodged. The MYOB file is now in pristine condition and all lodgements are up to date.</p>
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
                            <h4>For Catch up Bookkeeping service</h4>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br>


@endsection