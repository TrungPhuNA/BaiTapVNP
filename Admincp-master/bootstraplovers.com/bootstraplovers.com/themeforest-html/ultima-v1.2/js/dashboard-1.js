$(function () {
    "use strict";
     /**
     * Options for Line chart
     */
    var lineData = {
        labels: ["January", "February", "March", "April", "May", "June", "July"],
        datasets: [
            {
                label: "Example dataset",
                fillColor: "rgba(155,167,236,1)",
                strokeColor: "rgba(155,167,236,1)",
                pointColor: "rgba(155,167,236,1)",
                pointStrokeColor: "#fff",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(155,167,236,1)",
                data: [32, 52, 67, 64, 67, 77, 54]
            },
            {
                label: "Example dataset",
                fillColor: "rgba(63,81,181,1)",
                strokeColor: "rgba(63,81,181,1)",
                pointColor: "rgba(63,81,181,1)",
                pointStrokeColor: "#fff",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(63,81,181,1)",
                data: [18, 34, 44, 32, 42, 53, 34]
            }
        ]
    };

    var lineOptions = {
        scaleShowGridLines: true,
        scaleGridLineColor: "rgba(0,0,0,.00)",
        scaleGridLineWidth: 1,
        bezierCurve: true,
        bezierCurveTension: 0.4,
        pointDot: true,
        pointDotRadius: 4,
        pointDotStrokeWidth: 1,
        pointHitDetectionRadius: 20,
        datasetStroke: true,
        datasetStrokeWidth: 1,
        datasetFill: true,
        responsive: true
    };
    var ctx = document.getElementById("linechart").getContext("2d");
    var myNewChart = new Chart(ctx).Line(lineData, lineOptions);
    /**
     * doughnut chart
     */
        var doughnutData = [
            {
                value: 70,
                color:"#50cdf4",
                highlight: "#ddd",
                label: "Safari"
            },
            {
                value: 120,
                color: "#3f51b5",
                highlight: "#ddd",
                label: "Chrome"
            },
            {
                value: 100,
                color: "#F44336",
                highlight: "#eee",
                label: "Mozzila"
            }
        ];

        var doughnutOptions = {
            segmentShowStroke: true,
            segmentStrokeColor: "#fff",
            segmentStrokeWidth: 2,
            percentageInnerCutout: 45, // This is 0 for Pie charts
            animationSteps: 100,
            animationEasing: "easeOutBounce",
            animateRotate: true,
            animateScale: false,
            responsive: true
        };


        var ctx = document.getElementById("doughnutChart").getContext("2d");
        var myNewChart = new Chart(ctx).Doughnut(doughnutData, doughnutOptions);
    });

