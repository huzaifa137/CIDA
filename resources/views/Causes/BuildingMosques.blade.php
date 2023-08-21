@include('Includes.header')
        
        <!-- Page Header Start -->
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>BUILDING MOSQUES Cause</h2>
                    </div>
                    <div class="col-12">
                        <a href="{{route('index')}}">Home</a>
                        <a href="">BUILDING MOSQUES</a>
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
                            <img src="/assets/img/BuildingMosquesBlog.jpg" />
                            <h2>BUILDING MOSQUES</h2>
                            <p class="JustifyAlign">
                                CIDA-Uganda aims at establishment of Mosques to enable Muslims have adequate places for worship especially in rural areas.
                            </p>
                            <p class="JustifyAlign">
                                The Prophet (ﷺ) said, <br> <br>
                                <span style="font-style: italic;font-weight:Bold;">
                                    “Whoever builds a mosque, desiring thereby Allah’s pleasure, Allah builds for him the like of it in paradise.” [Bukhari]
                                </span>
                            </p>
                            
                            <p class="JustifyAlign"> 
                                A great reward for building a mosque is being granted a palace in Jannah. Allah (SWT), our benevolent creator, will reward you for building His house of worship here on earth by building you a house in paradise! Building a mosque helps us spread our deen in this world and brings not only ourselves closer to Allah (SWT) but everyone who enters the mosque as well.
            The Prophet (ﷺ) has told us the reward for building a mosque; we should follow in his footsteps and build masjids for those in need. If you’re looking to build a mosque for Allah’s (SWT) pleasure, you can team up with other donors or build one on your own in Uganda with CIDA-Uganda.
                            </p>

                            <p class="JustifyAlign">The Prophet Muhammad (ﷺ) said, “Whoever relieves the hardship of a believer in this world, Allah will relieve his hardship on the Day of Resurrection. Whoever helps ease one in difficulty, Allah will make it easy for him in this world and in the Hereafter.” [Muslim]</p>
                            <p class="JustifyAlign">There are many poor communities in our ummah which cannot simply afford building mosques of their own or to make necessary repairs or upgrades to their mosques. In these communities, people find themselves setting up for prayer outside in the hot sun or pouring rain, walking miles after miles to go to a neighbouring village’s mosque or praying alone without the benefits of congressional worship.</p>
                            <p class="JustifyAlign">Communal prayer, Spiritual guidance, Islamic education for children and a safe community hub are only a few of the benefits of building a mosque in these communities. When you build a mosque for the less fortunate, you are providing them with a house of worship that will foster their moral and spiritual development for years to come. By building a mosque for those  in need, you are bringing life back to the community.</p>
                            <p class="JustifyAlign">You can start donating towards The Mosque Project today to build a Masjid in a poor community and help our brothers and sister pray in comfort and security. Help yourself in this life and the next by helping others worship today.</p>

                            <h3>Orphanage Center</h3>

                            <p class="JustifyAlign">The main purpose of the proposed project is to provide orphans and other vulnerable children with adequate accommodation, education and better living conditions. As a Childcare Center/Orphanage, CIDA-Uganda shall provide a modern home for these children after being approved by the government authority such as the family protection units at police stations which loom with homeless kids and/or basing on the child’s status or condition. We do emphasize that such children are molded and nurtured under a proper moderate Islamic environment, an avenue for which right and proper morals of life are instilled.</p>
                            <p class="JustifyAlign" style="font-weight: bold">Currently, we do provide care to the vulnerable children in a number of communities across the country within foster homes and other family circles. Due to the expansion of our vision and the need to increase the numbers of orphans in our care, the challenges faced by the kids that we take care of such as;-</p>
                            <p class="JustifyAlign">1.	Broken family circles </p>
                            <p class="JustifyAlign">2.	Un trustworthy child coordinating individuals</p>
                            <p class="JustifyAlign">3.	Un professional and/or unfriendly child guardians</p>
                            <p class="JustifyAlign">4.	Breech of child protection code(s) of conduct, among others</p>

                            <br> 
                            <p class="JustifyAlign">The beneficiaries of this project are the less privileged children such as; the orphans and needy children orphaned due to HIV/AIDS & other illnesses, children from poor families, children victimized by family violence and child abuse, destitute, and other forms of vulnerable children. </p>
                          
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
                                    <a href="#"><img src="/assets/img/BuildingMosques1.jpg" alt="Image"></a>
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
