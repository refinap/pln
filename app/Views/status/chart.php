<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
      <h1 class="mt-3">Grafik Beban</h1>
      <input type="text" name="daterange" value="05/01/2022 - 05/12/2022" />
      <div id="chart" style="width:100%; height:450px;"></div>
      <!-- <button id="downloadCSV">Download Chart Data as CSV</button> -->

      <a href="array_to_csv_download" download>
            <button class="btn btn-success">
                  Download as CSV
            </button>
      </a>
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

      const chartByPayment = async (params = '') => {
            console.log(1)
            byPaymentChart = echarts.init(document.getElementById('chart'));
            // let label, order, sold, cancel;
            let options = {
                  tooltip: {
                        trigger: 'axis'
                  },
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
                        // interval: 5000
                  },
                  dataZoom: [{
                              startValue: '2022-05-01'
                        },
                        {
                              type: 'inside'
                        }
                  ],
                  series: []
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

            let data = await fetch(`/status/getChart/${id_cubicle}/${cb_history}?${params}`);
            data.json().then(res => {
                  console.log(res);
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
</script>
<?= $this->endSection(); ?>
</div>