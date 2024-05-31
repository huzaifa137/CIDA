@include('Includes.header')
        
        <!-- Page Header Start -->
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Upcoming Events</h2>
                    </div>
                    <div class="col-12">
                        <a href="{{route('index')}}">Home</a>
                        <a href="">Events</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->
        
        
        <!-- Event Start -->
        <div class="event">
            <div class="container">
                <div class="section-header text-center">
                    <p>Upcoming Events</p>
                    <h2>Be ready for our upcoming charity events</h2>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="event-item">
                          <a href="Health">  <img src="/assets/img/event-1.jpg" alt="Image"></a>
                            <div class="event-content">
                                <div class="event-meta">
                                    <p><i class="fa fa-calendar-alt"></i>25-Nov-23</p>
                                    <p><i class="far fa-clock"></i>8:00 - 5:00</p>
                                    <p><i class="fa fa-map-marker-alt"></i>Jinja</p>
                                </div>
                                <div class="event-text">
                                   <a href="{{route('Health')}}"> <h3>Providing Health Services</h3></a>
                                    <p class="JustifyAlign">
                                        Through implementation of different approaches, we saves lives and gives many people the opportunity to see medical professionals.
                                    </p>
                                    <a class="btn btn-custom" href="{{route('Health')}}">Join Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="event-item">
                            <a href="{{route('Building-Mosques')}}"><img src="/assets/img/event-2.jpg" alt="Image"></a> 
                            <div class="event-content">
                                <div class="event-meta">
                                    <p><i class="fa fa-calendar-alt"></i>27-Dec-23</p>
                                    <p><i class="far fa-clock"></i>8:00 - 3:00</p>
                                    <p><i class="fa fa-map-marker-alt"></i>Adjumani</p>
                                </div>
                                <div class="event-text">
                                    <a href="{{route('Building-Mosques')}}"><h3>Building Mosques</h3></a>  
                                    <p class="JustifyAlign">CIDA aims at the establishment of Mosques to enable Muslims have adequate places for worship especially in rural areas who cannot simply afford building mosques.</p>
                                    <a class="btn btn-custom" href="{{route('Building-Mosques')}}">Join Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="event-item">
                          <a href="{{route('Economic-Empowerment')}}">  <img src="/assets/img/EconomicEmpowermentEvent.jpg" alt="Image"> </a>
                            <div class="event-content">
                                <div class="event-meta">
                                    <p><i class="fa fa-calendar-alt"></i>15-Oct-23</p>
                                    <p><i class="far fa-clock"></i>8:00 - 10:00</p>
                                    <p><i class="fa fa-map-marker-alt"></i>Arua</p>
                                </div>
                                <div class="event-text">
                                   <a href="{{route('Economic-Empowerment')}}"> <h3>Economic Empowerment</h3></a>
                                    <p class="JustifyAlign">
                                        We emerge as the beacons of resilience, ready to navigate the storm of uncertainty with unwavering commitment, ensuring that society finds solace and security amidst chaos, embodying a steadfast promise to safeguard lives and rebuild hope.
                                    </p>
                                    <a href="{{route('Economic-Empowerment')}}" class="btn btn-custom" href="">Join Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="event-item">
                           <a href="{{route('Agriculture')}}"> <img src="/assets/img/AgricultureEvent.jpg" alt="Image"></a>
                            <div class="event-content">
                                <div class="event-meta">
                                    <p><i class="fa fa-calendar-alt"></i>27-Dec-23</p>
                                    <p><i class="far fa-clock"></i>8:00 - 3:00</p>
                                    <p><i class="fa fa-map-marker-alt"></i>Adjumani</p>
                                </div>
                                <div class="event-text">
                                  <a href="{{route('Agriculture')}}">  <h3>Providing Agricultural Support</h3></a>
                                    <p class="JustifyAlign">CIDA holds agricultural workshops around Uganda teaching local Muslims and the community at large how to provide for their nutritional needs. Our goal is to empower these individuals to provide for themselves.</p>
                                    <a class="btn btn-custom" href="{{route('Agriculture')}}">Join Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">
                    @foreach ($allEvents as $event)
                    <div class="col-lg-6">
                        <div class="event-item">
                          <a href="{{ url('event-details/'.$event->id)  }}">  <img class="image-format" id="pic_bd" src="{{'/public/imageUpload/'.$event->imageUpload}}" > </a>
                          
                            <div class="event-content">
                                <div class="event-meta">
                                    <p><i class="fa fa-calendar-alt"></i>15-Oct-23</p>
                                    <p><i class="far fa-clock"></i>8:00 - 10:00</p>
                                    <p><i class="fa fa-map-marker-alt"></i>Arua</p>
                                </div>
                                <div class="event-text">
                                   <a href="{{ url('event-details/'.$event->id)  }}"> <h3>{{$event->title}}</h3></a>
                                    <p class="JustifyAlign">
                                        {{$event->introduction}}
                                    </p>
                                    <a href="{{ url('event-details/'.$event->id)  }}" class="btn btn-custom" href="">Join Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <!-- Event End -->


       
        @include('Includes.footer')
        