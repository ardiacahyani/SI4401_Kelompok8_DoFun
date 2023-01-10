@extends('partials.template')

@section('content')
    <!--end-->
    <section class="image-head-wrapper" style="background-image: url('images/carousel3.jpg');">
        <div class="inner-wrapper">
            <h1>Contact Us</h1>
        </div>
    </section>
    <div class="clearfix"></div>


    <section class="contact-block">
        <div class="container">
            <div class="col-md-6 contact-left-block">
                <h3><span>Contact </span>Us</h3>
                <p class="text-right">Bandung <i class="fa fa-map-marker fa-lg"></i></p>
                <p class="text-right"><a href="tel:+1-202-555-0100">0812-3456-7890<i class="fa fa-phone fa-lg"></i></a></p>
                <p class="text-right"><a href="mailto:demo@info.com">abc@gmail.com<i class="fa fa-envelope"></i></a></p>
            </div>
            <div class="col-md-6 contact-form">
                <h3>Kirim <span>Pesan</span></h3>
                <form action="#" method="post">
                    <input type="text" class="form-control" name="Name" placeholder="Name" required="">
                    <input type="email" class="form-control" name="Email" placeholder="Email" required="">
                    <textarea class="form-control" name="Message" placeholder="Message Here...." required=""></textarea>
                    <input type="submit" class="submit-btn" value="Submit">
                </form>
            </div>
            <div class="clearfix"></div>
        </div>
    </section>

    <!---map--->
    <section class="offspace-70">
        <div class="map">
            <div class="container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.3074993477917!2d107.62949135040758!3d-6.973001670191478!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e9adf177bf8d%3A0x437398556f9fa03!2sUniversitas%20Telkom!5e0!3m2!1sid!2sid!4v1672172746173!5m2!1sid!2sid" width="1150" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>
@endsection