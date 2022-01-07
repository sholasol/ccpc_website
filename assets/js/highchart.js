var initialData,
  chart;
const startYear = 1960,
  endYear = 2018,
  btn = document.getElementById('play-pause-button'),
  input = document.getElementById('play-range');


/**
 * Calculate the data output
 */
function getData(year) {
  let output = Object.entries(initialData).map(country => {
    const [countryName, countryData] = country;
    return [countryName, Number(countryData[year])]
  }).sort((a, b) => b[1] - a[1]);

  return ([output[0], output.slice(1, 11)]);
}

Highcharts.getJSON('https://demo-live-data.highcharts.com/population.json', function(data) {
  initialData = data;

  chart = Highcharts.chart('container', {
    chart: {
      animation: {
        duration: 500
      },
      events: {
        render() {
          let chart = this;

          // Responsive input
          input.style.width = chart.plotWidth - chart.legend.legendWidth + chart.plotLeft / 2 - 10 + 'px' // where 10 is a padding
        }
      },
      marginRight: 50,
    },
    plotOptions: {
      series: {
        animation: false,
        groupPadding: 0,
        pointPadding: 0.1,
        borderWidth: 0
      }
    },
    title: {
      useHTML: true,
      text: `World population - overall: <b>${getData(startYear)[0][1]}</b>`
    },

    legend: {
      align: 'right',
      verticalAlign: 'bottom',
      itemStyle: {
        fontWeight: 'bold',
        fontSize: '50px',
      },
      symbolHeight: 0.001,
      symbolWidth: 0.001,
      symbolRadius: 0.001,
    },
    xAxis: {
      type: 'category',
    },
    yAxis: [{
      opposite: true,
      title: {
        text: 'Population per country'
      },
      tickAmount: 5
    }],
    series: [{
      colorByPoint: true,
      dataSorting: {
        enabled: true,
        matchByName: true
      },
      type: 'bar',
      dataLabels: [{
        enabled: true,
      }],
      name: startYear,
      data: getData(startYear)[1]
    }]
  });
});