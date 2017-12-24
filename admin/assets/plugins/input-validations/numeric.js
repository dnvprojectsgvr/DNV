
function validate(event)
{
if (event.shiftKey == true) {
            event.preventDefault();
        }

        if ((event.keyCode >= 48 && event.keyCode <= 57) || 
            (event.keyCode >= 96 && event.keyCode <= 105) || 
            event.keyCode == 8 || event.keyCode == 9 || event.keyCode == 37 ||
            event.keyCode == 39 || event.keyCode == 46) {

        } else {
            event.preventDefault();
        }

}
$(".numeric").keydown(validate);
$(document).on('keydown', '.numeric', validate);