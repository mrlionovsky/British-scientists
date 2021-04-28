<?
//Что?
$step_one=file("s1.txt");
$lc=count($step_one);
$n1=rand(0, $lc-1);
 
//Чего?
$step_two=file("s2.txt");
$ld=count($step_two);
$n2=rand(0, $ld-1);

//каких?
$step_tree=file("s3.txt");
$le=count($step_tree);
$n3=rand(0, $le-1);

//кого?
$step_four=file("s4.txt");
$lf=count($step_four);
$n4=rand(0, $lf-1);

//где?
$step_five=file("s5.txt");
$lg=count($step_five);
$n5=rand(0, $lg-1);   

//Случайное число для графика
//Вычисляем основное число, от которого будем упираться
$rand_main == rand(0, 6000);

//Число разброса значений
$rand_scatter = rand(0, 6000);
//Вычисляем числа 
$t1 = rand($rand_main, $rand_scatter);
$t2 = rand($rand_main, $rand_scatter);
$t3 = rand($rand_main, $rand_scatter);
$t4 = rand($rand_main, $rand_scatter);
$t5 = rand($rand_main, $rand_scatter);
$t6 = rand($rand_main, $rand_scatter);
$t7 = rand($rand_main, $rand_scatter);
$t8 = rand($rand_main, $rand_scatter);
$t9 = rand($rand_main, $rand_scatter);
$t10 = rand($rand_main, $rand_scatter);
$t11 = rand($rand_main, $rand_scatter);
$t12 = rand($rand_main, $rand_scatter);
$t13 = rand($rand_main, $rand_scatter);
$t14 = rand($rand_main, $rand_scatter);
$t15 = rand($rand_main, $rand_scatter);

?>

<html>
<head>
<title>Вот это график!</title>
<meta http-equiv='Content-Type' content='text/html; charset=windows-1251'>
<meta name=viewport content="width=600">
<link href="style.css" rel="stylesheet" type="text/css">
      <script type = "text/javascript" src = "https://www.gstatic.com/charts/loader.js">
      </script>
      <script type = "text/javascript">
         google.charts.load('current', {packages: ['corechart']});     
      </script>

</head>

<body bgcolor="white" background="fon.jpg">



<table width="640" class="main" align="center">
<tr><td align="center">
    <img src="logo.gif" alt="Лого британских учёных"><br><br>
    <i>Британские учёные выяснили!</i><hr>  
</td></tr>
<tr><td align="center">
        <p class="news"> 
           
           <h3><? echo "$step_one[$n1] $step_two[$n2] у $step_tree[$n3] $step_four[$n4] в $step_five[$n5] ";?></h3>
           <div id="chart_div" style="width: 100%; height: 400px; padding-bottom: 40px;"></div>
           </div>
           <script language = "JavaScript">
           google.charts.load('current', {'packages':['corechart']});
           google.charts.setOnLoadCallback(drawChart);
           function drawChart() {
            var data = google.visualization.arrayToDataTable([
            ['Год', 'Количество'],
            ['1970',  <?php echo $t1 ?>],
            ['1975',  <?php echo $t2 ?>],
            ['1981',  <?php echo $t3 ?>],
            ['1985',  <?php echo $t4 ?>],
            ['1989',  <?php echo $t5 ?>],
            ['1990',  <?php echo $t6 ?>],
            ['1992',  <?php echo $t7 ?>],
            ['1995',  <?php echo $t8 ?>],
            ['1998',  <?php echo $t9 ?>],
            ['2000',  <?php echo $t10 ?>],
            ['2013',  <?php echo $t11 ?>],
            ['2015',  <?php echo $t12 ?>],
            ['2018',  <?php echo $t13 ?>],
            ['2019',  <?php echo $t14 ?>],
            ['2020',  <?php echo $t15 ?>],
           ]);
               
        var options = {
          title: 'Распределение по годам',
          hAxis: {title: 'Год',  titleTextStyle: {color: '#333'}},
          vAxis: {minValue: 0}
        };

        var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
        chart.draw(data, options);
        }
         </script>
         </div>
         <input type="button" value="Создать новый график" onClick="window.location.reload()"><br>
         <font size="2"><a href="about.php">Как это делается</a></font>
        </p>
</div>
</td></tr>
</table>
<p>
<center>(c) <a href="http://lionovsky.us">Lionovsky, 2020</a></center>
</p>



<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter47424376 = new Ya.Metrika2({
                    id:47424376,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/tag.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks2");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/47424376" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</body>
</html>
