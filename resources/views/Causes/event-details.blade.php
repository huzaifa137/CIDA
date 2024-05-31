@include('Includes.header')
        
        <!-- Page Header Start -->
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>{{$record->title}}</h2>
                    </div>
                    <div class="col-12">
                        <a href="{{route('index')}}">Home</a>
                        <a href="javascript:void(0);">{{$record->title}}</a>
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
                            <img class="image-format" id="pic_bd" src="{{'/public/imageUpload/'.$record->imageUpload}}" >

                            <h2>{{$record->title}}</h2>

                            <p>{{$record->introduction}}</p>                     
                            
                            {!! $record->editorContent !!}
                           
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
