$(document).ready(function () {
    $.getJSON("/chart-data", function (data) {
        Morris.Bar({
            element: "bar-charts",
            data: data,
            xkey: "year",
            ykeys: ["total_patient", "total_completed"],
            labels: ["Total Patient", "Total Completed"],
            lineColors: ["#ff9b44", "#fc6075"],
            lineWidth: "3px",
            barColors: ["#98ff98", "#fff9c4"],
            resize: true,
            redraw: true,
        });

        Morris.Line({
            element: "line-charts",
            data: data,
            xkey: "year",
            ykeys: ["total_patient", "total_completed"],
            labels: ["Total Patient", "Total Completed"],
            lineColors: ["#ff6f61", "#d1c4e9"],
            lineWidth: "3px",
            resize: true,
            redraw: true,
        });
    });
});
