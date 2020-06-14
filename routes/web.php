<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {

    $images = [
        public_path('filtersdemo/air-filter.jpg'),
        public_path('filtersdemo/airFilter.jpg'),
        public_path('filtersdemo/oil-filter.jpg'),
        public_path('filtersdemo/OILcartridge.jpg'),
        public_path('filtersdemo/OILspin.jpg'),
        public_path('filtersdemo/oli-filter2.jpg')
    ];
    $data = [
        'images'=>$images,
        'barcodes'=>[
            public_path('filtersdemo/air-filter.jpg'),
            public_path('filtersdemo/air-filter.jpg'),
        ]
    ];

    $pdf = app()->make('snappy.pdf.wrapper');
    $pdf->loadView( 'reports.technical_document', $data)

//        ->setOption('margin-top', 5)
//        ->setOption('margin-bottom', 5)
//        ->setOption('margin-left', 5)
//        ->setOption('margin-right', 5)
    ;
    $pdf->setOption('header-html', '');
    return  $pdf->inline();
    return view('reports.technical_document',$data);
});
