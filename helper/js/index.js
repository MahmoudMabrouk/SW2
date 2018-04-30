var count = 0;

$( document ).ready(function() {
    $('.wrap, a').toggleClass('active');

  return false;
});

$('.button').on('click', function(){
  if(count > 0)
	window.history.go(-2);
  else
	  window.history.back();
  
  return false;
});


$('.show-teacher').on('click', function(){
	count ++;
  $('.teacher-help').css({'display' : 'inline-block'});
  $('.student-help').css({'display' : 'none'});
});

$('.show-student').on('click', function(){
	count ++;
  $('.student-help').css({'display' : 'inline-block'});
  $('.teacher-help').css({'display' : 'none'});
});