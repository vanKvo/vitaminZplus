
var checks = document.getElementsByClassName('checkboxitem');

Array.from(checks).forEach(function(item){
	item.addEventListener('click', function(){
		
		if(item.checked){
			console.log('Checked');
			//console.log(item.value);
			var vitaminCard = document.getElementsByClassName(item.value);
			Array.from(vitaminCard).forEach(function(cardItem){
				//console.log(cardItem);
				cardItem.style.display = 'block';
			});
			
		}else{
			console.log('UN-checked');
			var vitaminCard = document.getElementsByClassName(item.value);
			Array.from(vitaminCard).forEach(function(cardItem){
				//console.log(cardItem);
				cardItem.style.display = 'none';
			});
		}
	});
});


//document.getElementById(id).style.property = new style
//document.getElementById("myBtn").addEventListener("click", displayDate); 





