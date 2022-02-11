<!DOCTYPE html>
<html>
<head>
    <title>Портал государственных услуг Российской Федерации</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<style>
    hr {
        width: 100%;
        height: 2px;
        background: black;
    }

    *,
    p,
    h1,h2,h3,
    body {
        font-family:'Arial' !important;
    }

    .description {
        font-size: 20px;
        text-align: justify;
        line-height: 150%;
        font-weight: 600;

    }

    .bio {
        width:100%;
        height: 310px;
        display: flex;
        justify-content: space-between;

    }

    tr, td, th {
        padding: 10px;
        vertical-align: baseline;
    }

    td p.sub {
        color:gray;
    }


    .half {
        width:50%;
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
        padding: 10px;
    }

    .full {
        width:100%;
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
        padding: 10px;
    }

    .full p,
    .half p {
        width: 100%;
        margin-bottom: 0px;
        font-size: 20px;
        font-weight: 600;
    }

    .full p.title,
    .half p.title {
        color:gray;
    }

    .row {
        width: 100%;
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
    }

    .half.qr{
        display: flex;
        justify-content: center;
        align-items: center;

    }

    .number {
        width: 100%;
        display: flex;
        justify-content: flex-end;
    }
</style>
<div style="width: 100%; max-width: 960px; margin: auto">
    <table style="width: 100%;">
        <tr>
            <td>
                <img src="/logo.png" alt="" style="width:200px;object-fit: cover;">
            </td>
        </tr>
    </table>
    <hr>
    <p class="description">Медицинский сертификат о профилактических прививках против новой короновирусной инфекции
        (COVID-19) или медицинских противопоказаниях к вакцинации и (или) перенесенном заболевании,
        вызванном новой короновирусной инфекцией (COVID-19)
    </p>
    <h1 style="margin-top: 50px">{{$certificate->full_name}}</h1>

    <div class="bio">

        <div class="half">
            <div class="row">
                <div class="half">
                    <p class="title">Дата рождения</p>
                    <p>{{$certificate->birthday}}</p>
                </div>
                <div class="half">
                    <p class="title">Пол</p>
                    <p>{{$certificate->sex==0?"Мужской":"Женский"}}</p>
                </div>
            </div>
            <div class="row">
                <div class="half">
                    <p class="title">Паспорт</p>
                    <p>{{$certificate->passport}}</p>
                </div>
                <div class="half">
                    <p class="title">Загран паспорт</p>
                    <p>{{$certificate->international_passport??'-'}}</p>
                </div>
            </div>
            <div class="row">
                <div class="half">
                    <p class="title">СНИЛС</p>
                    <p>{{$certificate->snils??'-'}}</p>
                </div>
                <div class="half">
                    <p class="title">ОМС</p>
                    <p>{{$certificate->oms??'-'}}</p>
                </div>
            </div>
            <div class="row">
                <div class="full">
                    <p class="title">ИНН</p>
                    <p>{{$certificate->inn??'-'}}</p>
                </div>
            </div>
        </div>

        <div class="half qr">
            {!! QrCode::encoding('UTF-8')->size(250)->generate(env('APP_URL')."/covid-cert/status/$certificate->uuid"); !!}
        </div>
    </div>

    <div class="number">
        <h5>№ {{$certificate->cert_number}}</h5>
    </div>
    <hr>
    <h2>Информация о профилактических прививках против новой<br>короновирусной инфекции (COVID-19)</h2>
    <table>
        <thead>
        <th>Номер УНРЗ</th>
        <th>Препарат, производитель, серия, дата вакцинации</th>
        <th>Медицинская организация</th>
        </thead>
        <tbody>
        <tr>
            <td>{{$certificate->unrz_number}}</td>
            <td>
                <p>{{$certificate->drug_name}}
                </p>
                <p class="sub">
                    {{$certificate->drug_creator}}, {{$certificate->drug_serial}}
                </p>
                <p>{{\Carbon\Carbon::parse($certificate->drug_creation_date)->subMonths(6)}}</p>
            </td>
            <td> {{$certificate->medical_organization}}</td>
        </tr>
        <tr>
            <td>{{$certificate->unrz_number}}</td>
            <td>
                <p>{{$certificate->drug_name}}</p>
                <p class="sub">
                    {{$certificate->drug_creator}}, {{$certificate->drug_serial}}
                </p>
                <p>{{$certificate->drug_creation_date}}</p>
            </td>
            <td> {{$certificate->medical_organization}}</td>
        </tr>
        </tbody>
    </table>
    <hr>
    <h3>Информация о перенесенном заболевании, вызванном новой<br>короновирусной инфекцией (COVID-19)</h3>
    <p>Нет данных о перенесенном заболевании</p>
</div>
</body>
</html>
