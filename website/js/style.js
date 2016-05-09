$('#registerform input').hasClass('textinput').blur(function()          //whenever you click off an input element
{                   
    if( !$(this).val() ) {                      //if it is blank. 
         alert('empty');    
    }
});