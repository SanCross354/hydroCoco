@extends('layouts.main')

@section('container')
@include('partials.sidebar')

<div class="bg-zinc-800 col-span-9 h-full ml-[1px]">
  <div class="p-4 gap-y-8">
    <div class="bg-white rounded-xl pb-4">

      <div class = "bg-white">
        {!! $chart->container() !!}
      </div>  
    </div>
    
    <div class="bg-white rounded-xl pb-4 mt-2">
      <div>
        {!! $chart2->container() !!}
      </div>  
    </div>

    <!-- chart start -->
    <div style="width: 300 ;height: 500">
      <canvas id="myChart"></canvas>
    </div>

    <div style="width: 300 ;height: 500">
      <canvas id="chartSuhu"></canvas>
    </div>

    <div style="width: 300 ;height: 500">
      <canvas id="chartTekanan"></canvas>
    </div>

    <div class="mt-4 h-full">
      <button
        class='block w-full py-2 text-center text-white bg-blue-500 border border-transparent rounded hover:bg-transparent hover:text-black transition uppercase font-roboto font-medium'
        onclick="chartType('bar')">Bar chart</button>
      <button
        class='block w-full py-2 text-center text-white bg-blue-500 border border-transparent rounded hover:bg-transparent hover:text-black transition uppercase font-roboto font-medium'
        onclick="chartType('line')">line chart</button>
      <button
        class='block w-full py-2 text-center text-white bg-blue-500 border border-transparent rounded hover:bg-transparent hover:text-black transition uppercase font-roboto font-medium'
        onclick="chartType('scatter')">scatter chart</button>
      <button
        class='block w-full py-2 text-center text-white bg-blue-500 border border-transparent rounded hover:bg-transparent hover:text-black transition uppercase font-roboto font-medium'
        onclick="pauseChart()">pause</button>
      <button
        class='block w-full py-2 text-center text-white bg-blue-500 border border-transparent rounded hover:bg-transparent hover:text-black transition uppercase font-roboto font-medium'
        onclick="destroy()">off</button>
      <button
        class='block w-full py-2 text-center text-white bg-blue-500 border border-transparent rounded hover:bg-transparent hover:text-black transition uppercase font-roboto font-medium'
        onclick="render()">on</button>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/luxon@3.3.0/build/global/luxon.min.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/chartjs-adapter-luxon@1.3.1/dist/chartjs-adapter-luxon.umd.min.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/chartjs-plugin-streaming@2.0.0/dist/chartjs-plugin-streaming.min.js"></script>

    <script>
      //chart ke 1
      // setup
      var maxTekanan = 30;
      var minTekanan = 22;
      var maxSuhu = 40;
      var minSuhu = 25;
      var maxPh = 8;
      var minPh = 6;

      const data = {
        //labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
        datasets: [{
          label: 'Pipa 1',
          data: [],
          backgroundColor: ['rgba(75, 192, 192, 0.2)'],
          borderColor: ['rgba(75, 192, 192, 1)'],
          borderWidth: 1
        }, {
          label: 'Pipa 2',
          data: [],
          backgroundColor: ['rgba(255,255, 0, 0.2)'],
          borderColor: ['rgba(255, 255, 0, 1)'],
          borderWidth: 1
        }, {
          label: 'Pipa 3',
          data: [],
          backgroundColor: ['rgba(0, 255, 192, 0.2)'],
          borderColor: ['rgba(0, 255, 192, 1)'],
          borderWidth: 1
        }, {
          label: 'Pipa 4',
          data: [],
          backgroundColor: ['rgba(255, 0, 255, 0.2)'],
          borderColor: ['rgba(255, 0, 255, 1)'],
          borderWidth: 1
        }, {
          label: 'Pipa 5',
          data: [],
          backgroundColor: ['rgba(75, 100, 255, 0.2)'],
          borderColor: ['rgba(75, 100, 255, 1)'],
          borderWidth: 1
        }, {
          label: 'Pipa 6',
          data: [],
          backgroundColor: ['rgba(100, 192, 255, 0.2)'],
          borderColor: ['rgba(100, 192, 255, 1)'],
          borderWidth: 1
        }]
      };

      // config
      const config = {
        type: 'bar',
        data,
        options: {
          plugins: {
            title: {
              display: true,
              text: 'Tekanan air',
              streaming: {
                duration: 10000,
                refresh: 2000,
                frameRate: 30
              }
            }
          },
          interaction: {
            intersect: false
          },
          scales: {
            x: {
              type: 'realtime',
              realtime: {

                onRefresh: chart => {
                  chart.data.datasets.forEach(dataset => {
                    dataset.data.push({
                      x: Date.now(),
                      y: Math.random() * (maxTekanan - minTekanan) + minTekanan
                    });
                  });
                }
              }
            },
            y: {
              beginAtZero: false
            }
          }
        }
      };

      //render
      Chart.defaults.font.size = 16;
      let myChart = new Chart(document.getElementById('myChart'), config);


      //chart ke 2
      // setup
      const dataSuhu = {
        //labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
        datasets: [{
          label: 'Pipa 1',
          data: [],
          backgroundColor: ['rgba(75, 192, 192, 0.2)'],
          borderColor: ['rgba(75, 192, 192, 1)'],
          borderWidth: 1
        }, {
          label: 'Pipa 2',
          data: [],
          backgroundColor: ['rgba(255,255, 0, 0.2)'],
          borderColor: ['rgba(255, 255, 0, 1)'],
          borderWidth: 1
        }, {
          label: 'Pipa 3',
          data: [],
          backgroundColor: ['rgba(0, 255, 192, 0.2)'],
          borderColor: ['rgba(0, 255, 192, 1)'],
          borderWidth: 1
        }, {
          label: 'Pipa 4',
          data: [],
          backgroundColor: ['rgba(255, 0, 255, 0.2)'],
          borderColor: ['rgba(255, 0, 255, 1)'],
          borderWidth: 1
        }, {
          label: 'Pipa 5',
          data: [],
          backgroundColor: ['rgba(75, 100, 255, 0.2)'],
          borderColor: ['rgba(75, 100, 255, 1)'],
          borderWidth: 1
        }, {
          label: 'Pipa 6',
          data: [],
          backgroundColor: ['rgba(100, 192, 255, 0.2)'],
          borderColor: ['rgba(100, 192, 255, 1)'],
          borderWidth: 1
        }]
      };

      // config
      const configSuhu = {
        type: 'bar',
        data: dataSuhu,
        options: {
          plugins: {
            title: {
              display: true,
              text: 'Suhu air',
              streaming: {
                duration: 10000,
                refresh: 2000,
                frameRate: 30
              }
            }
          },
          interaction: {
            intersect: false
          },
          scales: {
            x: {
              type: 'realtime',
              realtime: {

                onRefresh: chart => {
                  chart.data.datasets.forEach(dataset => {
                    dataset.data.push({
                      x: Date.now(),
                      y: Math.random() * (maxSuhu - minSuhu) + minSuhu
                    });
                  });
                }
              }
            },
            y: {
              beginAtZero: false
            }
          }
        }
      };

      //render
      let chartSuhu = new Chart(document.getElementById('chartSuhu'), configSuhu);

      //chart ke 3
      // setup
      const dataTekanan = {
        //labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
        datasets: [{
          label: 'Pipa 1',
          data: [],
          backgroundColor: ['rgba(75, 192, 192, 0.2)'],
          borderColor: ['rgba(75, 192, 192, 1)'],
          borderWidth: 1
        }, {
          label: 'Pipa 2',
          data: [],
          backgroundColor: ['rgba(255,255, 0, 0.2)'],
          borderColor: ['rgba(255, 255, 0, 1)'],
          borderWidth: 1
        }, {
          label: 'Pipa 3',
          data: [],
          backgroundColor: ['rgba(0, 255, 192, 0.2)'],
          borderColor: ['rgba(0, 255, 192, 1)'],
          borderWidth: 1
        }, {
          label: 'Pipa 4',
          data: [],
          backgroundColor: ['rgba(255, 0, 255, 0.2)'],
          borderColor: ['rgba(255, 0, 255, 1)'],
          borderWidth: 1
        }, {
          label: 'Pipa 5',
          data: [],
          backgroundColor: ['rgba(75, 100, 255, 0.2)'],
          borderColor: ['rgba(75, 100, 255, 1)'],
          borderWidth: 1
        }, {
          label: 'Pipa 6',
          data: [],
          backgroundColor: ['rgba(100, 192, 255, 0.2)'],
          borderColor: ['rgba(100, 192, 255, 1)'],
          borderWidth: 1
        }]
      };

      // config
      const configTekanan = {
        type: 'bar',
        data: dataTekanan,
        options: {
          plugins: {
            title: {
              display: true,
              text: 'Ph air',
              streaming: {
                duration: 10000,
                refresh: 2000,
                frameRate: 30
              }
            }
          },
          interaction: {
            intersect: false
          },
          scales: {
            x: {
              type: 'realtime',
              realtime: {

                onRefresh: chart => {
                  chart.data.datasets.forEach(dataset => {
                    dataset.data.push({
                      x: Date.now(),
                      y: Math.random() * (maxPh - minPh) + minPh
                    });
                  });
                }
              }
            },
            y: {
              beginAtZero: false
            }
          }
        }
      };

      //render
      let chartTekanan = new Chart(document.getElementById('chartTekanan'), configTekanan);


      function chartType(type) {
        myChart.config.type = type
        myChart.update();
        chartSuhu.config.type = type
        chartSuhu.update();
        chartTekanan.config.type = type
        chartTekanan.update();
      }

      function pauseChart() {
        if (myChart.options.plugins.streaming.pause === false) {
          myChart.options.plugins.streaming.pause = true;
        } else {
          myChart.options.plugins.streaming.pause = false;
        }
        myChart.update();

        if (chartSuhu.options.plugins.streaming.pause === false) {
          chartSuhu.options.plugins.streaming.pause = true;
        } else {
          chartSuhu.options.plugins.streaming.pause = false;
        }
        chartSuhu.update();

        if (chartTekanan.options.plugins.streaming.pause === false) {
          chartTekanan.options.plugins.streaming.pause = true;
        } else {
          chartTekanan.options.plugins.streaming.pause = false;
        }
        chartTekanan.update();

      };


      function destroy() {
        myChart.destroy();
        chartSuhu.destroy();
        chartTekanan.destroy();
      }

      function render() {
        myChart = new Chart(document.getElementById('myChart'), config);
        chartSuhu = new Chart(document.getElementById('chartSuhu'), configSuhu);
        chartTekanan = new Chart(document.getElementById('chartTekanan'), configTekanan);
      }

    </script>
    <!-- chart end -->
  </div>
</div>
<script src="{{ $chart->cdn() }}"></script>
<script src="{{ $chart2->cdn() }}"></script>
{{ $chart->script() }}
{{ $chart2->script() }}
@endsection