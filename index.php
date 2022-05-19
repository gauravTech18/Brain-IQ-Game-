<?php
include_once "header.php";

?>

<link rel="stylesheet" type="text/css" href="index.css">
<div class="jumbotron">
	<div class="alert alert-success" role="alert">
		<?php if(logged_in()) {
			echo "Welcome " . get_name($_SESSION['email']);
		}else{
			echo "Welcome Guest";
		}
		?>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript">
        function startTimer(duration, display) {
    var timer = duration, minutes, seconds;
    setInterval(function () {
        minutes = parseInt(timer / 60, 10);
        seconds = parseInt(timer % 60, 10);

        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;

        display.textContent = minutes + ":" + seconds;

        if (--timer < 0) {
            timer = duration;
           alert("Your Time Is Over Excellent IQ");
        }
    }, 1000);
}

window.onload = function () {
    var fiveMinutes = 60 * 10,
        display = document.querySelector('#time');
    startTimer(fiveMinutes, display);
};
    </script>
	</div>
	<h1 class="text-center"> Brain Game </h1>
</div>
    
        <section id="our-services">
        <div class="container-fluid">
            <div class="badge bg-primary text-wrap">Countdown <span id="time">10:00</span> minutes!</div>
            <h1 class="h1_services text-center"><b></span> Brain Game List</b></h1>
            <!--Services and their description-->
            <div class="services_container">

                <div class="row service_row">
                    <!--Service1-->
                    <div class="card service-item">
                        <img src="images/4-6-iq-test.jpg" alt="Card image cap" height="150px" width="280px">
                        <div class="card-body">
                            <center><P class="card-name">TAKE IQ TEST FOR 4-6 YEAR OLD CHILDREN</p>
                            <a href="login.php" class="btn btn-primary">Start Test</a></center>
                        </div>
                    </div>




                    <!--Service2-->
                    <div class="card service-item">
                       <img src="images/7-12-iq-test.jpg" alt="Card image cap" height="150px" width="280px">
                        <div class="card-body">
                         <center>   <h4 class="card-title card-name">TAKE IQ TEST FOR 7-12 YEAR OLD CHILDREN</h4>
                            <a href="login.php" class="btn btn-primary">Start Test</a></center>
                        </div>
                    </div>
                    <!--Service3-->
                    <div class="card service-item">
                        <img src="images/13-iq-test.jpg" alt="Card image cap" height="150px" width="280px">
                        <div class="card-body">
                            <center><h4 class="card-title card-name">TAKE IQ TEST FOR 13+ YEAR OLD CHILDREN AND ADULTS</h4>
                            <a href="login.php" class="btn btn-primary">Start Test</a></center>
                        </div>
                    </div>
            </div>
    </section>
    
    <style >
      /*Services and their description*/
.h1_services{
  color: red;
}
.services_container {
  margin-top: 2%;
  margin-bottom: 2%;
}

.service_row {
  display: flex;
  justify-content: center;
  align-items: center;
}

/*Service Item Styling*/

.service-item {
  width: 28rem;
  margin: 2%;
  border-radius: 4px;
  background: #FFFFFF;
  box-shadow: 0 6px 10px rgba(0, 0, 0, .08), 0 0 6px rgba(0, 0, 0, .05);
  transition: .3s transform cubic-bezier(.155, 1.105, .295, 1.12), .3s box-shadow, .3s -webkit-transform cubic-bezier(.155, 1.105, .295, 1.12);
  cursor: pointer;
}

.service-item:hover {
  transform: scale(1.15);
  box-shadow: 0 10px 20px rgba(0, 0, 0, .12), 0 4px 8px rgba(0, 0, 0, .06);
}
.card-name {
  font-size: 3vmin;
  font-family: 'Staatliches', sans-serif;
  text-shadow: 0 0 10px tomato;
  color: tomato;
}

.card-body:hover {
  background-color: blanchedalmond;
  font-weight: bold;
}
    </style>

<?php
include_once "footer.php";
?>