<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Form with Reply Box</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    body {
        background-color: #f8f9fa;
        padding: 20px;
    }

    .form-container {
        max-width: 500px;
        margin: 0 auto;
        padding: 20px;
        background-color: #ffffff;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .form-container h2 {
        margin-bottom: 20px;
        font-size: 24px;
        text-align: center;
    }

    .form-control-plaintext {
        padding: 8px 12px;
        background-color: #f1f1f1;
        border-radius: 4px;
        border: 1px solid #ddd;
        margin-bottom: 15px;
    }

    .btn-custom {
        background-color: #007bff;
        color: #fff;
        border-radius: 5px;
    }

    .btn-custom:hover {
        background-color: #0056b3;
    }
    </style>
</head>

<body>


    <div class="form-container">
        <a href="{{url('view_tickets')}}"><button style="margin-left:400px;" class="btn btn-primary"> Back</button></a>
        <h2>Message Details For <a href="">{{$dataz->name}}</a> </h2>


        <form method="POST" action="{{ route('Hr.tickets.resolve.update', $dataz->id) }}">

            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control-plaintext" id="name" value="{{ $dataz->name }}" readonly>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control-plaintext" id="email" value="{{ $dataz->email }}" readonly>
            </div>

            <div class="mb-3">
                <label for="subject" class="form-label">Subject</label>
                <input type="text" class="form-control-plaintext" id="subject" value="{{ $dataz->subject }}" readonly>
            </div>

            <div class="mb-3">
                <label for="priority" class="form-label">Priority</label>
                <input type="text" class="form-control-plaintext" id="priority" value="{{ $dataz->priority }}" readonly>
            </div>

            <!-- Status Dropdown -->
            <div class="mb-3">
                <label class="form-label">Status</label>
                <select class="form-select" name="status">
                    <option value="open" {{ $dataz->status == 'open' ? 'selected' : '' }}>Open</option>
                    <option value="close" {{ $dataz->status == 'close' ? 'selected' : '' }}>Close</option>
                </select>
            </div>

            <!-- Reply Textarea -->
            <div class="mb-3">
                <label class="form-label">Reply</label>
                <textarea class="form-control" name="reply" rows="4" placeholder="Type your reply here..."></textarea>
            </div>

            <div class="d-grid">
                <button type="submit" class="btn btn-custom">Submit</button>
            </div>
        </form>

    </div>



    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>