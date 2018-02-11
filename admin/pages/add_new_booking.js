var i = 1;

 $("#add-booking").click(function(){
  
    $('#booking_detail').append('<div class="block" id="booking_clone_'+i+'"><h3 class="pull-left col-sm-10">Booking Details</h3><button style="margin-right:15px; margin-top:15px;" type="button" class="pull-right btn btn-warning remove"><i class="fa fa-minus"></i></button>    <div class="row">'+
                '<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 form-group">'+
                  '<label> <b> Booking No. *</b> </label>'+
                  '<input type="text" name="booking_detail[booking_no][]" class="form-control" required value="" >'+
                '</div>'+

                '<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 form-group">'+
                  '<label> <b>Booking Date * </b> </label>'+
                  '<div class="input-group date">'+
                    '<div class="input-group-addon"><i class="fa fa-calendar"></i></div>'+
                    '<input onchange="abc(this);" type="text" name="booking_detail[date][]" value="'+date+'" class="form-control datepicker" readonly>'+
                  '</div>'+
                '</div>'+
        
                '<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 form-group">'+
                  '<label> <b>Booking Vessel Name *</b> </label>'+
                  '<input type="text" name="booking_detail[booking_vessel_name][]" class="form-control" required value="">'+
                '</div>'+

                '<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 form-group">'+
                  '<label> <b> Vessel Name *</b> </label>'+
                  '<input type="text" name="booking_detail[vessel_name][]" class="form-control" required value="">'+
                '</div>'+

                '<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 form-group">'+
                  '<label> <b>Cut Of Date * </b> </label>'+
                  '<div class="input-group date">'+
                    '<div class="input-group-addon"><i class="fa fa-calendar"></i></div>'+
                    '<input type="text" name="booking_detail[cut_of_date][]" value="'+date+'" class="form-control" id="datepicker3" readonly>'+
                  '</div>'+
                '</div>'+

                '<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 form-group">'+
                  '<label> <b>Expiry Date * </b> </label>'+
                  '<div class="input-group date">'+
                    '<div class="input-group-addon"><i class="fa fa-calendar"></i></div>'+
                    '<input type="text" name="booking_detail[expiry_date][]" value="'+date+'" class="form-control datepicker" readonly>'+
                  '</div>'+
                '</div>'+

                '<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 form-group">'+
                  '<label> <b>Booking Status * </b> </label>'+
                  '<select class=" form-control" name="booking_detail[status][]" id="booking_status" data-live-search="true" onchange="show_desc(this)">'+
                    '<option value="">Select Status</option>'+
                    '<option>Processing</option>'+
                    '<option>Container Booked</option>'+
                    '<option value="Expired">Expired</option>'+
                  '</select>'+
                '</div>'+
      
                '<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group" style="display: none;" id="ref_desc">'+
                  '<label> <b> Ref Container Description </b> </label>'+
                  '<textarea class="form-control" name="booking_detail[description][]"></textarea>'+
                '</div>'+
              '</div>');
    i++;
});

$('#booking_detail').on('click','.remove',function() {

	  // var rate = $(this).closest("truck_detail").find("invoice_no").val();
	  var a  =  $(this).closest('div').attr('id');
    $(this).parent().remove();
});

    function show_desc(el){

         var b = el.parentElement.parentElement.parentElement.id;
         var b_status = el.value;
         if(b_status == 'Container Booked'){
            $(el).closest("#"+b).find("#ref_desc").show();
         }else{
            $(el).closest("#"+b).find("#ref_desc").hide();
         }
    }

     function show_desc_main(el){

         var b = el.parentElement.parentElement.parentElement.parentElement.id;
         var b_status = el.value;
         if(b_status == 'Container Booked'){
            $(el).closest("#"+b).find("#ref_desc").show();
         }else{
            $(el).closest("#"+b).find("#ref_desc").hide();
         }
    }

