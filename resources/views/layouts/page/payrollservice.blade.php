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
<br>
<div class="team-members">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>WHY CHOOSE OUR PAYROLL SERVICES</h2>
                </div>
                <p>Outsourcing your payroll services with us will ensure you will never stress about wages processing again. Our bookkeepers will ensure your business maintains up-to-date and accurate records of all your employees and will always be compliant with the Tax Office requirements. Our bookkeepers will also look at how we can improve your current payroll processing by using industry best practice in conjunction with other software applications to guarantee accuracy and save time and money.</p>
            </div>
        </div>
    </div>
</div>
<br>

<div style="margin-left: 20px;">
<h4>How do we do it </h4>
</div>
<br>

<table class="table table-bordered table-dark" style="width:98%; margin-left: 10px; ">
  <thead>
    <tr>
      <th scope="col">Service</th>
      <th scope="col">How</th>
      <th scope="col">Result</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Timesheets and rosters</td>
      <td>Data entry of timesheets or rosters into your accounting software</td>
      <td>By outsourcing your payroll functions you will reduce your workload, ensure accuracy and compliance and guarantee your employees are paid correctly.</td>
    </tr>
    <tr>
      <td>Payroll processing</td>
      <td>Create payroll schedule and check against Industry Awards or Fair Work agreements</td>
      <td>We look after scheduled payroll whether its weekly, fortnight or monthly to ensure your business meets all obligations as an employer and your employees are always paid on-time, correctly and without fuss.</td>
    </tr>
    <tr>
      <td>Single Touch Payroll</td>
      <td>Process STP lodgements</td>
      <td>Single Touch Payroll is a legal requirement for all businesses who employee staff. By using our bookkeeping service for payroll and lodgements we ensure you are meeting you reporting requirements and always remain compliant.</td>
    </tr>
    <tr>
      <td>Superannuation</td>
      <td>Monthly or Quarterly superannuation payment preparation and lodgement</td>
      <td>Superannuation legislation is changing every year. Making an error in Superannuation is a costly and time-consuming process, the team at Darcy Bookkeeping are up to date with all the requirements and can ensure your business is meeting its obligations.</td>
    </tr>
    <tr>
      <td>Pay As You Go (PAYG)</td>
      <td>Preparation and lodgement of activity statements to ATO</td>
      <td>Australian Taxation Office legislation is a tricky thing to navigate, by outsourcing your PAYG lodgements you can ensure your lodgements meet these requirements without pressure on your valuable time and resources.</td>
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
                <p>A client in the hospitality industry was manually processing 93 timesheets per fortnight across 4 different entities, this task took 2 days for their accounts team to process, they would encounter numerous errors every pay run due to the variances in fair work award rates and shift times. To fix this we setup a software that linked to their xero subscriptions which reduced this payroll processing down to 6 hours. This in turn removed all potential errors by using a digital sign on and off function of times worked by employees. The software also has an electronic software award tool built in to make sure pay rates are monitored and changed as the industry award was updated. Needless to say the client was extremely happy with the outcome we achieved.</p>
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
                            <h4>For payroll service</h4>
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