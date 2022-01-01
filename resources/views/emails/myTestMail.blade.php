<!DOCTYPE html>
<html>
<head>
    <title>ItsolutionStuff.com</title>
    <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
<style>
    .invoice-box {
        max-width: 800px;
        margin: auto;
        padding: 30px;
        border: 1px solid #eee;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
        font-size: 16px;
        line-height: 24px;
        font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        color: #555;
    }

    .invoice-box table {
        width: 100%;
        line-height: inherit;
        text-align: left;
    }

    .invoice-box table td {
        padding: 5px;
        vertical-align: top;
    }

    .invoice-box table tr td:nth-child(2) {
        text-align: right;
    }

    .invoice-box table tr.top table td {
        padding-bottom: 20px;
    }

    .invoice-box table tr.top table td.title {
        font-size: 45px;
        line-height: 45px;
        color: #333;
    }

    .invoice-box table tr.information table td {
        padding-bottom: 40px;
    }

    .invoice-box table tr.heading td {
        background: #eee;
        border-bottom: 1px solid #ddd;
        font-weight: bold;
    }

    .invoice-box table tr.details td {
        padding-bottom: 20px;
    }

    .invoice-box table tr.item td {
        border-bottom: 1px solid #eee;
    }

    .invoice-box table tr.item.last td {
        border-bottom: none;
    }

    .invoice-box table tr.total td:nth-child(2) {
        border-top: 2px solid #eee;
        font-weight: bold;
    }

    @media only screen and (max-width: 600px) {
        .invoice-box table tr.top table td {
            width: 100%;
            display: block;
            text-align: center;
        }

        .invoice-box table tr.information table td {
            width: 100%;
            display: block;
            text-align: center;
        }
    }

    /** RTL **/
    .invoice-box.rtl {
        direction: rtl;
        font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
    }

    .invoice-box.rtl table {
        text-align: right;
    }

    .invoice-box.rtl table tr td:nth-child(2) {
        text-align: left;
    }


</style>
</head>
<body>
<div class="invoice-box">
    <table cellpadding="0" cellspacing="0">
        <tr class="top">
            <td colspan="2">
                <table>
                    <tr>
                        <td class="title">
                            <img  alt="Logo" src="https://lh3.googleusercontent.com/uBWl9ae-zUnn9T_Qpc2fhr32EATj_yuqw54kLlR48RwpqzMNrt4StyhNA_LrZDsxhTSFYzC16zx_0uOxiqZ4LRaIrnR89gGF7ogUXrhuORo433oHd-T1R2yF8jaMh4cwBI-3SQHMRkO0JsrjennF7CdJpVNrHA6hsRNcn8UiJcKiJez0-rslxYroQmGWuREiAo1BaCd7fKIP4JxIPtebqHrOPgMPWWPv2FEKXpLpzowj17ElzA4lgBUce6b37sz5kWuSNDx197ZX0Xo5FN2hzE2LeWrRY6N9UcsW0bhGrGn7zLLZiOF-ESHwpkmk8T6On1cjBw6Xsse5xbddo_rRiNDi9_UX0dyWSzBc6UDoG_2YQTLwPmdgOyJ6uQvLxQ_ROCqNWo9jJOHGd5s0oIw_1wbqTqzqclBOaZZWAaInb0wKqLOnKKL39BuMLTYswXzqx9GCzYhdGlqc3jp24wKjsP8AyUEa2vZQ3E5Npi2yD7MW7VVRs5LkptDpvtrHtVeXBWwCaZFuMAu_J_8DEDtb4w7Y4vx7QfvY9culHzmZawopmeg7xpu30mDntb7Homh8HFFLb60bv6m_jc88alhL7xNAou38TqOuloeM9cebAWAcPwxp1G4BhXzkI9kD7SBeDlTyJV-7U7B0mB97SVieBpGEuQ3dSjQ-cyWMzXUpI3PzgIfaUcEuVqz-MLLVKD5QycZ7IVZ6p0hjnOXHSwSlbn4=w723-h254-no?authuser=0" class="h-75px logo">
                        </td>

                        <td class="text-end">
                            Created: {{now()}}<br />
                        </td>
                    </tr>
                </table>
            </td>
        </tr>

        <tr class="information">
            <td colspan="2">
                <table>
                    <tr>


                        <td>
                            Bibliothèque Tlemcen<br />
                            22, Rue Abi Ayed Abdelkrim<br/>
                            Fg Pasteur B.P 119 13000,<br/>
                            Tlemcen, Algérie
                        </td>

                        <td class="text-end">
                            {{ $details['abonne']->nom }}  {{ $details['abonne']->prenom }}<br />
                            {{ $details['abonne']->tel }}<br />
                            {{ $details['abonne']->email }}
                        </td>
                    </tr>
                </table>
            </td>
        </tr>

        <tr class="heading">
            <td>Emprunts Nouveau </td>
            <td>End Date #</td>

        </tr>
        @if($details['emprunts'])
            @foreach($details['emprunts'] as $emprunt)
                <tr class="details">
                    <td>{{\App\Models\livre::find($emprunt)->titre}}</td>
                    <td>{{$details['expiry_at']}}</td>
                </tr>
            @endforeach

        @endif
        <tr class="heading">
            <td>Emprunts Retour</td>
            <td>Date Retours #</td>
        </tr>
        @if($details['retours'])
            @foreach($details['retours'] as $emprunt)
                <tr class="details">
                    <td>{{\App\Models\livre::find($emprunt)->titre}}</td>
                    <td>{{now()}}</td>
                </tr>
            @endforeach

        @endif
    </table>
</div>

</body>
</html>
