@include('User.assets.header')

        <!----------------------------------------------Services------------------------------------------>
        <section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Services</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                <div class="row text-center">
                    @foreach($services as $service)
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <div class="timeline-image"><img height="200px" class="rounded-circle img-fluid" src="{{$service->icon  }}" alt="" /></div>
                        </span>
                        <h4 class="my-3">{{$service->name  }}</h4>
                        <p class="text-muted">{{$service->description}}</p>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-------------------------------------------------Portfolio Grid---------------------------------->
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Portfolio</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>

                <div class="row">
                    @foreach($portfolios as $portfolio)
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="{{asset($portfolio->icon)}}" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">{{$portfolio->name}}</div>
                                <div class="portfolio-caption-subheading text-muted">{{$portfolio->slug}}</div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>


        <!-------------------------------------------------About-------------------------------------------->
        <section class="page-section" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">About</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                <ul class="timeline">
                    @foreach($abouts as $about)
                    <li @if($loop->iteration %2 ==0) class="timeline-inverted" @endif>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{asset($about->icon)}}" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>{{($about->date)}}</h4>
                                <h4 class="subheading">{{($about->name)}}</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">{{($about->description)}}</p></div>
                        </div>
                    </li>
                    @endforeach

                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <h4>
                                Be Part
                                <br />
                                Of Our
                                <br />
                                Story!
                            </h4>
                        </div>
                    </li>
                </ul>
            </div>
        </section>

        <!--------------------------------------------------Team-------------------------------------------->
        <section class="page-section bg-light" id="team">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Our Amazing Team</h2>
            <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
        </div>

        <div class="row">
            @foreach($teams as $team)
            <div class="col-lg-4">
                <div class="team-member">
                    <img class="mx-auto rounded-circle" src="{{asset($team->image)}}" alt="..." />
                    <h4>{{$team->name}}</h4>
                    <p class="text-muted">{{$team->title}}</p>
                    <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Parveen Anand Twitter Profile"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Parveen Anand Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Parveen Anand LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            @endforeach

        </div>

        <div class="row">
            <div class="col-lg-8 mx-auto text-center"><p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p></div>
        </div>
    </div>
</section>


        <!----------------------------------------------------Footer---------------------------------->
@include('User.assets.footer')
