<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h3>
  <span id="countdown"></span>
</h3>
<script type="text/javascript">
	const span = document.getElementById('countdown')




d = new Date()
n = d.getMinutes()
const maxi = n + 30

function displayRemainingTime(maxi){
	const maxii = maxi
	const curr = new Date
	const min = curr.getMinutes()
	console.log(min)
	console.log(maxii)
	if(maxii== min)
	{

		console.log("hi")
        
	}
	else{
	
		const remainingTime = maxii - min
		
  		console.log(remainingTime)
  	//	const string = `${hours} hours ${minutes} minutes ${seconds} seconds remaining`
  	//	span.innerText = `${hours} hours ${minutes} minutes ${seconds} seconds remaining`
		const string = `${remainingTime} minutes  remaining`
  		span.innerText = `${remainingTime} minutes remaining`
	}
  
}
window.setInterval(displayRemainingTime, 1000,maxi)
displayRemainingTime(maxi)
</script>

</body>
</html>
