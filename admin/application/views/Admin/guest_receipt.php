<div class="modal fade modal-info" id="GuestReceipt" tabindex="-1" role="dialog" aria-labelledby="GuestReceiptLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <?php echo form_open('guests/receipt'); ?>
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title" id="GuestReceiptLabel">Ckeck Tyre KM</h4>
                    </div>

                    <div class="modal-body">
                        <div class="box-body">

                            <div class="col-md-12 form-group">
                                  <label>Select Vehicle *</label>
                                  <select class="form-control selectpicker" data-live-search="true" name="old_vehicle_id" id="vid">
                                    <option selected disabled>--SELECT Vehicle--</option>
                                    <?php for($i=0; $i < count($vehicles); $i++)
                                    {
                                        
                                      echo"<option value='".$vehicles[$i]['id']."'>".$vehicles[$i]['vehicle_no']."(".$vehicles[$i]['make'].")"."</option>"; 
                                    }
                                    ?>
                                  </select>
                            </div>

                            <div class="col-md-12 form-group">
                                    <label>Current KM. *</label>
                                    <input type="text" class="form-control" name="assign_tyre_km" required="required" maxlength="128" placeholder="Vehicle Current KM" id="ckm" onblur="myFunction(this.value)">
                            </div>

                            <div class="col-md-6 form-group">
                                <label>Running</label>
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Position</label>
                            </div>
                            <?php 
                            $j = isset($q)?count($invoice_desc):1;
                            for($i=0;$i<$j;$i++)
                            {
                            ?>
                            <div class="col-md-6 form-group">
                            <input type="text" class="form-control" name="assign_tyre_km" required="required" maxlength="128" placeholder="" id="km" disabled="disabled">
                            </div>
                            <div class="col-md-6 form-group">
                            <input type="text" class="form-control" name="assign_tyre_km" required="required" maxlength="128" placeholder="" id="pos" disabled="disabled">
                            </div>
                            <?php } ?>
                            <div class="col-md-6 form-group">
                            <input type="text" class="form-control" name="assign_tyre_km" required="required" maxlength="128" placeholder="" id="km1" disabled="disabled">
                            </div>
                            <div class="col-md-6 form-group">
                            <input type="text" class="form-control" name="assign_tyre_km" required="required" maxlength="128" placeholder="" id="pos1" disabled="disabled">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        <button type="submit" name="submit" value="submit" class="btn btn-primary">
                            Submit
                        </button>
                    </div>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>