<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
<?php 
foreach($css_files as $file): ?>
    <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
 
<?php endforeach; ?>
<?php foreach($js_files as $file): ?>
 
    <script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>

	<meta charset="utf-8">
	<title>لوحة تحكم المدرب</title>
  <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?=site_url()?>assets/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=site_url()?>assets/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?=site_url()?>assets/dist/css/skins/_all-skins.min.css">
	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
	 <style>
    .color-palette {
      height: 35px;
      line-height: 35px;
      text-align: center;
    }

    .color-palette-set {
      margin-bottom: 15px;
    }

    .color-palette span {
      display: none;
      font-size: 12px;
    }

    .color-palette:hover span {
      display: block;
    }

    .color-palette-box h4 {
      position: absolute;
      top: 100%;
      left: 25px;
      margin-top: -40px;
      color: rgba(255, 255, 255, 0.8);
      font-size: 12px;
      display: block;
      z-index: 7;
    }
  </style>
</head>
<body>



<body class="hold-transition skin-blue sidebar-mini" style="direction: rtl;">
        <script type="text/javascript">
        var arabicCountries = {
Afghanistan: "أفغانستان",
Albania: "ألبانيا",
Algeria: "الجزائر",
American Samoa: "ساموا-الأمريكي",
Andorra: "أندورا",
Angola: "أنغولا",
Anguilla: "أنغويلا",
Antarctica: "أنتاركتيكا",
Antigua and Barbuda: "أنتيغوا وبربودا",
Argentina: "الأرجنتين",
Armenia: "أرمينيا",
Aruba: "أروبه",
Australia: "أستراليا",
Austria: "النمسا",
Azerbaijan: "أذربيجان",
Bahamas: "الباهاماس",
Bahrain: "البحرين",
Bangladesh: "بنغلاديش",
Barbados: "بربادوس",
Belarus: "روسيا البيضاء",
Belgium: "بلجيكا",
Belize: "بيليز",
Benin: "بنين",
Bermuda: "جزر برمودا",
Bhutan: "بوتان",
Bolivia: "بوليفيا",
Bosnia and Herzegovina: "البوسنة و الهرسك",
Botswana: "بوتسوانا",
Brazil: "البرازيل",
Brunei Darussalam: "بروني",
Bulgaria: "بلغاريا",
Burkina Faso: "بوركينا فاسو",
Burundi: "بوروندي",
Cambodia: "كمبوديا",
Cameroon: "كاميرون",
Canada: "كندا",
Cape Verde: "الرأس الأخضر",
Cayman Islands: "Not Available",
Central African Republic: "جمهورية أفريقيا الوسطى",
Chad: "تشاد",
Chile: "شيلي",
China: "جمهورية الصين الشعبية",
Colombia: "كولومبيا",
Comoros: "جزر القمر",
Democratic Republic: "جمهورية الكونغو الديمقراطية",
of the Congo (Kinshasa): "Not Available",
Congo, Republic of (Brazzaville): "جمهورية الكونغو",
Cook Islands: "جزر كوك",
Costa Rica: "كوستاريكا",
Cote dIvoire: "ساحلالعاج",
Croatia: "كرواتيا",
Cuba: "كوبا",
Cyprus: "قبرص",
Czech Republic: "الجمهوريةالتشيكية",
Denmark: "الدانمارك",
Djibouti: "جيبوتي",
Dominica: "دومينيكا",
Dominican Republic: "الجمهوريةالدومينيكية",
East Timor Timor-Leste: "تيمورالشرقية",
Ecuador: "إكوادور",
Egypt: "مصر",
El Salvador: "إلسلفادور",
Equatorial Guinea: "غينياالاستوائي",
Eritrea: "إريتريا",
Estonia: "استونيا",
Ethiopia: "أثيوبيا",
Falkland Islands: "NotAvailable",
FaroeIslands: "جزرفارو",
Fiji: "فيجي",
Finland: "فنلندا",
France: "فرنسا",
FrenchGuiana: "غوياناالفرنسية",
FrenchPolynesia: "بولينيزياالفرنسية",
Gabon: "الغابون",
Gambia: "غامبيا",
Georgia: "جيورجيا",
Germany: "ألمانيا",
Ghana: "غانا",
Gibraltar: "جبلطارق",
Greece: "اليونان",
Greenland: "جرينلاند",
Grenada: "غرينادا",
Guadeloupe: "جزرجوادلوب",
Guam: "جوام",
Guatemala: "غواتيمال",
Guinea: "غينيا",
Guinea-Bissau: "غينيا-بيساو",
Guyana: "غيانا",
Haiti: "هايتي",
Honduras: "هندوراس",
HongKong: "هونغكونغ",
Hungary: "المجر",
Iceland: "آيسلندا",
India: "الهند",
Indonesia: "أندونيسيا",
Iran: "إيران",
Iraq: "العراق",
Ireland: "إيرلندا",
Israel: "إسرائيل",
Italy: "إيطاليا",
Jamaica: "جمايكا",
Japan: "اليابان",
Jordan: "الأردن",
Kazakhstan: "كازاخستان",
Kenya: "كينيا",
Kiribati: "كيريباتي",
Korea, (NorthKorea): "كورياالشمالية",
Korea, (SouthKorea): "كورياالجنوبية",
Kuwait: "الكويت",
Kyrgyzstan: "قيرغيزستان",
Lao, PDR: "لاوس",
Latvia: "لاتفيا",
Lebanon: "لبنان",
Lesotho: "ليسوتو",
Liberia: "ليبيريا",
Libya: "ليبيا",
Liechtenstein: "ليختنشتين",
"Lithuania: "لتوانيا",
Luxembourg: "لوكسمبورغ",
Macao: "ماكاو",
Macedonia, Rep.of: "مقدونيا",
Madagascar: "مدغشقر",
Malawi: "مالاوي",
Malaysia: "ماليزيا",
Maldives: "المالديف",
Mali: "مالي",
Malta: "مالطا",
MarshallIslands: "جزرمارشال",
Martinique: "مارتينيك",
Mauritania: "موريتانيا",
Mauritius: "موريشيوس",
Mexico: "المكسيك",
Micronesia: "مايكرونيزيا",
Moldova: "مولدافيا",
Monaco: "موناكو",
Mongolia: "منغوليا",
Montenegro: "الجبلالأسو",
Montserrat: "مونتسيرات",
Morocco: "المغرب",
Mozambique: "موزمبيق",
Myanmar, Burma: "ميانمار",
Namibia: "ناميبيا",
Nauru: "نورو",
Nepal: "نيبال",
Netherlands: "هولندا",
Netherlands Antilles: "جزرالأنتيلالهولندي",
NewCaledonia: "كاليدونياالجديدة",
NewZealand: "نيوزيلندا",
Nicaragua: "نيكاراجوا",
Niger: "النيجر",
Nigeria: "نيجيريا",
Niue: "ني",
Northern Mariana Islands: "جزرمارياناالشمالية",
Norway: "النرويج",
Oman: "عُمان",
Pakistan: "باكستان",
Palau: "بالاو",
Palestine: "فلسطين",
Panama: "بنما",
Papua New Guinea: "بابواغينياالجديدة",
Paraguay: "باراغواي",
Peru: "بيرو",
Philippines: "الفليبين",
Poland: "بولونيا",
Portugal: "البرتغال",
PuertoRico: "بورتوريكو",
Qatar: "قطر",
Reunion Island: "ريونيون",
Romania: "رومانيا",
Russia: "روسيا",
Rwanda: "رواندا",
SaintKittsandNevis: "سانتكيتسونيفس",
SaintLucia: "سانتلوسيا",
SaintVincentandthe: "سانتفنسنتوجزرغرينادين",
Grenadines: "NotAvailable",
Samoa: "المناطق",
SanMarino: "سانمارينو",
Sao Tome and Príncipe: "ساوتوميوبرينسيبي",
Saudi Arabia: "المملكةالعربيةالسعودية",
Senegal: "السنغال",
Serbia: "جمهوريةصربيا",
Seychelles: "سيشيل",
SierraLeone: "سيراليون",
Singapore: "سنغافورة",
Slovakia: "سلوفاكيا",
Slovenia: "سلوفينيا",
Solomon Islands: "جزرسليمان",
Somalia: "الصومال",
South Africa: "جنوبأفريقيا",
Spain: "إسبانيا",
SriLanka: "سريلانكا",
Sudan: "السودان",
Suriname: "سورينام",
Swaziland: "سوازيلند",
Sweden: "السويد",
Switzerland: "سويسرا",
Syria: "سوريا",
Taiwan: "تايوان",
Tajikistan: "طاجيكستان",
Tanzania: "تنزانيا",
Thailand: "تايلندا",
Tibet: "تبت",
Timor-Leste(EastTimor): "تيمورالشرقية",
Togo: "توغو",
Tokelau: "NotAvailable",
Tonga: "تونغا",
Trinidad and Tobago: "ترينيدادوتوباغو",
Tunisia: "تونس",
Turkey: "تركيا",
Turkmenistan: "تركمانستان",
Tuvalu: "توفالو",
Uganda: "أوغندا",
Ukraine: "أوكرانيا",
United Arab Emirates: "الإماراتالعرب",
United Kingdom: "المملكةالمتحدة",
United States: "الولاياتالمتحدة",
Uruguay: "أورغواي",
Uzbekistan: "أوزباكستان",
Vanuatu: "فانواتو",
VaticanCityState: "الفاتيكان",
Venezuela: "فنزويلا",
Vietnam: "فيتنام",
VirginIslands(British): "الجزرالعذراءالبريطانية",
VirginIslands(U.S.): "الجزرالعذراءالأمريكي",
Wallisand: "والسوفوتونا",
FutunaIslands: "NotAvailable",
WesternSahara: "الصحراءالغربية",
Yemen: "اليمن",
Zambia: "زامبيا",
Zimbabwe: "زمبابوي"
}";

(JSON.parse(arabicCountries));
        </script>
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?=site_url("admin")?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini">المدرب</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>المدرب</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
         
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?=site_url()?>assets/dist/img/user-image.png" class="user-image" alt="User Image">
              <span class="hidden-xs"><?=$this->session->userdata('logged_in')["username"];?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?=site_url()?>assets/dist/img/user-image.png" class="img-circle" alt="User Image">

                <p>
                  <?=$this->session->userdata('logged_in')["username"];?>
                </p>
              </li>
              <!-- Menu Body -->
             
              <!-- Menu Footer-->
              <li class="user-footer">
               
                <div class="pull-right">
                  <a href="<?=site_url('login/logout')?>" class="btn btn-default btn-flat">تسجيل الخروج</a>
                </div>
              </li>
            </ul>
          </li>
         
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?=site_url()?>assets/dist/img/user-image.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?=$this->session->userdata('logged_in')["username"];?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> متصل</a>
        </div>
      </div>
      




      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">القائمة الرئيسية</li>
        <li class="treeview">
          <a href="<?=site_url('admin/author')?>">
            <i class="fa fa-dashboard"></i> <span>بيانات المدرب</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
		  </li>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?=$title?>
        
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- COLOR PALETTE -->
      <div class="box box-default color-palette-box">
        <div class="box-header with-border">
          <h3 class="box-title"><i class="fa fa-tag"></i> <?=$title?></h3>
        </div>
        <div class="box-body">
          <div class="row" style="display:inline;">
           <?=$output?>
          </div>
          <!-- /.row -->
         
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    
     
    
   

     
      
 
  <!-- Control Sidebar -->
  <!--<aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
   
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<!--<script src="<?=site_url()?>assets/plugins/jQuery/jquery-2.2.3.min.js"></script>-->
<!-- Bootstrap 3.3.6 -->
<script src="<?=site_url()?>assets/bootstrap/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="<?=site_url()?>assets/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?=site_url()?>assets/dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?=site_url()?>assets/dist/js/demo.js"></script>
</body>

</body>
</html>