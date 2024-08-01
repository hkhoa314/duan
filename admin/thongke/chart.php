<!-- start flot-chart  -->
<div class="row mt-5">
  <div class="col-12">
    <div>
      <h4 class="header-title mb-3">Biểu đồ</h4>
      <div class="row">
        <div class="col-lg-6">
          <div class="mt-5" style="width: 400px;">
            <h5 class="font-14">5 sản phẩm bán chạy nhất</h5>
            <canvas id="top5daban"></canvas>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="mt-5">
            <h5 class="font-14">5 sản phẩm có nhiều lượt xem nhất</h5>
            <canvas id="top5view"></canvas>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script src="
https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js
"></script>
<script>
  var ctx1 = document.getElementById('top5daban').getContext('2d');
  var chart1 = new Chart(ctx1, {
    type: 'pie',
    data: {
      labels: [
        <?php 
          for ($i = 0; $i < 5; $i++){
            echo "'";
            echo $banchay[$i]['name'];
            echo "'";
            if ($i != 4){
              echo ',';
            }
          }
        ?>
      ],
      datasets: [{
        label: 'Số sản phẩm đã bán',
        data: [<?php 
          for ($i = 0; $i < 5; $i++){
            echo $banchay[$i]['daban'];
            if ($i != 4){
              echo ',';
            }
          }
        ?>],
        backgroundColor: [
          'rgb(255, 99, 132)',
          'rgb(54, 162, 235)',
          'rgb(255, 205, 86)',
          '#00DFA2',
          '#0D1282'
        ],
        hoverOffset: 4
      }]
    },
    options: {}
  });

  var ctx2 = document.getElementById('top5view').getContext('2d');
  var chart2 = new Chart(ctx2, {
    type: 'bar',
    data: {
      labels: [
        <?php 
          for ($i = 0; $i < 5; $i++){
            echo "'";
            echo $view[$i]['name'];
            echo "'";
            if ($i != 4){
              echo ',';
            }
          }
        ?>
      ],
      datasets: [{
        label: 'Số lượt xem',
        data: [<?php 
          for ($i = 0; $i < 5; $i++){
            echo $view[$i]['view'];
            if ($i != 4){
              echo ',';
            }
          }
        ?>],
        backgroundColor: [
          'rgb(255, 99, 132)',
          'rgb(54, 162, 235)',
          'rgb(255, 205, 86)',
          '#00DFA2',
          '#0D1282'
        ],
        hoverOffset: 4
      }]
    },
    options: {
    scales: {
      y: {
        beginAtZero: true
      }
    }
  }
  });
</script>