
var w, h, ms, body, html, menu;

function adjust(){
	w=window.innerWidth; h=window.innerHeight;

	//html.style.width=w+"px"; html.style.height=h+"px";
	//body.style.width=w+"px"; body.style.height=h+"px";
	menu.style.height="46px";
	ms=false;
}

function ready(){
	body=document.getElementsByTagName("body")[0];
	html=document.getElementsByTagName("html")[0];
	menu=document.getElementById("menu");
	adjust();
}

function back(){
	menu.style.height="46px";
	ms=false;
}

function drop(){
	if(ms==false){
		menu.style.height="329px";
		ms=true;
	}
	else back();
}

