<!DOCTYPE html>
<html>

<head>

<META HTTP-EQUIV='Cache-Control' CONTENT='no-cache'>
<META HTTP-EQUIV='Progma' CONTENT='no-cache'>
<META NAME='KEYWORDS' CONTENT='Australia, Share, Stock Market, Value, Investment'>
<meta name="description" content="Australian Value Industry Shares for value investors">
<title>Australian Value Industry Shares for Value Investing - DW InfoServer</title>


  <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src= "http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
  <!-- script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.2/css/foundation.css">
  <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.2/js/foundation.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>
  
  <link rel="stylesheet" href="https://rawgit.com/esvit/ng-table/master/dist/ng-table.min.css">
<script src="https://rawgit.com/esvit/ng-table/master/dist/ng-table.min.js"></script>
<script src="http://www.dwinfoserver.com/shares/dirPagination.js"></script>
<link rel="stylesheet" href="http://www.dwinfoserver.com/shares/style.css">
<script src="http://www.dwinfoserver.com/shares/myscript.js"></script>
</head>


<body><a name="top"></a>
<nav class="topdwen top-bar" data-topbar>
  <ul class="title-area">
    <li class="name">
      <h1><a href="#">Australian Value Shares for Value Investors</a></h1>
    </li>
    <!-- Collapsible Button on small screens: remove the .menu-icon class to get rid of icon. 
    Remove the "Menu" text if you only want to show the icon -->
    <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
  </ul>

  <section class="top-bar-section">
    <ul class="right">
      <li class="ind"><a href="http://www.dwinfoserver.com">Home</a></li>
      <li class="active"><a href="http://www.dwinfoserver.com/shares/index.php">Industry</a></li>
      <li class="mining"><a href="http://www.dwinfoserver.com/shares/mining.php">Mining</a></li>
   
    </ul>
  </section>
</nav>


<div  ng-app="myApp" ng-controller="customersCtrl" class="container">

 <div class="table-responsive"> 
<table class="table table-striped table-hover">
<thead>
<tr>
<td colspan="3" style="text-align:right;"><form class="form-inline">
        <div class="form-group">
           
            <input type="text" ng-model="search" class="form-control" placeholder="Search">
        </div>
    </form></td><td colspan="6">
  
</td>

</tr>
<tr align="center">
<th ng-click="sort('ASXCode')">ASX<br> Code
<span class="glyphicon sort-icon" ng-show="sortKey=='ASXCode'" ng-class="{'glyphicon-chevron-up':reverse,'glyphicon-chevron-down':!reverse}"></span>
</th>
<th ng-click="sort('SecurityDescription')">Company Name
<span class="glyphicon sort-icon" ng-show="sortKey=='SecurityDescription'" ng-class="{'glyphicon-chevron-up':reverse,'glyphicon-chevron-down':!reverse}"></span>
</th>
<th ng-click="sort('YearHigh')">1 Year <br>High $
<span class="glyphicon sort-icon" ng-show="sortKey=='YearHigh'" ng-class="{'glyphicon-chevron-up':reverse,'glyphicon-chevron-down':!reverse}"></span>
</th>
<th ng-click="sort('YearLow')">1 Year <br>Low $
<span class="glyphicon sort-icon" ng-show="sortKey=='YearLow'" ng-class="{'glyphicon-chevron-up':reverse,'glyphicon-chevron-down':!reverse}"></span>
</th>
<th ng-click="sort('DivCentsPerShare')">Dividend (Cents<br>per share)
<span class="glyphicon sort-icon" ng-show="sortKey=='DivCentsPerShare'" ng-class="{'glyphicon-chevron-up':reverse,'glyphicon-chevron-down':!reverse}"></span>
</th>
<th ng-click="sort('NTA')">NTA $
<span class="glyphicon sort-icon" ng-show="sortKey=='NTA'" ng-class="{'glyphicon-chevron-up':reverse,'glyphicon-chevron-down':!reverse}"></span>
</th>
<th ng-click="sort('DivYld')">Dividend <br>Yield %
<span class="glyphicon sort-icon" ng-show="sortKey=='DivYld'" ng-class="{'glyphicon-chevron-up':reverse,'glyphicon-chevron-down':!reverse}"></span>
</th>
<th ng-click="sort('EarnSharePerCent')">Earning Per<br> Share (cent)
<span class="glyphicon sort-icon" ng-show="sortKey=='EarnSharePerCent'" ng-class="{'glyphicon-chevron-up':reverse,'glyphicon-chevron-down':!reverse}"></span>
</th>
<th ng-click="sort('PERatio')">P/E<br> Ratio
<span class="glyphicon sort-icon" ng-show="sortKey=='PERatio'" ng-class="{'glyphicon-chevron-up':reverse,'glyphicon-chevron-down':!reverse}"></span>
</th>
</tr></thead>
<tbody>


  <tr dir-paginate="x in names|orderBy:sortKey:reverse|filter:search|itemsPerPage:35">
    <td ng-if="$odd" style="background-color:#f1f1f1"><a href="http://www.google.com/finance?q=asx%3A{{ x.ASXCode }}" target="_blank">{{ x.ASXCode }}</a></td>
    <td ng-if="$even"><a href="http://www.google.com/finance?q=asx%3A{{ x.ASXCode }}" target="_blank">{{ x.ASXCode }}</a></td>
    <td ng-if="$odd" style="background-color:#f1f1f1"><a href="http://www.asx.com.au/asx/markets/priceLookup.do?by=asxCodes&asxCodes={{ x.ASXCode }}" target="_blank">{{ x.SecurityDescription }}</a></td>
    <td ng-if="$even"><a href="http://www.asx.com.au/asx/markets/priceLookup.do?by=asxCodes&asxCodes={{ x.ASXCode }}" target="_blank">{{ x.SecurityDescription }}</a></td>
    <td ng-if="$odd" style="background-color:#f1f1f1">{{ x.YearHigh }}</td>
    <td ng-if="$even">{{ x.YearHigh }}</td>
    <td ng-if="$odd" style="background-color:#f1f1f1">{{ x.YearLow }}</td>
    <td ng-if="$even">{{ x.YearLow }}</td>
    <td ng-if="$odd" style="background-color:#f1f1f1">{{ x.DivCentsPerShare }}</td>
    <td ng-if="$even">{{ x.DivCentsPerShare }}</td>
    <td ng-if="$odd" style="background-color:#f1f1f1">{{ x.NTA }}</td>
    <td ng-if="$even">{{ x.NTA }}</td>
    <td ng-if="$odd" style="background-color:#f1f1f1">{{ x.DivYld }}</td>
    <td ng-if="$even">{{ x.DivYld }}</td>
    <td ng-if="$odd" style="background-color:#f1f1f1">{{ x.EarnSharePerCent }}</td>
    <td ng-if="$even">{{ x.EarnSharePerCent }}</td>
    <td ng-if="$odd" style="background-color:#f1f1f1">{{ x.PERatio }}</td>
    <td ng-if="$even">{{ x.PERatio }}</td>
  </tr></tbody>
</table>
<dir-pagination-controls
					max-size="35"
					direction-links="true"
					boundary-links="true" >
				</dir-pagination-controls>
</div>
 </div>
<script>
 var app = angular.module('myApp', ['angularUtils.directives.dirPagination']);
app.controller('customersCtrl', function($scope, $http) {
   $http.get('json.php')
   .success(function (response){$scope.names = response.records});
   
    $scope.sort = function(keyname){
        $scope.sortKey = keyname;   //set the sortKey to the param passed
        $scope.reverse = !$scope.reverse; //if true make it false and vice versa
    }
});

</script>

<div style="padding:20px;">
<div data-alert class="alert-box info round" style="text-align:center;">
     Due to the volatility of the world market,  DW InfoServer accepts no responsibility for stock recommendations and the above prices accuracy. Readers should contact a licensed financial adviser
  </div>
  </div>
  <div class="corner-ribbon bottom-left sticky red shadow"><strong>Share Investors</strong></div>
  <p>&nbsp;</p>
  
<div id="footer">
        Managed by: davidwen.net
</div>
<a href="#" class="scrollup">Going top</a>
  <!-- Initialize Foundation JS -->
<script>
$(document).ready(function() {
    $(document).foundation();
})
</script>
</body>

</html>
