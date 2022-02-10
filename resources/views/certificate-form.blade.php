<!DOCTYPE html>
<html>
<head>
    <title>Портал государственных услуг Российской Федерации</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
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
        min-height: 310px;

    }

    tr, td, th {
        padding: 10px;
        vertical-align: baseline;
    }

    td p.sub {
        color: gray;
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

   /* .row {
        width: 100%;
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
    }*/

    .qr {
        display: flex;
        justify-content: center;
        align-items: center;

    }

    .number {
        width: 100%;
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
