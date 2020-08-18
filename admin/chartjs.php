<?php include 'header.php'; ?>

<?php
if ($_SESSION['level'] = '') {
  header("location:login.php");
} ?>
<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-lg-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Line chart</h4>
            <canvas id="lineChart" style="height:250px"></canvas>
          </div>
        </div>
      </div>
      <div class="col-lg-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Bar chart</h4>
            <canvas id="barChart" style="height:230px"></canvas>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Area chart</h4>
            <canvas id="areaChart" style="height:250px"></canvas>
          </div>
        </div>
      </div>
      <div class="col-lg-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Doughnut chart</h4>
            <canvas id="doughnutChart" style="height:250px"></canvas>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Pie chart</h4>
            <canvas id="pieChart" style="height:250px"></canvas>
          </div>
        </div>
      </div>
      <div class="col-lg-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Scatter chart</h4>
            <canvas id="scatterChart" style="height:250px"></canvas>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- content-wrapper ends -->
  <!-- partial:../../partials/_footer.html -->
  <footer class="footer">
    <div class="container-fluid clearfix">
      <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2018
        <a href="http://www.bootstrapdash.com/" target="_blank">Bootstrapdash</a>. All rights reserved.</span>
      <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with
        <i class="mdi mdi-heart text-danger"></i>
      </span>
    </div>
  </footer>
  <!-- partial -->
</div>
<?php include 'footer.php' ?>

</body>

</html>