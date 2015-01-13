
<footer>
	This is the footer
</footer>

	<script>
		$(document).ready(function(){
			$("#slideshow img").hide();
			$("#slideshow img:first").show();
			
			setInterval("slide()", 2000);
		});
		
		function slide()
		{
			var currentImg = $("#slideshow img:visible");
			var nextImg;
			
			//if there is no next
			if(currentImg.next().length <= 0)
			{
				nextImg = $("#slideshow img:first");	
			}
			else 
			{
				nextImg = currentImg.next();
			}
			
			currentImg.hide();
			nextImg.show();
		}
	</script>	
</body>
</html>