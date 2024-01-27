@extends('layouts.master')

@section('content')

<section id="about" class="about">
        <h1 class="heading">about us</h1>
        <div class="row">
            <div class="content">
                <p> We are a pioneering female-owned media and technology company in Tanzania, <br /> dedicated to driving positive change within the industry. Through innovation and effective solutions, <br /> we aim to create a more inclusive landscape for all.</p>
                <p>Driven by a mission to foster meaningful transformation, Kike Africa is <br />determined to leave an indelible mark on the media and technology landscape in Tanzania.</p>
                <a href="/contact" class="mt-2 mb-2"><button class="btn">Get in touch</button></a>
            </div>
        </div>
    </section>

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
@endsection