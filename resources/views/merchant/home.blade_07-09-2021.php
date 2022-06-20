@extends('merchant.layout.main')
@section('content')


 <link href="https://demos.creative-tim.com/material-dashboard/assets/css/material-dashboard.min.css?v=2.1.2" rel="stylesheet" type="text/css"/>
 

<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons"><img src="{{asset('front_end/img/hotel.png')}}" style="width:45px; height:45px" ></i>
                  </div>
                  <p class="card-category">Daily Visit</p>
                  <h3 class="card-title"><?php if($daily_visit !='') { echo $daily_visit ;} else { echo '0'; }?> </h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                   
                    <a href="javascript:;">View More</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
                           <i class="material-icons"><img src="{{asset('front_end/img/hotel.png')}}" style="width:45px; height:45px" ></i>
                  </div>
                  <p class="card-category">Daily Booking</p>
                  <h3 class="card-title"><?php if($daily_books !='') { echo $daily_books ;} else { echo '0'; }?> </h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <a href="javascript:;">View More</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-danger card-header-icon">
                  <div class="card-icon">
                           <i class="material-icons"><img src="{{asset('front_end/img/hotel.png')}}" style="width:45px; height:45px" ></i>
                  </div>
                  <p class="card-category">Daily Enquiry</p>
                  <h3 class="card-title">75</h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <a href="javascript:;">View More</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-info card-header-icon">
                  <div class="card-icon">
                           <i class="material-icons"><img src="{{asset('front_end/img/hotel.png')}}" style="width:45px; height:45px" ></i>
                  </div>
                  <p class="card-category">Daily Income</p>
                  <h3 class="card-title"><?php if($daily_amount !='') { echo $daily_amount ;} else { echo '0'; }?> </h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                      <a href="javascript:;">View More</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <div class="card card-chart">
                <div class="card-header card-header-success">
                  <div class="ct-chart" id="dailySalesChart"><svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="100%" class="ct-chart-line" style="width: 100%; height: 100%;"><g class="ct-grids"><line x1="40" x2="40" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line x1="71.046875" x2="71.046875" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line x1="102.09375" x2="102.09375" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line x1="133.140625" x2="133.140625" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line x1="164.1875" x2="164.1875" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line x1="195.234375" x2="195.234375" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line x1="226.28125" x2="226.28125" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line y1="120" y2="120" x1="40" x2="257.328125" class="ct-grid ct-vertical"></line><line y1="96" y2="96" x1="40" x2="257.328125" class="ct-grid ct-vertical"></line><line y1="72" y2="72" x1="40" x2="257.328125" class="ct-grid ct-vertical"></line><line y1="48" y2="48" x1="40" x2="257.328125" class="ct-grid ct-vertical"></line><line y1="24" y2="24" x1="40" x2="257.328125" class="ct-grid ct-vertical"></line><line y1="0" y2="0" x1="40" x2="257.328125" class="ct-grid ct-vertical"></line></g><g><g class="ct-series ct-series-a"><path d="M40,91.2C71.047,79.2,71.047,79.2,71.047,79.2C102.094,103.2,102.094,103.2,102.094,103.2C133.141,79.2,133.141,79.2,133.141,79.2C164.188,64.8,164.188,64.8,164.188,64.8C195.234,76.8,195.234,76.8,195.234,76.8C226.281,28.8,226.281,28.8,226.281,28.8" class="ct-line"></path><line x1="40" y1="91.2" x2="40.01" y2="91.2" class="ct-point" ct:value="12" opacity="1"></line><line x1="71.046875" y1="79.2" x2="71.056875" y2="79.2" class="ct-point" ct:value="17" opacity="1"></line><line x1="102.09375" y1="103.2" x2="102.10375" y2="103.2" class="ct-point" ct:value="7" opacity="1"></line><line x1="133.140625" y1="79.2" x2="133.150625" y2="79.2" class="ct-point" ct:value="17" opacity="1"></line><line x1="164.1875" y1="64.8" x2="164.1975" y2="64.8" class="ct-point" ct:value="23" opacity="1"></line><line x1="195.234375" y1="76.8" x2="195.244375" y2="76.8" class="ct-point" ct:value="18" opacity="1"></line><line x1="226.28125" y1="28.799999999999997" x2="226.29125" y2="28.799999999999997" class="ct-point" ct:value="38" opacity="1"></line></g></g><g class="ct-labels"><foreignObject style="overflow: visible;" x="40" y="125" width="31.046875" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 31px; height: 20px;">M</span></foreignObject><foreignObject style="overflow: visible;" x="71.046875" y="125" width="31.046875" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 31px; height: 20px;">T</span></foreignObject><foreignObject style="overflow: visible;" x="102.09375" y="125" width="31.046875" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 31px; height: 20px;">W</span></foreignObject><foreignObject style="overflow: visible;" x="133.140625" y="125" width="31.046875" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 31px; height: 20px;">T</span></foreignObject><foreignObject style="overflow: visible;" x="164.1875" y="125" width="31.046875" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 31px; height: 20px;">F</span></foreignObject><foreignObject style="overflow: visible;" x="195.234375" y="125" width="31.046875" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 31px; height: 20px;">S</span></foreignObject><foreignObject style="overflow: visible;" x="226.28125" y="125" width="31.046875" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 31px; height: 20px;">S</span></foreignObject><foreignObject style="overflow: visible;" y="96" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">0</span></foreignObject><foreignObject style="overflow: visible;" y="72" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">10</span></foreignObject><foreignObject style="overflow: visible;" y="48" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">20</span></foreignObject><foreignObject style="overflow: visible;" y="24" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">30</span></foreignObject><foreignObject style="overflow: visible;" y="0" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">40</span></foreignObject><foreignObject style="overflow: visible;" y="-30" x="0" height="30" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 30px; width: 30px;">50</span></foreignObject></g></svg></div>
                </div>
                <div class="card-body">
                  <h4 class="card-title">Daily Sales</h4>
                  <p class="card-category">
                    <span class="text-success"><i class="fa fa-long-arrow-up"></i> 55% </span> increase in today sales.</p>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">access_time</i> updated 4 minutes ago
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card card-chart">
                <div class="card-header card-header-warning">
                  <div class="ct-chart" id="websiteViewsChart"><svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="100%" class="ct-chart-bar" style="width: 100%; height: 100%;"><g class="ct-grids"><line y1="120" y2="120" x1="40" x2="252.328125" class="ct-grid ct-vertical"></line><line y1="96" y2="96" x1="40" x2="252.328125" class="ct-grid ct-vertical"></line><line y1="72" y2="72" x1="40" x2="252.328125" class="ct-grid ct-vertical"></line><line y1="48" y2="48" x1="40" x2="252.328125" class="ct-grid ct-vertical"></line><line y1="24" y2="24" x1="40" x2="252.328125" class="ct-grid ct-vertical"></line><line y1="0" y2="0" x1="40" x2="252.328125" class="ct-grid ct-vertical"></line></g><g><g class="ct-series ct-series-a"><line x1="48.847005208333336" x2="48.847005208333336" y1="120" y2="54.959999999999994" class="ct-bar" ct:value="542" opacity="1"></line><line x1="66.541015625" x2="66.541015625" y1="120" y2="66.84" class="ct-bar" ct:value="443" opacity="1"></line><line x1="84.23502604166667" x2="84.23502604166667" y1="120" y2="81.6" class="ct-bar" ct:value="320" opacity="1"></line><line x1="101.92903645833333" x2="101.92903645833333" y1="120" y2="26.400000000000006" class="ct-bar" ct:value="780" opacity="1"></line><line x1="119.623046875" x2="119.623046875" y1="120" y2="53.64" class="ct-bar" ct:value="553" opacity="1"></line><line x1="137.31705729166669" x2="137.31705729166669" y1="120" y2="65.64" class="ct-bar" ct:value="453" opacity="1"></line><line x1="155.01106770833334" x2="155.01106770833334" y1="120" y2="80.88" class="ct-bar" ct:value="326" opacity="1"></line><line x1="172.70507812500003" x2="172.70507812500003" y1="120" y2="67.92" class="ct-bar" ct:value="434" opacity="1"></line><line x1="190.39908854166669" x2="190.39908854166669" y1="120" y2="51.84" class="ct-bar" ct:value="568" opacity="1"></line><line x1="208.09309895833334" x2="208.09309895833334" y1="120" y2="46.8" class="ct-bar" ct:value="610" opacity="1"></line><line x1="225.78710937500003" x2="225.78710937500003" y1="120" y2="29.28" class="ct-bar" ct:value="756" opacity="1"></line><line x1="243.48111979166669" x2="243.48111979166669" y1="120" y2="12.599999999999994" class="ct-bar" ct:value="895" opacity="1"></line></g></g><g class="ct-labels"><foreignObject style="overflow: visible;" x="40" y="125" width="17.694010416666668" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 18px; height: 20px;">J</span></foreignObject><foreignObject style="overflow: visible;" x="57.69401041666667" y="125" width="17.694010416666668" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 18px; height: 20px;">F</span></foreignObject><foreignObject style="overflow: visible;" x="75.38802083333334" y="125" width="17.694010416666664" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 18px; height: 20px;">M</span></foreignObject><foreignObject style="overflow: visible;" x="93.08203125" y="125" width="17.69401041666667" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 18px; height: 20px;">A</span></foreignObject><foreignObject style="overflow: visible;" x="110.77604166666667" y="125" width="17.69401041666667" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 18px; height: 20px;">M</span></foreignObject><foreignObject style="overflow: visible;" x="128.47005208333334" y="125" width="17.694010416666657" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 18px; height: 20px;">J</span></foreignObject><foreignObject style="overflow: visible;" x="146.1640625" y="125" width="17.69401041666667" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 18px; height: 20px;">J</span></foreignObject><foreignObject style="overflow: visible;" x="163.85807291666669" y="125" width="17.69401041666667" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 18px; height: 20px;">A</span></foreignObject><foreignObject style="overflow: visible;" x="181.55208333333334" y="125" width="17.694010416666657" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 18px; height: 20px;">S</span></foreignObject><foreignObject style="overflow: visible;" x="199.24609375" y="125" width="17.694010416666686" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 18px; height: 20px;">O</span></foreignObject><foreignObject style="overflow: visible;" x="216.94010416666669" y="125" width="17.694010416666657" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 18px; height: 20px;">N</span></foreignObject><foreignObject style="overflow: visible;" x="234.63411458333334" y="125" width="30" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 30px; height: 20px;">D</span></foreignObject><foreignObject style="overflow: visible;" y="96" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">0</span></foreignObject><foreignObject style="overflow: visible;" y="72" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">200</span></foreignObject><foreignObject style="overflow: visible;" y="48" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">400</span></foreignObject><foreignObject style="overflow: visible;" y="24" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">600</span></foreignObject><foreignObject style="overflow: visible;" y="0" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">800</span></foreignObject><foreignObject style="overflow: visible;" y="-30" x="0" height="30" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 30px; width: 30px;">1000</span></foreignObject></g></svg></div>
                </div>
                <div class="card-body">
                  <h4 class="card-title">Email Subscriptions</h4>
                  <p class="card-category">Last Campaign Performance</p>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">access_time</i> campaign sent 2 days ago
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card card-chart">
                <div class="card-header card-header-danger">
                  <div class="ct-chart" id="completedTasksChart"><svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="100%" class="ct-chart-line" style="width: 100%; height: 100%;"><g class="ct-grids"><line x1="40" x2="40" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line x1="67.166015625" x2="67.166015625" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line x1="94.33203125" x2="94.33203125" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line x1="121.498046875" x2="121.498046875" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line x1="148.6640625" x2="148.6640625" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line x1="175.830078125" x2="175.830078125" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line x1="202.99609375" x2="202.99609375" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line x1="230.162109375" x2="230.162109375" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line y1="120" y2="120" x1="40" x2="257.328125" class="ct-grid ct-vertical"></line><line y1="96" y2="96" x1="40" x2="257.328125" class="ct-grid ct-vertical"></line><line y1="72" y2="72" x1="40" x2="257.328125" class="ct-grid ct-vertical"></line><line y1="48" y2="48" x1="40" x2="257.328125" class="ct-grid ct-vertical"></line><line y1="24" y2="24" x1="40" x2="257.328125" class="ct-grid ct-vertical"></line><line y1="0" y2="0" x1="40" x2="257.328125" class="ct-grid ct-vertical"></line></g><g><g class="ct-series ct-series-a"><path d="M40,92.4C67.166,30,67.166,30,67.166,30C94.332,66,94.332,66,94.332,66C121.498,84,121.498,84,121.498,84C148.664,86.4,148.664,86.4,148.664,86.4C175.83,91.2,175.83,91.2,175.83,91.2C202.996,96,202.996,96,202.996,96C230.162,97.2,230.162,97.2,230.162,97.2" class="ct-line"></path><line x1="40" y1="92.4" x2="40.01" y2="92.4" class="ct-point" ct:value="230" opacity="1"></line><line x1="67.166015625" y1="30" x2="67.176015625" y2="30" class="ct-point" ct:value="750" opacity="1"></line><line x1="94.33203125" y1="66" x2="94.34203125" y2="66" class="ct-point" ct:value="450" opacity="1"></line><line x1="121.498046875" y1="84" x2="121.508046875" y2="84" class="ct-point" ct:value="300" opacity="1"></line><line x1="148.6640625" y1="86.4" x2="148.6740625" y2="86.4" class="ct-point" ct:value="280" opacity="1"></line><line x1="175.830078125" y1="91.2" x2="175.840078125" y2="91.2" class="ct-point" ct:value="240" opacity="1"></line><line x1="202.99609375" y1="96" x2="203.00609375" y2="96" class="ct-point" ct:value="200" opacity="1"></line><line x1="230.162109375" y1="97.2" x2="230.172109375" y2="97.2" class="ct-point" ct:value="190" opacity="1"></line></g></g><g class="ct-labels"><foreignObject style="overflow: visible;" x="40" y="125" width="27.166015625" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 27px; height: 20px;">12p</span></foreignObject><foreignObject style="overflow: visible;" x="67.166015625" y="125" width="27.166015625" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 27px; height: 20px;">3p</span></foreignObject><foreignObject style="overflow: visible;" x="94.33203125" y="125" width="27.166015625" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 27px; height: 20px;">6p</span></foreignObject><foreignObject style="overflow: visible;" x="121.498046875" y="125" width="27.166015625" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 27px; height: 20px;">9p</span></foreignObject><foreignObject style="overflow: visible;" x="148.6640625" y="125" width="27.166015625" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 27px; height: 20px;">12p</span></foreignObject><foreignObject style="overflow: visible;" x="175.830078125" y="125" width="27.166015625" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 27px; height: 20px;">3a</span></foreignObject><foreignObject style="overflow: visible;" x="202.99609375" y="125" width="27.166015625" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 27px; height: 20px;">6a</span></foreignObject><foreignObject style="overflow: visible;" x="230.162109375" y="125" width="30" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 30px; height: 20px;">9a</span></foreignObject><foreignObject style="overflow: visible;" y="96" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">0</span></foreignObject><foreignObject style="overflow: visible;" y="72" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">200</span></foreignObject><foreignObject style="overflow: visible;" y="48" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">400</span></foreignObject><foreignObject style="overflow: visible;" y="24" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">600</span></foreignObject><foreignObject style="overflow: visible;" y="0" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">800</span></foreignObject><foreignObject style="overflow: visible;" y="-30" x="0" height="30" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 30px; width: 30px;">1000</span></foreignObject></g></svg></div>
                </div>
                <div class="card-body">
                  <h4 class="card-title">Completed Tasks</h4>
                  <p class="card-category">Last Campaign Performance</p>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">access_time</i> campaign sent 2 days ago
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6 col-md-12">
              <div class="card">
                <div class="card-header card-header-tabs card-header-primary">
                  <div class="nav-tabs-navigation">
                    <div class="nav-tabs-wrapper">
                     
                      <ul class="nav nav-tabs" data-tabs="tabs">
                        <li class="nav-item">
                          <a class="nav-link active" href="#profile" data-toggle="tab">
                            <i class="material-icons">Recent</i> Booking
                            <div class="ripple-container"></div>
                          </a>
                       
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <div class="tab-content">
                    <div class="tab-pane active" id="profile">
					
					  <table class="table table-hover">
                    <thead class="text-warning">
                      <tr><th>ID</th>
                      <th>Venue Name</th>
                      <th>Event Title</th>
                      <th>Start Date</th>
					   <th>End Date</th>
					   <th>Amount</th>
                    </tr></thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>Dakota Rice</td>
                        <td>Marriage</td>
                        <td>18-9-2021</td>
						 <td>20-9-2021</td>
						 <td>AED 23,789</td>
                      </tr>
					  
					  
					  <tr>
                        <td>1</td>
                        <td>Dakota Rice</td>
                        <td>Marriage</td>
                        <td>18-9-2021</td>
						 <td>20-9-2021</td>
						 <td>AED 23,789</td>
                      </tr>
					  
					  
					  <tr>
                        <td>1</td>
                        <td>Dakota Rice</td>
                        <td>Marriage</td>
                        <td>18-9-2021</td>
						 <td>20-9-2021</td>
						 <td>AED 23,789</td>
                      </tr>
					  
					  
					  <tr>
                        <td>1</td>
                        <td>Dakota Rice</td>
                        <td>Marriage</td>
                        <td>18-9-2021</td>
						 <td>20-9-2021</td>
						 <td>AED 23,789</td>
                      </tr>
					  
					  
					  <tr>
                        <td>1</td>
                        <td>Dakota Rice</td>
                        <td>Marriage</td>
                        <td>18-9-2021</td>
						 <td>20-9-2021</td>
						 <td>AED 23,789</td>
                      </tr>
					  
					  <tr>
                        <td>1</td>
                        <td>Dakota Rice</td>
                        <td>Marriage</td>
                        <td>18-9-2021</td>
						 <td>20-9-2021</td>
						 <td>AED 23,789</td>
                      </tr>
                      
                    </tbody>
                  </table>
				  </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-12">
              <div class="card">
                <div class="card-header card-header-warning">
                  <h4 class="card-title">Recent Enquiry</h4>
                  
                </div>
                <div class="card-body table-responsive">
                  <table class="table table-hover">
                    <thead class="text-warning">
                      <tr><th>ID</th>
                      <th>Name</th>
                      <th>Event Title</th>
                      <th>Country</th>
                    </tr></thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>Dakota Rice</td>
                        <td>$36,738</td>
                        <td>Niger</td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>Minerva Hooper</td>
                        <td>$23,789</td>
                        <td>Curaçao</td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>Sage Rodriguez</td>
                        <td>$56,142</td>
                        <td>Netherlands</td>
                      </tr>
                      <tr>
                        <td>4</td>
                        <td>Philip Chaney</td>
                        <td>$38,735</td>
                        <td>Korea, South</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
	  
	  
	  

<!--
			
<div class=" container">
   <div class="row">
      <div class="col-xl-3">
      
         <div class="card card-custom bg-light-success card-stretch gutter-b">
            
            <div class="card-body">
               <span class="svg-icon svg-icon-2x svg-icon-success">
                
                 <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                     <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <polygon points="0 0 24 0 24 24 0 24"></polygon>
                        <path d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                        <path d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero"></path>
                     </g>
                  </svg>
                  
               </span>
               <span class="card-title font-weight-bolder text-dark-75 font-size-h2 mb-0 mt-6 d-block">{{ $hotelCount ?? 0 }}</span>
               <span class="font-weight-bold text-muted  font-size-sm">Total Hotel</span>
            </div>
            
         </div>
         
      </div>
      <div class="col-xl-3">
       
         <div class="card card-custom bg-light-warning card-stretch gutter-b">
           
            <div class="card-body">
               <span class="svg-icon svg-icon-2x svg-icon-warning">
                  
                 <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                     <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <polygon points="0 0 24 0 24 24 0 24"></polygon>
                        <path d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                        <path d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero"></path>
                     </g>
                  </svg>
                 
               </span>
               <span class="card-title font-weight-bolder text-dark-75 font-size-h2 mb-0 mt-6 d-block">{{ $hotelsSubEntityCount ?? 0 }}</span>
               <span class="font-weight-bold text-muted  font-size-sm">Total Include</span>
            </div>
            
         </div>
       
      </div>
   </div>
</div>

-->

@endsection
