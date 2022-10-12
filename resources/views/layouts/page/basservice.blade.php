@extends('layouts.master')
@section('content')

<div class="page-heading about-heading header-text" style="background-image: url({{url('website/images/bookkeeping.jpg')}});">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-content">
                    <h2>Payroll Services</h2>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="team-members">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>WHY CHOOSE OUR BAS SERVICES</h2>
                </div>
                <p>Never stress about a late lodgement again. As Registered BAS Agents we lodge hundreds of Business Activity Statements for businesses every quarter. We are experts at ensuring you claim the maximum amount of GST credits you are entitled too. Our process is paperless, which means minimal administration on your part.</p>
            </div>
        </div>
    </div>
</div>

<h4>How do we do it </h4>

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
      <td>Final check for your peace of mind and in accordance with ATO guidelines that you must review and sign prior to any BAS lodgement taking place.This serves as a double check to confirm accuracy of BAS calculations.</td>
    </tr>
    <tr>
      <td>Final Lodgement of BAS</td>
      <td>Lodgement via our BAS Agent Portal</td>
      <td>BAS is lodged with the ATO after you have signed our online document outlining liability or refund. Document is paperless to avoid delays with printing and administration. The document outlines date for payment where required.</td>
    </tr>
  </tbody>
</table>




@endsection