@include('Includes.header')
        
        <!-- Page Header Start -->
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Economic Empowerment Cause</h2>
                    </div>
                    <div class="col-12">
                        <a href="{{route('index')}}">Home</a>
                        <a href="">Economic Empowerment</a>
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
                            <img src="/assets/img/EconomicEmpowermentBlogDetails.jpg" />
                            <h2>ECONOMIC EMPOWERMENT PROGRAM</h2>
                            <p class="JustifyAlign">
                                Economic empowerment is at the heart of what we do here at CIDA-Uganda. The following Hadith is a great inspiration for us to undertake Economic Empowerement and Development as a Priority;
                            </p>

                            <p class="JustifyAlign">The hadith was reported by Abu Dawood, from Abu Bakr Al-Hanafi, from Anas ibn Maalik, who said:</p>
                            <p class="JustifyAlign"> <span style="font-weight: bold">“A man from the Ansaar came to the Prophet and begged from him. He (the Prophet) asked, ‘Do you not have anything in your house?’ He replied, ‘Yes, a piece of cloth, a part of which we wear and a part of which we spread (on the ground), and a wooden bowl from which we drink water.’</span> He said, ‘Bring them to me.’ He then brought these articles to him, and he (the Prophet) took them in his hands and asked, ‘Who will buy these?’ A man said, ‘I shall buy them for one dirham.’ He said, ‘Who will offer more than one dirham?’ (He said it twice or thrice.) A man said, ‘I shall buy them for two dirhams.’ He gave the articles to the buyer and took the two dirhams and, giving them to the Ansari, he said, ‘Buy food with one dirham and hand it to your family, and buy an axe with the second dirham and bring it to me.’ He then brought it to him.</p>
                            <p class="JustifyAlign">The Messenger of Allah  fixed a handle on it with his own hands and said, ‘Go, gather firewood and sell it, and do not let me see you for a fortnight.’ The man went away and gathered firewood and sold it. When he had earned ten dirhams, he came to him and bought a garment with some of them and food with the others. <span style="font-weight: bold">The Messenger of Allah then said to him, ‘This is better for you than that begging coming as a spot on your face on the Day of Judgment. Begging is suitable only for three people: one who is in severe poverty, one who is seriously in debt, or one who is responsible for paying blood money and finds it difficult to pay.’”</span></p>
                            <p class="JustifyAlign">Following the above prophetic example, at CIDA-Uganda, Economic Empowerment involve providing people, usually disadvantaged women, men, youths and people with Disabilities (PWDs) with the required informal education, training and skills that they need to find a job, earn an income and become self-supporting. Economic independence can change a person’s life through self sustainance leading to increased productivity, happiness and self satisfaction. </p>
                            <p class="JustifyAlign">CIDA-Uganda does all these right from educating marginalised people in basic literacy and numeracy to providing various skills training and providing small capital for business start ups. </p>
                            <p class="JustifyAlign">Under Economic Empowerement Program, there are the following four projects running for the empowerement of intended beneficiaries.</p>
                            <p class="JustifyAlign">(i)	Women Economic Empowerement</p>
                            <p class="JustifyAlign">(ii)	Youth Economic Empowerment</p>
                            <p class="JustifyAlign">(iii)	People with Disabilities (PDWs) Economic Empowerement.</p>
                            <p class="JustifyAlign">(iv)	Universal Skills Development (for all marginalized segments of society)</p>
                                CIDA-Uganda agricultural r workshops train people in sustainable food production and preservation skills to those struggling to feed their families. Over the course of two days trainees are taught survival gardening techniques using drip irrigation, raised garden beds, composting and mulching, seed transplanting and basic garden management. After completing the workshop attendees are given a drip irrigation kit to take with them back to their communities to start their own gardens. We also hold workshops that teach methods for drying and preserving food, often in conjunction with the food production workshop.
                            </p>
                            
                            <h3>EDUCATION PROGRAM</h3>
                            <p class="JustifyAlign">Islam is a religion that has always supported learning and knowledge. It is compulsory for every Muslim, male or female to gain knowledge in order to survive in this world. The significance of education in Islam can be proved through numerous references from the Quran. This clearly shows that education holds a very high status in Islam and it does not only support peace and love but also strongly supports learning and knowledge.</p>
                            <p class="JustifyAlign">At CIDA-Uganda, the priority is given to orphans and any other vulnerable children. Education for the girl child is also of utmost consideration. </p>

                            <h4>Orphans Sponsorship.</h4>
                            <p class="JustifyAlign">The Orphan sponsorship program emphasizes on taking care of the needs of the orphans who have lost either one of their parent or both their parents. They are supported in terms of education and all the necessities that are required to live a healthy and happy life and make them a productive and essential member of the society.</p>
                            
                            <h5>Objectives:</h5>
                            <p class="JustifyAlign">•	Education sponsorship of orphans right from Primary school to university</p>
                            <p class="JustifyAlign">•	Ensuring that all the needs of the orphan are met and trying to compensate the loss of their parent or parents.</p>
                            <p class="JustifyAlign">•	Providing sponsorship to needy families like those of prisoner’s families and to those especially facing difficult situations in life.</p>
                            
                        </div>
                        
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
                                    <a href="#"><img src="/assets/img/EconomicEmpowerment.jpg" alt="Image"></a>
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
