@extends('layouts.master')

@section('content')
<div class="pt-5 pb-5" style="background-color: #f2f2f2;">
    <div class="container">
        <div class="row">
            <div class="section-head col-sm-12" id="service">
                <h1>Our Services</h1>
                <p>What sets us apart</p>
            </div>
            <div class="col-lg-6 col-sm-6 service">
                <div class="item"> <span class="icon feature_box_col_one"><i class="fa fa-laptop"></i></span>
                    <h6>Civic Technology Solutions</h6>
                    <p>Our commitment to civic engagement and technological advancement drives us to create tailored solutions that empower communities. From interactive platforms to streamline public participation to innovative tools fostering transparent governance, we are dedicated to making a lasting impact.<br /></p>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6 service">
                <div class="item"> <span class="icon feature_box_col_two"><i class="fa fa-android"></i></span>
                    <h6>Digital Media Excellence</h6>
                    <p>Our storytelling goes beyond conventional content; it's about crafting compelling narratives that resonate with the diverse experiences of women. Through state-of-the-art digital media, we not only share perspectives but also prioritize women's voices, connecting people in profound and meaningful ways.</p>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6 service">
                <div class="item"> <span class="icon feature_box_col_three"><i class="fa fa-magic"></i></span>
                    <h6>Kike Coding and Data Hub</h6>
                    <p>We are passionate about equipping the next generation with the skills they need to thrive in the digital age. Our Kike coding initiatives provide a space for young minds to explore the world of coding, while our Data Hub serves as a hub of information and knowledge, where young female journalist learn how to utilize data sources and data analysis for investigative work.</p>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6 service">
                <div class="item"> <span class="icon feature_box_col_three"><i class="fa fa-magic"></i></span>
                    <h6>Data & Technology Consultation</h6>
                    <p>In a world driven by data, we understand its power and potential. Our consultancy services offer tailored insights, strategies, and implementation plans, ensuring that our clients harness the full capabilities of data and technology for their unique goals.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<section id="contact" class="contact">
    <h1 class="heading">get in touch</h1>
    <div class="row">
        <div class="content">
            <p>Whether you're a community seeking technological solutions, a business aiming to leverage data for growth, <br />or an individual passionate about coding and digital literacy, we invite you to join us on this exciting journey.<br /> Together, we can shape a future where the fusion of media and technology empowers and unites us all.</p>
        </div>
    </div>
    <div class="contact-in">
        <div class="contact-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.824352054827!2d39.27573517563499!3d-6.791216266418931!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x185c4c7fcf9a5843%3A0x61cda3b057276e66!2s84%20Kinondoni%20Rd%2C%20Dar%20es%20Salaam!5e0!3m2!1sen!2stz!4v1701061810824!5m2!1sen!2stz" width="100%" height="auto" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <div class="contact-form">
        @if(session('success'))
                <div class="alert alert-success fade in">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong> {{ session('success') }} </strong>
                </div>
                @endif
            <form action="/submit" method="POST" enctype="multipart/form-data">
                    @csrf
                <input type="text" name="name" placeholder="Name" class="contact-form-txt" required>
                <input type="tel" id="phone" name="phone" pattern="[0-9]{10}" required placeholder="Contact number" maxlength="10" class="contact-form-phone">
                <input type="email" name="email" placeholder="Email" class="contact-form-email" required>
                <textarea placeholder="Your Message" name="message" class="contact-form-txtarea" required></textarea>
                <button type="submit" value="Submit" name="submit" class="contact-form-btn">Submit</button>
            </form>
        </div>
    </div>
</section>
@endsection