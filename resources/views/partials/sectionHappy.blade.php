<section class="dark-wrapper opaqued parallax" data-parallax="scroll" data-image-src="{{asset('img/bg/bg10.jpg" data-speed="')}}0.8">
    <div class="section-inner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb100">
                    <h2 class="section-heading">{{ ($titre[4]->titre) }}</h2>
                    <hr class="thin-hr">
                    <h3 class="section-subheading secondary-font">{{ ($titre[5]->titre) }}</h3>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <ul class="owl-carousel-paged testimonial-owl wow fadeIn list-unstyled" data-items="1" data-items-desktop="[1200,1]" data-items-desktop-small="[980,1]" data-items-tablet="[768,1]" data-items-mobile="[479,1]">
                        <li>
                            <div class="row">
                                <div class="col-xs-8 col-xs-offset-2 item-caption">
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <img src="{{asset('img/team/small1.jpg')}}" class="img-responsive testimonial-author" alt="">
                                        </div>
                                        <div class="col-sm-10">                                                
                                            <h4>{{ ($happyCustomer[0]->titre) }}</h4>
                                            <p>{{ ($happyCustomer[0]->description) }}</p>
                                            <ul class="list-inline">
                                                <li><i class="{{ ($happyCustomer[0]->icone) }}"></i></li>
                                                <li><i class="{{ ($happyCustomer[0]->icone) }}"></i></li>
                                                <li><i class="{{ ($happyCustomer[0]->icone) }}"></i></li>
                                                <li><i class="{{ ($happyCustomer[0]->icone) }}"></i></li>
                                                <li><i class="{{ ($happyCustomer[0]->icone) }}"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="row">
                                <div class="col-xs-8 col-xs-offset-2 item-caption">
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <img src="{{asset('img/team/small1.jpg')}}" class="img-responsive testimonial-author" alt="">
                                        </div>
                                        <div class="col-sm-10">                                                
                                            <h4>{{ ($happyCustomer[0]->titre) }}</h4>
                                            <p>{{ ($happyCustomer[0]->description) }}</p>
                                            <ul class="list-inline">
                                                <li><i class="{{ ($happyCustomer[0]->icone) }}"></i></li>
                                                <li><i class="{{ ($happyCustomer[0]->icone) }}"></i></li>
                                                <li><i class="{{ ($happyCustomer[0]->icone) }}"></i></li>
                                                <li><i class="{{ ($happyCustomer[0]->icone) }}"></i></li>
                                                <li><i class="{{ ($happyCustomer[0]->icone) }}"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
