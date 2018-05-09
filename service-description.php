 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<style>
.not-active {
  pointer-events: none;
  cursor: default;
  text-decoration: none;
}
.caption {
border-top:2px solid #f4f4f4;
}
#brand {
    margin: 0 0 25px;
    font-weight: 500;
    font-size: 20px;
}
.caption ul li {

    font-weight: 500;
    font-size: 20px;
}
h3 {
text-align:center;
border-bottom:red;
}
.main {
	box-shadow:0px 0px 4px 4px  gray;
margin: 0 auto;
}
.panel , .content-text {
padding:15px;
border:1px solid black;
margin:0px;
color:white;
background-color:gray;
font-weight:bold;
font-size:18px;
pointer:cursor;
}
.content-text {
background-color:white;
color:black;
text-align:center;
padding:80px;
display:none;
}
.panel:hover{  color:black;}
.sellers a:hover ul li {
color:white;
}
</style>

<script>
   $(document).ready(function(){
     $(".panel1").click(function() {
	  $(".slider2 , .slider3, .slider4").hide(1000);
	   $(".slider1").slideToggle(); 
	  });
	   $(".panel2").click(function() {
	   	 $(".slider1 , .slider3 , .slider4").hide(1000)
		$(".slider2").slideToggle(1000); 
	  });
	   $(".panel3").click(function() {
	   	    $(".slider1 , .slider2 , .slider4").hide(1000);
		$(".slider3").slideToggle(); 
	  });
	   $(".panel4").click(function() {
	   	   $(".slider1, .slider2, .slider3").hide(1000);
		$(".slider4").slideToggle(); 
	  });
   });
     
</script>
<body style="background-color:white;">
<div class="container">
<div class="sellers">
	<div class="row">
      	<div class="col-sm-4 ">
	        <div class="img-responsive thumbnail ">
		     <a href="#" class="not-active">
			 <img src="images/serv-8.jpg" alt="product1" >
			 <img src="images/content-1.png" />
                    <div class="caption">
                    <p id="brand">There anyone who loves or pursue desire to obtain pains of itself, because it is pain, but occasionally.</p>
				<ul>
<li>Consignee direct delivery</li>
<li>Suitable for all kinds of commodities</li>
<li>Tailored alternatives available</li>
</ul>
                    </div>	
            </a>					
		    </div>
	  </div>
	<div class="col-sm-4 ">
	        <div class="img-responsive  thumbnail">
		     <a href="#" class="not-active">
			 <img src="images/serv-2.jpg" alt="product2" />
			 <img src="images/content-2.png" />               
				<div class="caption">
                    <p id="brand">There anyone who loves or pursue desire to obtain pains of itself, because it is pain, but occasionally.</p>
					<ul>
                         <li>Consignee direct delivery</li>
                         <li>Suitable for all kinds of commodities</li>
                          <li>Tailored alternatives available</li>
                          </ul>
                    </div>	
            </a>					
		 </div>
	</div>
	<div class="col-sm-4 ">
	        <div class="img-responsive thumbnail">
		     <a href="#" class="not-active">
			 <img src="images/serv-10.jpg" alt="product3"  >
			 <img src="images/content-3.png" />
                    <div class="caption">
                    <p id="brand">There anyone who loves or pursue desire to obtain pains of itself, because it is pain, but occasionally.</p>
					<ul>
<li>Consignee direct delivery</li>
<li>Suitable for all kinds of commodities</li>
<li>Tailored alternatives available</li>
</ul>
                    </div>	
            </a>					
		 </div>
	</div>
	</div>
	</div>
	<h3>BENIFITS OF SERVICE</h3>
	<div class="container">
	 <div class="main">
	 
	 <div>
          <p class="panel panel1">&nbsp&nbsp>>Fast Worldwide delivery</p>
		  <p class="content-text slider1">The master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because seds those who do not know how to pursue pleasure.</p>
	 </div>
	 
	 <div>
         <p class="panel panel2">&nbsp&nbsp>>End-to-end solution available</p>
		  <p class="content-text slider2">The master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because seds those who do not know how to pursue pleasure.</p>	 
	 </div>
	 
	  <div>
	     <p class="panel panel3">&nbsp&nbsp>>Safety & Compliance</p>
		  <p class="content-text slider3">The master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because seds those who do not know how to pursue pleasure.</p>
	 </div>

</div>
</div>
	
	</div>