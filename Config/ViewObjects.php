<?php return
[
    //--------------------------------------------------------------------------------------------------
    // View Objects
    //--------------------------------------------------------------------------------------------------
    //
    // Author     : Ozan UYKUN <ozanbote@windowslive.com> | <ozanbote@gmail.com>
    // Site       : www.znframework.com
    // License    : The MIT License
    // Copyright  : Copyright (c) 2012-2016, ZN Framework
    //
    //--------------------------------------------------------------------------------------------------

    //--------------------------------------------------------------------------------------------------
    // Wizard
    //--------------------------------------------------------------------------------------------------
    //
    // Genel Kullanımı: Şablon sihirbazının hangi yapıları ayrıştıracağını belirtmek için kullanılır.
    //
    // keywords : for, if, while, foreach gibi kullanımlara izin ver.
    // printable: @@function:, @variable: kullanımına izin ver.
    // functions: @function: kullanımına izin ver.
    // comments : {-- yorum satırı --} kullanımına izin ver.
    // tags     : {[ php codes ]} php tagları olarak kullanımına izin ver.
    // html     : #html kodlarını # kare symbolü ile kullanıma izin ver.
    //
    //--------------------------------------------------------------------------------------------------
    'wizard' =>
    [
        'keywords'  => true,
        'printable' => true,
        'functions' => true,
        'comments'  => true,
        'tags'      => true,
        'html'      => false
    ],

    //--------------------------------------------------------------------------------------------------
    // Pagination
    //--------------------------------------------------------------------------------------------------
    //
    // Genel Kullanımı: Ön tanımlı sayfalama ayarı yapmak için kullanılır.
    //
    //--------------------------------------------------------------------------------------------------
    'pagination' =>
    [
        'prevName'      => '<',
        'nextName'      => '>',
        'firstName'     => '<<',
        'lastName'      => '>>',

        'totalRows'     => 50,
        'start'         => NULL,
        'limit'         => 10,
        'countLinks'    => 10,
        'type'          => 'classic', // classic, ajax

        'class' =>
        [
            'current'   => '',
            'links'     => '',
            'prev'      => '',
            'next'      => '',
            'last'      => '',
            'first'     => ''
        ],

        'style' =>
        [
            'current'   => '',
            'links'     => '',
            'prev'      => '',
            'next'      => '',
            'last'      => '',
            'first'     => ''
        ]
    ],

    //--------------------------------------------------------------------------------------------------
    // Captcha
    //--------------------------------------------------------------------------------------------------
    //
    // Genel Kullanımı: Ön tanımlı güvenlik kodu ayarı yapmak için kullanılır.
    //
    //--------------------------------------------------------------------------------------------------
    'captcha' =>
    [
        'text' =>
        [
            'length' => 6,
            'color'  => '255|255|255',
            'size'   => 10,
            'x'      => 65,
            'y'      => 13,
            'angle'  => 0,
            'ttf'    => []
        ],

        'background' =>
        [
            'color' => '80|80|80',
            'image' => []
        ],

        'border' =>
        [
            'status' => false,
            'color'  => '0|0|0'
        ],

        'size' =>
        [
            'width'  => 180,
            'height' => 40
        ],

        'grid' =>
        [
            'status' => true,
            'color'  => '50|50|50',
            'spaceX' => 12,
            'spaceY' => 4
        ]
    ],

    //--------------------------------------------------------------------------------------------------
    // Calendar
    //--------------------------------------------------------------------------------------------------
    //
    // Genel Kullanımı: Ön tanımlı takvim ayarı yapmak için kullanılır.
    //
    //--------------------------------------------------------------------------------------------------
    'calendar' =>
    [
        'prevName'      => '<<',
        'nextName'      => '>>',
        'dayType'       => 'short',
        'monthType'     => 'long',
        'type'          => 'classic', // classic, ajax

        'class' =>
        [
            'table'     => '',
            'monthName' => '',
            'dayName'   => '',
            'days'      => '',
            'links'     => '',
            'current'   => '',
        ],

        'style' =>
        [
            'table'     => '',
            'monthName' => '',
            'dayName'   => '',
            'days'      => '',
            'links'     => '',
            'current'   => '',
        ],

        'monthNames' =>
        [
            'tr' =>
            [
                'Ocak'      => 'Oca',
                'Şubat'     => 'Şub',
                'Mart'      => 'Mar',
                'Nisan'     => 'Nis',
                'Mayıs'     => 'May',
                'Haziran'   => 'Haz',
                'Temmuz'    => 'Tem',
                'Ağustos'   => 'Ağu',
                'Eylül'     => 'Eyl',
                'Ekim'      => 'Eki',
                'Kasım'     => 'Kas',
                'Aralık'    => 'Ara'
            ],

            'en' =>
            [
                'Janury'    => 'Jan',
                'February'  => 'Feb',
                'March'     => 'Mar',
                'April'     => 'Apr',
                'May'       => 'May',
                'June'      => 'Jun',
                'July'      => 'Jul',
                'August'    => 'Aug',
                'September' => 'Sep',
                'October'   => 'Oct',
                'November'  => 'Nov',
                'December'  => 'Dec'
            ]
        ],

        'dayNames' =>
        [
            'tr' =>
            [
                'Pazartesi' => 'Pzt',
                'Salı'      => 'Sal',
                'Çarşamba'  => 'Çar',
                'Perşembe'  => 'Per',
                'Cuma'      => 'Cum',
                'Cumartesi' => 'Cts',
                'Pazar'     => 'Paz'
            ],

            'en' =>
            [
                'Monday'    => 'Mon',
                'Tuesday'   => 'Tue',
                'Wednesday' => 'Wed',
                'Thursday'  => 'Thu',
                'Friday'    => 'Fri',
                'Saturday'  => 'Sat',
                'Sunday'    => 'Sun'
            ]
        ]
    ],

    //--------------------------------------------------------------------------------------------------
    // DataGrid
    //--------------------------------------------------------------------------------------------------
    //
    // Genel Kullanımı: Ön tanımlı grid ayarı yapmak için kullanılır.
    //
    //--------------------------------------------------------------------------------------------------
    'datagrid' =>
    [
        //----------------------------------------------------------------------------------------------
        // Button Names
        //----------------------------------------------------------------------------------------------
        //
        // Genel Kullanımı: DataGrid'de yer alan butonların isimlerini düzenlemek için kullanılır.
        //
        //----------------------------------------------------------------------------------------------
        'buttonNames' =>
        [
            'add'           => lang('ViewObjects', 'dbgrid:addButton'),
            'edit'          => lang('ViewObjects', 'dbgrid:editButton'),
            'update'        => lang('ViewObjects', 'dbgrid:updateButton'),
            'save'          => lang('ViewObjects', 'dbgrid:saveButton'),
            'close'         => lang('ViewObjects', 'dbgrid:closeButton'),
            'delete'        => lang('ViewObjects', 'dbgrid:deleteButton'),
            'deleteSelected'=> lang('ViewObjects', 'dbgrid:deleteSelectedName'),
            'deleteAll'     => lang('ViewObjects', 'dbgrid:deleteAllName')
        ],

        //----------------------------------------------------------------------------------------------
        // Button Names
        //----------------------------------------------------------------------------------------------
        //
        // Genel Kullanımı: DataGrid'de yer Arama ve yeni ekle veri kutularının var sayılan input
        // bilgisini değiştirmek için kullanılır.
        //
        //----------------------------------------------------------------------------------------------
        'placeHolders' =>
        [
            'search'    => lang('ViewObjects', 'dbgrid:searchHolder'),
            'inputs'    => lang('ViewObjects', 'dbgrid:inputsHolder'),
        ],

        //----------------------------------------------------------------------------------------------
        // Style Element
        //----------------------------------------------------------------------------------------------
        //
        // Bu ayar değer alırsa gridin bulunduğu sayfada dahili <style> kullanımı aktif hale gelir.
        //
        //----------------------------------------------------------------------------------------------
        'styleElement' =>
        [
            '#DBGRID_TABLE tr:nth-child(even)' => ['background' => '#E6F9FF'],
            '#DBGRID_TABLE tr:nth-child(odd)'  => ['background' => '#FFF']
        ],

        //----------------------------------------------------------------------------------------------
        // Attributes
        //----------------------------------------------------------------------------------------------
        //
        // Genel Kullanımı: Grid'de yer alan buton ve linklere ait attibute yani özellik eklemek
        // için kullanılır.
        //
        //----------------------------------------------------------------------------------------------
        'attributes'    =>
        [
            'table'         => ['width' => '100%', 'cellspacing' => 0, 'cellpadding' => 10, 'style' => 'margin-top:15px; margin-bottom:15px; border:solid 1px #ddd; font-family:Arial; color:#888; font-size:14px;'],
            'editTables'    => ['style' => 'font-family:Arial; color:#888; font-size:14px;'],
            'columns'       => ['height' => 75, 'style' => 'text-decoration:none; color:#0085B2'],
            'search'        => ['style' => 'height:34px; color:#0085B2; border:solid 1px #0085B2; text-indent:10px'],
            'add'           => ['style' => 'height:34px; color:#0085B2; background:none; border:solid 1px #0085B2; cursor:pointer'],
            'deleteSelected'=> ['style' => 'height:34px; color:#0085B2; background:none; border:solid 1px #0085B2; cursor:pointer'],
            'deleteAll'     => ['style' => 'height:34px; color:#0085B2; background:none; border:solid 1px #0085B2; cursor:pointer'],
            'save'          => ['style' => 'height:34px; color:#0085B2; background:none; border:solid 1px #0085B2; cursor:pointer'],
            'update'        => ['style' => 'height:34px; color:#0085B2; background:none; border:solid 1px #0085B2; cursor:pointer'],
            'delete'        => ['style' => 'height:34px; color:#0085B2; background:none; border:solid 1px #0085B2; cursor:pointer'],
            'edit'          => ['style' => 'height:34px; color:#0085B2; background:none; border:solid 1px #0085B2; cursor:pointer'],
            'listTables'    => [],
            'inputs'        =>
            [
                'text'      => ['style' => 'height:34px; color:#0085B2; border:solid 1px #0085B2; text-indent:10px'],
                'textarea'  => ['style' => 'height:120px; width:290px; color:#0085B2; border:solid 1px #0085B2; text-indent:10px'],
                'radio'     => [],
                'checkbox'  => [],
                'select'    => []
            ]
        ],

        //----------------------------------------------------------------------------------------------
        // Pagination
        //----------------------------------------------------------------------------------------------
        //
        // Genel Kullanımı: Yukardaki ayarlar aynen geçerlidir. Sadece Datagrid için farklı bir.
        // sayfalama görünümü dizayn edilmek istenirse yukarıdaki ayarların kullanımı değişmeyecek
        // şekilde kullanılabilir. Ortak bir sayfalama tasarımı kullanıyorsa zaten sayfalama
        // ayarlarının yukarıdaki mevcut ayarlarından yapılması tavsiye edilir.
        //
        //----------------------------------------------------------------------------------------------
        'pagination' =>
        [
            'style' =>
            [
                'links' => 'color:#0085B2;
                            width:20px; height:20px;
                            text-align:center;
                            padding-top:4px;
                            display:inline-block;
                            background:white;
                            border:solid 1px #ddd;
                            border-radius: 4px;
                            -webkit-border-radius: 4px;
                            -moz-border-radius: 4px;
                            text-decoration:none;',

                'current' => 'font-weight:bold;'
            ]
        ]
    ],

    //--------------------------------------------------------------------------------------------------
    // Css3
    //--------------------------------------------------------------------------------------------------
    //
    // Genel Kullanım: Css3 kütüphanesi ile ilgili gerekli ayarları içerir.
    //
    //--------------------------------------------------------------------------------------------------
    'css3' =>
    [
        //----------------------------------------------------------------------------------------------
        // Browser
        //----------------------------------------------------------------------------------------------
        //
        // Genel Kullanım: Css3 kütüphanesi ile ilgili gerekli ayarları içerir.
        // Aşağıda css3 komutlarının uygulanacağı tarayıcı listesi mevcuttur.
        // Aşağıda boş bir eleman girilmesinin nedeni tarayıcılar dışında standart css3 komutlarını
        // da kullanması içindir.
        // Örnek: box-shadow, -ms-box-shadow, -moz-box-shadow, -webkit-box-shadow
        //
        //----------------------------------------------------------------------------------------------
        'browsers' => ['', '-o-', '-ms-', '-moz-', '-webkit-']
    ],

    //--------------------------------------------------------------------------------------------------
    // Font
    //--------------------------------------------------------------------------------------------------
    //
    // Genel Kullanım: Fontlarla ilgili ayarlar yer alır.
    //
    //--------------------------------------------------------------------------------------------------
    'font' =>
    [
        //----------------------------------------------------------------------------------------------
        // Different Font Extensions
        //----------------------------------------------------------------------------------------------
        //
        // Genel Kullanım: SVG, WOFF, EOT, OTF, TTF uzantılı fontlar dışında başka bir uzantılı
        // font kullanacaksınız aşağıdaki diziye eklemeniz gerekmektedir. Uzantı başında (.) nokta
        // karakteri kullanmanıza gerek yoktur. Örnek array('ufo', 'fon') şeklinde yazmanız
        // yeterlidir.
        //
        //----------------------------------------------------------------------------------------------
        'differentFontExtensions' => []
    ],

    //--------------------------------------------------------------------------------------------------
    // Cdn
    //--------------------------------------------------------------------------------------------------
    //
    // Genel Kullanım: Uzaktan linklerin kullanımına yönelik ayarları içerir.
    //
    //--------------------------------------------------------------------------------------------------
    'cdn' =>
    [
        //----------------------------------------------------------------------------------------------
        // Script
        //----------------------------------------------------------------------------------------------
        //
        // Genel Kullanım: Script URL bilgilerini tutmak için oluşturulmuştur.
        // Bu linkleri güncelleyerek dışardan script dosyaları çağırabilirsiniz.
        // Bu stilleri import ederken anahtar ifadeler kullanılarak dahil etme işlemi yapılır.
        // Örnek Kullanım: Import::script('style');
        //
        //----------------------------------------------------------------------------------------------
        'scripts' =>
        [
            'jquery'                     => 'https://code.jquery.com/jquery-latest.js',
            'jqueryUi'                   => 'https://code.jquery.com/ui/1.11.3/jquery-ui.js',
            'jqueryValidator'            => 'https://cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js',
            'bootstrap'                  => 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js',
            'bootlint'                   => 'https://maxcdn.bootstrapcdn.com/bootlint/0.14.1/bootlint.min.js',
            'angular'                    => 'https://ajax.googleapis.com/ajax/libs/angularjs/1.6.1/angular.min.js',
            'react'                      => 'https://cdnjs.cloudflare.com/ajax/libs/react/15.5.4/react.min.js',
            'vue'                        => 'https://cdnjs.cloudflare.com/ajax/libs/vue/2.3.3/vue.min.js',
            'datatables'                 => 'https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js',
            'autoFillDatatables'         => 'https://cdn.datatables.net/autofill/2.2.0/js/dataTables.autoFill.min.js',
            'buttonsDatatables'          => 'https://cdn.datatables.net/buttons/1.3.1/js/dataTables.buttons.min.js',
            'columnVisibilityDatatables' => 'https://cdn.datatables.net/buttons/1.3.1/js/buttons.colVis.min.js',
            'flashButtonsDatatables'     => 'https://cdn.datatables.net/buttons/1.3.1/js/buttons.flash.min.js',
            'html5ButtonsDatatables'     => 'https://cdn.datatables.net/buttons/1.3.1/js/buttons.html5.min.js',
            'printButtonDatatables'      => 'https://cdn.datatables.net/buttons/1.3.1/js/buttons.print.min.js',
            'columnReorderDatatables'    => 'https://cdn.datatables.net/colreorder/1.3.3/js/dataTables.colReorder.min.js',
            'fixedColumnsDatatables'     => 'https://cdn.datatables.net/fixedcolumns/3.2.2/js/dataTables.fixedColumns.min.js',
            'fixedHeaderDatatables'      => 'https://cdn.datatables.net/fixedheader/3.1.2/js/dataTables.fixedHeader.min.js',
            'keyTableDatatables'         => 'https://cdn.datatables.net/keytable/2.2.1/js/dataTables.keyTable.min.js',
            'responsiveDatatables'       => 'https://cdn.datatables.net/responsive/2.1.1/js/dataTables.responsive.min.js',
            'rowGroupDatatables'         => 'https://cdn.datatables.net/rowgroup/1.0.0/js/dataTables.rowGroup.min.js',
            'rowReorderDatatables'       => 'https://cdn.datatables.net/rowreorder/1.2.0/js/dataTables.rowReorder.min.js',
            'scrollerDatatables'         => 'https://cdn.datatables.net/scroller/1.4.2/js/dataTables.scroller.min.js',
            'selectDatatables'           => 'https://cdn.datatables.net/select/1.2.2/js/dataTables.select.min.js',
            'morris'                     => 'https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js',
            'raphael'                    => 'https://cdnjs.cloudflare.com/ajax/libs/raphael/2.2.7/raphael.js',
            'select2'                    => 'https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js',
            'flexSlider'                 => 'https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.6.3/jquery.flexslider.js',
            'ace'                        => 'https://cdnjs.cloudflare.com/ajax/libs/ace/1.2.6/ace.js',
            'sweetAlert'                 => 'https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js'
        ],

        //----------------------------------------------------------------------------------------------
        // Style
        //----------------------------------------------------------------------------------------------
        //
        // Genel Kullanım: Style URL bilgilerini tutmak için oluşturulmuştur.
        // Bu linkleri güncelleyerek dışardan style dosyaları çağırabilirsiniz.
        // Bu stilleri import ederken anahtar ifadeler kullanılarak dahil etme işlemi yapılır.
        // Örnek Kullanım: Import::style('style');
        //
        //----------------------------------------------------------------------------------------------
        'styles' =>
        [
            'bootstrap'               => 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css',
            'awesome'                 => 'https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css',
            'datatables'              => 'https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css',
            'autoFillDatatables'      => 'https://cdn.datatables.net/autofill/2.2.0/css/autoFill.dataTables.min.css',
            'buttonsDatatables'       => 'https://cdn.datatables.net/buttons/1.3.1/css/buttons.dataTables.min.css',
            'columnReorderDatatables' => 'https://cdn.datatables.net/colreorder/1.3.3/css/colReorder.dataTables.min.css',
            'fixedColumnsDatatables'  => 'https://cdn.datatables.net/fixedcolumns/3.2.2/css/fixedColumns.dataTables.min.css',
            'fixedHeaderDatatables'   => 'https://cdn.datatables.net/fixedheader/3.1.2/css/fixedHeader.dataTables.min.css',
            'keyTableDatatables'      => 'https://cdn.datatables.net/keytable/2.2.1/css/keyTable.dataTables.min.css',
            'responsiveDatatables'    => 'https://cdn.datatables.net/responsive/2.1.1/css/responsive.dataTables.min.css',
            'rowGroupDatatables'      => 'https://cdn.datatables.net/rowgroup/1.0.0/css/rowGroup.dataTables.min.css',
            'rowReorderDatatables'    => 'https://cdn.datatables.net/rowreorder/1.2.0/css/rowReorder.dataTables.min.css',
            'scrollerDatatables'      => 'https://cdn.datatables.net/scroller/1.4.2/css/scroller.dataTables.min.css',
            'selectDatatables'        => 'https://cdn.datatables.net/select/1.2.2/css/select.dataTables.min.css',
            'morris'                  => 'https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css',
            'datepicker'              => 'https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css',
            'select2'                 => 'https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css',
            'flexSlider'              => 'https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.6.3/flexslider.css',
            'sweetAlert'              => 'https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css'
        ],

        //----------------------------------------------------------------------------------------------
        // Font
        //----------------------------------------------------------------------------------------------
        //
        // Harici sunuculardan çağırmayı düşündüğünüz fontların anahtar ismi ve url bilgisini eklemek
        // için.
        // Import::font('anahtar') ile direk import ettirebilirsiniz.
        //
        //----------------------------------------------------------------------------------------------
        'fonts' =>
        [
            // 'font1' => 'http://xx.xx.xxx/image/font1.ttf'
        ],

        //----------------------------------------------------------------------------------------------
        // Image
        //----------------------------------------------------------------------------------------------
        //
        // Harici sunuculardan çağırmayı düşündüğünüz resimlerin anahtar ismi ve url bilgisini eklemek
        // için.
        // CND::image('anahtar') ile anahtarın değerini döndürebilirsiniz.
        // Html::image(CND::image('image1'));
        //
        //----------------------------------------------------------------------------------------------
        'images' =>
        [
            // 'image1' => 'http://xx.xx.xxx/image/image1.jpg'
        ],

        //----------------------------------------------------------------------------------------------
        // File
        //----------------------------------------------------------------------------------------------
        //
        // Harici sunuculardan çağırmayı düşündüğünüz dosyaların anahtar ismi ve url bilgisini eklemek
        // için.
        // CND::file('anahtar') ile anahtarın değerini döndürebilirsiniz.
        // File::contents(CND::file('anahtar'));
        //
        //----------------------------------------------------------------------------------------------
        'files' =>
        [
            // 'file1' => 'http://xx.xx.xxx/files/file1.txt'
        ]
    ],

    //--------------------------------------------------------------------------------------------------
    // Doctype
    //--------------------------------------------------------------------------------------------------
    //
    // Genel Kullanım: Döküman türleri listesi.
    //
    //--------------------------------------------------------------------------------------------------
    'doctype' =>
    [
        'xhtml1Strict'          => '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//TR" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">',
        'xhtml1Transitional'    => '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//TR" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">',
        'xhtml1Frameset'        => '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//TR" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">',
        'xhtml11'               => '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//TR" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">',
        'html4Strict'           => '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//TR" "http://www.w3.org/TR/html4/strict.dtd">',
        'html4Transitional'     => '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//TR" "http://www.w3.org/TR/html4/loose.dtd">',
        'html4Frameset'         => '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//TR" "http://www.w3.org/TR/html4/frameset.dtd">',
        'html5'                 => '<!DOCTYPE html>'
    ]
];
