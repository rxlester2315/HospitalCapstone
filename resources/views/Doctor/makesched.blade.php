<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Employee Schedule</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <style>
    .form-container {
        margin: 20px auto;
        width: 90%;
        max-width: 600px;
        padding: 20px;
        border: 1px solid #ddd;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .form-title {
        margin-bottom: 20px;
        text-align: center;
    }
    </style>
</head>

<body>

    <div class="container">

        <div class="form-container">
            <h2 class="form-title">Create Employee Schedule</h2>
            <form action="{{ route('store_sched') }}" method="POST">
                @csrf

                <div class="form-group">
                    <p><span>Doctor Name:</span> <b>{{ $doctor->name }}</b></p>
                    <p><span>Department:</span> <b>{{ $doctor->specialty }}</b></p>
                </div>

                <!-- Shift Time -->
                <div class="form-group">
                    <label for="shiftTime">Shift Time</label>
                    <input type="time" class="form-control" id="shiftStartTime" name="shift_start_time" required>
                    <input type="time" class="form-control mt-2" id="shiftEndTime" name="shift_end_time" required>
                </div>

                <!-- Days of the Week (Present Days) -->
                <div class="form-group">
                    <label for="presentDays">Select Present Days</label>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input present-day" id="present-monday"
                            name="present_days[]" value="Monday">
                        <label class="form-check-label" for="present-monday">Monday</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input present-day" id="present-tuesday"
                            name="present_days[]" value="Tuesday">
                        <label class="form-check-label" for="present-tuesday">Tuesday</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input present-day" id="present-wednesday"
                            name="present_days[]" value="Wednesday">
                        <label class="form-check-label" for="present-wednesday">Wednesday</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input present-day" id="present-thursday"
                            name="present_days[]" value="Thursday">
                        <label class="form-check-label" for="present-thursday">Thursday</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input present-day" id="present-friday"
                            name="present_days[]" value="Friday">
                        <label class="form-check-label" for="present-friday">Friday</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input present-day" id="present-saturday"
                            name="present_days[]" value="Saturday">
                        <label class="form-check-label" for="present-saturday">Saturday</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input present-day" id="present-sunday"
                            name="present_days[]" value="Sunday">
                        <label class="form-check-label" for="present-sunday">Sunday</label>
                    </div>
                </div>

                <!-- Day Off Option -->
                <div class="form-group">
                    <label for="daysOff">Select Day Off (Maximum 2)</label>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input day-off" id="off-monday" name="day_off[]"
                            value="Monday">
                        <label class="form-check-label" for="off-monday">Monday</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input day-off" id="off-tuesday" name="day_off[]"
                            value="Tuesday">
                        <label class="form-check-label" for="off-tuesday">Tuesday</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input day-off" id="off-wednesday" name="day_off[]"
                            value="Wednesday">
                        <label class="form-check-label" for="off-wednesday">Wednesday</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input day-off" id="off-thursday" name="day_off[]"
                            value="Thursday">
                        <label class="form-check-label" for="off-thursday">Thursday</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input day-off" id="off-friday" name="day_off[]"
                            value="Friday">
                        <label class="form-check-label" for="off-friday">Friday</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input day-off" id="off-saturday" name="day_off[]"
                            value="Saturday">
                        <label class="form-check-label" for="off-saturday">Saturday</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input day-off" id="off-sunday" name="day_off[]"
                            value="Sunday">
                        <label class="form-check-label" for="off-sunday">Sunday</label>
                    </div>
                </div>

                <!-- Submit Button -->
                <button type="submit" class="btn btn-primary btn-block">Submit Schedule</button>
            </form>
        </div>
    </div>

    <!-- jQuery and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Custom JS to Handle Checkbox Selection Logic -->
    <script>
   $(document).ready(function() {
    // Maximum workdays allowed
    const maxWorkDays = 5;

    // Function to automatically select remaining days as "Day Off"
    function autoSelectDayOff() {
        const workdaysChecked = $('.present-day:checked');
        const selectedDays = workdaysChecked.map(function() {
            return $(this).val();
        }).get();

        // Automatically select remaining days as "Day Off"
        $('.day-off').each(function() {
            const day = $(this).val();
            if (!selectedDays.includes(day)) {
                $(this).prop('checked', true);  // Automatically select remaining day off
                $(this).attr('readonly', true); // Prevent changes but ensure the value is sent
            } else {
                $(this).prop('checked', false); // Uncheck day offs matching workdays
                $(this).removeAttr('readonly'); // Enable for other changes if needed
            }
        });
    }

    // Function to disable all checkboxes if max workdays are selected
    function disableRemainingCheckBoxes() {
        const workdaysChecked = $('.present-day:checked').length;

        if (workdaysChecked === maxWorkDays) {
            // Disable unchecked present day checkboxes
            $('.present-day:not(:checked)').prop('disabled', true);
        } else {
            // Re-enable all checkboxes if less than 5 days are selected
            $('.present-day').prop('disabled', false);
        }
    }

    // Limit selection to 5 workdays and auto-select the remaining as "Day Off"
    $('.present-day').on('change', function() {
        const workdaysChecked = $('.present-day:checked');
        const selectedCount = workdaysChecked.length;

        // Prevent selecting more than 5 workdays
        if (selectedCount > maxWorkDays) {
            $(this).prop('checked', false);
            alert('You can only select up to 5 workdays.');
        }

        // Automatically handle "Day Off" selection when exactly 5 workdays are selected
        if (selectedCount === maxWorkDays) {
            autoSelectDayOff();
            disableRemainingCheckBoxes(); // Disable any unchecked workday checkboxes
        } else {
            // Re-enable day off checkboxes if less than 5 workdays are selected
            $('.day-off').prop('checked', false).removeAttr('readonly');
            disableRemainingCheckBoxes(); // Ensure checkboxes are not disabled when under 5
        }
    });

    // Prevent manually unchecking auto-selected "Day Off" checkboxes
    $('.day-off').on('click', function() {
        if ($(this).attr('readonly')) {
            alert("This day is automatically selected as a day off and cannot be changed.");
            return false; // Prevent unchecking
        }
    });
});


    </script>

</body>

</html>