@include('Includes.header')
        
        <!-- Page Header Start -->
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Relief Program Cause</h2>
                    </div>
                    <div class="col-12">
                        <a href="{{route('index')}}">Home</a>
                        <a href="">Relief Program</a>
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
                            <img src="/assets/img/causes-4.jpg" />
                            <h2>RELIEF PROGRAM</h2>
                            <p class="JustifyAlign">
                                CIDA-Uganda defines Relief as financial or practical assistance given to those in special need or difficulty. This program relieves those in distress, helps against catastrophes inside & outside Uganda.
                            </p>

                            <p class="JustifyAlign">
                                Praise be to Allah, who made relief with the anguish and ease with hardship. Allah says in the Holy Qur'an "And certainly, We shall test you with something of fear, hunger, loss of wealth, lives and fruits, but give glad tidings to As-Sabirin (the patient ones, etc)…they say "Truly! To Allah we belong and truly, to Him we shall return." Such patients are entitled to get God's prayers & mercy. They are the believers. " (Surat Al –Baqara 155-157). 
                            </p>

                            <p class="JustifyAlign">
                                Messenger of Allah Said (whoever relieved a distress or a hardship in present life , God Almighty will relieve him a distress in the hereafter. Whoever facilitates for a Muslim brother, God facilitate for him in both life & hereafter. Whoever protects a Muslim , God will protect him in both life & hereafter. God help those who help their brethren.) Confirm Allah's Prophet peace be upon him. 
                            </p>

                            <p class="JustifyAlign">
                                Therefore, CIDA-Uganda believes in the necessity of helping of Ugandans in need or other friends in different parts of the world, especially Africa all in compliance with God's commands, Sunna of His Prophet Mohamed (PBUH)                             </p>
                            
                            <h3>Program's objectives:</h3>
                            <h6>This program aims at important issues that true Islam urges us to do:</h6>
                            <br>

                            <p class="JustifyAlign">
                            1. Helping (in–kind and monetary) those affected in emergencies. Whether such emergencies are accidents, catastrophes, disasters due to fires, or natural due to Volcanoes , earthquakes & floods..etc.
                            </p>

                            <p class="JustifyAlign">
                                2. Acting up to Holy Qura'n & Sunna regarding the distressed, help him till God relieves his calamity.
                                </p>

                                <p class="JustifyAlign">
                                    3. Spreading the spirit of co-operation throughout Uganda and also, engaging the international community.
                                    </p>

                            <h3>CIDA-Uganda‘s relief program is extended majorly through the following categories :</h3>

                            <br>

                            <h4>1.Disaster Response </h4>

                            <p class="JustifyAlign">
                                When CIDA-Uganda hears about an occurrence round Uganda, it takes the initiative to help, relieve the agony & spread hope. During days of disaster, CIDA-Uganda opens her doors to every human irrespective of any religion or nationality and what remains at the back of our mind is that we are serving Humanity.
                            </p>

                            <h4>2.Food  for the poor and Elderly  </h4>

                            <p class="JustifyAlign">
                                According to Abu Said al-Khudhri(Radiyallahu Anhu;
                                “The Messenger of Allah (peace be upon him) said: <br> <br> ‘If a believer feeds another believer in hunger, Allah will feed him from the fruits of Paradise on the Day of Resurrection. If a believer quenches the thirst of another believer, Allah will give him a pure drink (which is sealed to drink) on the Day of Resurrection.  <br> <br>
                                And if a believer clothes another believer when he is unclothed, then Allah will clothe him with green garments of Paradise.’ Abu Dawud in al-Sunan, 2:130 Hadith #168, and, al-Tirmidhi in al-Sunan,Ch.: (8), 4:633 Hadith #2449.}
                                We operate in communities where people especially the Poor, widows, and Elderly are dieing  due to hunger. of Food is extended the )
                            </p>
                            
                            <h4>3.Clothing the needy</h4>

                            <p class="JustifyAlign">
                                According to Umar bin al-Khattab(Radiyallahu Anhu) “The Messenger of Allah(peace be upon him) was asked: ‘Which deeds are the best?’ <br> <br>
                                He said: ‘(The most excellent deed is) your provision of contentment to a believer by warding off his hunger or clothing him to cover his nakedness or meeting any of his needs.’ al-Tabarani in al-Mujam al-Awsat, 5:202 Hadith #5081) <br> <br>
                                Abdallah bin Abbas(Radiyallahu Anhu) heard the Messenger of Allah(peace be upon him) saying: “If a Muslim clothes another Muslim, he will remain in the protection of Allah until a shred of that cloth is left on him.” Al-Tirmidhi in al-Sunan, Ch.: (41), 4:651 Hadith #2484. •al-Tabarani in al-Mu’jam al-KabÏr, 12:97 Hadith #12591)
                            </p>

                            <p class="JustifyAlign" style="font-weight: bold">
                                CIDA-Uganda through cloth donations, distributes clothes to orphans, widows, the poor, Imams and other needy Muslims.
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
                                    <a href="#"><img src="/assets/img/causes-4.jpg" alt="Image"></a>
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
