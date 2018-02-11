var i = 1;

 $("#add-container").click(function(){
        
    $('#container_detail').append('<div class="block"><h3 class="pull-left col-sm-10">Container Details</h3><button style="margin-right:15px; margin-top:15px;" type="button" class="pull-right btn btn-warning remove"><i class="fa fa-minus"></i></button> <div class="row">'+
         '<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 form-group">'+
            '<label> <b> Container No. *</b> </label>'+
            '<input type="text" name="container_detail[container_no][]" class="form-control" required">'+
        '</div>'+

        '<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 form-group">'+
            '<label> <b>Container Type * </b> </label>'+
               '<input name="container_detail[container_type][]" class="form-control" list="container_type" required>'+
        '</div>'+
        
        '<div class="col-lg-3 col-md- col-sm-12 col-xs-12 form-group">'+
            '<label> <b> Size *</b> </label>'+
            '<input type="text" name="container_detail[size][]" class="form-control" required>'+
        '</div>'+
        '<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 form-group">'+
            '<label> <b> Gross Weight *</b> </label>'+
            '<input type="text" name="container_detail[gross_weight][]" class="form-control" required>'+
        '</div>'+
        '<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 form-group">'+
            '<label> <b> Ref Booking No. *</b> </label>'+
            '<input type="text" name="container_detail[ref_book_no][]" class="form-control" required">'+
        '</div>'+
        '<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 form-group">'+
            '<label> <b> Line Seal *</b> </label>'+
            '<input type="text" name="container_detail[line_seal][]" class="form-control" required>'+
        '</div>'+
        '<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 form-group">'+
            '<label> <b> Custom Seal *</b> </label>'+
            '<input type="text" name="container_detail[custom_seal][]" class="form-control" required>'+
        '</div>'+
         '<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 form-group">'+
            '<label> <b>Movement Date * </b> </label>'+
            '<div class="input-group date">'+
               '<div class="input-group-addon">'+
                    '<i class="fa fa-calendar"></i>'+
               '</div>'+
               '<input type="text" name="container_detail[movement_date][]"  value="'+date+'" class="form-control datepicker" readonly>'+
            '</div>'+
        '</div>'+

        '</div>');
    $i++;
});

$('#container_detail').on('click','.remove',function() {

    $(this).parent().remove();
});