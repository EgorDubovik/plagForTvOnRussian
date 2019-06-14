var RUS  = 1;
var ENG = 2;
var lang = RUS;
$(document).ready(function(){
	$('li').click(function(){
		if($(this).hasClass("letter")){
			letter = "n";
			if(lang == RUS)
				letter = $(this).find(".rus").html();
			else 
				letter = $(this).find(".en").html();
			
			addSymbol(letter);
		} else if($(this).hasClass("language")){
			if(lang == RUS){
				lang = ENG;
				$('.en').show(); 
				$('.rus').hide(); 
			} else {
				lang = RUS;
				$('.rus').show(); 
				$('.en').hide(); 
			}
		} else if($(this).hasClass("space")){
			addSymbol(" ");
		} else if($(this).hasClass("delete")){
			removeSymbol();
		} else if($(this).hasClass("right-shift")){
			window.location = "https://www.google.com/search?q="+$('.hidden_input').html();
		}
	});
})

function removeSymbol(){
	var html = $('.hidden_input').html();
	if(html.length==1){
		$('.hidden_input').html("Click on buttons").removeClass("no_empty").addClass("empty");
	} else {
		$('.hidden_input').html(html.substr(0,html.length-1));
	}
}

function addSymbol(symbol){
	if($('.hidden_input').hasClass("empty")){
		$('.hidden_input').html(symbol).removeClass("empty").addClass("no_empty");
	} else {
		$('.hidden_input').html($('.hidden_input').html()+symbol);		
	}
}