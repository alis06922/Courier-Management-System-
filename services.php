<head>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="css/style-services.css" rel="stylesheet" type="text/css">
<script >
$(document).ready(function() {
    $("div.bhoechie-tab-menu>div.list-group>a").click(function(e) {
        e.preventDefault();
        $(this).siblings('a.active').removeClass("active");
        $(this).addClass("active");
        var index = $(this).index();
        $("div.bhoechie-tab>div.bhoechie-tab-content").removeClass("active");
        $("div.bhoechie-tab>div.bhoechie-tab-content").eq(index).addClass("active");
    });
});
</script>
</head>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
	<div class="row">
        <div class="col-lg-5 col-md-5 col-sm-8 col-xs-9 bhoechie-tab-container">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 bhoechie-tab-menu">
              <div class="list-group">
                <a href="#" class="list-group-item active text-center">
                  <h4><i class="fa fa-archive"><br/>Packaging And Storage</i></h4>
                </a>
                <a href="#" class="list-group-item text-center">
                  <h4 ><i class="fa fa-truck"><br/>Transport</i></h4>
                </a>
                <a href="#" class="list-group-item text-center">
                  <h4 ><i class="fa fa-bank"><br/>Warehousing</i></h4>
                </a>
				      <a href="#" class="list-group-item text-center">
                  <h4 ><i class="fa fa-home "></i><i class="fa fa-street-view"><br>Door to Door Delivery</i></h4>
                </a>
				  <a href="#" class="list-group-item text-center">
                  <h4 ><i class="fa fa-taxi "><br/>Ground Transport</i></h4>
                </a>

              </div>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 bhoechie-tab">

                <div class="bhoechie-tab-content active">
                    <center>
                      <h1 style="font-size:14em;color:#55518a"><i class="fa fa-archive"></i></h1>
                      <h3 style="margin-top: 0;color:#55518a">Package and store your things effectively and securely to make sure them in storage.</h3>
                    </center>
                </div>

                <div class="bhoechie-tab-content">
                    <center>
                      <h1 style="font-size:14em;color:#55518a"><i class="fa fa-truck"></i></h1>
                      <h3 style="margin-top: 0;color:#55518a">Specialises in domestic freight forwarding of merchandise and associated general logistic services.</h3>
                    </center>
                </div>
                 
				 <div class="bhoechie-tab-content">
                 <center>
                      <h1 style="font-size:14em;color:#55518a"><i class="fa fa-bank"></i></h1>
                      <h3 style="margin-top: 0;color:#55518a">Package and store your things effectively and securely to make sure them in storage.</h3>
                    </center>
                </div>
                <div class="bhoechie-tab-content">
            <center>
                      <h1 style="font-size:10em;color:#55518a"><i class="fa fa-home "></i><i class="fa fa-street-view"></i></h1>
                      <h3 style="margin-top: 0;color:#55518a">Our expertise in transport management and planning allows us to design a solution.</h3>
                    </center>
                </div>
                <div class="bhoechie-tab-content">
				  <center>
                      <h1 style="font-size:14em;color:#55518a"><i class="fa fa-taxi "></i></h1>
                      <h3 style="margin-top: 0;color:#55518a"> Ground transportation options for all visitors, no matter your needs, schedule or destination</h3>
                    </center>             
                </div>
            </div>
        </div>
  </div>
</div>