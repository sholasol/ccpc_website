var options = {
    chart: {
      height: 500,
      type: "area"
    },
    dataLabels: {
      enabled: false
    },
    series: [
      {
        name: "Series 1",
        data: [45, 52, 38, 45, 19, 23, 2, 30, 25,40,70,120]
      }
    ],
    fill: {
      type: "gradient",
      gradient: {
        shadeIntensity: 1,
        opacityFrom: 0.7,
        opacityTo: 0.9,
        stops: [0, 90, 100]
      }
    },
    xaxis: {
      categories: [
        "Jan",
        "Feb",
        "Mar",
        "Apr",
        "May",
        "Jun",
        "Jul",
        "Aug",
        "Sep",
        "Oct",
        "Nov",
        "Dec"
      ]
    }
  };
  
  var chart = new ApexCharts(document.querySelector("#chart"), options);
  
  chart.render();




//Donut Pie
var options = {
    series: [44, 55, 41, 17, 15],
    chart: {
    type: 'donut',
    height:500
  },
  responsive: [{
    breakpoint: 480,
    options: {
      chart: {
        width: 200
      },
      legend: {
        position: 'bottom'
      }
    }
  }]
  };

  var chart = new ApexCharts(document.querySelector("#chart-pie"), options);
  chart.render();



  var options = {
    series: [{
    data: [5, 10, 2, 3,  15, 100, 12, 100]
  }],
    chart: {
    type: 'bar',
    height: 500
  },
  plotOptions: {
    bar: {
      borderRadius: 4,
      horizontal: true,
    }
  },
  dataLabels: {
    enabled: false
  },
  xaxis: {
    categories: ['Donation', 'Completeness', 'Equipment', 'Duration', 'Students',
      'Community', 'Block', 'Land Aquisition'
    ],
  }
  };

  var chart = new ApexCharts(document.querySelector("#chart-gantt"), options);
  chart.render();
  