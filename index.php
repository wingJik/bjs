
<!DOCTYPE HTML>
<html>
<?php session_start(); ?>
	<head>
		
		<title>天道院系統有限公司</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="http://www.blst.com.tw/assets/css/main.css" />
	</head>
	<body>

		<!-- Header -->
			<header id="header">
				<a href="index.html" class="logo">天道院系統有限公司</a>
				<nav>
					<a href="#menu">選單</a>
				</nav>
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<?php
					if(!empty($_SESSION["email"])){
						echo'
						<li><span>　　<a href="user/index.html">'.$_SESSION["email"].'</a>　|　<a href="user/out.php">登出</a></span></li>
						'
					;}else{
					echo'
                    <li><span>　　<a href="user/index.html">註冊</a>　|　<a href="user/index.html">登入</a></span></li>
					';}?>
					
					<li><a href="index.html">Home</a></li>
					<li><a href="p1.html">關於我們</a></li>
                    <li><a href="a3.html">公司里程碑</a></li>
                    <li><a href="a1.html">營業項目＜天道院＞</a></li>
                    <li><a href="p11.html">　→　與神靈動</a></li>
                    <li><a href="p12.html">　→　惡靈退散</a></li>
                    <li><a href="p13.html">　→　開啟天眼</a></li>
                    <li><a href="p8.html">　→　洩漏天璣</a></li>                    
                    <li><a href="a2.html">營業項目＜珠寶鑑定＞</a></li>
		            <li><a href="p2.html">　→　寶石鑑定</a></li>
		            <li><a href="p4.html">　→　鑑定流程</a></li>
                    <li><a href="p5.html">　→　購買寶石</a></li>
                    <!-- <li><a href="p6.html">　→　通訊系統</a></li>
                    <li><a href="p7.html">　→　智能系統</a></li>
                    <li><a href="p9.html">　→　UPS系統</a></li>            
                    <li><a href="p10.html">　→　綠能機房</a></li>                              -->
				</ul>
			</nav>

		<!-- Banner -->
			<section id="banner">
				<div class="inner">
                <img src="images/logo.png">
					<h1>當你遇到逆境的時候是給你考驗，遇到順境的時候是給你恩典</h1>
					<ul class="actions">
					  <li><a href="#one" class="button alt scrolly big">About Us</a></li>
					</ul>
				</div>
			</section>

		<!-- One -->
			<article id="one" class="post style1">
				<div class="image">
					<img src="images/pic1-1.jpg" alt="" data-position="75% center" />
				</div>
				<div class="content">
					<div class="inner">
						<header>
							<h2>關於我們</h2>
							<p class="info">About Us</p>
						</header>
						<p>由於創辦前長期致力於研究徘徊於世間的亡者之魂，在大地森林中生息的精靈，以及崇高的神佛們，他們被人類稱作為「靈」。在人類的世界裡，有少部分的人能夠與他們自由的交流，並且能夠隨意操控某種常人無所可及的力量，這些人便通稱為「通靈人」。</p>
						<ul class="actions">
						  <li><a href="p1.html" class="button alt">More+</a></li>
						</ul>
					</div>
					<div class="postnav">
						<a href="#" class="prev disabled"><span class="icon fa-chevron-up"></span></a>
						<a href="#fourteen" class="scrolly next"><span class="icon fa-chevron-down"></span></a>
					</div>
				</div>
			</article>
            
            <!-- Fourteen -->
			<article id="fourteen" class="post invert style1 alt">
				<div class="image">
					<img src="images/pica3-1.jpg" alt="" data-position="30% center" />
				</div>
				<div class="content">
					<div class="inner">
						<header>
							<h2>公司里程碑</h2>
							<p class="info">Company milestones</p>
						</header>
						<p>2024-前往日本參與通靈王大戰
<br>2019-公司參與台灣通靈王大戰。
<br>公司通過ISO 9001認證、培訓3名以上通靈人和1名通靈王。2018-公司內部培訓通靈人3名以上，可以承接超靈體。
<br>2016-於元月創辦了天道院科技有限公司，在台南市安定區落地生根、導入神明接觸做為公司營運基準。</p>
						<ul class="actions">
							<li><a href="a3.html" class="button alt">More+</a></li>
						</ul>
					</div>
					<div class="postnav">
						<a href="#one" class="scrolly prev"><span class="icon fa-chevron-up"></span></a>
						<a href="#eleven" class="scrolly next"><span class="icon fa-chevron-down"></span></a>
					</div>
				</div>
			</article>
            
         <!-- Eleven -->
			<article id="eleven" class="post style2">
				<div class="image">
					<img src="images/pic11-1.jpg" alt="" data-position="30% center" />
				</div>
				<div class="content">
					<div class="inner">
						<header>
							<h2>與神靈動</h2>
							<p class="info">Move with the spirit</p>
						</header>
						<p>「靈動」就是靈機一動。「靈體」必須透過「三魂」傳達到知覺「七魄」，才能讓肉體知道，這就是靈體對肉體傳達最直接的溝通與互動方式。 相對地，肉體也必須經由「心念」，傳輸到「三魂七魄」給靈體訊息，所以靈體就是肉體，肉體就是靈體，祂不是別人而是你自己，是一位與你共事、共管、共享、共存的夥伴。</p>
						<ul class="actions">
							<li><a href="p11.html" class="button alt">More+</a></li>
						</ul>
					</div>
					<div class="postnav">
						<a href="#fourteen" class="scrolly prev"><span class="icon fa-chevron-up"></span></a>
						<a href="#twelve" class="scrolly next"><span class="icon fa-chevron-down"></span></a>
					</div>
				</div>
			</article>

         <!-- Twelve -->
			<article id="twelve" class="post invert style2 alt">
				<div class="image">
					<img src="images/pic12-1.jpg" alt="" data-position="75% center" />
				</div>
				<div class="content">
					<div class="inner">
						<header>
							<h2>洩漏天璣</h2>
							<p class="info">Leaked Dimensity</p>
						</header>
						<p>奠基於因果論與宿命論之上，這是認為我們每個人的命運都是被註定好的，或是你前幾世造的因，這一世必然得果，利用巫力介入干預因果</p>
						<ul class="actions">
						  <li><a href="p12.html" class="button alt">More+</a></li>
						</ul>
					</div>
					<div class="postnav">
						<a href="#eleven" class="scrolly prev"><span class="icon fa-chevron-up"></span></a>
						<a href="#thirteen" class="scrolly next"><span class="icon fa-chevron-down"></span></a>
					</div>
				</div>
			</article>
         
         <!-- Thirteen -->
			<article id="thirteen" class="post style3">
				<div class="image">
					<img src="images/pic13-1.gif" alt="" data-position="30% center" />
				</div>
				<div class="content">
					<div class="inner">
						<header>
							<h2>惡靈退散</h2>
							<p class="info">Evil spirits disperse</p>
						</header>
						<p>惡靈退散指的是收驚的意思，

							幫助被嚇到的人或是不小心沖犯到神明，
							
							甚至有被邪靈附身所出現的怪事，
							
							都藉由乩童上身或是符水.咒語，
							
							來讓這些居民可以得到安心。
							
							不論咒語式或是符籙式及香米式的收驚程序，
							
							大約都是施者要先膜拜佛教、
							
							道教神祇請求幫忙、唸咒語及特定的手勢，
							
							咒語或咒語式為收驚必要程序，
							
							然後用來趕走這些不好的東西。
							</p>
						<ul class="actions">
							<li><a href="p13.html" class="button alt">More+</a></li>
						</ul>
					</div>
					<div class="postnav">
						<a href="#twelve" class="scrolly prev"><span class="icon fa-chevron-up"></span></a>
						<a href="#eight" class="scrolly next"><span class="icon fa-chevron-down"></span></a>
					</div>
				</div>
			</article> 
        
         <!-- Eight -->
			<article id="eight" class="post invert style3 alt">
				<div class="image">
					<img src="images/pic8-1.jpg" alt="" data-position="75% center" />
				</div>
				<div class="content">
					<div class="inner">
						<header>
							<h2>開啟天眼</h2>
							<p class="info">Open the eye of heaven</p>
						</header>
						<p>所謂天眼的功能，是能見肉眼所不能見的事物，除了不受大小、距離、明暗的限制外，也不受遮隔隱藏或通透顯露的限制，它不需通過光影的反映，而是精神力的反射或折射作用。 天眼有修得和報得的不同。 一般的鬼神都有深淺程度不等的天眼，稱為報得。 因為沒有肉體束縛的鬼神，只有靈力活動，減少了物體障礙</p>
						<ul class="actions">
						  <li><a href="p8.html" class="button alt">More+</a></li>
						</ul>
					</div>
					<div class="postnav">
						<a href="#thirteen" class="scrolly prev"><span class="icon fa-chevron-up"></span></a>
						<a href="#two" class="scrolly next"><span class="icon fa-chevron-down"></span></a>
					</div>
				</div>
			</article>
         
		<!-- Two -->
			<article id="two" class="post style1">
				<div class="image">
					<img src="images/pic2-1.png" alt="" data-position="10% center" />
				</div>
				<div class="content">
					<div class="inner">
						<header>
							<h2>寶石鑑定</h2>
							<p class="info">Network Engineering</p>
						</header>
						<p> 本中心提供完整的珠寶、寶石與礦物鑑定服務，除常見的鑽石、彩寶與翡翠玉石外，針對壽山石、雞血石、隕石、貴金屬等特殊檢驗項目均提供鑑定服務。本所證書可分三類，包含彩色寶石鑑定證書、鑽石分級證書與貴重金屬檢驗報告等。彩色寶石鑑定證書詳細描述寶石的品種、性質、優化處理或產地等資訊，可做為買賣雙方交易之參考；鑽石分級證書是將未鑲嵌的白鑽裸石以國際4C標準(顏色、重量、淨度與車工)分級後，詳載於報告上；貴重金屬檢驗報告則是清楚標示受測樣本的貴金屬成分分析結果。
							台灣聯合鑑定中心寶石鑑定證書封面呈現如紅寶般的豔麗紅色，封套內頁以英文、繁體中文、簡體中文以及日文等四種語言簡述本中心珠寶玉石鑑定報告的開立準則與法律聲明。本所證書內文均清楚標示物件的重量、尺寸、性質，且均標註是否經優化處理。</p>
						<ul class="actions">
							<li><a href="p2.html" class="button alt">More+</a></li>
						</ul>
					</div>
					<div class="postnav">
						<a href="#eight" class="scrolly prev"><span class="icon fa-chevron-up"></span></a>
						<a href="#three" class="scrolly next"><span class="icon fa-chevron-down"></span></a>
					</div>
				</div>
			</article>

		<!-- Three -->
			<article id="three" class="post invert style1 alt">
				<div class="image">
					<img src="images/pic3-1.gif" alt="" data-position="80% center" />
				</div>
				<div class="content">
					<div class="inner">
						<header>
							<h2>鑑定流程</h2>
							<p class="info">Fiber Engineering</p>
						</header>
						<p>01-

							​收/寄件人
							請填寫本公司收件人, 地址, 電話
							
							​與您的姓名, 地址, 電話
							
							<br>02-
							
							​日期
							收件時間請避開六日與國定假日
							
							<br>03-
							
							個人資訊
							請在包裹內附您個人的收件資訊
							
							(姓名, 電話, 地址)
							
							<br>04-
							
							​費用
							現金支付者請將費用宜並放入包裹
							
							​電子支付者 </p>
						<ul class="actions">
							<li><a href="p3.html" class="button alt">More+</a></li>
						</ul>
					</div>
					<div class="postnav">
						<a href="#two" class="scrolly prev"><span class="icon fa-chevron-up"></span></a>
						<a href="#four" class="scrolly next"><span class="icon fa-chevron-down"></span></a>
					</div>
				</div>
			</article>

		<!-- Four -->
			<article id="four" class="post style2">
				<div class="image">
					<img src="images/pic4-1.png" alt="" data-position="60% center" />
				</div>
				<div class="content">
					<div class="inner">
						<header>
							<h2>購買寶石</h2>
							<p class="info">Access control system</p>
						</header>
						<p>用絕美的閃耀光芒 記錄每一段旅程
							將鑽石完美鐫刻在珠寶上
							如同每個人生命中獨一無二的故事
							讓愛從現在到未來 幸福永續</p>
						<ul class="actions">
							<li><a href="p4.html" class="button alt">More+</a></li>
						</ul>
					</div>
					<div class="postnav">
						<a href="#three" class="scrolly prev"><span class="icon fa-chevron-up"></span></a>
						<a href="#five" class="scrolly next"><span class="icon fa-chevron-down"></span></a>
					</div>
				</div>
			</article>

		<!-- Five -->
			<!-- <article id="five" class="post invert style2 alt">
				<div class="image">
					<img src="http://www.blst.com.tw/images/pic5-1.jpg" alt="" data-position="50% center" />
				</div>
				<div class="content">
					<div class="inner">
						<header>
							<h2>監視系統</h2>
							<p class="info">Monitoring system</p>
						</header>
						<p>監視系統係由攝影機、儲存設備、IO模組及觸發元件、監控軟體等組合運用。
攝影機種類依據現場需求,有許多種選擇，如類比、AHD、TVI、SDI、IP……等。
儲存設備亦依據您所選擇之攝影機種類，會有不同的設備，如DVR、NVR或儲存伺服器…等
IO模組及觸發元件係依照現場需求設計添加，如紅外線感應、熱追蹤、門禁系統、警報器…等
監控軟體是將多支拍攝影像集合於一視窗內，並有多種複雜功能做監視及監控功能之軟件。
</p>
						<ul class="actions">
							<li><a href="p5.html" class="button alt">More+</a></li>
						</ul>
					</div>
					<div class="postnav">
						<a href="#four" class="scrolly prev"><span class="icon fa-chevron-up"></span></a>
						<a href="#six" class="scrolly next"><span class="icon fa-chevron-down"></span></a>
					</div>
				</div>
			</article>

			<article id="six" class="post style3">
				<div class="image">
					<img src="http://www.blst.com.tw/images/pic6-1.jpg" alt="" data-position="90% center" />
				</div>
				<div class="content">
					<div class="inner">
						<header>
							<h2>通訊系統</h2>
							<p class="info">Communication system</p>
						</header>
						<p>通訊系統區分為有線通訊及無線通訊，本公司服務範圍為有線通訊範圍。
通訊系統維電話總機系統之規劃及運用，電話總機有類比及數位2種，從過去的類比到現在的數位系統，變化極大，目前的數位系統有著簡單的運用到複雜的運用，係依照業主現場需求來設計規劃。
</p>
						<ul class="actions">
							<li><a href="p6.html" class="button alt">More+</a></li>
						</ul>
					</div>
					<div class="postnav">
						<a href="#five" class="scrolly prev"><span class="icon fa-chevron-up"></span></a>
						<a href="#seven" class="scrolly next"><span class="icon fa-chevron-down"></span></a>
					</div>
				</div>
			</article>
            
           
			<article id="seven" class="post invert style3 alt">
				<div class="image">
					<img src="http://www.blst.com.tw/images/pic7-1.jpg" alt="" data-position="5% center" />
				</div>
				<div class="content">
					<div class="inner">
						<header>
							<h2>智能系統</h2>
							<p class="info">Intelligent control system</p>
						</header>
						<p>智能控制系統所能控制的範圍非常廣泛，係依據控制元件及被控制元件或偵測元件，利用無線方式傳輸至客戶端，以APP軟件於手機、平板、PC等設備上來控制及監看。諸如影音、監視系統、戶外噴灌等等皆在系統可控制的範圍，並且是多功能的跨項目整合，不會大幅佔據您的空間。隨著科技的進步，我們可以為您做的人性化系統整合將會越來越多，讓您的生活越來越舒適，操作越來越簡單。</p>
						<ul class="actions">
							<li><a href="p7.html" class="button alt">More+</a></li>
						</ul>
					</div>
					<div class="postnav">
						<a href="#six" class="scrolly prev"><span class="icon fa-chevron-up"></span></a>
						<a href="#nine" class="scrolly next"><span class="icon fa-chevron-down"></span></a>
					</div>
				</div>
			</article>
            
                       
            
			<article id="nine" class="post style1">
				<div class="image">
					<img src="http://www.blst.com.tw/images/pic9-1.jpg" alt="" data-position="30% center" />
				</div>
				<div class="content">
					<div class="inner">
						<header>
							<h2>不斷電系統</h2>
							<p class="info">UPS power system</p>
						</header>
						<p>不斷電系統（或稱UPS，即 Uninterruptible Power Supply）是在電網異常（如停電、欠壓、干擾或浪湧「也稱：湧浪電流」）的情況下不間斷的為電器負載設備提供後備交流電源，維持電器正常運作的設備。</p>
						<ul class="actions">
							<li><a href="p9.html" class="button alt">More+</a></li>
						</ul>
					</div>
					<div class="postnav">
						<a href="#seven" class="scrolly prev"><span class="icon fa-chevron-up"></span></a>
						<a href="#ten" class="scrolly next"><span class="icon fa-chevron-down"></span></a>
					</div>
				</div>
			</article>

		
			<article id="ten" class="post invert style1 alt">
				<div class="image">
					<img src="http://www.blst.com.tw/images/pic10-1.jpg" alt="" data-position="30% center" />
				</div>
				<div class="content">
					<div class="inner">
						<header>
							<h2>綠能機房</h2>
							<p class="info">Green energy efficient room</p>
						</header>
						<p>在瞬息萬變的全球化時代，傳統的資料中心正面臨許多嚴峻挑戰，其中又以日益高漲的能源成本，讓企業IT機房維運所需能源成本，未來幾年將超過硬體投資。
事實上，資料中心在供電和散熱方面所面臨的嚴重挑戰，已成為主要的進步障礙。根據美國能源部2007年的統計，2000年以來美國各資料中心使用的電力已經增加了一倍以上，總電費達到約100億美元；2006年，美國伺服器和資料中心使用的電力估計達到590億度(kWh) ，與美國交通工具製造業(製造汽車、飛機、卡車和輪船)消耗的電力大致相當。</p>
						<ul class="actions">
							<li><a href="p10.html" class="button alt">More+</a></li>
						</ul>
					</div>
					<div class="postnav">
						<a href="#nine" class="scrolly prev"><span class="icon fa-chevron-up"></span></a>
						<a href="#" class="scrolly next disabled"><span class="icon fa-chevron-down"></span></a>
					</div>
				</div>
			</article> -->

		<!-- Footer -->
			<footer id="footer">
				<ul class="icons">
					<li><a href="https://www.facebook.com/BINGLONGSYSTEM/" class="icon fa-facebook" target="_blank"><span class="label">Facebook</span></a></li>
					<li><a href="mailto:service@blst.com.tw?subject=秉龍客服信箱" class="icon fa-envelope-o"><span class="label">Mail</span></a></li>
				        <br><a href="https://www.104.com.tw/company/1a2x6blgyo" class="button alt" target="_blank">加入我們 Join us!!</a>
                                </ul>
                                
				<div class="copyright">
                電話:(06)597-5349 傳真:(06)597-6720<br>
745台南市安定區港口241之10號<br>
					&copy; 2024 BLST.ALL RIGHTS RESERVED.
				</div>
			</footer>

		<!-- Scripts -->
		 <script src="http://www.blst.com.tw/assets/js/jquery.min.js"></script>
		<script src="http://www.blst.com.tw/assets/js/jquery.scrolly.min.js"></script>
		<script src="http://www.blst.com.tw/assets/js/skel.min.js"></script>
		<script src="http://www.blst.com.tw/assets/js/util.js"></script>
		<script src="http://www.blst.com.tw/assets/js/main.js"></script> 

	</body>
</html>