@include('Includes.header')
        
        <!-- Page Header Start -->
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Agriculture Cause</h2>
                    </div>
                    <div class="col-12">
                        <a href="{{route('index')}}">Home</a>
                        <a href="">Agriculture</a>
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
                            <img src="/assets/img/single.jpg" />
                            <h2>AGRICULTURE: FIGHTING HUNGER</h2>
                            <p class="JustifyAlign">
                                CIDA-Uganda is holds agricultural workshops around Uganda teaching local Muslims and the community at large how to provide for their nutritional needs. Our goal is to empower these individuals to provide for themselves. By training people living in rural areas, we seek to offer a more long-term solution by giving them a hand up, instead of just giving them a hand out. This initiative is enabling community members to build an efficient agricultural economy, creating opportunities for both economic and Islamic development so that people can be able to pay Zakat, look after their families etc.
                            </p>
                            <p class="JustifyAlign">
                                CIDA-Uganda agricultural r workshops train people in sustainable food production and preservation skills to those struggling to feed their families. Over the course of two days trainees are taught survival gardening techniques using drip irrigation, raised garden beds, composting and mulching, seed transplanting and basic garden management. After completing the workshop attendees are given a drip irrigation kit to take with them back to their communities to start their own gardens. We also hold workshops that teach methods for drying and preserving food, often in conjunction with the food production workshop.
                            </p>
                            
                            <h3>Why We Do It</h3>
                            <p class="JustifyAlign">
                                Uganda hosts more refugees than any other country in Africa that is 1.5 Million refugees including people who have fled from South Sudan, the Democratic Republic of Congo and Burundi. The additional mouths to feed have severely strained Uganda’s food resources, causing hunger and malnutrition. 
                            </p>
                            <p class="JustifyAlign">
                                CIDA- Uganda, estimates that over 41% of people live in poverty, and almost half of Uganda’s population is under the age of 15, representing one of the youngest populations in the world. 
                            Agricultural development is the main priority to help fight poverty, ensure food security and improve outcomes for low-income families. Agriculture will also be an increasingly important industry for youth and refugees to find viable opportunities to earn sustainable livelihoods for themselves.
                            </p>
                            <h4>CIDA-Uganda Agriculture Mission</h4>
                            <p class="JustifyAlign">
                                International experts say an investment in food production is one of the best ways to reduce poverty around the world.
                            </p>
                            <p class="JustifyAlign">
                                For decades, the world has focused on food aid for developing countries rather than on teaching them how to produce more food. While CIDA-Uganda provides food aid in times of disaster and famine, we are focused on preventing the next famine. We are training poor farmers, (men, women, and children) to feed themselves and their families.  By teaching techniques that are simple, practical, sustainable and affordable, they can learn how to feed themselves for a lifetime.  
                            </p>

                            <h4>Our Agriculture Goal</h4>
                            <p class="JustifyAlign">
                                Our goal is to help families stabilize their food supply by producing a crop during the dry season and then to preserving the excess during the rainy season. 
                            </p>

                            <h4>Approach</h4>

                            <p class="JustifyAlign">Through education and training we help people help themselves.  We expect learners to use what they learn and to teach someone else.  They learn to use resources they have rather than focusing on what they don’t have.  They learn to use compost and “manure tea” to provide both nutrients and organic matter to the planting bed.  Farmers are taught how to develop a raised planting bed with a center trench filled with compost materials.  A typical 50 foot, drip irrigated raised planting bed using five gallons of water in the morning and five gallons in the evening can produce enough vegetables to feed a family of five to seven during the dry season.  Families are taught they can preserve fruits and vegetables using solar dehydration and meats through salting, smoking and curing.  In some areas, pickling, leathering, fermenting and oil canning are useful.</p>

                            <p class="JustifyAlign">Another approach is through establishment of Demonstration (demo) farms in different parts of the country. These are the most effective extension education tools.  For smallholder farmers, demo plots provide an opportunity to demonstrate and teach appropriate technologies, as well as venues to test new methods side by side with traditional methods.  Although they require considerable time and effort, the payback comes when farmers more readily adapt practices they perceive to be effective and appropriate under local conditions.</p>
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
                                    <a href="#"><img src="/assets/img/Agriculture.jpg" alt="Image"></a>
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
