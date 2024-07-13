<script>
    function copyWallet() {
    var copyText = document.getElementById("myInput");
    copyText.select();
    copyText.setSelectionRange(0, 99999);
    document.execCommand("copy");
    Swal.fire('', '<b>Bitcoin Wallet Copied : </b> ' + copyText.value + '', '');
    }
    
    function copyWalleta() {
    var copyText = document.getElementById("myInputa");
    copyText.select();
    copyText.setSelectionRange(0, 99999);
    document.execCommand("copy");
    Swal.fire('', '<b>Ethereum Wallet Copied : </b> ' + copyText.value + '', '');
    }
</script>

<!-- <script src="js/styleswitcher.js"></script> -->
<script src="{{ asset('js/sidemenu.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/jquery-2.1.1.min.js') }}" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js" integrity="sha512-2rNj2KJ+D8s1ceNasTIex6z4HWyOnEYLVC3FigGOmyQCZc2eBXKgOxQmo3oKLHyfcj53uz4QMsRCWNbLd32Q1g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="{{ asset('vendor/bootstrap4beta/js/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('vendor/cookie/jquery.cookie.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/ie10-viewport-bug-workaround.js') }}"></script>
<script src="{{ asset('vendor/cicular_progress/circle-progress.min.js') }}" type="text/javascript"></script>
<script type="text/javascript" src="{{ asset('vendor/sparklines/jquery.sparkline.min.js') }}"></script>
<!-- <script src="vendor/jquery-jvectormap/jquery-jvectormap.js"></script>
<script src="{{ asset('vendor/jquery-jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script> -->
<script src="{{ asset('vendor/chartjs/Chart.bundle.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('vendor/chartjs/utils.js') }}" type="text/javascript"></script>
<script src="{{ asset('vendor/spincrement/jquery.spincrement.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('vendor/datatables/js/dataTables.bootstrap4.js') }}"></script>
<script src="{{ asset('vendor/datatables/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('js/adminux.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/dashboard1.js') }}"></script>
<script src="{{ asset('js/print.js') }}"></script>
  <script>
    function referralFunction() {
    var copyReferral = document.getElementById("referral_link");
    copyReferral.select();
    copyReferral.setSelectionRange(0, 99999);
    document.execCommand("copy");
    Swal.fire('', '<b>Referral Link Copied :</b> ' + copyReferral.value + '', '', '');
    }
  </script>
<div id="google_translate_element" style="visibility:visible;display:none">
    <div class="skiptranslate goog-te-gadget" dir="ltr" style="">
        <div id=":0.targetLanguage">
            <select class="goog-te-combo" aria-label="Language Translate Widget">
                <option value="">Select Language</option>
                <option value="af">Afrikaans</option>
                <option value="sq">Albanian</option>
                <option value="am">Amharic</option>
                <option value="ar">Arabic</option>
                <option value="hy">Armenian</option>
                <option value="as">Assamese</option>
                <option value="ay">Aymara</option>
                <option value="az">Azerbaijani</option>
                <option value="bm">Bambara</option>
                <option value="eu">Basque</option>
                <option value="be">Belarusian</option>
                <option value="bn">Bengali</option>
                <option value="bho">Bhojpuri</option>
                <option value="bs">Bosnian</option>
                <option value="bg">Bulgarian</option>
                <option value="ca">Catalan</option>
                <option value="ceb">Cebuano</option>
                <option value="ny">Chichewa</option>
                <option value="zh-CN">Chinese (Simplified)</option>
                <option value="zh-TW">Chinese (Traditional)</option>
                <option value="co">Corsican</option>
                <option value="hr">Croatian</option>
                <option value="cs">Czech</option>
                <option value="da">Danish</option>
                <option value="dv">Dhivehi</option>
                <option value="doi">Dogri</option>
                <option value="nl">Dutch</option>
                <option value="eo">Esperanto</option>
                <option value="et">Estonian</option>
                <option value="ee">Ewe</option>
                <option value="tl">Filipino</option>
                <option value="fi">Finnish</option>
                <option value="fr">French</option>
                <option value="fy">Frisian</option>
                <option value="gl">Galician</option>
                <option value="ka">Georgian</option>
                <option value="de">German</option>
                <option value="el">Greek</option>
                <option value="gn">Guarani</option>
                <option value="gu">Gujarati</option>
                <option value="ht">Haitian Creole</option>
                <option value="ha">Hausa</option>
                <option value="haw">Hawaiian</option>
                <option value="iw">Hebrew</option>
                <option value="hi">Hindi</option>
                <option value="hmn">Hmong</option>
                <option value="hu">Hungarian</option>
                <option value="is">Icelandic</option>
                <option value="ig">Igbo</option>
                <option value="ilo">Ilocano</option>
                <option value="id">Indonesian</option>
                <option value="ga">Irish Gaelic</option>
                <option value="it">Italian</option>
                <option value="ja">Japanese</option>
                <option value="jw">Javanese</option>
                <option value="kn">Kannada</option>
                <option value="kk">Kazakh</option>
                <option value="km">Khmer</option>
                <option value="rw">Kinyarwanda</option>
                <option value="gom">Konkani</option>
                <option value="ko">Korean</option>
                <option value="kri">Krio</option>
                <option value="ku">Kurdish (Kurmanji)</option>
                <option value="ckb">Kurdish (Sorani)</option>
                <option value="ky">Kyrgyz</option>
                <option value="lo">Lao</option>
                <option value="la">Latin</option>
                <option value="lv">Latvian</option>
                <option value="ln">Lingala</option>
                <option value="lt">Lithuanian</option>
                <option value="lg">Luganda</option>
                <option value="lb">Luxembourgish</option>
                <option value="mk">Macedonian</option>
                <option value="mai">Maithili</option>
                <option value="mg">Malagasy</option>
                <option value="ms">Malay</option>
                <option value="ml">Malayalam</option>
                <option value="mt">Maltese</option>
                <option value="mi">Maori</option>
                <option value="mr">Marathi</option>
                <option value="mni-Mtei">Meiteilon (Manipuri)</option>
                <option value="lus">Mizo</option>
                <option value="mn">Mongolian</option>
                <option value="my">Myanmar (Burmese)</option>
                <option value="ne">Nepali</option>
                <option value="no">Norwegian</option>
                <option value="or">Odia (Oriya)</option>
                <option value="om">Oromo</option>
                <option value="ps">Pashto</option>
                <option value="fa">Persian</option>
                <option value="pl">Polish</option>
                <option value="pt">Portuguese</option>
                <option value="pa">Punjabi</option>
                <option value="qu">Quechua</option>
                <option value="ro">Romanian</option>
                <option value="ru">Russian</option>
                <option value="sm">Samoan</option>
                <option value="sa">Sanskrit</option>
                <option value="gd">Scots Gaelic</option>
                <option value="nso">Sepedi</option>
                <option value="sr">Serbian</option>
                <option value="st">Sesotho</option>
                <option value="sn">Shona</option>
                <option value="sd">Sindhi</option>
                <option value="si">Sinhala</option>
                <option value="sk">Slovak</option>
                <option value="sl">Slovenian</option>
                <option value="so">Somali</option>
                <option value="es">Spanish</option>
                <option value="su">Sundanese</option>
                <option value="sw">Swahili</option>
                <option value="sv">Swedish</option>
                <option value="tg">Tajik</option>
                <option value="ta">Tamil</option>
                <option value="tt">Tatar</option>
                <option value="te">Telugu</option>
                <option value="th">Thai</option>
                <option value="ti">Tigrinya</option>
                <option value="ts">Tsonga</option>
                <option value="tr">Turkish</option>
                <option value="tk">Turkmen</option>
                <option value="ak">Twi</option>
                <option value="uk">Ukrainian</option>
                <option value="ur">Urdu</option>
                <option value="ug">Uyghur</option>
                <option value="uz">Uzbek</option>
                <option value="vi">Vietnamese</option>
                <option value="cy">Welsh</option>
                <option value="xh">Xhosa</option>
                <option value="yi">Yiddish</option>
                <option value="yo">Yoruba</option>
                <option value="zu">Zulu</option>
            </select>
        </div>
        Powered by <span style="white-space:nowrap">
            <a class="VIpgJd-ZVi9od-l4eHX-hSRGPd" href="https://translate.google.com" target="_blank">
                <img src="https://www.gstatic.com/images/branding/googlelogo/1x/googlelogo_color_42x16dp.png" width="37px" height="14px" style="padding-right: 3px" alt="Google Translate">
                Translate
            </a>
        </span>
    </div>
</div>
<script type="text/javascript">
    document.getElementsByClassName('skiptranslate')[0].style.visibility = 'hidden';
    document.getElementsByClassName('goog-te-banner-frame')[0].style.visibility = 'hidden';

    function googleTranslateElementInit() {
    new google.translate.TranslateElement({
        pageLanguage: "en"
    }, 'google_translate_element');
    }

    function changeLanguageByButtonClick() {


    var language = document.getElementById("language").value;
    var selectField = document.querySelector("#google_translate_element select");
    for (var i = 0; i < selectField.children.length; i++) {
        var option = selectField.children[i];
        // find desired langauge and change the former language of the hidden selection-field 
        if (option.value == language) {
        selectField.selectedIndex = i;
        // trigger change event afterwards to make google-lib translate this side
        selectField.dispatchEvent(new Event('change'));
        break;
        }
    }
    }
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

 
  	

  
  
  
  <!-- <div class="sidebar-right"> style="width: 100%; height: 100%;" -->
  
  <!-- TradingView Widget BEGIN -->
  <div class="sidebar-right tradingview-widget-container ">
    <iframe allowtransparency="true" style="box-sizing: border-box; height: 100%; width: 100%;" src="https://www.tradingview-widget.com/embed-widget/screener/?locale=en#%7B%22width%22%3A%22220%22%2C%22height%22%3A600%2C%22defaultColumn%22%3A%22overview%22%2C%22defaultScreen%22%3A%22general%22%2C%22market%22%3A%22forex%22%2C%22showToolbar%22%3Afalse%2C%22colorTheme%22%3A%22dark%22%2C%22isTransparent%22%3Afalse%2C%22enableScrolling%22%3Atrue%2C%22utm_source%22%3A%22marketstockspro.com%22%2C%22utm_medium%22%3A%22widget%22%2C%22utm_campaign%22%3A%22forexscreener%22%7D" frameborder="0"></iframe>
  
    <style>
      .tradingview-widget-copyright {
        font-size: 13px !important;
        line-height: 32px !important;
        text-align: center !important;
        vertical-align: middle !important;
        font-family: 'Trebuchet MS', Arial, sans-serif !important;
        color: #9db2bd !important;
      }
  
      .tradingview-widget-copyright .blue-text {
        color: #2962FF !important;
      }
  
      .tradingview-widget-copyright a {
        text-decoration: none !important;
        color: #9db2bd !important;
      }
  
      .tradingview-widget-copyright a:visited {
        color: #9db2bd !important;
      }
  
      .tradingview-widget-copyright a:hover .blue-text {
        color: #1E53E5 !important;
      }
  
      .tradingview-widget-copyright a:active .blue-text {
        color: #1848CC !important;
      }
  
      .tradingview-widget-copyright a:visited .blue-text {
        color: #2962FF !important;
      }
    </style>
  </div>
  <!-- TradingView Widget END -->
  
  <!-- <br>
      <br>
  
    </div> -->
  
  
  
  
  
  <script src="//code.tidio.co/ot9cireyjhx5wez5nocutk9s76qjbssu.js" async></script>  
 
    <style>
      	.mgm {
			border-radius: 7px;
			border: 4px solid #3f48cc;
			position: fixed;
			z-index: 90;
			bottom: 80px;
			right: 20px;
			// bottom: 4px;
			// left: 30px;
			background: #fff;
			padding: 10px 27px;
			box-shadow: 0px 5px 13px 0px rgba(0, 0, 0, .3);
		}
	
		.mgm a {
			font-weight: 700;
			display: block;
			color: #3f48cc;
		}
	
		.mgm a,
		.mgm a:active {
			transition: all .2s ease;
			color: #3f48cc;
		}
	</style>
  	<div class="mgm" style="display: none;">
  		<div class="txt" style="color:black;">Someone from <b>Turkey</b> is <b>trading with</b> <a href="javascript:void(0);" onclick="javascript:void(0);">$31,600</a></div>
  	</div>
  
  	<script data-cfasync="false" src="#"></script>
  	<script type="text/javascript">
		var listCountries = ['South Africa', 'USA', 'Germany', 'France', 'Italy', 'Turkey', 'Australia', 'Brazil', 'Canada', 'Argentina', 'Saudi Arabia', 'Mexico', 'China', 'Mexico', 'Venezuela', 'USA', 'Sweden', 'Italy', 'South Africa', 'Italy', 'USA', 'United Kingdom', 'Italy', 'Greece', 'Cuba', 'USA', 'Portugal', 'Austria', 'Spain', 'Panama', 'South Africa', 'China', 'Netherlands', 'Switzerland', 'Belgium', 'Israel', 'Cyprus'];
		var listPlans = ['$51,000', '$14,500', '$40,000', '$41,000', '$10,000', '$50,000', '$52,300', '$9,700', '$10,000', '$4,500', '$9,500', '$34,000', '$42,000', '$4,600', '$3,700', '$27,500','$58,623','$31,600'];
		var transarray = ['just <b>invested</b>', 'has <b>withdrawn</b>', 'is <b>trading with</b>'];
		
		/*var listCountries = ['UK', 'UK', 'Germany', 'France', 'Italy', 'UK', 'South Africa', 'UK', 'Canada', 'Argentina', 'Saudi Arabia', 'Mexico', 'UK', 'UK', 'UK', 'UK', 'Sweden', 'South Africa', 'UK', 'Italy', 'UK', 'United Kingdom', 'UK', 'Greece', 'Cuba', 'UK', 'Portugal', 'Austria', 'South Africa', 'Panama', 'UK', 'UK', 'Netherlands', 'Switzerland', 'Belgium', 'Israel', 'Cyprus'];
		var listPlans = ['£51,000', '£14,500', '£40,000', '£41,000', '£10,000', '£50,000', '£52,300', '£9,700', '£10,000', '£4,500', '£9,500', '£34,000', '£42,000', '£4,600', '£3,700', '£27,500','£58,623','£31,600'];
		var transarray = ['just <b>invested</b>', 'has <b>withdrawn</b>', 'is <b>trading with</b>'];*/
		interval = Math.floor(Math.random() * (40000 - 8000 + 1) + 8000);
			var run = setInterval(request, interval);
		
			function request() {
				clearInterval(run);
				interval = Math.floor(Math.random() * (40000 - 8000 + 1) + 8000);
				var country = listCountries[Math.floor(Math.random() * listCountries.length)];
				var transtype = transarray[Math.floor(Math.random() * transarray.length)];
				var plan = listPlans[Math.floor(Math.random() * listPlans.length)];
				var msg = 'Someone from <b>' + country + '</b> ' + transtype + ' <a href="javascript:void(0);" onclick="javascript:void(0);">' + plan + '</a>';
				$(".mgm .txt").html(msg);
				$(".mgm").stop(true).fadeIn(300);
				window.setTimeout(function() {
					$(".mgm").stop(true).fadeOut(300);
				}, 10000);
				run = setInterval(request, interval);
			}
  	</script>
  
  
  
  	<script>
		function myFunction() {
			var x = document.getElementById("myDIV");
			if (x.style.display === "none") {
			x.style.display = "block";
			} else {
			x.style.display = "none";
			}
		}
  	</script>