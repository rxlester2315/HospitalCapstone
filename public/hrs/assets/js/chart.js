$(document).ready(function () {
    Morris.Bar({
        element: "bar-charts",
        data: [
            { y: "2020", a: 100, b: 90 },
            { y: "2020", a: 75, b: 65 },
            { y: "2021", a: 50, b: 40 },
            { y: "2022", a: 75, b: 65 },
            { y: "2023", a: 50, b: 40 },
            { y: "2024", a: 75, b: 65 },
        ],
        xkey: "y",
        ykeys: ["a", "b"],
        labels: ["Total Patient", "Total Completed"],
        lineColors: ["#ff9b44", "#fc6075"],
        lineWidth: "3px",
        barColors: ["#98ff98", "#fff9c4"],
        resize: true,
        redraw: true,
    });
    Morris.Line({
        element: "line-charts",
        data: [
            { y: "2020", a: 50, b: 90 },
            { y: "2020", a: 75, b: 65 },
            { y: "2021", a: 50, b: 40 },
            { y: "2022", a: 75, b: 65 },
            { y: "2023", a: 50, b: 40 },
            { y: "2024", a: 75, b: 65 },
        ],
        xkey: "y",
        ykeys: ["a", "b"],
        labels: ["Total Patient", "Total Completed"],
        lineColors: ["#ff6f61", "#d1c4e9"],
        lineWidth: "3px",
        resize: true,
        redraw: true,
    });
});
