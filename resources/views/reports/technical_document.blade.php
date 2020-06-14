<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">

    <title>Laravel</title>
    <style>
        table{
            vertical-align: middle;

        }
        .b-bottom {
            border-bottom: solid #636b6f;
        }
        .b-top {
            border-top: solid #636b6f 2px;
        }
        .b-left {
            border-left: solid #636b6f;
        }
        .b-right{
            border-left: solid #636b6f;
        }
        .img-fluid{
            max-width: 100%;
            height: auto;
        }
        div.saltopagina{
            display:block;
            page-break-after:always;
        }
        @page hr:first{
            display: none;
        }

    </style>
</head>
<body>
<table style="width: 100%;" cellpadding="0" cellspacing="0">
    <tr>
        <td width="30%">
            <img src="{{public_path('filtersdemo/logofilter.png')}}" style="max-width: 100%; height: auto">
        </td>
        <td colspan="2">
            <h1 style="text-align: center;">
                EL80002 Aceite
            </h1>

        </td>

        <td>
             <span>
                 Mexico {{Carbon\Carbon::now()->format('d/m/Y')}}
             </span>
        </td>
    </tr>
    <tr>
        <td><h5 style="margin: 0">&nbsp;</h5></td>
    </tr>
    <tr>
        <td width="25%" style="vertical-align: top;">
            <table  style="width: 100%;" cellpadding="0" cellspacing="3px">
                <tr >
                    <td class="b-bottom" colspan="2">
                        <strong> Caractiristicas Técnicas</strong>
                    </td>
                </tr>
                <tr>
                    <td class="b-top b-bottom" colspan="2">
                        <strong>  DIMENSIONES</strong>
                    </td>
                </tr>
                @for($i =0; $i< 4; $i++)
                    <tr>

                        <td>
                            {{'Hola:'.$i}}
                        </td>
                        <td>
                            {{'Chao:'.$i}}
                        </td>
                    </tr>
                @endfor
                <tr>
                    <td class="b-top b-bottom" colspan="2">
                        <strong>   JUSTAS</strong>
                    </td>
                </tr>
                <tr>

                    <td width="50%">
                        {{'Juntas:'}}
                    </td>
                    <td>
                        Lorem ipsum dolor sit  consectetur.


                    </td>
                </tr>
                <tr>
                    <td class="b-top b-bottom" colspan="2">
                        <strong>   Presentación</strong>
                    </td>
                </tr>
                @for($i =0; $i< 5; $i++)
                    <tr>

                        <td>
                            {{'Hola:'.$i}}
                        </td>
                        <td>
                            {{'Chao:'.$i}}
                        </td>
                    </tr>
                @endfor

            </table>

        </td>
        <td colspan="2"  >


            <table>
                @switch(sizeof($images))
                    @case(1)
                    <tr>
                        <td colspan="2">
                            <img src="{{$images[0]}}" class="img-fluid">
                        </td>

                    </tr>
                    @break
                    @case(2)
                    <tr>
                        <td>
                            <img src="{{$images[0]}}" class="img-fluid">
                        </td>
                        <td>
                            <img src="{{$images[1]}}" class="img-fluid">
                        </td>
                    </tr>
                    @break
                    @case(3)
                    <tr>
                        <td>
                            <img src="{{$images[0]}}" class="img-fluid">
                        </td>
                        <td>
                            <img src="{{$images[1]}}" class="img-fluid">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <img src="{{$images[2]}}" class="img-fluid">
                        </td>
                    </tr>
                    @break
                    @case(4)
                    <tr>
                        <td>
                            <img src="{{$images[0]}}" class="img-fluid">
                        </td>
                        <td>
                            <img src="{{$images[1]}}" class="img-fluid">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <img src="{{$images[2]}}" class="img-fluid">
                        </td>
                        <td>
                            <img src="{{$images[3]}}" class="img-fluid">
                        </td>
                    </tr>
                    @break
                    @case(5)
                    <tr>
                        <td>
                            <img src="{{$images[0]}}" class="img-fluid">
                        </td>
                        <td>
                            <img src="{{$images[1]}}" class="img-fluid">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <img src="{{$images[2]}}" class="img-fluid">
                        </td>
                        <td>
                            <img src="{{$images[3]}}" class="img-fluid">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <img src="{{$images[4]}}" class="img-fluid">
                        </td>

                    </tr>
                    @break
                    @case(6)
                    <tr>
                        <td>
                            <img src="{{$images[0]}}" class="img-fluid">
                        </td>
                        <td>
                            <img src="{{$images[1]}}" class="img-fluid">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <img src="{{$images[2]}}" class="img-fluid">
                        </td>
                        <td>
                            <img src="{{$images[3]}}" class="img-fluid">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <img src="{{$images[4]}}" class="img-fluid">
                        </td>
                        <td>
                            <img src="{{$images[5]}}" class="img-fluid">
                        </td>
                    </tr>
                @endswitch
            </table>
        </td>
        <td width="25%" style="vertical-align: top;">
            <table style="width: 100%;" cellpadding="0" cellspacing="3px">
                <tr>
                    <td class="b-bottom" colspan="2"><strong>REFERENCIAS DE CRUCE</strong></td>
                </tr>
                @for($i =0; $i< 9; $i++)
                    <tr>
                        <td>
                            <strong>{{'trademark'.$i}}</strong>

                        </td>
                        <td style="text-align: right;">
                            <span>{{'asdfasdf'.$i}}</span>
                        </td>
                    </tr>
                @endfor
            </table>
        </td>
    </tr>
    <tr>
        <td colspan="4">
            <h2 style="margin: 2px;">&nbsp;</h2>
        </td>
    </tr>
    <tr>
        <td colspan="4" style="text-align: center; font-style: italic">
            <h5 style="text-align: center; margin: 0">Para más información, visite nuestra Pag.</h5>
            <a href="http://www.elimfilters.com" style="color: black; text-decoration: none;"><h5 style="text-align: center;  margin: 0;">http://www.elimfilters.com</h5></a>
        </td>

    </tr>
    <tr>
        <td colspan="4">
            <h2 style="margin: 2px;">&nbsp;</h2>
        </td>
    </tr>
    <tr>
        <td></td>
        <td>
            <img src="{{$barcodes[0]}}" style="max-width: 100%; height: auto">
        </td>
        <td>
            <img src="{{$barcodes[0]}}" style="max-width: 100%; height: auto">

        </td>
        <td></td>
    </tr>
    <tr>
        <td  colspan="4">
            <div class="saltopagina"></div>
        </td>
    </tr>
    <tr>
        <td width="30%">
            <img src="{{public_path('filtersdemo/logofilter.png')}}" style="max-width: 100%; height: auto">
        </td>
        <td colspan="2">
            <h1 style="text-align: center;">
                EL80002 Aceite
            </h1>

        </td>

        <td>
             <span>
                 Mexico {{Carbon\Carbon::now()->format('d/m/Y')}}
             </span>
        </td>
    </tr>
    <tr>
        <td colspan="4">
            <h2 style="text-transform: uppercase">Aplicaciones</h2>
        </td>
    </tr>
    <tr>
        <td colspan="4">
            <table  style="width: 100%;" cellpadding="5px" cellspacing="0">
                <tr>
                    <td style="background-color: #636b6f; color: black; ">
                        Fabricante
                    </td>
                    <td style="background-color: #636b6f; color: black;">
                        Modelo
                    </td>
                    <td style="background-color: #636b6f; color: black;">
                        Motor
                    </td>
                    <td style="background-color: #636b6f; color: black;">
                        Potencia(cv)
                    </td>
                    <td style="background-color: #636b6f; color: black;">
                        Año
                    </td>
                </tr>
                @php
                    $j = 25; $p = 0;
                @endphp
                <tr>
                    <td colspan="5">
                        <h6 style="font-size: 4px; margin-top: 0;margin-bottom: 0;"></h6>
                    </td>
                </tr>
                @for($i = 0; $i<  300; $i++)
                    <tr >
                        <td >JEEP{{$i}}</td>
                        <td>COMMANDER</td>
                        <td>V8 4.7L</td>
                        <td>V8 4.7LTS CORSAIR </td>
                        <td>2008-2009</td>
                    </tr>
                    <tr>
                        <td colspan="5">
                            <hr style="margin: 0;">
                        </td>
                    </tr>
                    @if($j == 0)
                        @php
                            $j = 29;
                        @endphp


                        <tr>
                            <td width="30%">
                                <img src="{{public_path('filtersdemo/logofilter.png')}}" style="max-width: 100%; height: auto">
                            </td>
                            <td colspan="2">
                                <h1 style="text-align: center; margin: 0">
                                    EL80002 Aceite
                                </h1>
                            </td>
                            <td>
                             <span>
                                 Mexico {{Carbon\Carbon::now()->format('d/m/Y')}}
                             </span>
                            </td>
                        </tr>


                    @endif

                    @php
                        $j--;
                    @endphp
                @endfor
            </table>
        </td>
    </tr>

</table>
</body>
</html>
