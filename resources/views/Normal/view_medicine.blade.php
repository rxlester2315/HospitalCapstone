<!-- resources/views/receipt.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor's Medicine Receipt</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f4;
    }

    .receipt-container {
        width: 600px;
        margin: 50px auto;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        padding: 20px;
        border: 1px solid #ddd;
    }

    .header {
        text-align: center;
        border-bottom: 2px solid #007BFF;
        padding-bottom: 10px;
        margin-bottom: 20px;
    }

    .header h1 {
        margin: 0;
        color: #007BFF;
    }

    .header p {
        margin: 0;
        color: #666;
    }

    .info-section {
        margin-bottom: 20px;
    }

    .info-section p {
        margin: 5px 0;
        font-size: 16px;
    }

    .info-section span {
        font-weight: bold;
    }

    .medicine-table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
    }

    .medicine-table th,
    .medicine-table td {
        border: 1px solid #ddd;
        padding: 10px;
        text-align: left;
    }

    .medicine-table th {
        background-color: #f8f8f8;
    }

    .signature-section {
        margin-top: 40px;
        text-align: left;
    }

    .signature-line {
        margin-top: 50px;
        border-top: 1px solid #000;
        width: 200px;
    }

    .footer {
        text-align: center;
        border-top: 2px solid #007BFF;
        padding-top: 10px;
        margin-top: 20px;
    }

    .footer p {
        margin: 0;
        font-size: 14px;
        color: #666;
    }

    .footer span {
        font-weight: bold;
    }
    </style>
</head>

<body>
    <a href="{{url('view_doctor_receipt')}}">
        <h3 style="margin-left:20px;" class="btn btn-info">Back</h3>
    </a>
    <div class="receipt-container">
        <div class="header">
            <h1>Dr. {{ $receipt->employees }}</h1> <!-- Display Doctor's Name -->
            <p>{{ $receipt->departments }}</p> <!-- Assuming specialty is stored -->
            <p>Phone: {{ $receipt->phone }}</p> <!-- Assuming phone number is stored -->

        </div>

        <div class="info-section">
            <p><span>Date:</span> {{ \Carbon\Carbon::parse($receipt->date_receipt)->format('F d, Y') }}</p>
            <p><span>Patient Name:</span> {{ $receipt->name }}</p> <!-- Assuming patient name is stored -->
            <p><span>Patient ID:</span> {{ $receipt->id }}</p> <!-- Assuming patient ID is stored -->
        </div>

        <table class="medicine-table">
            <tr>
                <th>Medicine Name</th>
                <th>Dosage</th>
                <th>Quantity</th>
            </tr>

            @foreach ($medicines as $medicineDetail)
            @php
            // Use regex to split medicine details into name, dosage, and quantity
            preg_match('/^(.*)\s\((.*)\)\s-\sQuantity:\s(\d+)$/', $medicineDetail, $matches);
            @endphp

            @if(count($matches) === 4)
            <tr>
                <td>{{ $matches[1] }}</td> <!-- Medicine Name -->
                <td>{{ $matches[2] }}</td> <!-- Dosage -->
                <td>{{ $matches[3] }}</td> <!-- Quantity -->
            </tr>
            @endif
            @endforeach
        </table>

        <center>
            <h3 style="margin-top:60px;">Additional Notes From Dr. {{ $receipt->employees }}</h3>
            <p style="margin-top:60px;">{{$receipt->note_med_receipts}}</p>
        </center>


        <div class="signature-section">
            <img height="80x;" width="170px;" src="signature_folder/{{$receipt->doctor_signature_image}}" alt="">

            <h5 style="margin-left:30px;">Signatures of Doctor</h5>
        </div>





        <div class="footer">
            <p>Thank you for visiting!</p>
            <p><span>Stay healthy and take care!</span></p>
        </div>
    </div>
</body>

</html>