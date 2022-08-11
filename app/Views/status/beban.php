<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
      <h1 class="mt-3">Grafik Beban</h1>
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

            let options = {
                  tooltip: {
                        trigger: 'axis'
                  },
                  legend: {
                        data: ['IA', 'IB', 'IC']
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
                        // interval: 50
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

            // LET BEBAN GET PARAMETER WITH JS


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
            let data = await fetch(`<?php echo base_url(); ?>/status/getBeban/${id_cubicle}?${params}`);
            data.json().then(res => {
                  //console.log(res.data[0].IA);
                  lineArray = res.data;

                  //deklarasi label
                  label = [];
                  //loop data untuk di masukkan ke array 'label'
                  for (let x = 0; x < lineArray.length; x++) {
                        label.push(lineArray[x].t);
                  };
                  options.xAxis.data = label;
                  const labelOption = {
                        normal: {
                              show: true,
                              position: 'insideBottom',
                              formatter: '{a}',
                        }
                  }

                  //deklarasi array
                  dataIA = [];
                  dataIB = [];
                  dataIC = [];
                  //loop data untuk di masukkan ke array
                  for (let x = 0; x < lineArray.length; x++) {
                        dataIA.push(lineArray[x].IA);
                  };
                  for (let x = 0; x < res.data.length; x++) {
                        dataIB.push(lineArray[x].IB);
                  };
                  for (let x = 0; x < res.data.length; x++) {
                        dataIC.push(lineArray[x].IC);
                  };
                  console.log('data IA: ' + dataIA);
                  console.log('data IB: ' + dataIB);
                  console.log('data IC: ' + dataIC);
                  options.series.push({
                        name: 'IA',
                        label: labelOption,
                        type: 'line',
                        data: dataIA,
                        label: {
                              show: false,
                              position: 'top'
                        }
                  }, {
                        name: 'IB',
                        label: labelOption,
                        type: 'line',
                        data: dataIB,
                        label: {
                              show: false,
                              position: 'top'
                        }
                  }, {
                        name: 'IC',
                        label: labelOption,
                        type: 'line',
                        data: dataIC,
                        label: {
                              show: false,
                              position: 'top'
                        }
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
                  csvData.push(index == 0 ? "\uFEFF" + line : line);
            });
            var csvContent = csvData.join("\n");

            var blob = new Blob([csvContent], {
                  type: "text/csv;charset=utf-8;"
            });
            var link = document.createElement("a");

            if (link.download !== undefined) { // feature detection
                  // Browsers that support HTML5 download attribute
                  link.setAttribute("href", window.URL.createObjectURL(blob));
                  link.setAttribute("download", "Data Beban.csv");
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
      $('.cubicle').click(function() {
            let id_cubicle = $(this).data('cubicle');
            let cb_name = $(this).data('name');
            $('#cb_name').html(cb_name);
            $('#id_cubicle').html(id_cubicle)
      });
</script>
<?= $this->endSection(); ?>
</div>