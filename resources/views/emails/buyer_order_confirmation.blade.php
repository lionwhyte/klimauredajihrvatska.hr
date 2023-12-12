<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Narudžba zaprimljena</title>

    <style>
    
        html {
            font-family: Arial, Helvetica, sans-serif;
        }

        header {
            display: inline-block;
        }
        
        table, th, td {
            font-size: 1rem;
            border: 2px solid #96D4D4;
            border-collapse: collapse;
        }
        th, td {
            padding: 8px 16px;
        }
        
        img {
            width: 128px;
        }
        ul {
            font-size: 1rem;
        }
    </style>
</head>
<body>
    <header style="text-align: left;">
        <img src="https://klimauredajihrvatska.hr/wp-content/uploads/Klima-uredaji-Hrvatska-logo.gif" alt="Company Logo" width="128">
        <p>KLIMA UREĐAJI HRVATSKA</p>
        <h1 style="color: #42429c;">Hvala Vam na narudžbi!</h1>
    </header>
    <p>Poštovanje {{ $order->buyer_name }},</p>
    @if ($order->payment_method_id === 1)
    <p>Hvala na narudžbi. Na čekanju je dok ne potvrdimo da je uplata primljena.</p>
    <p>Plaćanje po ponudi nakon obavljenog telefonskog razgovora dogovoriti ćemo sve detalje vezano za plaćanje i
        kupnju navedenog uređaja iz košarice.
        Obavezno nas prethodno telefonski kontaktirati 095/123-0003.</p>
    @elseif($order->payment_method_id === 2)
    <p>Hvala na narudžbi. Na čekanju je dok ne potvrdimo da je uplata primljena.</p>
    <p>Kupnja na rate putem kreditnih kartica Visa premium ( bivši american ) do 24 rate, Diners do 36 rata, PBZ Viza
        klasična do 12 rata, Zagrebačka banka do 12 rata,
        Otp banka neograničeno vi birate broj rata. Do 12 rata cijena se uvećava 10 %, ako je od 13 – 36 rata cijena
        se uvećava 12 % ili 15 % ovisno koja je banka i kartica.
        Viza premium ( bivši american ) i diners autoriziramo telefonski,
        a ostale kartice putem mobilnog pos aparata koji montažer ima kod sebe ili šaljemo putem pošte. Obavezno nas
        prethodno telefonski kontaktirati 095/123-0003.</p>
    @elseif($order->payment_method_id === 3)
    <p>Samo da vas obavijestimo — Vaša narudžba #{{ $order->order_id }} je zaprimljena i trenutno se obrađuje:</p>
    <p>Možete platiti gotovinom nakon obavljenog posla majstorima na ruke ili direktno kod nas u trgovini. Obavezno nas
        prethodno telefonski kontaktirati 095/123-0003.</p>
    @endif

    <div style="margin-bottom: 1rem;">
        <h2 style="color: #42429c;">Detalji o našoj banci</h2>
        <ul>
            <li>Banka: <strong>Addiko banka</strong></li>
            <li>IBAN: <strong>HR5525000091101440278</strong></li>
        </ul>
    </div>
    
    
    <h2 style="color: #42429c;">[Narudžba #{{ $order->order_id }}] (@php
        $originalDate = $order->created_at;
        // Create a DateTime object from the original date
        $dateTime = new DateTime($originalDate);

        // Format the date using the desired format
        $formattedDate = $dateTime->format('j.n.Y.');

        echo $formattedDate;
        @endphp)</h2>

    <table style="margin-bottom: 16px;">
    <tr>
        <th>Proizvod</th>
        <th>Količina</th>
        <th>Cijena</th>
    </tr>
    @foreach ($order->items as $item)
    <tr>
        <td>{{ $item->product->naslov }}</td>
        <td>{{ $item->quantity }}</td>
        <td>{{ $item->subtotal }} €</td>
    </tr>
    @endforeach
    <tr>
        <td colspan="2"><strong>Dostava</strong></td>
        <td>Besplatna dostava</td>
    </tr>
    <tr>
        <td colspan="2"><strong>Način plaćanja</strong></td>
        <td>
        @if ($order->payment_method_id === 1)
            Plaćanje po ponudi. Obavezno nas prethodno telefonski kontaktirati 095/123-0003
            @elseif($order->payment_method_id === 2)
            Plaćanje karticom na rate. Obavezno nas prethodno telefonski kontaktirati 095/123-0003
            @elseif($order->payment_method_id === 3)
            Gotovinsko plaćanje. Obavezno nas prethodno telefonski kontaktirati 095/123-0003
            @endif
        </td>
    </tr>
    <tr>
        <td colspan="2"><strong>Ukupno</strong></td>
        <td>{{ $order->total_amount }} €</td>
    </tr>
    </table>
    <h2>Kontakt i adresa za dostavu</h2>
    <hr>
    <ul style="margin: 8px 0;">
        <li><address>{{ $order->buyer_name }} {{ $order->buyer_lastname }}</address></li>
        <li><address>{{ $order->buyer_address }}</address></li>
        <li><address>{{ $order->buyer_city }}</address></li>
        <li><address>{{ $order->buyer_county}}</address></li>
        <li><address>{{ $order->buyer_postal_code }}</address></li>
        <li><address>{{ $order->buyer_phone_number }}</address></li>
        <li><address>{{ $order->buyer_email }}</address></li>
    </ul>
    <hr>
    <p>Veseli nas što ćemo uskoro ispuniti vašu narudžbu.</p>
</body>
</html>


