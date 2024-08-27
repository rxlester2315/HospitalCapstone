<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Medicine Receipt</title>
    <link rel="stylesheet" href="styles.css"> <!-- Link to your CSS file -->
    <style>
    /* styles.css */



    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f9;
        margin: 0;
        padding: 20px;
    }

    .form-container {
        width: 60%;
        margin: 0 auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h2 {
        text-align: center;
        color: #333;
        margin-bottom: 20px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    td {
        padding: 10px;
        vertical-align: middle;
    }

    label {
        display: block;
        color: #333;
        font-weight: bold;
    }

    input[type="text"],
    input[type="date"],
    input[type="number"],
    textarea {
        width: 100%;
        padding: 10px;
        margin-top: 4px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    textarea {
        resize: vertical;
        height: 100px;
    }

    input[readonly] {
        background-color: #f0f0f0;
        color: #555;
        cursor: not-allowed;
        border: 1px solid #ddd;
    }

    .medicine-item {
        margin-bottom: 15px;
    }

    .form-group {
        display: flex;
        gap: 10px;
    }

    .add-medicine-btn {
        display: block;
        margin: 10px auto;
        background-color: #28a745;
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }


    .add-medicine-btns {
        display: block;
        margin: 10px auto;
        background-color: blue;
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .add-medicine-btn:hover {
        background-color: #218838;
    }

    .form-actions {
        text-align: center;
        margin-top: 20px;
    }
    </style>
</head>

<body>

    <div class="form-container">
        <h2>Patient Medicine Receipt</h2>
        <form action="{{ route('get.store') }}" method="POST" enctype="multipart/form-data">
            @csrf


            <div class="form-group">
                <label for="date">Date:</label>
                <input type="date" class="form-control" id="date" name="date_receipt" required>
            </div>


            <table>
                <tr>
                    <td><label for="patient_name">Patient Name:</label></td>
                    <td><input type="text" id="patient_name" name="patient_name" value="{{$data->name}}" readonly></td>
                </tr>
                <tr>
                    <td><label for="patient_id">Patient ID:</label></td>
                    <input type="hidden" name="id" value="{{ $data->id }}"> <!-- Pass the appointment ID here -->
                </tr>


            </table>

            <br>
            <br>
            <div>
                <label>Doctor Signature</label>
                <input type="file" name="file" id="signatureImage" accept="image/*" onchange="previewSignature(event)">
            </div>
            <div id="signaturePreviewContainer" style="margin-top: 10px;">
                <img id="signaturePreview" src="#" alt="Signature Preview" style="max-width: 200px; display: none;" />
            </div>



            <br>

            <!-- List of Medicine -->
            <div id="medicine-list">
                <label>List of Medicine:</label>
                <div class="medicine-item form-group">
                    <input type="text" class="form-control" name="medicine[0][name]" placeholder="Medicine Name"
                        required>
                    <input type="text" class="form-control" name="medicine[0][dosage]" placeholder="Dosage" required>
                    <input type="number" class="form-control" name="medicine[0][quantity]" placeholder="Quantity"
                        required>
                </div>
            </div>

            <!-- Center the Add More Medicine button -->
            <button type="button" class="btn btn-primary add-medicine-btn" id="add-medicine-btn">Add More
                Medicine</button>

            <!-- Notes and Generate Receipt button -->
            <table>
                <tr>
                    <td><label for="notes">Notes:</label></td>
                    <td><textarea id="note" name="note_med_receipts"></textarea></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center;">
                        <button type="submit" class="btn btn-primary add-medicine-btns">Generate Receipt</button>
                    </td>
                </tr>
            </table>

        </form>
    </div>

    <script>
    document.getElementById('add-medicine-btn').addEventListener('click', function() {
        var medicineList = document.getElementById('medicine-list');
        var index = medicineList.getElementsByClassName('medicine-item').length;

        // Create a new medicine item
        var newMedicineItem = document.createElement('div');
        newMedicineItem.classList.add('medicine-item', 'form-group');

        newMedicineItem.innerHTML = `
                <input type=" text" class="form-control" name="medicine[${index}][name]" placeholder="Medicine Name"
                            required>
                            <input type="text" class="form-control" name="medicine[${index}][dosage]"
                                placeholder="Dosage" required>
                            <input type="number" class="form-control" name="medicine[${index}][quantity]"
                                placeholder="Quantity" min="1" required>
                            `;

        // Append the new medicine item to the list
        medicineList.appendChild(newMedicineItem);
    });
    </script>




    <script>
    // JavaScript to handle image preview
    document.getElementById('doctor_signature_image').addEventListener('change', function(event) {
        var reader = new FileReader();
        reader.onload = function() {
            var output = document.getElementById('image-preview');
            output.src = reader.result;
            output.style.display = 'block'; // Show the image preview
        };
        reader.readAsDataURL(event.target.files[0]);
    });
    </script>

    <script>
    function previewSignature(event) {
        var reader = new FileReader();
        reader.onload = function() {
            var output = document.getElementById('signaturePreview');
            output.src = reader.result;
            output.style.display = 'block'; // Show the preview image
        };
        reader.readAsDataURL(event.target.files[0]);
    }
    </script>




    <script src="../assets/js/bootstrap.bundle.min.js"></script>


</body>

</html>