<?php include 'header.php'; ?>
        <div class="container">
            <div class="row">
                <div class="col">
                    <p class="text-white mt-5">Welcome back, <b>admin</b></p>
                </div>
            </div>
            <!-- row -->
        </div>>    

    <div class="container">
      <div class="row tm-content-row">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 tm-block-col">
          <div class="tm-bg-primary-dark tm-block tm-block-products">
            <div class="tm-product-table-container">
              <table class="table table-hover tm-table-small tm-product-table">
                <thead>
                  <tr>
                    <th scope="col">&nbsp;</th>
                    <th scope="col">FIRST NAME</th>
                    <th scope="col">LAST NAME</th>
                    <th scope="col">EMAIL</th>
                    <th scope="col">COUNTRY</th>
                    <th scope="col">PHONE NO.</th>
                    <th scope="col">&nbsp;</th>
                  </tr>
                </thead>
                <tbody>
                    <?php if(count($postdata)) : ?>
                    <?php foreach ($postdata as $posts) : ?>
                  <tr>
                    <th scope="row"><input type="checkbox" /></th>
                    <td class="tm-product-name"><?php echo $posts->first_name; ?></td>
                    <td><?php echo $posts->last_name; ?></td>
                    <td><?php echo $posts->email; ?></td>
                    <td><?php echo $posts->country; ?></td>
                    <td><?php echo $posts->phone; ?></td>
                    <td>
                      <a href="#" class="tm-product-delete-link">
                        <i class="fas fa-edit text-white"></i>
                      </a>
                      <a href="dashboard/del?id=<?php echo $posts->id; ?>" class="tm-product-delete-link" onclick="return confirm('sre you sure')">
                        <i class="far fa-trash-alt tm-product-delete-icon"></i>
                      </a>
                    </td>
                  </tr>
            <?php endforeach; ?> 
    <?php else : ?>
        <tr>
            <td colspan="3">Not data available</td>
        </tr>   

<?php endif; ?>     
      

                </tbody>
              </table>
            </div>
            <!-- table container -->
            <a
              href="dashboard/new_user"
              class="btn btn-primary btn-block text-uppercase mb-3">Add new product</a>
            <button class="btn btn-primary btn-block text-uppercase">
              Delete selected products
            </button>
          </div>
        </div>

        <footer class="tm-footer row tm-mt-small">
            <div class="col-12 font-weight-light">
                <p class="text-center text-white mb-0 px-4 small">
                    Copyright &copy; <b>2018</b> All rights reserved. 
                    
                    Design: <a rel="nofollow noopener" href="https://ewebinnovation.com" class="tm-footer-link">ewebinnovation</a>
                </p>
            </div>
        </footer>
    </div>

    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="assets/js/moment.min.js"></script>
    <!-- https://momentjs.com/ -->
    <script src="assets/js/Chart.min.js"></script>
    <!-- http://www.chartjs.org/docs/latest/ -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
    <script src="assets/js/tooplate-scripts.js"></script>
    <script>
        Chart.defaults.global.defaultFontColor = 'white';
        let ctxLine,
            ctxBar,
            ctxPie,
            optionsLine,
            optionsBar,
            optionsPie,
            configLine,
            configBar,
            configPie,
            lineChart;
        barChart, pieChart;
        // DOM is ready
        $(function () {
            drawLineChart(); // Line Chart
            drawBarChart(); // Bar Chart
            drawPieChart(); // Pie Chart

            $(window).resize(function () {
                updateLineChart();
                updateBarChart();                
            });
        })
    </script>
</body>

</html>