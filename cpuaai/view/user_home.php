<style>

.mySlides {
	display:none;
	width:100%;
	height:10%;
	padding:0px;
}
.content{
	float:top;
}
.content2{
	float:top;
}
a {
	text-decoration:none;
	color:white;
}

</style>

<div class="container-fluid mt-2 mb-2">
  <div class="row">
    <div class="col-sm-3">
	</div>dssdsd

	<div class="col-sm-6" style="background-color:pink;">
		<div class="content2">
			<img class="mySlides" src="view/images/slide/1.jpg" style="height:350px;">
			<img class="mySlides" src="view/images/slide/2.jpg" style="height:350px;">
			<img class="mySlides" src="view/images/slide/3.jpg" style="height:350px;">
			<img class="mySlides" src="view/images/slide/4.jpg" style="height:350px;">
			<img class="mySlides" src="view/images/slide/5.jpg" style="height:350px;">
			<img class="mySlides" src="view/images/slide/6.jpg" style="height:350px;">
			<img class="mySlides" src="view/images/slide/7.jpg" style="height:350px;">
			<img class="mySlides" src="view/images/slide/8.jpg" style="height:350px;">
			<img class="mySlides" src="view/images/slide/9.jpg" style="height:350px;">
		</div>
	</div>

	<div class="col-sm-3">
	</div>

  </div>
</div>


	
<script>
var myIndex = 0;
carousel();
function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>