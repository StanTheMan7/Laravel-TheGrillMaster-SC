<section id="warmWelcome" class="top-border-me">
    <div class="section-inner">

        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb100">                        
                    <h2 class="section-heading">{{ ($about[0]->titre) }}</h2>
                    <hr class="thin-hr">
                    <h3 class="section-subheading secondary-font">{{ ($titre[1]->titre) }}</h3>
                    
                </div>
            </div>
        </div>
        <div>
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-md-offset-1">
                        <h2 class="mb50">{{ ($warmWelcome[0]->titre) }}</h2>
                        <p class="lead">{{ ($warmWelcome[0]->description_grand) }}</p>
                        <p>{{ ($warmWelcome[0]->description_petit) }}</p>
                    </div>

                    <div class="col-md-5">
                        <h2 class="mb50">{{ ($warmWelcome[1]->titre) }}</span></h2>
                        <p class="lead">{{ ($warmWelcome[1]->description_grand) }}</p>
                        <p>{{ ($warmWelcome[1]->description_petit) }}</p>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>
