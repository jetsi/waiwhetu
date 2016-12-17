<?php
ob_start();
if(session_status()!=PHP_SESSION_ACTIVE) session_start();

?>
<?php
include('db_con.php');
include('check_session.php');
?>
<!DOCTYPE HTML>
<!--
	Linear by TEMPLATED
    templated.co @templatedco
    Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Waiwhetu Marae</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,700,500,900' rel='stylesheet' type='text/css'>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
		</noscript>
	</head>
	<body>

	<!-- Header -->
		<div id="header">
			<div id="nav-wrapper"> 
				<!-- Nav -->
				<nav id="nav">
					<ul>
						<li class="active"><a href="index.php">Home</a></li>
						<li><a href="about.php">About Us</a></li>
						<li><a href="">News and Events</a></li>
						<li><a href="marae_booking.php">Marae booking</a></li>
						<li><a href="">Contact Us</a></li>
					 <?php
                        if(!isset($_SESSION['user_role'])){
                    echo"<li><a href='login.php'>login</a></li>";
                }
                else{
                    echo "
                        
                            <li><a href='#'>Welcome " . $_SESSION['username'] ."</a></li>
                           
                            <li><a href='include/logout.php'>Sign Out <span class='glyphicon glyphicon-log-out'></span></a></li>
                        </ul>
                        ";
                }
               ?>
					</ul>
				</nav>
			</div>
			<div class="container"> 
				
				
				
				
				

				<!-- Logo -->
				<div id="logo">
					<h1><a href="#">Waiwhetu Marae</a></h1>
					<span class="tag"></span>
				</div>
			</div>
		</div>
	<!-- Header --> 

	<!-- Main -->
		<div id="main">
			<div class="container">
				<div class="row">
                    
					<!-- Content -->
					<div id="content" class="8u skel-cell-important">
						<section>
							<header>
								<!--<h2>Right Sidebar</h2>-->
					<div id="sidebar" class="4u">
						<section>
							<header>
								<h2>About Us</h2>
							</header>
					</div>

							</header>
							<p>The people of Waiwhetu have an eternal affinity emanating from out of Te Kāhui Maunga and the inter marriage links with the <font color="red">waka immigrants</font>, particularly with the<font color="red"> Aotea</font>, <font color="red">Kurahaupo</font> and <font color="red">Tokomaru waka</font>. </p>
													
<!--<div style="float:right;margin-left:15px;"><iframe width="320" height="160" src="https://www.youtube.com/embed/T5l2ai_SsxM" frameborder="0" allowfullscreen></iframe></div>
"http://www.nzonscreen.com/title/pictorial-parade-no-106-1960" 	
<div style="float:right;margin-left:15px;"><iframe width="320" height="160" src="http://www.nzonscreen.com/title/pictorial-parade-no-106-1960" frameborder="0" allowfullscreen></iframe></div>
-->
							<p>The arrival of Captain James Cook witnessed 
						
							the last and true practises of a bygone era and
							the commencement of the colonisation of a 
							country bringing about imperialistic behaviour.
							The introduction of the gun by the colonisers to tribal warfare ravaged throughout the land where whole tribes were 
							annihilated and prisoners taken by those tribes who befriended the colonisers at the early stages of settlement.
							</p>
							<p>The arrival of Captain James Cook witnessed 
							the last and true practises of a bygone era and
							the commencement of the colonisation of a 
							country bringing about imperialistic behaviour.
							The introduction of the gun by the colonisers to tribal warfare ravaged throughout the land where whole tribes were 
							annihilated and prisoners taken by those tribes who befriended the colonisers at the early stages of settlement.
							</p>

					<!-- fall of pukerangiora-->	
					<div id="sidebar2" class="4u">
							<header>
								<h2><font size="5.23em">Fall of Pukerangiora</h2></font>
							</header>
					</div>
							<p>After the fall of Pukerangiora in 1831, the following year a large number of hapū throughout north Taranaki departed Otaka Pā trekking south along the Whakaahurangi track leaving their homeland for Kapiti and further south into Te Whanganui-a-Tara. This was to be the last of the Taranaki heke south known as Tamateuaua which took place in early 1832; settling in Wellington occupying the inner western harbour around Pipitea, being the stronghold of Ngāti Hamua/Te Matehou. Settler arrival not only created opportunities but also brought about numerous disputes over land ownership. In 1847  the McCleverty Deed had a major impact on Māori, forcing them from their lands to wastelands with the intent of colonising Māori out of existence. For the people of  Waiwhetu we were shafted by the Crown from Pipitea and relocated on wetlands. These lands are somewhat different today than what they were 164 years ago.</p>
						
					<!-- Marae HIstory-->
					
					<div id="sidebar3" class="4u">
							<header>
								<h2><font size="5.23em">Marae History</h2></font><p>Goodwill to all Men</p>
							</header>
					</div>
							
							
							<p>Waiwhetu Marae is linked to the people of Atiawa and is located within the <font color="red">Lower Hutt Valley</font> region

								approximately five minutes’ drive from the Lower Hutt city centre. The marae is home to families

								associated with the Atiawa iwi authority and is used for services that include <font color="red">Kohanga reo</font>, <font color="red">youth</font>

								activities which also hosts Government agencies as well as hosting seminars, functions and

								educational visits.</p>

							<p>The history portrays a young man laying on his back in the fields of Taranaki in 1904 gazing upon the

								pure white mantle of mount Egmont. He closed his eyes and it was like he was dreaming that the

								clouds rolled back, the heaven glowed with a strange light and his voice spoke to the young man:

								<font color="red">"Koi a e aroha ana ki a au naku tena"</font> <font color="red">“he that loves me is mine”</font>  the dream continued. This 18-year-

								old youth, was taken from Waiwhetu to Taranaki to learn the ancient customs and traditions of his

								tribe in the sacred chambers of the elders, saw many things. He saw the importance of keeping alive

								the cultural riches of the past. He then saw a vision of a great meeting-house at the head of the fish

								of Maori mythology (myth), a meeting-house not for one tribe alone but for <font color="red">all the people, Maori</font> and <font color="red">pakeha,</font> a meeting place of Goodwill to All Men.</p>
															
							<p>This was the vision of Ihaia Porutu Puketapu (leader of Te Ati-Awa- No-Runga- I-Te- Rangi tribe of

								Waiwhetu, a little Maori settlement in the Hutt valley near Wellington the head of the fish. It was

								more than a dream of a meeting-house. It was a dream of a way of life for Maori and Pakeha, of

								“Peace on Earth, Goodwill to All Men”</p>
					
											
						<!-- Carved Meeting HOuse for Waiwhetu-->
						
						
									
					
						<div id="sidebar4" class="4u">
							<header>
								<h2><font size="5.23em" color="black">Carved Meeting-house Was Built</h2></font>
							</header>
							</div>
							
							<p> It may be a hundred years now since a carved meeting-house was built in the Wellington district, and although the Maori residents are served by the Ngati-Poneke hall and Te Tatau o te Po meeting-house at Petone, it has long been felt that the time has arrived when a fully carved house should be built. The Maori population of the district is increasing rapidly, and will no doubt continue to do so.</p>
							<p>For some time the Maori people of Waiwhetu, under the energetic leadership of Ihaia Puketapu, have been raising funds, and a wide public appeal is about to be made to the citizens of Wellington and the Hutt Valley to help in the erection of a first-class carved house and a dining-hall at Waiwhetu.</p>
							<p>An architect's drawing of the hall is published above. To comply with the building regulations there are modern features in the building, but the interior will be in the best traditions of Maori decoration. Most of the carving and tukutuku will come from the fine house built for the Centennial Exhibition in Wellington in 1940.</p>
							<p>A feature of the marae will be a series of carved figures standing round the fence, each of which will represent one of the principal canoes of the migration from Hawaiki. This is to show that all tribes are now represented amongst the Wellington Maoris, and that every tribe in New Zealand will have an honoured place in this house.</p>
						
							<!--OPENING OF THE MEETING HOUSE-->	
					<div id="sidebar5" class="4u">
							<header>
								<h2><font size="6em" color="black">O</font><font size="5.23em" color="black">PENING OF THE MEETING HOUSE.</h2></font>
								<P>AROHANUI KI TE TANGATA</P>
							</header>
					</div>
							
							</header>
							
							<p> <font color="black">It Rained</font> and  <font color="red">It Rained</font></p>

							<p>All through the night before the Saturday appointed for the opening of the great new Meeting House at Waiwetu the bitter southerly rain poured down.

								It swelled the little Waiwhetu stream and sent it racing mud-coloured and reflecting no stars, bank to bank through the sudden fields of Te Whiti Park opposite the Meeting House. It turned the floor of the great marquees into a quagmire, a muddy paddling pool.</p>
															
							<p>The buses kept rolling in through the night, bringing the tribes from farthest east, west and the north.

								From four on Friday afternoon, the voluntary helpers, Maori and Pakeha, had been hard at it, feeding the constantly arriving guests. At one in the morning, they were still at it, paddling round in bare feet in steadily rising water. At two some of them had gone to bed for an hour or so to be up again at four to be present at the dawn ceremony of lifting the tapu from the Meeting House.</p>
							<p>Between four and five a crowd had been gradually assembling in the rainy darkness in front of the marae. Car lamps and lamps from the buses bringing visitors from their billets shone on the angry Waiwhetu stream emphasising the dark masses of the Eastern Hutt hills beyond.</p>
							<p>The carved figure of Maui, high on the twenty-four-foot front pole of the Meeting House, dominated the marae. His paua shell eyes glittered in the light from a bare electric bulb fixed below. Suddenly he seemed to stare beyond the marae into the darkness.</p>
							<p>Gradually, as the faint light of dawn began to throw the eastern hills into black relief, the eyes took on a different, bluer hue, still staring, but the glitter had turned to a shine which put the warmth of life into them; they seemed to be looking forward as though waiting for the glory of a sunrise. Nature was working a stage effect with superb efficiency.</p>
							<p>But no shafts of sunlight came yet; only a greyness seeping through the black. Everything seemed grey, even the Maori elders who sat on the porch, huddling forward a little under their rugs in the bitterly cold air.</p>
							<p>One of these elders was Ihaia Porutu Puketapu, leader of Te Ati-Awa-No-Runga-I-Te-Rangi tribe of Waiwhetu. This was the man whose sixty-year-old dream had now come true. Wrapping his striped blanket closer about him, he got up and walked back and forth, waiting. This was to be his day.</p>
							<p>“We are sorry to have to tell you all who have been so kind as to come at this early hour, that owing to the rain, the dawn ceremony will have to be postponed for one hour ….”</p>
							<p><a href="http://teaohou.natlib.govt.nz/journals/teaohou/issue/Mao33TeA/c12.html#n34"><i>Continued on page 34</i></a></p>
						
						
						
						
							<!-- Nga Kaupapa Korero-->		
					<div id="sidebar6" class="4u">
							<header>
								<h2><font size="5.23em" color="black">Nga Kaupapa Korero</h2></font>
							</header>
					</div>					
							<p>The following are a set of guiding principles based on the Māori psyche and world view that supports the kaupapa of Waiwhetu marae to support and enhance whānau, hapū, and iwi members and the communities that they serve:</p>
							
							
									<p><font size="2em" color="red">WHANAUNGATANGA:</font>	Developing initiatives to maximise the contribution of whānau and hapū members and other networks to enhance the wellbeing of the marae.</p>
									<p><font size="2em" color="red">WHAKAPAPA:</font>	Ensuring that whānau, hapū and iwi connections are identified to enhance the marae and the community that it services.</p>
									<p><font size="2em" color="red">PŪKENGATANGA:</font>	Ensuring that activities contribute to the discovery and rediscovery of Māori knowledge and understanding, thereby enhancing whānau, hapū and iwi members and the wider community.</p>
									<p><font size="2em" color="red">KOTAHITANGA:</font>	Creating plans and objectives that encourage whānau, hapū and iwi members to manaaki the marae and its community to deliver quality outcomes.</p>
									<p><font size="2em" color="red">WAIRUATANGA:</font>	Valuing the enrichment and satisfaction that arises out of Māori knowledge and activities that are spiritually and emotionally uplifting and enriching.</p>
									<p><font size="2em" color="red">KAITIAKITANGA:</font>	Meeting the expectations of whānau, hapū and iwi members through nurturing and encouraging them in a safe and supportive environment.</p>
									<p><font size="2em" color="red">ŪKAIPŌTANGA:</font>	Providing an environment and opportunities that promote a sense of identity, pride and contribution to whānau, hapū, iwi and the community.</p>
									<p><font size="2em" color="red">MANAAKITANGA:</font>	Delivering quality services with exceptional facilities for whānau, hapū, iwi members and its community.</p>
									<p><font size="2em" color="red">RANGATIRATANGA:</font>	To continue to develop leaders who contribute to embracing and uniting whānau, hapū, iwi members for the long term sustainability of the community</p>
									<p><font size="2em" color="red">TE REO MĀORI:</font> 	To create and develop opportunities where whānau, hapū and iwi members are able to practise and be supported in their pursuit of Te Reo Māori both on and around the marae and the community that it serves.</p>								
							<p>The principles and the community of Waiwhetu are based on the philosophies and life style of Parihaka.</p>
							<p>Both Te Whiti-o-Rongomai and Tohu Kakahi adorn the walls of Arohanui ki te Tāngata alongside both the second Māori King Tawhiao and the founder of Pai Marire Te Ua Haumene.</p>
						
							<!--TE RAUKURA-->
					<div id="sidebar7" class="4u">
							<header>
								<h2><font size="5.23em" color="black">Te Raukura</h2></font>
							</header>
					</div>							
							</header>
							<p>The founding principles of Parihaka are imbued through the symbol that distinctively identifies Taranaki in their travels throughout the world through the wearing of the Raukura. The korero pertaining to the principles of the Raukura shall be left for another occasion, however, the wearing of the Raukura embodies the following scriptures taken from the bible, representing</p>
							<p> 
	
							<ul id="menu" text-indent="50px"><style p {text-indent:32px;}></style> 
							  <li>- He honore he kororia ki te atua, </li>			
							  <li>- he maungarongo ki te whenua,</li>
							  <li>- he whakaaro pai ki ngā tāngata katoa</li>
							  <li>(<font color="red">Honore and glory to god on high, peace on earth and goodwill to all men</font>)</li>
							</ul>  
							</center>
						
							<p>The teachings and philosophies of the Raukura are a reminder of what they represent ensuring that there is goodwill to all mankind. Although a somewhat simple philosophy, the contexts and its actions are often forgotten during times of disputes and dissent towards others. This is an important forever statement that will continue to remind us of our behaviour towards one another, a master challenge in itself.</p>
							<p>The meeting house located out at Waiwhetu, Lower Hutt encapsulates and embodies the principles of the Raukura through its name, Arohanui ki te tangata (Goodwill to mankind), representing humility in the eyes of adversity a gift bestowed unto the nation. </p>
						<!-- parihaka influence-->
					<div id="sidebar8" class="4u">
							<header>
								<h2><font size="5.23em" color="black">Parihaka Influence</h2></font>
							</header>
					</div>							
							</header>
							<p>The rise of Parihaka emanated from colonial and imperialistic behaviours of dominance thereby relocating inland from the sea coast. This was the only alternative to distance themselves from the coastline to avoid colonial bombardment. This inland community lived peacefully for a decade rising to prominence for its economic support to the township of Waitara, New Plymouth and local settler communities. Becoming a threat to British imperialism, legislation was enacted to bring about one of the darkest days in New Zealand history of which media were denied entry into the settlement.</p>
							<p>However, a few ran throughout the night to be hidden among the homes where they could record what took place on that fateful morning of 5 November 1881. Parihaka was a peaceful community based on communal living. Many iwi throughout Aotearoa converged onto Parihaka in their stance against legislation due to colonial greed to confiscate as much Māori land as possible. The community of Parihaka had a population well over 2,000 iwi representatives from throughout Aotearoa.<p>The original tribe of the district was the Ngai Tara, the descendants of Tara-nohu, a son of Whatonga of the Kurahaupo canoe. These people named the harbour Te Whanganui a Tara, which is still the correct Maori name, Poneke being simply a corruption of ‘Port Nick’ or Port Nicholson.</p>
						
											<!-- Tohu kakahi & te whiti o-Rongomai-->		
					<div id="sidebar9" class="4u">
							<header>
								<h2><font size="5.23em" color="black">Tohu Kakahi & Te Whiti o Rongomai</h2></font>
								
							</header>
					</div>					
							<p>This form of resistance was to prove beneficial many years later for the Indian people through Mahatma Ghandi for freedom.</p>
							<p>Te Whiti-o-Rongomai and Tohu Kakahi were well versed and familiar with both the Māori and Pākehā world. These men were men of principle that stood for the good of all, not based on the colour of their skin However, prior to the Parihaka prophets there were Taranaki chiefs who made major sacrifices for the greater purpose of mana motuhake.</p>								
							<p>The principles and the community of Waiwhetu are based on the philosophies and life style of Parihaka.</p>
							<p>Both Te Whiti-o-Rongomai and Tohu Kakahi adorn the walls of Arohanui ki te Tāngata alongside both the second Māori King Tawhiao and the founder of Pai Marire Te Ua Haumene.</p>
						
						
						</section>
					</div>


					<!-- Sidebar -->
					<div id="sidebar" class="4u">
						<section>
							<header>
								<h2>Heritage</h2>
							</header>
							<div class="row">
								<section class="6u">
									<ul class="default">
										<li><a href="#sidebar3">Marae History</a></li>
										<li><a href="#sidebar4">Carved Meeting House for Waiwhetu</a></li>
										<li><a href="#sidebar5">Opening of the Meeting House</a></li>
										<li><a href="C:/Users/21001864/Desktop/Project IT7x01/design phase 1/front-end/waiwhetu_ver2/pdf/treaty-kawharau-footnotes.pdf">Treaty of Waitangi</a></li>
										
										
										<!--<li><a href="#">Morbi ligula volutpat</a></li>-->
									</ul>									
<!-- link to the treaty of waitangi-->

<body>
<style>
img {
    opacity: 0.4;
    filter: alpha(opacity=40); /* For IE8 and earlier */
}

img:hover {
    opacity: 1.0;
    filter: alpha(opacity=100); /* For IE8 and earlier */
}
</style>
</head>
<body>


</body>







 

<!-- link ends here-->
	

		</section>
								<section class="6u">


									<ul class="default">
										<li><a href="#sidebar6">Nga Kaupapa Korero</a></li>
										<li><a href="#sidebar7">Te Raukura</a></li>
										<li><a href="#sidebar8">Parihaka Influence</a></li>
										<li><a href="#sidebar9">Tohu Kakahi & Te Whiti o Rongomai</a></li>										
										<!--<li><a href="news_and_events.html">Morbi ligula volutpat</a></li>-->
									</ul></br>
<!--<h1>Image Transparency</h1>-->
<A HREF="http://www.nzhistory.net.nz/files/documents/treaty-kawharau-footnotes.pdf"><IMG SRC="/images/treaty-of-waitangi.jpg" alt="Logo"></a>	
<a href="http://www.nzhistory.net.nz/files/documents/treaty-kawharau-footnotes.pdf">View Treaty of Waitangi</a>
<!--<p><b>Note:</b> In IE, a !DOCTYPE must be added for the :hover selector to work on other elements than the a element.</p>-->



									

								</section>
							</div>
						</section>
						
						
						
						
						<section>
							<header>
								<bidi-override><h2><font color="red">Latest</font> News</h2></bidi-override>
							</header>
							<ul class="style">
								<li>
									<p><a href="https://www.youtube.com/watch?v=Opz6WUhdN64">Waiwhetu Marae celebrates 50th anniversary</a></p>
									<p class="posted">May 21, 2014  |  (10 ) <a href="http://192.168.252.113/dashboard/wordpress/wp-login.php">Comments</a></p>
								</li>
								<li>
									<p><a href="https://www.youtube.com/watch?v=Opz6WUhdN64">Waiwhetu Marae celebrates 50th anniversary</a></p>
									<p class="posted">May 21, 2014  |  (10 ) <a href="http://192.168.252.113/dashboard/wordpress/wp-login.php">Comments</a></p>								</li>
							</ul>
						</section>
					</div>
					
				</div>
			</div>
		</div>
	<!-- /Main -->

	<!-- Tweet -->
		<div id="tweet">
			<div class="container">
				<section>
					<blockquote>&ldquo;AROHANUI KI TE TANGATA. NAU MAI, HAERE MAI KIA MAU KI TO MAORITANGA&rdquo;</blockquote>

				</section>
			</div>
		</div>
		
		
<!-- /banner -->

	<!-- /Tweet -->

	
	<!--
	<div class="container">
   <div class="column-center">Column center</div>
   <div class="column-left">Column left</div>
   <div class="column-right">Column right</div>
    </div>
	-->
	<!-- Footer -->

						
					<!--<h2><b><font color="Blue">Latest</b></font> News</h2>-->
						<!--
						<span class="byline">Integer sit amet pede vel arcu aliquet pretium</span>
						
					</header>
					<ul class="contact">
						<li><a href="#" class="fa fa-twitter"><span>Twitter</span></a></li>
						<li class="active"><a href="#" class="fa fa-facebook"><span>Facebook</span></a></li>
						<li><a href="#" class="fa fa-dribbble"><span>Pinterest</span></a></li>
						<li><a href="#" class="fa fa-tumblr"><span>Google+</span></a></li>
					</ul>
					-->
				</section>
			</div>
			
			<div class="column-center">
					</br>
					<!--
								<section >
									<ul class="default">
									<hr width="600">
										<li>another tab of latest news. click here to <a href="news_and_events.html">view more</a></li>
										<li>another tab of latest news. click here to <a href="news_and_events.html">view more</a></li>
										<li>another tab of latest news. click here to <a href="news_and_events.html">view more</a></li>
										<li>another tab of latest news. click here to <a href="news_and_events.html">view more</a></li>
										<li>another tab of latest news. click here to <a href="news_and_events.html">view more</a></li>
									</ul>
							</section>
					-->		
				<!-- test section end here -->
			</div>
			</div>
			<!-- test section end here
						<div class="container" style="width:40%;padding:0;float:left;">
				<!-- test section
								<section >
									<ul class="default">
										<li><a href="#">Donec facilisis tempor</a></li>
										<li><a href="#">Nulla convallis cursus</a></li>
										<li><a href="#">Integer congue euismod</a></li>
										<li><a href="#">Venenatis vulputate</a></li>
										<li><a href="#">Morbi ligula volutpat</a></li>
									</ul>
								</section>
				-->
			</div>
		</div>
	<!-- /Footer -->

	<!-- Copyright -->
		<div id="copyright">
			<div class="container">
				Design: <a href="http://templated.co">TEMPLATED</a> Images: <a href="http://unsplash.com">Unsplash</a> (<a href="http://unsplash.com/cc0">CC0</a>)
			</div>
		</div>


	</body>
</html>