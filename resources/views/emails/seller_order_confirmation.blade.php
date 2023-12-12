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
        <h1 style="color: #42429c;">Nova Narudžba: {{ $order->order_id }}</h1>
    </header>
    <h2>Primili ste sljedeću narudžbu od {{ $order->buyer_name }} {{ $order->buyer_lastname }},</h2>  
    <h2 style="color: #42429c;">[Narudžba #{{ $order->order_id }}] (@php
        $originalDate = $order->created_at;
        // Create a DateTime object from the original date
        $dateTime = new DateTime($originalDate);

        // Format the date using the desired format
        $formattedDate = $dateTime->format('j.n.Y.');

        echo $formattedDate;
        @endphp)</h2>

    <table style="margin-bottom: 1rem;">
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
    <ul style="margin: 5px 0;">
        <li><address>{{ $order->buyer_name }} {{ $order->buyer_lastname }}</address></li>
        <li><address>{{ $order->buyer_address }}</address></li>
        <li><address>{{ $order->buyer_city }}</address></li>
        <li><address>{{ $order->buyer_county}}</address></li>
        <li><address>{{ $order->buyer_postal_code }}</address></li>
        <li><address>{{ $order->buyer_phone_number }}</address></li>
        <li><address>{{ $order->buyer_email }}</address></li>
    </ul>
    <hr>
</body>
</html>