@include('Includes.header')
        
        <!-- Page Header Start -->
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Popular Causes</h2>
                    </div>
                    <div class="col-12">
                        <a href="{{route('index')}}">Home</a>
                        <a href="">Causes</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->
        
        <!-- Causes Start -->
        <div class="causes">
            <div class="container">
                <div class="section-header text-center">
                    <p>Popular Causes</p>
                    <h2>Let's know about charity causes around the world</h2>
                </div>
                <div class="owl-carousel causes-carousel">
                    <div class="causes-item">
                        <div class="causes-img">
                           <a href="{{route('Building-Mosques')}}"> <img src="/assets/img/BuildingMosques1.jpg" alt="Image"></a>
                        </div>
                        <div class="causes-progress">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">
                                    <span>15%</span>
                                </div>
                            </div>
                            <div class="progress-text">
                                <p><strong>Raised:</strong> $1500</p>
                                <p><strong>Goal:</strong> $10000</p>
                            </div>
                        </div>
                        <div class="causes-text">
                           <a href="{{route('Building-Mosques')}}"> <h3>Building Mosques</h3></a>
                            <p class="JustifyAlign">CIDA-Uganda aims at establishment of Mosques to enable Muslims have adequate places for worship especially in rural areas.</p>
                        </div>
                        <div class="causes-btn">
                            <a href="{{route('Building-Mosques')}}" class="btn btn-custom">Learn More</a></a>
                            <a href="{{route('Building-Mosques')}}" class="btn btn-custom">Donate Now</a></a>
                        </div>
                    </div>
                    <div class="causes-item">
                        <div class="causes-img">
                           <a href="{{route('Health')}}"> <img src="/assets/img/HealthSupport.jpg" alt="Image"></a>
                        </div>
                        <div class="causes-progress">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                    <span>25%</span>
                                </div>
                            </div>
                            <div class="progress-text">
                                <p><strong>Raised:</strong> $2000</p>
                                <p><strong>Goal:</strong> $10000</p>
                            </div>
                        </div>
                        <div class="causes-text">
                           <a href="{{route('Health')}}"> <h3>Health</h3></a>
                            <p class="JustifyAlign">Through implementation of different approaches, we saves lives and gives many people the opportunity to see medical professionals. </p>
                        </div>
                        <div class="causes-btn">
                            <a href="{{route('Health')}}" class="btn btn-custom">Learn More</a>
                            <a href="{{route('Health')}}" class="btn btn-custom">Donate Now</a>
                        </div>
                    </div>
                    <div class="causes-item">
                        <div class="causes-img">
                           <a href="{{route('Agriculture')}}"> <img src="/assets/img/Agriculture.jpg" alt="Image"></a>
                        </div>
                        <div class="causes-progress">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">
                                    <span>15%</span>
                                </div>
                            </div>
                            <div class="progress-text">
                                <p><strong>Raised:</strong> $1500</p>
                                <p><strong>Goal:</strong> $10000</p>
                            </div>
                        </div>
                        <div class="causes-text">
                          <a href="{{route('Agriculture')}}">  <h3>Agriculture</h3></a>
                            <p class="JustifyAlign">CIDA holds agricultural workshops around Uganda teaching local Muslims how to provide for their nutritional needs</p>
                        </div>
                        <div class="causes-btn">
                            <a class="btn btn-custom">Learn More</a>
                            <a class="btn btn-custom">Donate Now</a>
                        </div>
                    </div>
                    <div class="causes-item">
                        <div class="causes-img">
                           <a href="{{route('Relief')}}"> <img src="/assets/img/causes-4.jpg" alt="Image"></a>
                        </div>
                        <div class="causes-progress">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                    <span>10%</span>
                                </div>
                            </div>
                            <div class="progress-text">
                                <p><strong>Raised:</strong> $1000</p>
                                <p><strong>Goal:</strong> $10000</p>
                            </div>
                        </div>
                        <div class="causes-text">
                          <a href="{{route('Relief')}}">  <h3>Relief Program</h3></a>
                            <p class="JustifyAlign">We define Relief as financial or practical assistance given to those in special need or difficulty. Helping against catastrophes or difficulties.</p>
                        </div>
                        <div class="causes-btn">
                            <a href="{{route('Relief')}}" class="btn btn-custom">Learn More</a>
                            <a href="{{route('Relief')}}" class="btn btn-custom">Donate Now</a>
                        </div>
                    </div>
                </div>

                <div class="owl-carousel causes-carousel mt-5">
                    
                    <div class="causes-item">
                        <div class="causes-img">
                           <a href="{{route('Relief')}}"> <img src="/assets/img/causes-4.jpg" alt="Image"></a>
                        </div>
                        <div class="causes-progress">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                    <span>10%</span>
                                </div>
                            </div>
                            <div class="progress-text">
                                <p><strong>Raised:</strong> $1000</p>
                                <p><strong>Goal:</strong> $10000</p>
                            </div>
                        </div>
                        <div class="causes-text">
                          <a href="{{route('Relief')}}">  <h3>Relief Program</h3></a>
                            <p class="JustifyAlign">We define Relief as financial or practical assistance given to those in special need or difficulty. Helping against catastrophes or difficulties.</p>
                        </div>
                        <div class="causes-btn">
                            <a href="{{route('Relief')}}" class="btn btn-custom">Learn More</a>
                            <a href="{{route('Relief')}}" class="btn btn-custom">Donate Now</a>
                        </div>
                    </div>

                    <div class="causes-item">
                        <div class="causes-img">
                           <a href="{{route('ReligiousEducation')}}"> <img src="/assets/img/causes-1.jpg" alt="Image"></a>
                        </div>
                        <div class="causes-progress">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">
                                    <span>15%</span>
                                </div>
                            </div>
                            <div class="progress-text">
                                <p><strong>Raised:</strong> $1500</p>
                                <p><strong>Goal:</strong> $10000</p>
                            </div>
                        </div>
                        <div class="causes-text">
                            <a href="{{route('ReligiousEducation')}}"><h3>Quran Memorization</h3></a>
                            <p class="JustifyAlign">CIDA-Uganda encourages donors to sponsor children studying Islamic religion and those safeguarding the Quran through Quran Memorization.</p>
                        </div>
                        <div class="causes-btn">
                            <a href="{{route('ReligiousEducation')}}" class="btn btn-custom">Learn More</a>
                            <a href="{{route('ReligiousEducation')}}" class="btn btn-custom">Donate Now</a>
                        </div>
                    </div>
                    <div class="causes-item">
                        <div class="causes-img">
                            <a href="{{route('DAAWAH-RAMADAN-AND-QURBAN')}}"><img src="/assets/img/RamadhanKit.jpg" alt="Image"></a>
                        </div>
                        <div class="causes-progress">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                    <span>25%</span>
                                </div>
                            </div>
                            <div class="progress-text">
                                <p><strong>Raised:</strong> $2000</p>
                                <p><strong>Goal:</strong> $10000</p>
                            </div>
                        </div>
                        <div class="causes-text">
                            <a href="{{route('DAAWAH-RAMADAN-AND-QURBAN')}}"><h3>Da’awah, Ramadan AND Qurban</h3></a>
                            <p class="JustifyAlign">A component da’awah program as a way of calling, conveying and inviting people towards the message of Islam.</p>
                        </div>
                        <div class="causes-btn">
                            <a href="{{route('DAAWAH-RAMADAN-AND-QURBAN')}}" class="btn btn-custom">Learn More</a>
                            <a href="{{route('DAAWAH-RAMADAN-AND-QURBAN')}}" class="btn btn-custom">Donate Now</a>
                        </div>
                    </div>


                    @foreach ($allCauses as $Cause)
                        
                    <div class="causes-item">
                        <div class="causes-img">
                           {{-- <a href="{{route('Economic-Empowerment')}}"> <img src="/assets/img/EconomicEmpowerment.jpg" alt="Image"></a> --}}

                           <img class="image-format" id="pic_bd" src="{{'/public/imageUpload/'.$Cause->imageUpload}}" >

                        </div>
                        <div class="causes-progress">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">
                                    <span>15%</span>
                                </div>
                            </div>
                            <div class="progress-text">
                                <p><strong>Raised:</strong> {{$Cause->raised}}</p>
                                <p><strong>Goal:</strong> {{$Cause->goal}}</p>
                            </div>
                        </div>
                        <div class="causes-text">
                            <a href="{{route('Economic-Empowerment')}}"><h3>Economic Empowerment</h3></a>
                            <p class="JustifyAlign">Involves providing people, usually disadvantaged women, men, youths and people with Disabilities (PWDs) with the required training and skills.</p>
                        </div>
                        <div class="causes-btn">
                            <a href="{{route('Economic-Empowerment')}}" class="btn btn-custom">Learn More</a>
                            <a href="{{route('Economic-Empowerment')}}" class="btn btn-custom">Donate Now</a>
                        </div>
                    </div>

                    @endforeach
                </div>

                <div class="owl-carousel causes-carousel mt-5">

                    @foreach ($allCauses as $Cause)
                        
                    <div class="causes-item">
                        <div class="causes-img">
                           <a href="{{url('cause-details/'.$Cause->id)}}"> <img class="image-format" id="pic_bd" src="{{'/public/imageUpload/'.$Cause->imageUpload}}" ></a>                           
                        </div>
                        <div class="causes-progress">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">
                                    <span>15%</span>
                                </div>
                            </div>
                            <div class="progress-text">
                                <p><strong>Raised:</strong> {{$Cause->raised}}</p>
                                <p><strong>Goal:</strong> {{$Cause->goal}}</p>
                            </div>
                        </div>
                        <div class="causes-text">
                            <a href="{{url('cause-details/'.$Cause->id)}}"><h3>{{$Cause->title}}</h3></a>
                            <p class="JustifyAlign">{{$Cause->introduction}}</p>
                        </div>
                        <div class="causes-btn">
                            <a href="{{url('cause-details/'.$Cause->id)}}" class="btn btn-custom">Learn More</a>
                            <a href="javascript:void(0);" class="btn btn-custom">Donate Now</a>
                        </div>
                    </div>

                    @endforeach


                </div>



            </div>
        </div>
        <!-- Causes End -->


        

        @include('Includes.footer')