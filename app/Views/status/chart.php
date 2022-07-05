<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
      <h1 class="mt-3">Grafik Riwayat Beban <span id="cb_history"></span> </h1>
      <input type="text" name="daterange" value="05/10/2022 - 06/10/2022" />
      <div id="chart" style="width:100%; height:450px;"></div>
      <button class="btn btn-success" onclick="downlaodCsv()">
            Download as CSV
      </button>
</div>
<?= $this->endSection(); ?>

<?= $this->section('javascript'); ?>
<script>
      $('input[name="daterange"]').daterangepicker({
            opens: 'left'
      }, function(start, end, label) {
            let starts = start.format('YYYY-MM-DD')
            let ends = end.format('YYYY-MM-DD')
            let qs = `start=${starts}&end=${ends}`
            chartByPayment(qs);
            console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
      });

      var lineArray = new Array();

      // function 1 untuk get data & set chart
      const chartByPayment = async (params = '') => {
            console.log(1)
            byPaymentChart = echarts.init(document.getElementById('chart'));
            // let label, order, sold, cancel;
            let options = {
                  tooltip: {
                        trigger: 'axis'
                  },
                  // legend: {
                  //       data: ['IA', 'IB', 'IC', 'Nilai']
                  // },
                  toolbox: {
                        show: true,
                        feature: {
                              restore: {
                                    show: true,
                                    title: "Refresh"
                              },
                              saveAsImage: {
                                    show: true,
                                    title: "Save Image"
                              },
                              dataView: {
                                    readOnly: false
                              },
                        }
                  },
                  xAxis: {
                        type: 'category',
                        name: 'Waktu',
                        data: []
                  },
                  yAxis: {
                        type: 'value',
                        name: 'Nilai',
                        includeZero: true,
                        // interval: 50
                  },
                  dataZoom: [{
                              startValue: '2022-05-01'
                        },
                        {
                              type: 'inside'
                        }
                  ],
                  series: [{
                              name: 'IA',
                              type: 'line',
                              data: [120, 132, 133, 133.44, 133.67, 134, 134.11, 134.19, 134.29, 135, 136.21, 136.98, 138, 138.6, 139, 141, 142, 144, 144.7, 120, 132, 133, 133.44, 133.67, 134, 134.11, 134.19, 134.29, 135, 136.21, 136.98, 138, 138.6, 139, 141, 142, 144, 144.7, 133, 135, 135.5, 133, 136, 137, 136.9, 135, 133, 135, 135.5, 133, 136, 137, 136.9, 135, ]
                        },
                        {
                              name: 'IB',
                              type: 'line',
                              data: [150, 151, 151.8, 152, 150, 150.6, 152, 152.7, 152.9, 154, 153, 153.6, 155, 150, 151, 151.8, 152, 150, 150.6, 152, 152.7, 152.9, 154, 153, 153.6, 155, 150, 151, 151.8, 152, 150, 150.6, 152, 152.7, 152.9, 154, 153, 153.6, 155, 150, 151, 151.8, 152, 150, 150.6, 152, 152.7, 152.9, 154, 153, 153.6, 155, ]
                        },
                        {
                              name: 'IC',
                              type: 'line',
                              data: [90, 97, 98, 98.6, 99, 100, 97, 100, 101, 101.7, 102, 90, 97, 98, 98.6, 99, 100, 97, 100, 101, 101.7, 102, 90, 97, 98, 98.6, 99, 100, 97, 100, 101, 101.7, 102, 90, 97, 98, 98.6, 99, 100, 97, 100, 101, 101.7, 102, 103, 103.7, 103, 102, 101, 100, 99, 100.7, 99.8, 98, 101, 101.7, 103, 105, 100, 104.5, 100, 106]
                        }
                  ]
            };

            // LET HISTORY GET PARAMETER WITH JS


            // LET OUTGOING
            // let param = (new URL(document.location)).searchParams;
            // let data = param.get("data");
            let baseUri = window.location.href
            console.log(baseUri)
            let url = new URL(`${baseUri}`)
            let paramsy = new URLSearchParams(url.search);
            let id_cubicle = paramsy.get('cubicle')
            let cb_history = paramsy.get('history')

            // data ini berbentuk json array;
            let data = await fetch(`/status/getChart/${id_cubicle}/${cb_history}?${params}`);
            data.json().then(res => {
                  console.log(res);
                  lineArray = res.data;
                  label = res.data.map(i => i.time)
                  options.xAxis.data = label;
                  const labelOption = {
                        normal: {
                              show: true,
                              position: 'insideBottom',
                              formatter: '{a}',
                        }
                  }

                  order = res.data.map(i => i.value)
                  options.series.push({
                        name: 'Nilai',
                        label: labelOption,
                        type: 'line',
                        data: order,
                        label: {
                              show: true,
                              position: 'top'
                        },
                  })
                  byPaymentChart.setOption(options, true)
            })
      }


      // function ini unutk download aja
      function downlaodCsv() {
            var header = ['nilai', 'time']
            const csvData = [];
            csvData.push(header);

            lineArray.forEach(function(infoArray, index) {
                  var line = [infoArray.value, infoArray.time].join(",");
                  csvData.push(index == 0 ? "\uFEFF" + line : line); // 為了讓Excel開啟csv，需加上BOM：\uFEFF
            });
            var csvContent = csvData.join("\n");

            var blob = new Blob([csvContent], {
                  type: "text/csv;charset=utf-8;"
            });
            var link = document.createElement("a");

            if (link.download !== undefined) { // feature detection
                  // Browsers that support HTML5 download attribute
                  link.setAttribute("href", window.URL.createObjectURL(blob));
                  link.setAttribute("download", "Data Riwayat Beban.csv");
                  link.setAttribute("hidden", true);
            } else {
                  // it needs to implement server side export
                  console.log('error');
                  link.setAttribute("href", "#");
            }
            //link.innerHTML = "Export to CSV";
            //document.body.appendChild(link);
            link.click();
      }
</script>
<?= $this->endSection(); ?>
</div>