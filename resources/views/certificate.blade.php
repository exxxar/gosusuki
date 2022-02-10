<!DOCTYPE html>
<html>
<head>
    <title>Сертификат вакцинации</title>
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
    body {
        font-family: DejaVu Sans !important;
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

    .half p {
        width: 100%;
        margin-bottom: 0px;
        font-size: 20px;
        font-weight: 600;
    }

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
    <h1 style="margin-top: 50px">Гукай Алексея Евгеньевича</h1>

    <div class="bio">

        <div class="half">
            <div class="row">
                <div class="half">
                    <p class="title">Дата рождения</p>
                    <p>09.04.1991</p>
                </div>
                <div class="half">
                    <p class="title">Пол</p>
                    <p>Мужской</p>
                </div>
            </div>
            <div class="row">
                <div class="half">
                    <p class="title">Паспорт</p>
                    <p>6606 850099</p>
                </div>
                <div class="half">
                    <p class="title">Загран паспорт</p>
                    <p>-</p>
                </div>
            </div>
            <div class="row">
                <div class="half">
                    <p class="title">СНИЛС</p>
                    <p>333-333-222 44</p>
                </div>
                <div class="half">
                    <p class="title">ОМС</p>
                    <p>-</p>
                </div>
            </div>
        </div>

        <div class="half qr">
            {!! QrCode::encoding('UTF-8')->size(250)->generate('Добро пожаловать на jobtools.ru'); !!}
        </div>
    </div>

    <div class="number">
        <h5>№ 1234 1234 1234 1234</h5>
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
            <td>123456789012345</td>
            <td>
                <p>Гам-КОВИД-Вак Комбинированная векторная<br>
                    вакцина для профилактики короновирусной<br>
                    инфекции, вызываемой вирусом SARS-CoV-2
                </p>
                <p class="sub">
                    ФГБУ НИЦЭМ ИМ. Н.Ф.ГАМАЛЕИ МИНЗДРАВА РОССИИ, серия I-620821
                </p>
                <p>13 декабря 2021</p>
            </td>
            <td> МБУЗ "Городская поликлиника №10"</td>
        </tr>
        <tr>
            <td>123456789012345</td>
            <td>
                <p>Гам-КОВИД-Вак Комбинированная векторная<br>
                    вакцина для профилактики короновирусной<br>
                    инфекции, вызываемой вирусом SARS-CoV-2
                </p>
                <p class="sub">
                    ФГБУ НИЦЭМ ИМ. Н.Ф.ГАМАЛЕИ МИНЗДРАВА РОССИИ, серия I-620821
                </p>
                <p>15 января 2022</p>
            </td>
            <td> МБУЗ "Городская поликлиника №10"</td>
        </tr>
        </tbody>
    </table>
    <hr>
    <h3>Информация о перенесенном заболевании, вызванном новой<br>короновирусной инфекцией (COVID-19)</h3>
    <p>Нет данных о перенесенном заболевании</p>
</div>
</body>
</html>
