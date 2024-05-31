@extends('user.layouts.template')

@section('title', 'Contact Guinness Press: Reach Out for Inquiries and Collaboration')
@section('keywords', 'guinness press contact')
@section('description', 'Get in touch with Guinness Press for any inquiries or collaboration opportunities. We`re here to assist you on your scholarly journey.')


@section('banner')
<section class="main_banner inner_banner">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="banner_content white_text">
                    <h3 class="cocogoose_light">
                        Contact Us
                    </h3>
                    <h1 class="cocogoose_light">
                        Stay Connected With Us
                    </h1>
                    <p class="poppins_fonts">
                        For prompt assistance or inquiries, please don't hesitate to contact us. We value your feedback and look forward to hearing from you.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('body')
<section class="sec_3">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="contact_box">
                    <div class="contact_icon">
                        <img src="{{asset('assets/images/teenyicons_contact-outline.png') }}" class="img-fluid">
                    </div>
                    <div class="contact_text">
                        <h3>Phone: +1 (602) 649-5530 (Hr 8AM- 4PM)</h3>
                        <h3>Fax: +1 (602) 649-5530 ( 24 hrs. day)</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="contact_box">
                    <div class="contact_icon">
                        <img src="{{asset('assets/images/Vector.png') }}" class="img-fluid">
                    </div>
                    <div class="contact_text">
                        <h3>location & Mailing Addresses</h3>
                        <h3>U.S. Postal Mailing Address: Guinness Press </h3>
                        <h3>16192 Coastal Highway Lewes, DE 19958, USA</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="contact_box">
                    <div class="contact_icon">
                        <img src="{{asset('assets/images/gis_search-address.png') }}" class="img-fluid">
                    </div>
                    <div class="contact_text">
                        <h3>info@guinnesspress.org</h3>
                        <h3>support@guinnesspress.org</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="detailing_form">
    <div class="container">
        <div class="details_form">
        	<div class="detail_data">
        		<h5>Contact Now</h5>
        		<h4>Ready to get started</h4>
        		<p>Our local teams are working today to create the business of tomorrow. Get in touch and let's find out how we transform your industry, together.</p>
        	</div>
        	<form class="detail_forms">
        		<div class="row">
        			<div class="col-md-4">
        				<input type="text" class="form-control detail_form" name="" placeholder="Name *">
        			</div>
        			<div class="col-md-4">
        				<input type="text" class="form-control detail_form" name="" placeholder="Email *">
        			</div>
        			<div class="col-md-4">
        				<input type="text" class="form-control detail_form" name="" placeholder="Phone Number *">
        			</div>
        			<div class="col-md-12">
        				<input type="text" class="form-control detail_form" name="" placeholder="Where did you hear about us? *">
        			</div>
        			<div class="col-md-12">
        				<textarea rows="5" class="form-control detail_form"  placeholder="Message *"></textarea>
        			</div>
        		</div>
        		<button class="btn btn-info btn-green">Submit</button>
        	</form>
        </div>
    </div>

</section>
@endsection
