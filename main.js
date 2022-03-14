// function shutNavOff (){
// 	var menu = document.getElementsByClassName('menutoggle');
// 	menu.className = "inactive";
// }

document.getElementsByClassName('menutoggle')[0].onclick = function () {
	var menu = document.getElementById('menu');
	if(menu.className == "active"){
		menu.className = "inactive";
		

	} else {
		menu.className = "active";
	}
}