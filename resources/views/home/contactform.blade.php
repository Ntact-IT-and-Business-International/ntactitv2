@extends('layouts.app')

@section('title', 'contact')

@section('content')
    <!-- contact -->
    <section class="w3l-contact-info-main py-5" id="contact">
        <div class="container py-md-5 py-4">
            <div class="row align-items-center mb-5">
                <div class="col-md-6 section-heading">
                    <h5 class="small-title-2">  </h5>
                    <h3 class="title-style-2">Get in Touch</h3>
                </div>
                <div class="col-md-6 section-heading mt-md-0 mt-2">
                    <p>
                        Feel free to send in any inquiries, We shall reply at the soonest!
                    </p>
                </div>
            </div>
            <div class="contact-w3pvt-form mt-5 pt-lg-4">
                <form method="post" class="w3layouts-contact-fm" action="https://sendmail.w3layouts.com/submitForm">
                    <div class="row main-cont-sec">
                        <div class="col-md-6 left-cont-contact">
                            <div class="form-group mb-3">
                                <label for="w3lName">Your Name</label>
                                <input class="form-control" type="text" name="w3lName" id="w3lName" placeholder=""
                                    required="">
                            </div>
                            <div class="form-group mb-3">
                                <label for="w3lSender">Your Email</label>
                                <input class="form-control" type="email" name="w3lSender" id="w3lSender" placeholder=""
                                    required="">
                            </div>
                            <div class="form-group mb-3">
                                <label for="w3lSubject">Subject</label>
                                <input class="form-control" type="text" name="w3lSubject" id="w3lSubject" required="">
                            </div>
                        </div>
                        <div class="col-md-6 right-cont-contact">
                            <div class="form-group">
                                <label for="w3lSubject">Write Message</label>
                                <textarea class="form-control" name="w3lMessage" id="w3lMessage" placeholder=""
                                    required=""></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-group-2 mt-3 text-right">
                        <button type="submit" class="btn btn-style">Submit Form</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- //contact -->
@endsection
