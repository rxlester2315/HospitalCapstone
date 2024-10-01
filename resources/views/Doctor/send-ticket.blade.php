<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send Ticket</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
        integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
    </script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    body {
        background-color: #f8f9fa;
        padding: 20px;
    }

    .form-container {
        max-width: 600px;
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

    .btn-custom {
        background-color: #007bff;
        color: #fff;
        border-radius: 5px;
    }

    .btn-custom:hover {
        background-color: #0056b3;
    }

    /* Disable the pointer events for priority select */
    .readonly-select {
        pointer-events: none;
        background-color: #e9ecef;
    }
    </style>
</head>

<body>

    <div class="container">
        <a href="{{url('Doc')}}"> <button class="btn btn-primary">Back</button></a>
    </div>

    <div class="form-container">
        <h2>Send a Ticket</h2>
        <form action="{{url('send_ticket')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" placeholder="Enter your name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" placeholder="Enter your email" required>
            </div>

            <div class="mb-3">
                <label for="issue" class="form-label">Select Issue</label>
                <select class="form-select" id="issueSelect" name="subject" placeholder="Ticket subject" required>
                    <option value="" disabled selected>Select an issue</option>
                    <option value="ui_glitch">UI Glitch (Low Severity)</option>
                    <option value="email_failure">Email Notifications Failure (Moderate Severity)</option>
                    <option value="ticket_duplication">Ticket Duplication (High Severity)</option>
                    <option value="system_downtime">System Downtime (Critical Severity)</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" name="description" rows="4" placeholder="Describe your issue"
                    required></textarea>
            </div>

            <div class="mb-3">
                <label for="priority" class="form-label">Priority</label>
                <div class="form-control-plaintext" id="priorityDisplay">
                    <select class="form-select" id="prioritySelect" name="priority" disabled required>
                        <option value="" selected disabled>Select priority</option>
                        <option value="Low Severity">Low Severity</option>
                        <option value="Moderate Severity">Moderate Severity</option>
                        <option value="High Severity">High Severity</option>
                        <option value="Critical Severity">Critical Severity</option>
                    </select>

                </div>
            </div>


            <div class="d-grid">
                <button type="submit" class="btn btn-custom">Submit Ticket</button>
            </div>
        </form>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JavaScript -->
    <script>
    document.getElementById('issueSelect').addEventListener('change', function() {
        const issueValue = this.value;
        const prioritySelect = document.getElementById('prioritySelect');

        let priorityValue;
        switch (issueValue) {
            case 'ui_glitch':
                priorityValue = 'Low Severity';
                break;
            case 'email_failure':
                priorityValue = 'Moderate Severity';
                break;
            case 'ticket_duplication':
                priorityValue = 'High Severity';
                break;
            case 'system_downtime':
                priorityValue = 'Critical Severity';
                break;
            default:
                priorityValue = '';
        }

        // Update the priority select box value and disable user interaction
        prioritySelect.value = priorityValue;
    });
    </script>


    @if(Session::has('message'))
    <script>
    swal("Message", "{{Session::get('message')}}", 'success', {
        button: true,
        button: "Okay",
        timer: 3000,


    });
    </script>
    @endif



</body>

</html>