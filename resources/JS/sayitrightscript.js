function openCartUnits(butvar){
    var item = document.getElementById('item');
	if(butvar == "c1"){
	    item.src = "http://charanvenkatesan.uta.cloud/Assignment_5/Project5/resources/imgsay/imgsay/franela1.jpg"
	}
	if(butvar == "c2"){
	    item.src = "http://charanvenkatesan.uta.cloud/Assignment_5/Project5/resources/imgsay/imgsay/taza1.png"
	}
	if(butvar == "c3"){
	    item.src = "http://charanvenkatesan.uta.cloud/Assignment_5/Project5/resources/imgsay/imgsay/franela2.jpg"
	}
	if(butvar == "c4"){
	    item.src = "http://charanvenkatesan.uta.cloud/Assignment_5/Project5/resources/imgsay/imgsay/taza2.png"
	}
	if(butvar == "c5"){
	    item.src = "http://charanvenkatesan.uta.cloud/Assignment_5/Project5/resources/imgsay/imgsay/franela3.jpg"
	}
	if(butvar == "c6"){
	    item.src = "http://charanvenkatesan.uta.cloud/Assignment_5/Project5/resources/imgsay/imgsay/taza3.png"
	}
	var mycart = document.getElementById('my-cart-unit');
	mycart.style.display = "block";
}
$('#add-units').click(function(event){
  event.preventDefault()
});
function closeCart(){
	var mycart = document.getElementById('my-cart-unit')
	mycart.style.display = "none";
}
window.onclick = function(event){
	var mycart = document.getElementById('my-cart-unit');
	if(event.target == mycart){
		mycart.style.display = "none";	
	}
}
window.onclick = function(event){
	var mycart1 = document.getElementById('my-cart-unit1');
	if(event.target == mycart1){
		mycart1.style.display = "none";	
	}
}