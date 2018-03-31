var imgTab = 
[
"img/city1.jpg", 
'img/city2.jpg', 
'img/city3.jpg', 
'img/city4.jpg', 
'img/city5.jpg', 
'img/city6.jpg', 
'img/city7.jpg', 
]

var y = 0;

var ter;

function bannerRefresh()
{
	y++;
	if(y > 6)
	{
		y = 0;
	}
	document.getElementById("bannerImg").src = imgTab[y];
}

function banner()
{
	ter = window.setInterval(bannerRefresh, 10000);
}