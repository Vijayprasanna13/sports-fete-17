setInterval(function(){
	var width = window.innerWidth;
	var count = document.getElementById("countdown");
	var ml;
	
	
	if(width<770&&width>400)
	{
		ml = (width-350)/2;
		count.style.marginLeft = ml +"px";
	}
	else if(width>=770&&width<1000)
	{
		ml = (width-730)/2;
		count.style.marginLeft = ml+"px";
	}
	else if(width>=1000&&width<1180)
	{
		ml = (width-960)/2;
		count.style.marginLeft = ml + "px";
	}
	else
	{
		//count.style.marginLeft = "0px";
	}
	if(width>=1360)
	{
		ml = (width-1320)/2;
		count.style.marginLeft = ml + "px";
	}
	if(width>=1180&&width<1220)
	{
		ml = (width-740)/2;
		count.style.marginLeft = ml + "px";
	}
	if(width>=1220&&width<1360)
	{
		ml = (width-1320)/2;
		count.style.marginLeft = ml + "px";
	}
},100);