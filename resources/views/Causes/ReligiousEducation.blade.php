@include('Includes.header')
        
        <!-- Page Header Start -->
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Religious Education And Quran Memorization</h2>
                    </div>
                    <div class="col-12">
                        <a href="{{route('index')}}">Home</a>
                        <a href="">Religious Education And Quran Memorization</a>
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
                            <img src="/assets/img/QuranMemorisation.jpg" />
                            <h2>Religious Education and Quran Memorization </h2>
                            <p class="JustifyAlign">
                                CIDA-Uganda encourages donors to sponsor children studying Islamic religion and those safeguarding the Quran through Quran Memorization. That’s one of the safest ways we can attain Allah’s happiness in this world and even in the hereafter.
                            </p>
                            <p class="JustifyAlign">
                                Allah states, “Wealth and children are the adornment of the life of this world” (18:46) and His statement,” And know that your wealth and your children are only a trial.”(8:28) And his statement, “Oh you who believe! Do not betray Allah and the Messenger, and do not betray your trust while you know it.” (8:27)
                            </p>

                            <p class="JustifyAlign">
                                Khabbaab bin Al Aratt said to a man,” Draw near to Allah as much as you area able, know that you will never draw near to Him with anything more beloved to Him than his Words (the Holy Quran).” (Al Haakim)
                            </p>

                            <p class="JustifyAlign">
                                Ibn Masood said,” Whoever loves the Quran, then he loves Allah and His Messenger.”(At Tabaraanee)
                            </p>

                            <p class="JustifyAlign">
                                Ibn Taymiyyah said,” Concerning seeking to memorize the Quran, it has precedence over much of what the people call knowledge, and is either falsehood or of little benefit.”
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
                                    <a href="#"><img src="/assets/img/causes-1.jpg" alt="Image"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Single Post End-->   


        @include('Includes.footer')
