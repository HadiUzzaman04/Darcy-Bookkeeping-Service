@extends('layouts.master')
@section('content')

<div class="page-heading contact-heading header-text" style="background-image: url({{url('website/images/bannar.jpg')}});">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="text-content">
          <h2>Contact Us</h2>
        </div>
      </div>
    </div>
  </div>
</div>
<br>

<div class="send-message">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="section-heading">
          <h2>Send us a Message</h2>
        </div>
      </div>
      <div class="col-md-8">
        <div class="contact-form">
          <form id="contact" action="{{route('contactus.store')}}" method="post">
            @csrf
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12" style= "margin-bottom: 15px;">
                <fieldset>
                  <input name="name" type="text" class="form-control" id="name" placeholder="Full Name" required="">
                </fieldset>
              </div>
              <div class="col-lg-12 col-md-12 col-sm-12" style= "margin-bottom: 15px;">
                <fieldset>
                  <input name="email" type="text" class="form-control" id="email" placeholder="E-Mail Address" required="">
                </fieldset>
              </div>
              <div class="col-lg-12 col-md-12 col-sm-12" style= "margin-bottom: 15px;">
                <fieldset>
                  <input name="phone" type="text" class="form-control" id="phone" placeholder="Phone Number" required="">
                </fieldset>
              </div>
              <div class="col-lg-12" style= "margin-bottom: 15px;">
                <fieldset>
                  <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your Message" required=""></textarea>
                </fieldset>
              </div>
              <br>
              <div class="col-lg-12">
                <fieldset>
                  <button type="submit" class="btn btn-primary">Send Message</button>
                </fieldset>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<br>
<div class="find-us">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="section-heading">
          <h2>Our Location on Maps</h2>
        </div>
      </div>
      <div class="col-md-8">
        <!-- How to change your own map point
	1. Go to Google Maps
	2. Click on your location point
	3. Click "Share" and choose "Embed map" tab
	4. Copy only URL and paste it within the src="" field below
-->
        <div id="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2445.8194516306594!2d-106.64290588476969!3d52.19215446822681!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5304f5e1a0b426b7%3A0x8f5cdf27a15802b4!2s3603%20Kochar%20Ave%20%232a%2C%20Saskatoon%2C%20SK%20S7P%200B8%2C%20Canada!5e0!3m2!1sen!2sbd!4v1666162164168!5m2!1sen!2sbd" width="740" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>        </div>
      </div>
      <div class="col-md-4">
        <div class="left-content">
          <h4>About our office</h4>
          <p>You can fing our office location through google map</p>
        </div>
      </div>
    </div>
  </div>
</div>



@endsection