<!-- resources/views/receipt.blade.php -->
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Doctor's Medicine Receipt</title>
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

        <div class="receipt-container">
            <div class="header">
                <h1>Dr. John Smith</h1>
                <p>Specialist in Internal Medicine</p>
                <p>123 Health St, Wellness City</p>
                <p>Phone: (123) 456-7890</p>
            </div>

            <div class="info-section">
                <p><span>Date:</span> {{ \Carbon\Carbon::parse($data->date)->format('F d, Y') }}</p>
                <p><span>Patient Name:</span> {{ $data->patient_name }}</p>
                <p><span>Patient ID:</span> {{ $data->patient_id }}</p>
            </div>

            <table class="medicine-table">
                <tr>
                    <th>Medicine Name</th>
                    <th>Dosage</th>
                    <th>Quantity</th>
                </tr>
                @php
                $medicines = json_decode($data->list_of_medicine, true);
                @endphp
                @foreach($medicines as $medicine)
                <tr>
                    <td>{{ $medicine['name'] }}</td>
                    <td>{{ $medicine['dosage'] }}</td>
                    <td>{{ $medicine['quantity'] }}</td>
                </tr>
                @endforeach
            </table>

            <div class="signature-section">
                <p>Doctor's Signature:</p>
                @if($data->doctor_signature_image_path)
                <img src="{{ asset('storage/' . $data->doctor_signature_image_path) }}" alt="Doctor's Signature"
                    class="signature-image">
                @else
                <div class="signature-line"></div>
                @endif
            </div>

            <div class="footer">
                <p>Thank you for visiting!</p>
                <p><span>Stay healthy and take care!</span></p>
            </div>
        </div>

    </body>

</html>