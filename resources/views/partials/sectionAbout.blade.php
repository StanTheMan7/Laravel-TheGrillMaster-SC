<section id="about" class="top-border-me">
    <div class="section-inner">

        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb100">                        
                    <h2 class="section-heading">{{ ($titre[0]->titre) }}</h2>
                    <hr class="thin-hr">
                    <h3 class="section-subheading secondary-font">{{ ($titre[1]->titre) }}</h3>
                    
                </div>
            </div>
        </div>
        <div>
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-md-offset-1">
                        <h2 class="mb50">{{ ($about[0]->titre) }}</h2>
                        <p class="lead">{{ ($about[0]->description_grand) }}</p>
                        <p>{{ ($about[0]->description_petit) }}</p>
                    </div>

                    <div class="col-md-5">
                        <h2 class="mb50">{{ ($about[1]->titre) }}</span></h2>
                        <p class="lead">{{ ($about[1]->description_grand) }}</p>
                        <p>{{ ($about[1]->description_petit) }}</p>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-6 nopadding-lr dark-wrapper opaqued background-cover left-half" style="background-image: url('{{asset('img/bg/bg10.jpg')}}');">
            <div class="dark-opaqued-half section-inner pad-sides-60 match-height" data-mh="promo-inner">
                <h3 class="mb50">{{ ($steak[0]->titre) }}</h3>
                <p class="lead mb50">{{ ($steak[0]->description) }}</p>
                <div class="spacer-180"></div>
                <p class="mt30"><a href="#contact" class="btn btn-primary btn-red page-scroll">{{ ($steak[0]->bouton) }}</a></p>
            </div>
        </div>

        <div class="col-sm-6 nopadding-lr dark-wrapper opaqued background-cover right-half" style="background-image: url('{{asset('img/bg/bg5.jpg')}}');">
            <div class="dark-opaqued-half section-inner pad-sides-60 match-height text-right" data-mh="promo-inner">
                <h3 class="mb50">{{ ($steak[1]->titre) }}</h3>
                <p class="lead mb50">{{ ($steak[1]->description) }}</p>
                <div class="spacer-180"></div>
                <p class="mt30"><a href="#contact" class="btn btn-primary btn-white page-scroll">{{ ($steak[1]->bouton) }}</a></p>
            </div>
        </div>
    </div>
</div>