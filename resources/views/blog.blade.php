@include('Includes.header')
        
        <!-- Page Header Start -->
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Our Blog</h2>
                    </div>
                    <div class="col-12">
                        <a href="{{route('index')}}">Home</a>
                        <a href="">Blog</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->
        
        
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
                              <a href="{{route('Health')}}">  <img src="/assets/img/HealthSupport.jpg" alt="Image"></a>
                            </div>
                            <div class="blog-text">
                                <h3><a href="{{route('Health')}}">Health</h3></a>
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
                               <a href="{{route('Relief')}}"> <img src="/assets/img/causes-4.jpg" alt="Image"></a>
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
                               <a href="{{route('Building-Mosques')}}"> <img src="/assets/img/BuildingMosques1.jpg" alt="Image"></a>
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

                <div class="row">
                    <div class="col-lg-4">
                        <div class="blog-item">
                            <div class="blog-img">
                              <a href="{{route('Agriculture')}}">  <img src="/assets/img/Agriculture.jpg" alt="Image"></a>
                            </div>
                            <div class="blog-text">
                                <h3><a href="{{route('Agriculture')}}">Agriculture</a></h3>
                                <p style="text-align: justify">CIDA-Uganda holds agricultural workshops around Uganda teaching local Muslims and the community at large how to provide for their nutritional needs. </p>

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
                             <a href="{{route('ReligiousEducation')}}"><img src="/assets/img/causes-1.jpg" alt="Image"></a>
                            </div>
                            <div class="blog-text">
                                <h3><a href="{{route('ReligiousEducation')}}">Quran Memorization</a></h3>
                                <p class="JustifyAlign">CIDA-Uganda encourages donors to sponsor children studying Islamic religion and those safeguarding the Quran through Quran Memorization and recitation.</p>
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
                               <a href="{{route('DAAWAH-RAMADAN-AND-QURBAN')}}"> <img src="/assets/img/RamadhanKit.jpg" alt="Image"></a>
                            </div>
                            <div class="blog-text">
                                <h3><a href="{{route('DAAWAH-RAMADAN-AND-QURBAN')}}">Dawah, Ramadhan and Qurban</a></h3>
                                <p class="JustifyAlign">CIDA-Uganda designed the Da’wah component of the program as a way of calling, conveying and inviting people towards the message of Islam.</p>
                            </div>
                            <div class="blog-meta">
                                <p><i class="fa fa-user"></i><a href="">Admin</a></p>
                                <p><i class="fa fa-comments"></i><a href="">15 Comments</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="blog-item">
                            <div class="blog-img">
                             <a href="{{route('Economic-Empowerment')}}">   <img src="/assets/img/EconomicEmpowerment.jpg" alt="Image"></a>
                            </div>
                            <div class="blog-text">
                                <h3><a href="{{route('Economic-Empowerment')}}">Economic Empowerment</a></h3>
                                <p class="JustifyAlign">Through implementation of different approaches, we saves lives and gives many people the opportunity to see medical professionals. </p>

                            </div>
                            <div class="blog-meta">
                                <p><i class="fa fa-user"></i><a href="">Admin</a></p>
                                <p><i class="fa fa-comments"></i><a href="">15 Comments</a></p>
                            </div>
                        </div>
                    </div>
                    
                    
            </div>
        </div>
        <!-- Blog End -->

        @include('Includes.footer')