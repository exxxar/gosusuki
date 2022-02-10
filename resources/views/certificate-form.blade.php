<!DOCTYPE html>
<html>
<head>
    <title>Портал государственных услуг Российской Федерации</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/app.css">
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
    h1, h2, h3,
    body {
        font-family: 'Arial' !important;
    }

    .description {
        font-size: 20px;
        text-align: justify;
        line-height: 150%;
        font-weight: 600;

    }

    .bio {
        width: 100%;
        height: 310px;
        display: flex;
        justify-content: space-between;

    }

    tr, td, th {
        padding: 10px;
        vertical-align: baseline;
    }

    td p.sub {
        color: gray;
    }

    .half {
        width: 50%;
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

    p.title {
        color: gray;
        font-size: 20px;
        font-weight: 600;
    }

    .row {
        width: 100%;
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
    }

    .half.qr {
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
<div style="width: 100%; max-width: 960px; margin: auto" id="app">
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
    <certificate-form-component>
        <template v-slot:qr>
            {!! QrCode::encoding('UTF-8')->size(250)->generate('Пример вашего QR-кода'); !!}
        </template>
    </certificate-form-component>

</div>
<script src="/js/app.js"></script>
</body>
</html>
