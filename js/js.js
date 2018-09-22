function footerChange2(){
	inf=document.getElementById("cont");
	frm=document.getElementById("inqu");
	con_form_div=document.getElementById("contact-form");
	icons_div=document.getElementById("icons");
	inf.style.borderBottom = "solid 3px #4dcdc3";
	frm.style.borderBottom = "solid 3px #fd6b89";
	icons_div.style.display="none";
	con_form_div.style.display="block";
	
	
}
function footerChange1(){
	inf=document.getElementById("cont");
	frm=document.getElementById("inqu");
	con_form_div=document.getElementById("contact-form");
	icons_div=document.getElementById("icons");
	frm.style.borderBottom = "solid 3px #4dcdc3";
	inf.style.borderBottom = "solid 3px #fd6b89";
	con_form_div.style.display="none";
	icons_div.style.display="block";
	
}
/*function poponload()
{
    testwindow = window.open("", "mywindow", "location=1,status=1,scrollbars=1,width=100,height=100");
    testwindow.moveTo(0, 0);
}*/
var monthNames = [ "January", "February", "March", "April", "May", "June",
    "July", "August", "September", "October", "November", "December" ];
 $(function () {

        for (i = new Date().getFullYear() ; i > 1900; i--) {
            $('#years').append($('<option />').val(i).html(i));
        }

        
        updateNumberOfDays();

        $('#years, #months').change(function () {

            updateNumberOfDays();

        });

    });

    function updateNumberOfDays() {
        $('#days').html('');
        month = $('#months').val();
        year = $('#years').val();
        days = daysInMonth(month, year);
    $('#days').append($('<option />').val(i).html("Day"));
        for (i = 1; i < days + 1 ; i++) {
			
            $('#days').append($('<option />').val(i).html(i));
        }

    }

    function daysInMonth(month, year) {
        return new Date(year, month, 0).getDate();
    }
	
	
	
	
	/*  starRate */
	
	$(document).ready(function(){
  
  /* 1. Visualizing things on Hover - See next part for action on click */
  $('#stars li').on('mouseover', function(){
    var onStar = parseInt($(this).data('value'), 10); // The star currently mouse on
   
    // Now highlight all the stars that's not after the current hovered star
    $(this).parent().children('li.star').each(function(e){
      if (e < onStar) {
        $(this).addClass('hover');
      }
      else {
        $(this).removeClass('hover');
      }
    });
    
  }).on('mouseout', function(){
    $(this).parent().children('li.star').each(function(e){
      $(this).removeClass('hover');
    });
  });
  
  
  /* 2. Action to perform on click */
  $('#stars li').on('click', function(){
    var onStar = parseInt($(this).data('value'), 10); // The star currently selected
    var stars = $(this).parent().children('li.star');
    
    for (i = 0; i < stars.length; i++) {
      $(stars[i]).removeClass('selected');
    }
    
    for (i = 0; i < onStar; i++) {
      $(stars[i]).addClass('selected');
	}
  });
});
