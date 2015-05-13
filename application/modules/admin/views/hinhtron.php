<html>
  <head>
        <link href="<?php echo base_url(); ?>themes/admin/css/bootstrap.min.css" rel="stylesheet">
 <link  rel="stylesheet" href="<?php echo base_url(); ?>themes/admin/css/prelude.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>themes/admin/css/rainbow.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>themes/admin/css/progress.css">
    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>themes/admin/css/sb-admin.css" rel="stylesheet">

  </head>
  <body>

    <div class="row">
      <div class="col-xs-12">
 <div id="chart_div"></div>
      </div>
      
    </div>  
             <div class="row">
                <div class="col-xs-6">
        <div id="piechart" style="width:500px; height:500px;" ></div>
      </div>
      <div class="col-xs-3" style="margin-top:6%">
                  <div style="height: 200px;width:200px" class="pie_progress" role="progressbar" data-barcolor="#3daf2c" data-goal=" <?php print_r($data2[0][0]); ?>">
                    <div class="pie_progress__number">0%</div>
                    <div class="pie_progress__label">New Sessions</div>
                </div>
              </div>
              <div class="col-xs-3" style="margin-top:6%">
                 <div style="height: 200px;width:200px" class="pie_progress" role="progressbar" data-barcolor="#d62d20" data-goal=" <?php print_r($data2[0][1]); ?>">
                    <div class="pie_progress__number">0%</div>
                    <div class="pie_progress__label">% Exits</div>
                </div>

      </div>
             </div>
    
  </body>
  <script type="text/javascript" src="<?php echo base_url(); ?>themes/admin/moment.js"></script>
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {

        var data = google.visualization.arrayToDataTable([
 <?php
          echo "['Task', 'Hours per Day'],";
            foreach ($data as $r) {
             echo "['".$r[0]."',".$r[1]."],";

            }
           ?>
        ]);

        var options = {
          title: 'Country Analytics'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);

      }
    </script>

    <script type="text/javascript">
    var date="";
    var text="";
    function stringdate(  date,d1,d2)
    {
      var text= '["'+date+'",'+d1+','+d2+']';
      return text;
    }
                        
          
      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart1);
      function drawChart1() {
              var date="";
            var kq=new Array();
            kq.unshift('[["Year", "New Users","Users"]');
               <?php
         
              foreach ($data1 as $r) {
        echo 'date =moment("'.$r[0].'","YYYYDDMM").format("L");';
        echo 'kq.push(stringdate(date,'.$r[1].','.$r[2].'));';
            }
           
           ?>
           kq+="]";

var obj = JSON.parse(kq);
var data = google.visualization.arrayToDataTable(obj);
        var options = {
          title: 'Users Statistic',
          hAxis: {title: '',  titleTextStyle: {color: '#333'}},
          vAxis: {minValue: 0}
        };

        var chart1 = new google.visualization.AreaChart(document.getElementById('chart_div'));
        chart1.draw(data, options);
      }
    </script>
     <script type="text/javascript" src="<?php echo base_url(); ?>themes/admin/js/rainbow.min.js"></script>

    <script type="text/javascript" src="<?php echo base_url(); ?>themes/admin/js/jquery-asPieProgress.js"></script>
    <script type="text/javascript">
    jQuery(document).ready(function($){
        $('.pie_progress').asPieProgress({
            namespace: 'pie_progress'
        });
$('.pie_progress').asPieProgress('start');


    });
    </script>
</html>

