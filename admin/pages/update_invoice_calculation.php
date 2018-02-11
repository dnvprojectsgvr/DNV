<script>
  $(function () {
        
    //Date picker
    $('#datepicker').datepicker({
      format: 'yyyy-mm-dd',
      autoclose: true
    });
    $('#datepicker1').datepicker({
      format: 'yyyy-mm-dd',
      autoclose: true
    });
    $('#datepicker2').datepicker({
      format: 'yyyy-mm-dd',
      autoclose: true
    });
    
  });
</script>
<!-- INVOICE CALCULATION -->

<script>

function calculate()
{
    var exchange_rate = $('#exchange_rate').val();
    var taxtype = $('#taxtype').val();
    
    var rate = $(this).closest("tr").find(".rate").val();
    var units = $(this).closest("tr").find(".units").val();
    var taxable = $(this).closest("tr").find(".taxable").val();
    var exchange_rate = $('#exchange_rate').val();

    if($(this).closest("tr").find(".cur").val()=="USD")
    {
       var amount = parseFloat(rate) * parseFloat(units) * parseFloat(exchange_rate);
    }
    else
    {
       var amount = parseFloat(rate) * parseFloat(units);
    }

    amount = amount.toFixed(2); 
    $(this).closest("tr").find(".amount").val(amount);


   if(taxtype == "gst"){
              var taxper = taxable/2;
            $(this).closest("tr").find(".taxable_amount").val(amount); 
            $(this).closest("tr").find(".nontaxable_amount").val(0);
            servicetax = (taxper * amount) / 100;
            edutax = (taxper * amount) / 100;
            sectax = 0//(0.5 * amount) / 100;
        }

        else if(taxtype=="igst")
       { 
        $(this).closest("tr").find(".taxable_amount").val(amount); 
        $(this).closest("tr").find(".nontaxable_amount").val(0);
        servicetax = 0//(9 * amount) / 100;
        edutax = 0//(9 * amount) / 100;
        sectax = (taxable * amount) / 100;
       }
       
         if(taxable == 0){
            $(this).closest("tr").find(".nontaxable_amount").val(amount); 
            $(this).closest("tr").find(".taxable_amount").val(0); 
            servicetax = 0;
            edutax = 0;
            sectax = 0;
        }
        if(taxable == ''){
             $(this).closest("tr").find(".nontaxable_amount").val(amount); 
            $(this).closest("tr").find(".taxable_amount").val(0); 
            servicetax = 0;
            edutax = 0;
            sectax = 0;
        }

    servicetax = servicetax.toFixed(2);
    edutax = edutax.toFixed(2);
    sectax = sectax.toFixed(2);


    $(this).closest("tr").find(".service_tax_amount").val(servicetax);
    $(this).closest("tr").find(".edu_tax_amount").val(edutax);
    $(this).closest("tr").find(".sec_tax_amount").val(sectax);


    var total_service_tax = 0;
    $(".service_tax_amount").each(function() {
    total_service_tax += parseFloat(this.value, 10);
    });

    var total_edu_tax = 0;
    $(".edu_tax_amount").each(function() {
    total_edu_tax += parseFloat(this.value, 10);
    });

    var total_sec_tax = 0;
    $(".sec_tax_amount").each(function() {
    total_sec_tax += parseFloat(this.value, 10);
    });

    var total_taxable_amount = total_service_tax + total_edu_tax + total_sec_tax;
    $(".taxable_amount").each(function() {
    total_taxable_amount += parseFloat(this.value, 10);
    });

    var total_nontaxable_amount = 0;
    $(".nontaxable_amount").each(function() {
    total_nontaxable_amount += parseFloat(this.value, 10);
    });

    total_service_tax = total_service_tax.toFixed(2);
    total_edu_tax = total_edu_tax.toFixed(2);
    total_sec_tax = total_sec_tax.toFixed(2);
    total_nontaxable_amount = total_nontaxable_amount.toFixed(2);
    total_taxable_amount = total_taxable_amount.toFixed(2);



    $('input[name=service_tax]').val(total_service_tax);
    $('input[name=edu_tax]').val(total_edu_tax);
    $('input[name=sec_tax]').val(total_sec_tax);
    $('input[name=total_taxable_amount]').val(total_taxable_amount);
    $('input[name=total_nontaxable_amount]').val(total_nontaxable_amount);

    var totalamount = parseFloat(total_nontaxable_amount) + parseFloat(total_taxable_amount);

    totalamount = Math.round(totalamount);

    $('input[name=payble]').val(totalamount);

    var usd_payble = totalamount / parseFloat(exchange_rate);

    $('input[name=usd_payble]').val(usd_payble.toFixed(2));

    inWords($('input[name=payble]').val());
    
}

$(".rate").keyup(calculate);
$(".units").keyup(calculate);
$(document).on('keyup', '.rate', calculate);
$(document).on('keyup', '.units', calculate);
$(".cur").change(calculate);
$(document).on('change', '.cur', calculate);
$(".taxable").change(calculate);
$(document).on('change', '.taxable', calculate);

</script>

<!-- INVOICE CALCULATION -->

<!-- ADD NEW OR REMOVE TABLE ROW -->

<script>
  $("#add").click(function() {    
    $('#newcol').append("<tr class='description_row'><td><input type='text' name='details[]' value='' class='form-control input-sm' required></td><td><input type='text' name='hsnacs[]' class='form-control input-sm col-xs-2'></td><td><input type='text' name='uom[]' class='form-control input-sm col-xs-2'></td><td><select name='cur[]' class='cur'> <option value='INR'>₹ INR</option><option value='USD'>$ USD</option></select></td><td><input type='text' name='taxable[]' class='taxable form-control input-sm col-xs-3' value='0'></td><td><input type='text' name='rate[]' value='0' class='rate form-control input-sm' required></td><td><input type='text' value='1' name='units[]' class='units form-control' required></td><td><input type='text' name='taxable_amount[]' value='0' class='taxable_amount form-control input-sm' required readonly></td><td><input type='text' name='nontaxable_amount[]' value='0' class='nontaxable_amount form-control input-sm' required readonly><input type='hidden' name='service_tax_amount[]' value='0' class='service_tax_amount'><input type='hidden' name='edu_tax_amount[]' value='0' class='edu_tax_amount'><input type='hidden' name='sec_tax_amount[]' value='0' class='sec_tax_amount'><input type='hidden' name='amount[]' value='0' class='amount'></td><td><button type='button' class='add btn btn-primary btn-xs' title='Add'><i class='fa fa-plus'></i></button> <button  type='button' class='remove btn btn-danger btn-xs' title='Remove'><i class='fa fa-minus'></i></button></td></tr>");
    
  });
  $("#remove").click(function() {
    $('#newcol tr:last-child').remove();


    var total_service_tax = 0;
    $(".service_tax_amount").each(function() {
    total_service_tax += parseFloat(this.value, 10);
    });

    var total_edu_tax = 0;
    $(".edu_tax_amount").each(function() {
    total_edu_tax += parseFloat(this.value, 10);
    });

    var total_sec_tax = 0;
    $(".sec_tax_amount").each(function() {
    total_sec_tax += parseFloat(this.value, 10);
    });

    var total_taxable_amount = total_service_tax + total_edu_tax + total_sec_tax;
    $(".taxable_amount").each(function() {
    total_taxable_amount += parseFloat(this.value, 10);
    });

    var total_nontaxable_amount = 0;
    $(".nontaxable_amount").each(function() {
    total_nontaxable_amount += parseFloat(this.value, 10);
    });

    total_service_tax = total_service_tax.toFixed(2);
    total_edu_tax = total_edu_tax.toFixed(2);
    total_sec_tax = total_sec_tax.toFixed(2);
    total_nontaxable_amount = total_nontaxable_amount.toFixed(2);
    total_taxable_amount = total_taxable_amount.toFixed(2);


    $('input[name=service_tax]').val(total_service_tax);
    $('input[name=edu_tax]').val(total_edu_tax);
    $('input[name=sec_tax]').val(total_sec_tax);
    $('input[name=total_taxable_amount]').val(total_taxable_amount);
    $('input[name=total_nontaxable_amount]').val(total_nontaxable_amount);

    var totalamount = parseFloat(total_nontaxable_amount) + parseFloat(total_taxable_amount);

    totalamount = Math.round(totalamount);

    $('input[name=payble]').val(totalamount);

    var usd_payble = totalamount / parseFloat(exchange_rate);

    $('input[name=usd_payble]').val(usd_payble.toFixed(2));

    inWords($('input[name=payble]').val());
   
    
  });
</script>

<!-- ADD NEW OR REMOVE TABLE ROW -->


<!-- DECIMAL AND NUMERIC VALIDATION -->

<script>
function validate(event)
{
if (event.shiftKey == true) {
            event.preventDefault();
        }

        if ((event.keyCode >= 48 && event.keyCode <= 57) || 
            (event.keyCode >= 96 && event.keyCode <= 105) || 
            event.keyCode == 8 || event.keyCode == 9 || event.keyCode == 37 ||
            event.keyCode == 39 || event.keyCode == 46 || event.keyCode == 190) {

        } else {
            event.preventDefault();
        }

        if($(this).val().indexOf('.') !== -1 && event.keyCode == 190)
            event.preventDefault(); 
        //if a decimal has been added, disable the "."-button

}
$("input[name=exchange_rate]").keydown(validate);
$(".rate").keydown(validate);
$(".units").keydown(validate);
$(document).on('keydown', '.rate', validate);
$(document).on('keydown', '.units', validate);
</script>

<!-- DECIMAL AND NUMERIC VALIDATION -->



<!-- Amount In Words -->
<script>

var a = ['', 'ONE ', 'TWO ', 'THREE ', 'FOUR ', 'FIVE ', 'SIX ', 'SEVEN ', 'EIGHT ', 'NINE ', 'TEN ', 'ELEVEN ', 'TWELVE ', 'THIRTEEN ', 'FOURTEEN ', 'FIFTEEN ', 'SIXTEEN ', 'SEVENTEEN ', 'EIGHTEEN ', 'NINETEEN '];
var b = ['', '', 'TWENTY', 'THIRTY', 'FORTY', 'FIFTY', 'SIXTY', 'SEVENTY', 'EIGHTY', 'NINETY'];

function inWords(num) {
    if ((num = num.toString()).length > 9) return 'overflow';
    n = ('000000000' + num).substr(-9).match(/^(\d{2})(\d{2})(\d{2})(\d{1})(\d{2})$/);
    if (!n) return;
    var str = '';
    str += (n[1] != 0) ? (a[Number(n[1])] || b[n[1][0]] + ' ' + a[n[1][1]]) + 'CRORE ' : '';
    str += (n[2] != 0) ? (a[Number(n[2])] || b[n[2][0]] + ' ' + a[n[2][1]]) + 'LAKH ' : '';
    str += (n[3] != 0) ? (a[Number(n[3])] || b[n[3][0]] + ' ' + a[n[3][1]]) + 'THOUSAND ' : '';
    str += (n[4] != 0) ? (a[Number(n[4])] || b[n[4][0]] + ' ' + a[n[4][1]]) + 'HUNDRED ' : '';
    str += (n[5] != 0) ? ((str != '') ? 'AND ' : '') + (a[Number(n[5])] || b[n[5][0]] + ' ' + a[n[5][1]]) + 'ONLY ' : '';
    $('input[name=amntinwor]').val(str)
}

</script>
<!-- Amount In Words -->