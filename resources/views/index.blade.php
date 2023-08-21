@include('Includes.header')
        <!-- Carousel Start -->
        <div class="carousel">
            <div class="container-fluid">
                <div class="owl-carousel">
                    <div class="carousel-item">
                        <div class="carousel-img">
                            <img src="/assets/img/carousel-1.jpg" alt="Image">
                        </div>
                        <div class="carousel-text">
                            <h1>Let's be kind for children</h1>
                            <p>
                                Lorem ipsum dolor sit amet elit. Phasellus ut mollis mauris. Vivamus egestas eleifend dui ac consequat at lectus in malesuada
                            </p>
                            <div class="carousel-btn">
                                <a class="btn btn-custom" href="">Donate Now</a>
                                <a class="btn btn-custom btn-play" data-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-target="#videoModal">Watch Video</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-img">
                            <img src="/assets/img/carousel-2.jpg" alt="Image">
                        </div>
                        <div class="carousel-text">
                            <h1>Get Involved with helping hand</h1>
                            <p>
                                Morbi sagittis turpis id suscipit feugiat. Suspendisse eu augue urna. Morbi sagittis, orci sodales varius fermentum, tortor
                            </p>
                            <div class="carousel-btn">
                                <a class="btn btn-custom" href="">Donate Now</a>
                                <a class="btn btn-custom btn-play" data-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-target="#videoModal">Watch Video</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-img">
                            <img src="/assets/img/carousel-3.jpg" alt="Image">
                        </div>
                        <div class="carousel-text">
                            <h1>Bringing smiles to millions</h1>
                            <p>
                                Sed ultrices, est eget feugiat accumsan, dui nibh egestas tortor, ut rhoncus nibh ligula euismod quam. Proin pellentesque odio
                            </p>
                            <div class="carousel-btn">
                                <a class="btn btn-custom" href="">Donate Now</a>
                                <a class="btn btn-custom btn-play" data-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-target="#videoModal">Watch Video</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carousel End -->

        <!-- Video Modal Start-->
        <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>        
                        <!-- 16:9 aspect ratio -->
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        <!-- Video Modal End -->
        

        <!-- About Start -->
        <div class="about">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-img" data-parallax="scroll" data-image-src="/assets/img/about.jpg"></div>
                    </div>
                    <div class="col-lg-6">
                        <div class="section-header">
                            <p>Learn About Us</p>
                            <h2>Worldwide non-profit charity organization</h2>
                        </div>
                        <div class="about-tab">
                            <ul class="nav nav-pills nav-justified">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="pill" href="#tab-content-1">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="pill" href="#tab-content-2">Mission</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="pill" href="#tab-content-3">Vision</a>
                                </li>
                            </ul>

                            <div class="tab-content">
                                <div id="tab-content-1" class="container tab-pane active" style="text-align: justify">
                                   <strong> Introduction and Background : </strong>

                                    Center for Islamic Development and Advocacy (CIDA)–Uganda is a Development, Relief and Advocacy NonGovernmental Organization, fully registered and licensed by the Government of Uganda with Reg. No.
                                    INDR153234328NB and NGO Permit No. INDP0004325NB operating across Uganda (East Africa).
                                    CIDA-Uganda specializes in the following thematic programs; Health, Education, Human Rights, Water,
                                    Sanitation and Hygiene, Childcare, Women and Youth Empowerment, Psychosocial Support, Construction of
                                    Mosque and Boreholes.
                                                                    </div>
                                <div id="tab-content-2" class="container tab-pane fade">
                                 <strong>‘Serving Islam for Social Development’</strong>, through a value based system, to help build a better world where people are self-fulfilled as individuals and play a constructive role in society.

                                </div>
                                <div id="tab-content-3" class="container tab-pane fade">
                                    Empowered Communities living on their own with ability to live a descent, desirable, spiritual and dignified life
                                </div>
                            </div>
                        </div>

                        <div class="about-tab">
                            <ul class="nav nav-pills nav-justified">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="pill" href="#tab-content-7">Strategy</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="pill" href="#tab-content-8">Goal</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="pill" href="#tab-content-9">Areas of Focus</a>
                                </li>
                            </ul>

                            <div class="tab-content">
                                <div id="tab-content-7" class="container tab-pane active" style="text-align: justify">
                                  A variety of local-level strategies are developed through mechanisms which are largely ignored by central
                                   government, but which could provide extremely important local pillars for sustainable development. CIDA-Uganda
                                   plays a vital role in mobilizing of local communities for socio- economic development and environmental
                                   conservation.</div>
                                <div id="tab-content-8" class="container tab-pane fade" style="text-align: justify">
                                    Alleviating the immediate basic needs of the poor and needy Ugandans through capacity building, charitable and
                                   spiritual assistance.
                                </div>
                                <div id="tab-content-9" class="container tab-pane fade">
                                    <ul>
                                        <li>Health</li>
                                        <li>Education</li>
                                        <li>Human Rights</li>
                                        <li>Water and Environment</li>
                                        <li>Agriculture</li>
                                        <li>Skills Development</li>
                                        <li>Community Empowerment and Development</li>
                                        <li>Psycho social Support</li>
                                        <li>Community Physical Infrastructures</li>
                                        <li>Emergency Response and Preparedness</li>
                                        <li>Da'awah, Ramadhan and Qurban</li>
                                        <li>Advocacy</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="about-tab">
                            <ul class="nav nav-pills nav-justified">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="pill" href="#tab-content-10">Scope of Work</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="pill" href="#tab-content-11">Philosophy </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="pill" href="#tab-content-12">Approach </a>
                                </li>
                            </ul>

                            <div class="tab-content">
                                <div id="tab-content-10" class="container tab-pane active" style="text-align: justify">
                                    CIDA-Uganda is building strong linkages with international funding agencies, NGOs, and local agencies working
                                    within Uganda. It is undertaking initiatives in all regions of Uganda. CIDA-Uganda enjoys a rich experience of
                                    working in the diverse socio-cultural environment of Uganda and an extensive networking with Districts & Central
                                    Government, civil society institutions and media.</div>
                                <div id="tab-content-11" class="container tab-pane fade" style="text-align: justify">
                                    Sustainable development is a dynamic process posing various needs at different phases of time. These can be dealt
                                    with continuous interventions based on designed frameworks that incorporate the requirements projected by the
                                    communities and with the help of the communities by strategizing for public-private partnership
                                </div>
                                <div id="tab-content-12" class="container tab-pane fade" style="text-align: justify">
                                    CIDA-Uganda adopts a participatory, self-help, self-sustainable approach through community involvement and
                                    formation of volunteer groups in both slums and remote rural areas of Uganda. 
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Service Start -->
        <div class="service">
            <div class="container">
                <div class="section-header text-center">
                    <p>What We Do?</p>
                    <h2>We believe that we can save more lifes with you</h2>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="flaticon-diet"></i>
                            </div>
                            <div class="service-text">
                                <h3>Agriculture</h3>
                                <p style="text-align: justify">CIDA-Uganda holds agricultural workshops around Uganda teaching local Muslims and the community at large how to provide for their nutritional needs. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="flaticon-water"></i>
                            </div>
                            <div class="service-text">
                                <h3>Pure Water</h3>
                                <p class="JustifyAlign">Through our unwavering commitment, we quench more than just thirst – we deliver the essence of life itself, as our CIDAUG tirelessly ensures that every community receives the gift of clean and pure water services</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="flaticon-woman"></i>
                            </div>
                            <div class="service-text">
                                <h3>Health Care</h3>
                                <p class="JustifyAlign">we illuminate the path to a healthier society, intertwining our healthcare services with the aspirations of a community united by well-being, thus crafting a luminous legacy of care, empowerment, and enduring positive change.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="flaticon-education"></i>
                            </div>
                            <div class="service-text">
                                <h3>Best Education</h3>
                                <p class="JustifyAlign">Within CIDA, education becomes a transformative journey, where the compass of knowledge guides individuals from all walks of life towards the boundless horizons of opportunity, igniting a collective brilliance that illuminates not just minds, but entire communities.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="flaticon-home"></i>
                            </div>
                            <div class="service-text">
                                <h3>Residence Facilities</h3>
                                <p class="JustifyAlign">Embodying the essence of comfort and security, our organization's residence facility services cradle the aspirations of the community, providing a haven where dreams take root, fostering an environment where every individual can flourish and contribute to a shared tapestry of belonging and progress.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="flaticon-social-care"></i>
                            </div>
                            <div class="service-text">
                                <h3>Human Rights</h3>
                                <p class="JustifyAlign">In the symphony of justice, CIDA human rights services compose a powerful melody of empowerment, tirelessly championing the rights and dignity of every individual, harmonizing the chorus of equality and freedom to create a society where every voice is heard and honored.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="flaticon-charity"></i>
                            </div>
                            <div class="service-text">
                                <h3>Community Empowerment</h3>
                                <p class="JustifyAlign">With in CIDA we do forge partnerships, inspire leadership, and ignite a collective spirit, sculpting a future where every member of society becomes a beacon of positive change, illuminating pathways to lasting prosperity.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="flaticon-healthcare"></i>
                            </div>
                            <div class="service-text">
                                <h3>Psycho social Support</h3>
                                <p class="JustifyAlign"> we mend not only fractured hearts but also weave the threads of resilience, restoring the human spirit with empathy and care, nurturing a society where emotional well-being flourishes as the cornerstone of strength and hope.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="flaticon-home"></i>
                            </div>
                            <div class="service-text">
                                <h3>Community Physical Infrastructures</h3>
                                <p class="JustifyAlign">We lay the foundations of progress, crafting pathways, structures, and spaces that serve as tangible testaments to the potential of collective vision, creating a landscape where possibilities flourish and futures are transformed.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="flaticon-donation"></i>
                            </div>
                            <div class="service-text">
                                <h3>Emergency Response and Preparedness</h3>
                                <p class="JustifyAlign">We emerge as the beacons of resilience, ready to navigate the storm of uncertainty with unwavering commitment, ensuring that society finds solace and security amidst chaos, embodying a steadfast promise to safeguard lives and rebuild hope.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="flaticon-kindness"></i>
                            </div>
                            <div class="service-text">
                                <h3>Dawah, Ramadhan and Qurban</h3>
                                <p class="JustifyAlign">we illuminate hearts with the light of faith, weave the tapestry of unity during Ramadan, and extend the blessings of Qurban, fostering a society where spirituality, compassion, and shared sacrifice converge to enrich lives and uplift souls.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="flaticon-education"></i>
                            </div>
                            <div class="service-text">
                                <h3>Advocacy</h3>
                                <p class="JustifyAlign"> we become the resounding voice of the change, we are tirelessly championing the causes that shape a more just and equitable society, illuminating the path towards transformation, and empowering every individual to participate in a symphony of progress that reverberates across generations.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->
        
        
        <!-- Facts Start -->
        <div class="facts" data-parallax="scroll" data-image-src="/assets/img/facts.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="facts-item">
                            <i class="flaticon-social-care"></i>
                            <div class="facts-text">
                                <h3 class="facts-plus" data-toggle="counter-up">20000</h3>
                                <p>Vulnerables</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="facts-item">
                            <i class="flaticon-charity"></i>
                            <div class="facts-text">
                                <h3 class="facts-plus" data-toggle="counter-up">400</h3>
                                <p>Volunteers</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="facts-item">
                            <i class="flaticon-kindness"></i>
                            <div class="facts-text">
                                <h3 class="facts-dollar" data-toggle="counter-up">50000</h3>
                                <p>Our Goal</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="facts-item">
                            <i class="flaticon-donation"></i>
                            <div class="facts-text">
                                <h3 class="facts-dollar" data-toggle="counter-up">5000</h3>
                                <p>Raised</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Facts End -->
        
        
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
                          <a href="{{route('Building-Mosques')}}">  <img src="/assets/img/BuildingMosques1.jpg" alt="Image"></a>
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
                          <a href="{{route('Building-Mosques')}}">  <h3>Building Mosques</h3></a>
                            <p class="JustifyAlign">CIDA-Uganda aims at establishment of Mosques to enable Muslims have adequate places for worship especially in rural areas.</p>
                        </div>
                        <div class="causes-btn">
                            <a href="{{route('Building-Mosques')}}" class="btn btn-custom">Learn More</a>
                            <a href="{{route('Building-Mosques')}}" class="btn btn-custom">Donate Now</a>
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
                            <a href="{{route('Agriculture')}}"><img src="/assets/img/Agriculture.jpg" alt="Image"></a>
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
                           <a href="{{route('Agriculture')}}"> <h3>Agriculture</h3></a>
                            <p class="JustifyAlign">CIDA holds agricultural workshops around Uganda teaching local Muslims how to provide for their nutritional needs</p>
                        </div>
                        <div class="causes-btn">
                            <a href="{{route('Agriculture')}}" class="btn btn-custom">Learn More</a>
                            <a href="{{route('Agriculture')}}" class="btn btn-custom">Donate Now</a>
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
                           <a href="{{route('Relief')}}"> <h3>Relief Program</h3></a>
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
                            <a href="{{route('ReligiousEducation')}}"></a><h3>Quran Memorization</h3>
                            <p class="JustifyAlign">CIDA-Uganda encourages donors to sponsor children studying Islamic religion and those safeguarding the Quran through Quran Memorization.</p>
                        </div>
                        <div class="causes-btn">
                            <a href="{{route('ReligiousEducation')}}" class="btn btn-custom">Learn More</a>
                            <a href="{{route('ReligiousEducation')}}" class="btn btn-custom">Donate Now</a>
                        </div>
                    </div>
                    <div class="causes-item">
                        <div class="causes-img">
                          <a href="{{route('DAAWAH-RAMADAN-AND-QURBAN')}}">  <img src="/assets/img/RamadhanKit.jpg" alt="Image"></a>
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
                          <a href="{{route('DAAWAH-RAMADAN-AND-QURBAN')}}">  <h3>Da’awah, Ramadan AND Qurban</h3></a>
                            <p class="JustifyAlign">A component da’awah program as a way of calling, conveying and inviting people towards the message of Islam.</p>
                        </div>
                        <div class="causes-btn">
                            <a href="{{route('DAAWAH-RAMADAN-AND-QURBAN')}}" class="btn btn-custom">Learn More</a>
                            <a href="{{route('DAAWAH-RAMADAN-AND-QURBAN')}}" class="btn btn-custom">Donate Now</a>
                        </div>
                    </div>
                    <div class="causes-item">
                        <div class="causes-img">
                           <a href="{{route('Economic-Empowerment')}}"> <img src="/assets/img/EconomicEmpowerment.jpg" alt="Image"></a>
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
                           <a href="{{route('Economic-Empowerment')}}"> <h3>Economic Empowerment</h3></a>
                            <p class="JustifyAlign">Involves providing people, usually disadvantaged women, men, youths and people with Disabilities (PWDs) with the required training and skills.</p>
                        </div>
                        <div class="causes-btn">
                            <a href="{{route('Economic-Empowerment')}}" class="btn btn-custom">Learn More</a>
                            <a href="{{route('Economic-Empowerment')}}" class="btn btn-custom">Donate Now</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Causes End -->
        
        
        <!-- Donate Start -->
        <div class="donate" data-parallax="scroll" data-image-src="/assets/img/donate.jpg">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="donate-content">
                            <div class="section-header">
                                <p>Donate Now</p>
                                <h2>Let's donate to needy people for better lives</h2>
                            </div>
                            <div class="donate-text">
                                <p class="JustifyAlign">
                                    Your generosity has the power to ignite a spark of hope in the lives of the less fortunate. Join hands with us at CIDA as we endeavor to turn compassion into action, weaving a tapestry of support that uplifts and empowers the needy, one heartfelt donation at a time.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="donate-form">
                            <form>
                                
                                <div>
                                    <button class="btn btn-custom" type="submit">Donate Now</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Donate End -->
        
        
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
                            <a href="{{route('Health')}}"><img src="/assets/img/event-1.jpg" alt="Image"></a>
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
                                    <a href="{{route('Health')}}" class="btn btn-custom" href="">Join Now</a>
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
                                   <a href="{{route('Building-Mosques')}}"> <h3>Building Mosques</h3></a>
                                    <p class="JustifyAlign">CIDA aims at the establishment of Mosques to enable Muslims have adequate places for worship especially in rural areas who cannot simply afford building mosques.</p>
                                    <a class="btn btn-custom" href="{{route('Building-Mosques')}}">Join Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Event End -->


        <!-- Volunteer Start -->
        <div class="volunteer" data-parallax="scroll" data-image-src="/assets/img/volunteer.jpg">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <div class="volunteer-form">
                            <form>
                                <div class="control-group">
                                    <input type="text" class="form-control" placeholder="Name" required="required" />
                                </div>
                                <div class="control-group">
                                    <input type="email" class="form-control" placeholder="Email" required="required" />
                                </div>
                                <div class="control-group">
                                    <textarea class="form-control" placeholder="Why you want to become a volunteer?" required="required"></textarea>
                                </div>
                                <div>
                                    <button class="btn btn-custom" type="submit">Become a volunteer</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="volunteer-content">
                            <div class="section-header">
                                <p>Become A Volunteer</p>
                                <h2>Let’s make a difference in the lives of others</h2>
                            </div>
                            <div class="volunteer-text">
                                <p class="JustifyAlign">
                                    Embrace the extraordinary journey of making a difference – become a guiding light of change with us at CIDA. By volunteering your time and heart, you'll join a community that passionately transforms lives, creating ripples of kindness that reach far beyond, touching the hearts of the needy with every selfless act.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Volunteer End -->
        

        <!-- Contact Start -->
        <div class="contact">
            <div class="container">
                <div class="section-header text-center">
                    <p>Get In Touch</p>
                    <h2>Contact us directly</h2>
                </div>
                <div class="contact-img">
                    <img src="/assets/img/contact.jpg" alt="Image">
                </div>
                <div class="contact-form">
                        <div id="success"></div>
                        <form name="sentMessage" id="contactForm" novalidate="novalidate">
                            <div class="control-group">
                                <input type="text" class="form-control" id="name" placeholder="Your Name" required="required" data-validation-required-message="Please enter your name" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="email" class="form-control" id="email" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="text" class="form-control" id="subject" placeholder="Subject" required="required" data-validation-required-message="Please enter a subject" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <textarea class="form-control" id="message" placeholder="Message" required="required" data-validation-required-message="Please enter your message"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div>
                                <button class="btn btn-custom" type="submit" id="sendMessageButton">Send Message</button>
                            </div>
                        </form>
                    </div>
            </div>
        </div>
        <!-- Contact End -->


        <!-- Blog Start -->
        <div class="blog">
            <div class="container">
                <div class="section-header text-center">
                    <p>Our Blog</p>
                    <h2>Latest news & articles directly from our blog</h2>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="blog-item">
                            <div class="blog-img">
                               <a href="{{route('Health')}}"> <img src="/assets/img/HealthSupport.jpg" alt="Image"></a>
                            </div>
                            <div class="blog-text">
                                <h3><a href="{{route('Health')}}">Health</a></h3>
                                <p class="JustifyAlign">Through implementation of different approaches, we saves lives and gives many people the opportunity to see medical professionals. </p>

                            </div>
                            <div class="blog-meta">
                                <p><i class="fa fa-user"></i><a href="">Admin</a></p>
                                <p><i class="fa fa-comments"></i><a href="">15 Comments</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog-item">
                            <div class="blog-img">
                                <a href="{{route('Relief')}}"><img src="/assets/img/causes-4.jpg" alt="Image"></a>
                            </div>
                            <div class="blog-text">
                                <h3><a href="{{route('Relief')}}">Relief Program</a></h3>
                                <p class="JustifyAlign">We define Relief as financial or practical assistance given to those in special need or difficulty. Helping against catastrophes or difficulties.</p>
                            </div>
                            <div class="blog-meta">
                                <p><i class="fa fa-user"></i><a href="">Admin</a></p>
                                <p><i class="fa fa-comments"></i><a href="">15 Comments</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog-item">
                            <div class="blog-img">
                              <a href="{{route('Building-Mosques')}}">  <img src="/assets/img/BuildingMosques1.jpg" alt="Image"></a>
                            </div>
                            <div class="blog-text">
                                <h3><a href="{{route('Building-Mosques')}}">Building Mosques</a></h3>
                                <p class="JustifyAlign">CIDA-Uganda aims at establishment of Mosques to enable Muslims have adequate places for worship especially in rural areas.</p>
                            </div>
                            <div class="blog-meta">
                                <p><i class="fa fa-user"></i><a href="">Admin</a></p>
                                <p><i class="fa fa-comments"></i><a href="">15 Comments</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog End -->
        
        @include('Includes.footer')

      