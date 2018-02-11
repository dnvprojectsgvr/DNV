var i = 1;

 $("#add-truck").click(function(){

    var gross_weight = $('.truck_balance_wt:last').find('input').val();
   
    $('#truck_detail').append('<div class="block"><h3 class="pull-left col-sm-10">Truck Details</h3><button style="margin-right:15px; margin-top:15px;" type="button" class="pull-right btn btn-warning remove"><i class="fa fa-minus"></i></button><div class="row truck_detail">'+
         '<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 form-group">'+
            '<label> <b> Truck No. *</b> </label>'+
            '<input type="text" name="truck_detail[truck_no][]" class="form-control" required value="">'+
        '</div>'+

       '<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 form-group">'+
            '<label> <b>Cart in Date * </b> </label>'+
            '<div class="input-group date">'+
               '<div class="input-group-addon">'+
                    '<i class="fa fa-calendar"></i>'+
               '</div>'+
               '<input type="text" name="truck_detail[cart_in_date][]" value="'+date+'" class="form-control datepicker" readonly>'+
            '</div>'+
        '</div>'+
        
        '<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 form-group truck_pkg">'+
            '<label> <b> No. of Packages *</b> </label>'+
            '<input type="text" name="truck_detail[no_of_packages][]" class="form-control numeric" required value="">'+
        '</div>'+
        '<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 form-group ref_invoice">'+
            '<label> <b> REF INVOICE NO. *</b> </label>'+
            '<input type="text" name="truck_detail[ref_invoice_no][]" class="form-control" required  >'+
        '</div>'+
        '<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 form-group">'+
            '<label> <b> CFS Name *</b> </label>'+
            '<input type="text" name="truck_detail[cfs_name][]" class="form-control" required>'+
        '</div>'+
        '<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 form-group truck_gross_wt">'+
            '<label> <b> Shipping Bill WT *</b> </label>'+
            '<input type="text" name="truck_detail[truck_gross_wt][]" class="form-control numeric" required value="'+gross_weight+'">'+
        '</div>'+
        '<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 form-group truck_wt_received">'+
            '<label> <b> Truck WT Received *</b> </label>'+
            '<input type="text" name="truck_detail[truck_wt_received][]" class="form-control numeric" required>'+
        '</div>'+
        '<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 form-group truck_balance_wt">'+
            '<label> <b> Balance WT *</b> </label>'+
            '<input type="text" name="truck_detail[balance_wt][]" class="form-control" value="0" required >'+
        '</div>'+
        '</div>');
});

$('#truck_detail').on('click','.remove',function() {
	var a  =  $(this).closest('div').attr('id');
    $(this).parent().remove();
});


