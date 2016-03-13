$(function() {
    var el = $("#server-stats-chart").get(0).getContext("2d");
    console.log(el);
    var data = {
        labels: ["10h", "11h", "12h", "13h", "14h", "15h"],
        datasets: [
            {
                label: "My First dataset",
                fillColor: "rgba(241, 127, 22, .1)",
                strokeColor: "rgb(241, 127, 22)",
                pointColor: "#fff",
                pointStrokeColor: "rgb(241, 127, 22)",
                pointHighlightFill: "rgb(241, 127, 22)",
                pointHighlightStroke: "#fff",
                data: [22, 23, 31, 44, 29, 34]
            }
        ]
    };
    var chart = new Chart(el).Line(data, {
        bezierCurve: false
    });
});