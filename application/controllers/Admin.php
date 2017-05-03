<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin extends CI_Controller {

    function __construct() {
        parent::__construct();
        if (!$this->session->userdata('modarebLogin')) {
            redirect('login', 'refresh');
        }
    }

    function index() {
        redirect('admin/author', 'refresh');
    }

    function author() {
        $crud = new grocery_CRUD();

        $crud->set_table('author');
        $crud->set_crud_url_path(site_url('admin/author'));
        $crud->unset_fields('CreateDate', 'UpdateDate');
        $crud->unset_columns(array('Password'));
        $crud->set_field_upload('Picture', 'assets\uploads\Pic');
        $crud->set_field_upload('CV', 'assets\uploads\CV');
        $crud->set_subject("مؤلف");
        $crud->unset_add();
        $crud->unset_delete();
        $crud->display_as('UserName', 'إسم المستخدم');
        $crud->display_as('Name', 'الإسم');
        $crud->display_as('speciality', 'التخصص');
        $crud->display_as('About', 'عن المدرب');
        $crud->display_as('Email', 'البريد الإلكترونى');
        $crud->display_as('Picture', 'الصورة');
        $crud->display_as('Phone', 'الجوال');
        $crud->display_as('Twitter', 'تويتر');
        $crud->display_as('Facebook', 'الفيسبوك');
        $crud->display_as('Snapchat', 'سناب شات');
        $crud->display_as('Youtube', 'يوتيوب');
        $crud->display_as('CV', 'السيرة الذاتية');
        $crud->display_as('Instagram', 'إنستاجرام');
        $crud->display_as('UpdateDate', 'تاريخ التعديل');
        $crud->display_as('CreateDate', 'تاريخ الانشاء ');

        $output = $crud->render();
        $output->title = "بيانات المدرب";
        $this->load->view('admin', $output);
    }
    function test(){
   $countries ="
Afghanistan: أفغانستان,
Albania: ألبانيا,
Algeria: الجزائر,
American Samoa: ساموا-الأمريكي,
Andorra: أندورا,
Angola: أنغولا,
Anguilla: أنغويلا,
Antarctica: أنتاركتيكا,
Antigua and Barbuda: أنتيغوا وبربودا,
Argentina: الأرجنتين,
Armenia: أرمينيا,
Aruba: أروبه,
Australia: أستراليا,
Austria: النمسا,
Azerbaijan: أذربيجان,
Bahamas: الباهاماس,
Bahrain: البحرين,
Bangladesh: بنغلاديش,
Barbados: بربادوس,
Belarus: روسيا البيضاء,
Belgium: بلجيكا,
Belize: بيليز,
Benin: بنين,
Bermuda: جزر برمودا,
Bhutan: بوتان,
Bolivia: بوليفيا,
Bosnia and Herzegovina: البوسنة و الهرسك,
Botswana: بوتسوانا,
Brazil: البرازيل,
Brunei Darussalam: بروني,
Bulgaria: بلغاريا,
Burkina Faso: بوركينا فاسو,
Burundi: بوروندي,
Cambodia: كمبوديا,
Cameroon: كاميرون,
Canada: كندا,
Cape Verde: الرأس الأخضر,
Cayman Islands: Not Available,
Central African Republic: جمهورية أفريقيا الوسطى,
Chad: تشاد,
Chile: شيلي,
China: جمهورية الصين الشعبية,
Colombia: كولومبيا,
Comoros: جزر القمر,
Democratic Republic: جمهورية الكونغو الديمقراطية,
of the Congo (Kinshasa): Not Available,
Congo, Republic of (Brazzaville): جمهورية الكونغو,
Cook Islands: جزر كوك,
Costa Rica: كوستاريكا,
Cote dIvoire: ساحلالعاج,
Croatia: كرواتيا,
Cuba: كوبا,
Cyprus: قبرص,
Czech Republic: الجمهوريةالتشيكية,
Denmark: الدانمارك,
Djibouti: جيبوتي,
Dominica: دومينيكا,
Dominican Republic: الجمهوريةالدومينيكية,
East Timor Timor-Leste: تيمورالشرقية,
Ecuador: إكوادور,
Egypt: مصر,
El Salvador: إلسلفادور,
Equatorial Guinea: غينياالاستوائي,
Eritrea: إريتريا,
Estonia: استونيا,
Ethiopia: أثيوبيا,
Falkland Islands: NotAvailable,
FaroeIslands: جزرفارو,
Fiji: فيجي,
Finland: فنلندا,
France: فرنسا,
FrenchGuiana: غوياناالفرنسية,
FrenchPolynesia: بولينيزياالفرنسية,
Gabon: الغابون,
Gambia: غامبيا,
Georgia: جيورجيا,
Germany: ألمانيا,
Ghana: غانا,
Gibraltar: جبلطارق,
Greece: اليونان,
Greenland: جرينلاند,
Grenada: غرينادا,
Guadeloupe: جزرجوادلوب,
Guam: جوام,
Guatemala: غواتيمال,
Guinea: غينيا,
Guinea-Bissau: غينيا-بيساو,
Guyana: غيانا,
Haiti: هايتي,
Honduras: هندوراس,
HongKong: هونغكونغ,
Hungary: المجر,
Iceland: آيسلندا,
India: الهند,
Indonesia: أندونيسيا,
Iran: إيران,
Iraq: العراق,
Ireland: إيرلندا,
Israel: إسرائيل,
Italy: إيطاليا,
Jamaica: جمايكا,
Japan: اليابان,
Jordan: الأردن,
Kazakhstan: كازاخستان,
Kenya: كينيا,
Kiribati: كيريباتي,
Korea, (NorthKorea): كورياالشمالية,
Korea, (SouthKorea): كورياالجنوبية,
Kuwait: الكويت,
Kyrgyzstan: قيرغيزستان,
Lao, PDR: لاوس,
Latvia: لاتفيا,
Lebanon: لبنان,
Lesotho: ليسوتو,
Liberia: ليبيريا,
Libya: ليبيا,
Liechtenstein: ليختنشتين,
Lithuania: لتوانيا,
Luxembourg: لوكسمبورغ,
Macao: ماكاو,
Macedonia, Rep.of: مقدونيا,
Madagascar: مدغشقر,
Malawi: مالاوي,
Malaysia: ماليزيا,
Maldives: المالديف,
Mali: مالي,
Malta: مالطا,
MarshallIslands: جزرمارشال,
Martinique: مارتينيك,
Mauritania: موريتانيا,
Mauritius: موريشيوس,
Mexico: المكسيك,
Micronesia: مايكرونيزيا,
Moldova: مولدافيا,
Monaco: موناكو,
Mongolia: منغوليا,
Montenegro: الجبلالأسو,
Montserrat: مونتسيرات,
Morocco: المغرب,
Mozambique: موزمبيق,
Myanmar, Burma: ميانمار,
Namibia: ناميبيا,
Nauru: نورو,
Nepal: نيبال,
Netherlands: هولندا,
Netherlands Antilles: جزرالأنتيلالهولندي,
NewCaledonia: كاليدونياالجديدة,
NewZealand: نيوزيلندا,
Nicaragua: نيكاراجوا,
Niger: النيجر,
Nigeria: نيجيريا,
Niue: ني,
Northern Mariana Islands: جزرمارياناالشمالية,
Norway: النرويج,
Oman: عُمان,
Pakistan: باكستان,
Palau: بالاو,
Palestine: فلسطين,
Panama: بنما,
Papua New Guinea: بابواغينياالجديدة,
Paraguay: باراغواي,
Peru: بيرو,
Philippines: الفليبين,
Poland: بولونيا,
Portugal: البرتغال,
PuertoRico: بورتوريكو,
Qatar: قطر,
Reunion Island: ريونيون,
Romania: رومانيا,
Russia: روسيا,
Rwanda: رواندا,
SaintKittsandNevis: سانتكيتسونيفس,
SaintLucia: سانتلوسيا,
SaintVincentandthe: سانتفنسنتوجزرغرينادين,
Grenadines: NotAvailable,
Samoa: المناطق,
SanMarino: سانمارينو,
Sao Tome and Príncipe: ساوتوميوبرينسيبي,
Saudi Arabia: المملكةالعربيةالسعودية,
Senegal: السنغال,
Serbia: جمهوريةصربيا,
Seychelles: سيشيل,
SierraLeone: سيراليون,
Singapore: سنغافورة,
Slovakia: سلوفاكيا,
Slovenia: سلوفينيا,
Solomon Islands: جزرسليمان,
Somalia: الصومال,
South Africa: جنوبأفريقيا,
Spain: إسبانيا,
SriLanka: سريلانكا,
Sudan: السودان,
Suriname: سورينام,
Swaziland: سوازيلند,
Sweden: السويد,
Switzerland: سويسرا,
Syria: سوريا,
Taiwan: تايوان,
Tajikistan: طاجيكستان,
Tanzania: تنزانيا,
Thailand: تايلندا,
Tibet: تبت,
Timor-Leste(EastTimor): تيمورالشرقية,
Togo: توغو,
Tokelau: NotAvailable,
Tonga: تونغا,
Trinidad and Tobago: ترينيدادوتوباغو,
Tunisia: تونس,
Turkey: تركيا,
Turkmenistan: تركمانستان,
Tuvalu: توفالو,
Uganda: أوغندا,
Ukraine: أوكرانيا,
United Arab Emirates: الإماراتالعرب,
United Kingdom: المملكةالمتحدة,
United States: الولاياتالمتحدة,
Uruguay: أورغواي,
Uzbekistan: أوزباكستان,
Vanuatu: فانواتو,
VaticanCityState: الفاتيكان,
Venezuela: فنزويلا,
Vietnam: فيتنام,
VirginIslands(British): الجزرالعذراءالبريطانية,
VirginIslands(U.S.): الجزرالعذراءالأمريكي,
Wallisand: والسوفوتونا,
FutunaIslands: NotAvailable,
WesternSahara: الصحراءالغربية,
Yemen: اليمن,
Zambia: زامبيا,
Zimbabwe: زمبابوي";
   
   $splitted_countries = explode(',',$countries);
echo '<pre>';
   print_r($splitted_countries);
    echo '</pre>';
}

}

?>