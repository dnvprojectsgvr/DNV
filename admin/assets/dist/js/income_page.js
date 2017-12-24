function addrow() {    
    $("<tr><td><input type='text' class='form-control' name='income_child[particular][]' required='required' placeholder='Enter Income Detail...'></td><td><input type='number' name='income_child[amount][]' class='form-control numeric amount' placeholder='Enter Amount...' min='0' required='required'></td><td><button type='button' class='add btn btn-primary btn-xs' title='Add Row'><i class='fa fa-plus'></i></button> <button type='button' class='remove btn btn-danger btn-xs' title='Remove Row'><i class='fa fa-minus'></i></button></td></tr>").insertAfter($(this).closest('tr'));
    
}


function payment_mode(payment_mode)
{
    if(payment_mode == 'Cheque')
    {
      $('#cheque_mode').show();
    }
    else
    {
      $('#cheque_mode').hide();
    }
}



function calculation()
{
    var total = 0;
    $(".amount").each(function() {
    total += parseInt(this.value);
    });

    $('#total_amount').val(total);

    inWords('#amount_in_words', total);
}

$(document).on('keyup', '.amount', calculation);


$(document).on('click', '.add', addrow);

function removerow() {
    $(this).closest('tr').remove();
   
    
  }

$(".remove").click(calculation2);
$(document).on('click', '.remove', calculation2);