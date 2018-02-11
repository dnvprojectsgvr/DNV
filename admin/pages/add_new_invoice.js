 $("#add-invoice").click(function(){
        
    $('#invoice_detail').append('<div class="block"><h3 class="pull-left col-sm-10">Invoice Details</h3><button style="margin-right:15px; margin-top:15px;" type="button" class="pull-right btn btn-warning remove"><i class="fa fa-minus"></i></button><div class="row invoice_detail"><div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 form-group m-t-15  invoice_no">'+
            '<label> <b> Invoice No. *</b> </label>'+
            '<input type="text" name="invoice_detail[invoice_no][]" class="form-control" required value="">'+
        '</div>'+

        '<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 form-group m-t-15">'+
            '<label> <b> Date * </b> </label>'+
            '<div class="input-group date">'+
               '<div class="input-group-addon">'+
                    '<i class="fa fa-calendar"></i>'+
               '</div>'+
               '<input type="text" name="invoice_detail[date][]" value="'+date+'" class="form-control datepicker" value="" readonly="readonly">'+
            '</div>'+
        '</div><div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 form-group m-t-15 invoice_pkg">'+
            '<label> <b> No Of Packages *</b> </label>'+
            '<input type="text" name="invoice_detail[no_of_packages][]" class="form-control numeric" required value="">'+
        '</div>'+
        '<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 form-group m-t-15 balance_pkg">'+
            '<label> <b> Balance Packages *</b> </label>'+
            '<input type="text" name="invoice_detail[balance_packages][]" class="form-control numeric" required value="" readonly>'+
        '</div>'+
       
        '<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">'+
            '<label> <b>Description</b> </label>'+
            '<textarea name="invoice_detail[description][]" class="form-control"></textarea>'+
        '</div></div></div>');
    i++;
});

$('#invoice_detail').on('click','.remove',function() {
    $(this).parent().remove();
});