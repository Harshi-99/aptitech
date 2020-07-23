<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<span id="countdown" class="timer"></span>
<script type="text/javascript">
	var seconds = 40;
	var prev = 0;
    function secondPassed() {
    var minutes = Math.round((seconds - 30)/60);
    var remainingSeconds = seconds % 60;
    if (remainingSeconds < 10) {
        remainingSeconds = "0" + remainingSeconds; 
    }
    document.getElementById('countdown').innerHTML = minutes + ":" +    remainingSeconds;
    if (seconds == 0) {
        clearInterval(countdownTimer);
        document.getElementById('countdown').innerHTML = "Buzz Buzz";
    } else {    
        prev ++;
        seconds = seconds-prev;

    }
    }
var countdownTimer = setInterval('secondPassed()', 1000);
</script>
</body>
</html>