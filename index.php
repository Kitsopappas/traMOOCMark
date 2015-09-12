
<?php
include('CreateQuestion.php');
include('select_question.php');
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Mark TraMOOC</title>
    <link rel="icon" type="image/icon" href="fav.ico">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <script src="js/text_selection.js"></script>

    <script src="http://www.amcharts.com/lib/3/amcharts.js"></script>
    <script src="http://www.amcharts.com/lib/3/pie.js"></script>
    <script src="http://www.amcharts.com/lib/3/themes/dark.js"></script>
    <!-- Le styles -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!--[if IE 7]>
    <link rel="stylesheet" href="assets/css/font-awesome-ie7.min.css">
    <![endif]-->

    <link href="css/bootplus.css" rel="stylesheet">
    <link href="css/bootplus-responsive.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="main0.css">
  </head>
  <body ng-app="mark">

   <!-- Container -->
   <div class="main" ng-controller="MainController">
   <div class="container">
     <h1 class="job-title"> {{jobt}} </h1>
     <!-- INFO DIVSS -->
        <div class="card">
         <h3 class="card-heading simple">Instructions</h3>
         <div class="card-body">
           {{instructions1}}
           {{instructions2}}

           <ul>
            <li>{{bullet1}}</li>
            <li>{{bullet2}}</li>
          </ul>


         </div>
      </div>


        <div class="card">
          <div class="card-heading image">
             <img src="lg.png" alt=""/>
             <div class="card-heading-header">
                <h3>{{card_title}}</h3>
                <span>Published - {{date | date}}</span>
                <div class="ballon" ng-repeat="x in names">
                  {{x.TM_QID}}
               </div>
             </div>

             </div>
         <div class="card-body">
           <table class="table">
             <thead>
               <tr>
                 <th>{{Languages[0]}}</th>
                 <th>{{Languages[1]}}</th>
               </tr>
             </thead>
             <tbody id="select">
               <tr ng-repeat="x in names" class="test">
                 <td>{{ x.TM_ENG }}</td>
                 <td>{{ x.TM_GR }}</td>
               </tr>

             </tbody>
            </table>
         </div>
         <div class="card-comments">
            <div id="c1-comments" class="dropdown" style="display:none;padding:20px;">
              <div id="dt"> </div>
               <!--<h4 class="title">What is that?</h4>-->
               <form action="">
                <input type="radio" name="word" value="grammatical">Grammatical<br>
                <input type="radio" name="word" value="missedtext">Missed text<br>
                <input type="radio" name="word" value="syntactical">Syntactical<br>
                <input type="radio" name="word" value="other">other<br>
                <br>
                <button type="button" class="btn btn-default">Add</button>
              </form>
            </div>
         </div>
      </div>
      <!--    <div class="charts">
           <div id="chartdiv"></div>

           <div id="chartdiv_ln"></div>

         </div> -->
       </div>
     </div>
<!--
<script type="text/javascript">
var chart2 = AmCharts.makeChart( "chartdiv_ln", {
  "type": "pie",
  "theme": "dark",
  "dataProvider": [ {
    "country": "Chinese",
    "num": 1197000000
  }, {
    "country": "Spanish",
    "num": 414000000
  }, {
    "country": "English",
    "num": 335000000
  }, {
    "country": "Hindi",
    "num": 260000000
  }, {
    "country": "Arabic",
    "num": 237000000
  }, {
    "country": "Portuguese",
    "num": 203000000
  }, {
    "country": "Bengali",
    "num": 193000000
  }, {
    "country": "Russian",
    "num": 167000000
  }, {
    "country": "Japanese",
    "num": 122000000
  } ],
  "valueField": "num",
  "titleField": "country",
   "balloon":{
   "fixedPosition":true
  },
  "export": {
    "enabled": true
  }
} );
</script>

<script type="text/javascript">
      var chart = AmCharts.makeChart( "chartdiv", {
      "type": "pie",
      "theme": "dark",
      "dataProvider": [ {
        "title": "traMOOC Languages",
        "value": 11
      }, {
        "title": "Languages",
        "value": 133
      } ],
      "titleField": "title",
      "valueField": "value",
      "labelRadius": 5,

      "radius": "42%",
      "innerRadius": "60%",
      "labelText": "[[title]]",
      "export": {
        "enabled": true
      }
      } );
</script>
-->
  </body>
  <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.0.4/angular.js"></script>
  <!-- Angular JS - app.js -->
  <script src="ang/app.js"></script>
  <!-- Angular JS - Controllers -->
  <script src="ang/MainController.js"></script>
</html>
