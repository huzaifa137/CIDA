@include('Includes.header')
        
        <!-- Page Header Start -->
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Health Cause</h2>
                    </div>
                    <div class="col-12">
                        <a href="{{route('index')}}">Home</a>
                        <a href="">Health</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->


        <!-- Single Post Start-->
        <div class="single">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="single-content">
                            <img src="/assets/img/HealthSupportBlogDetails.jpg" />
                            <h2>HEALTH PROGRAM: SAVING LIVES</h2>
                            <p class="JustifyAlign">
                                Prophet Muhammad (PBHU) started medical care facilities in the 5th century for treatment and care of wounded soldiers during the war days. This was a significant development in health sector bringing change with service provision.
                            </p>
                            <p class="JustifyAlign">
                                The Prophet (SAW) said, ‘The believers are like one body in their mutual love and affection: if one limb is injured, the rest responds with sleeplessness and fever.’ [Bukhari]. This Hadith is a clear message that we should get concerned about peoples’ health.
                            </p>

                            <p class="JustifyAlign">
                                With the above citations and considering that Health is a human right that every human being deserves to enjoy, CIDA-Uganda through implementation of different approaches, saves lives and gives many people the rare opportunity to see medical professionals. For some, it is even the first time in their lives. CIDA-Uganda is able to serve thousands of individuals by concentrating resources and organizing medical staff to offer treatment to the needy segments of society.
                            </p>
                            
                            <h3>The objectives of the Health Program are:</h3>
                            <p class="JustifyAlign">
                               <strong>1.</strong>  To respect the right to health and to ensure that each poor person enjoys access to health services in all circumstances, these services must meet minimum humanitarian standards. 
                            </p>
                            <p class="JustifyAlign">
                                <strong>2.</strong>  To ensure public health interventions save lives and address the most urgent survival needs. 
                            </p>

                            <h4>The following are the approaches used to implement the Health Program at CIDA-Uganda.</h4>

                            <br>
                            <h5>1.	Mobile Medical Camps</h5>
                            
                            <p class="JustifyAlign">
                                Every six months, CIDA-Uganda conducts two free medical camps that provide  treatment,   prevention education, health talks and awareness, counseling, testing, epilepsy clinics, dental services, hernia operation, cervical cancer screening, eye care, voluntary counseling and testing for HIV, antenatal care, vitamin-A supplementation, and de-worming and other informational programs. Every camp benefits over 2,000 beneficiaries. 
                            </p>

                            <h5>2.	Special Medical Fund/ Save life campaigns</h5>
                            
                            <p class="JustifyAlign">
                                Cardiac illnesses are becoming the most common cause of mortality in Africa. Unfortunately, most families are poor and cannot afford heart surgeries. Therefore, CIDA-Uganda takes up heart surgery campaigns to save lives of the poor. This is done through a special medical fund to cater for the preparation, travel, accommodation, medical bills and upkeep of the patient and that of the caretaker.
                            </p>

                            <p class="JustifyAlign">
                                By donating to our Medical Fund you are ensuring that we can provide vital healthcare services, medicine and equipment to those most in need
                            </p>

                            <h5>3.	Eye Sight Gift/ Cataract Campaign</h5>
                            
                            <p class="JustifyAlign">
                                One of the greatest gifts that Allah blessed with us is the gift of eyes and sight. Imagine living in this world in total darkness!!! Fortunately over 80% of visual impairments can either be prevented or cured. Through the spirit of brotherhood and charity, together with you, we can restore thousands of sights for the blind and it is one of the greatest gifts you can ever serve humanity and Allah at large.
                            </p>

                            <p class="JustifyAlign">
                                By donating to our Medical Fund you are ensuring that we can provide vital healthcare services, medicine and equipment to those most in need.
                            </p>
                           
                        </div>

                        <hr>
                        @include("Includes.RelatedPost")

                        
                    </div>

                    <div class="col-lg-4">
                        <div class="sidebar">
                            <div class="sidebar-widget">
                                <div class="search-widget">
                                    <form>
                                        <input class="form-control" type="text" placeholder="Search Keyword">
                                        <button class="btn"><i class="fa fa-search"></i></button>
                                    </form>
                                </div>
                            </div>

                            @include('Includes.RecentPost')

                            <div class="sidebar-widget">
                                <div class="image-widget">
                                    <a href="#"><img src="/assets/img/HealthSupport.jpg" alt="Image"></a>
                                </div>
                            </div>

                            @include('Includes.FeaturedPost')

                            <div class="sidebar-widget">
                                <div class="image-widget">
                                    <a href="#"><img src="/assets/img/blog-2.jpg" alt="Image"></a>
                                </div>
                            </div>

                            @include('Includes.Catagories')

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Single Post End-->   


        @include('Includes.footer')
