<section class="dark-wrapper opaqued parallax" data-parallax="scroll" data-image-src="{{asset('img/bg/bg1.jpg')}}" data-speed="0.8">
    <div class="section-inner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb100">
                    <h2 class="section-heading">{{ ($titre[6]->titre) }}</h2>
                    <hr class="thin-hr">
                    <h3 class="section-subheading secondary-font">{{ ($titre[5]->titre) }}</h3>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row mb100"> 
                <!-- Address, Phone & Email -->
                <div class="col-md-5 col-md-offset-1 wow fadeIn">
                    <h3 class="mb30">Address</h3>
                    <p class="lead">{{ ($book_adresse[0]->building) }}</p>
                    <p class="lead">{{ ($book_adresse[0]->adresse) }}</p>
                    <p class="lead">{{ ($book_adresse[0]->telephone) }}<br>
                </div>

                <div class="col-md-5 col-sm-7 wow fadeIn">
                    <h3 class="mb30">Opening Times</h3>
                    <div class="row">
                      <div class="col-xs-5">
                        <ul class="list-unstyled weekdays">
                          <li>{{ ($book_heure[0]->jour) }}</li>
                          <li>{{ ($book_heure[1]->jour) }}</li>
                          <li>{{ ($book_heure[2]->jour) }}</li>
                          <li>{{ ($book_heure[3]->jour) }}</li>
                          <li>{{ ($book_heure[4]->jour) }}</li>
                          <li>{{ ($book_heure[5]->jour) }}</li>
                          <li>{{ ($book_heure[6]->jour) }}</li>
                        </ul>
                      </div>
                      <div class="col-xs-7">
                        <ul class="list-unstyled">
                          <li>{{ ($book_heure[0]->heure) }}</li>
                          <li>{{ ($book_heure[1]->heure) }}</li>
                          <li>{{ ($book_heure[2]->heure) }}</li>
                          <li>{{ ($book_heure[3]->heure) }}</li>
                          <li>{{ ($book_heure[4]->heure) }}</li>
                          <li>{{ ($book_heure[5]->heure) }}</li>
                          <li>{{ ($book_heure[6]->heure) }}</li>
                        </ul>
                      </div>
                    </div>
                </div>                
            </div>

            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="row">
                        <div id="message" class="col-md-12"></div>
                        <form method="post" action="sendemail.php" id="contactform" class="form-group main-contact-form col-md-12 wow fadeIn" data-wow-delay="0.2s">
                            <input type="text" class="form-control col-md-4" name="name" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name." />
                            <input type="text" class="form-control col-md-4" name="email" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address." />
                            <input type="text" class="form-control col-md-4" name="website" placeholder="Your URL *" id="website" required data-validation-required-message="Please enter your web address." />
                            <textarea name="comments" class="form-control" id="comments" placeholder="Your Message *" required data-validation-required-message="Please enter a message."></textarea>
                            <input class="btn btn-primary btn-white mt30 pull-right" type="submit" name="submit" value="Submit" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>