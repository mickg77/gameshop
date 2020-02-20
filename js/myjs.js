
//deals with the slideshow
$("#slideshow > div:gt(1)").hide();
/*
setInterval(function() {
  $('#slideshow > div:first')
    .fadeOut(1000)
    .next()
    .fadeIn(1000)
    .end()
    .appendTo('#slideshow');
},  3000);
*/
$( document ).on( "swipeleft", ".ui-page", function( event ) {
 $('#slideshow > div:first')
 .fadeOut(1000)
 .next()
 .fadeIn(1000)
 .end()
 .appendTo('#slideshow');
});

$( document ).on( "swiperight", ".ui-page", function( event ) {
 $('#slideshow > div:first')
 .fadeOut(1000)
 .prev()
 .fadeIn(1000)
 .end()
 .appendTo('#slideshow');
});

/*
$( document ).on( "swipeleft", ".ui-page", function( event ) {
 window.location.href = 'index.php';
});
*/


//use an onchange event to influence the html

function changeFunction() {
  var x = document.getElementById("users").value;
  document.getElementById("demo").innerHTML = "You are logging in as : " + x;
}



$(document).keypress(function(e)
{
  
  //creating keypress navigation to take user to 
  if($(":input").is(':focus')==0){
    switch(e.which){
      case 98:  alert("b has been pressed");
                location.href="http://bbc.co.uk";
      break;
      }
  }
  
  
  //checking password length
  if($("#pwd").is(':focus')==1){
    document.getElementById('length_of_password').innerHTML=document.getElementById('pwd').value.length;
    if(document.getElementById('pwd').value.length<8){
      document.getElementById('length_of_password').innerHTML="Password too short";
      
    }
    else {
      document.getElementById('length_of_password').innerHTML="";
    }
  }

});


