<div class="modal fade modal-info" id="GuestReceipt" tabindex="-1" role="dialog" aria-labelledby="GuestReceiptLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <?php echo form_open('guests/receipt'); ?>
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title" id="GuestReceiptLabel">Guest Receipt</h4>
                    </div>

                    <div class="modal-body">
                        <div class="box-body">

                            <div class="col-md-4 form-group">
                                <label>Date</label>
                                <input type="text" name="guest_receipt[date]" class="form-control input-sm datepicker" value="<?php echo date('Y-m-d'); ?>"  data-inputmask="'alias': 'yyyy-mm-dd'" data-mask>
                            </div>

                            <div class="col-md-4 form-group bootstrap-timepicker">
                                <label>Time</label>
                                <input type="text" name="guest_receipt[time]" class="form-control input-sm timepicker">
                            </div>

                            <div class="col-md-4 form-group">
                                <label>Mobile No.</label>
                                <input type="text" name="guest_receipt[mobile_no]" class="form-control input-sm" placeholder="Enter Guest Mobile No...">
                            </div>

                            <div class="col-md-12 form-group">
                                <label>Guest Name</label>
                                <input type="text" name="guest_receipt[guest_name]" class="form-control input-sm" placeholder="Enter Guest Name...">
                            </div>

                            <div class="col-md-9 form-group">
                                <label>Amenity</label>
                                <select class="form-control input-sm" name="guest_receipt[amenity_id]">
                                    <option selected="selected" disabled="disabled">--SELECT AMENITY--</option>
                                <?php for($i = 0; $i < count($amenities); $i++)
                                {
                                    echo"<option value='".$amenities[$i]['amenity_id']."''>
                                            ".$amenities[$i]['amenity_type']." (Rs.".$amenities[$i]['fees_amount'].")
                                        </option>";
                                }
                                ?>
                                </select>
                            </div>

                            <div class="col-md-3 form-group">
                                <label>Amount</label>
                                <input type="text" name="guest_receipt[amount]" class="form-control input-sm" onkeyup="inWords('#amount_in_words', this.value)">
                            </div>

                            <div class="col-md-4 form-group">
                                <label>Payment Mode</label>
                                <select class="form-control input-sm" name="guest_receipt[payment_mode]" onchange="payment_mode(this.value)">
                                    <option value="Cash"> Cash </option>
                                    <option value="Cheque"> Cheque </option>
                                </select>
                            </div>

                            <div class="col-md-8 form-group">
                                <label>Amount In Words</label>
                                <input type="text" name="guest_receipt[amount_in_words]" class="form-control input-sm" id="amount_in_words" readonly="readonly">
                            </div>


                            <div id="bank_mode" style="display: none">

                                <div class="col-md-4 form-group">
                                  <label>Cheque Date</label>
                                  <input type="text" name="guest_receipt[cheque_date]" class="form-control input-sm datepicker" value="<?php echo date('Y-m-d'); ?>" data-inputmask="'alias': 'yyyy-mm-dd'" data-mask>
                                </div>

                                <div class="col-md-4 form-group">
                                  <label>Cheque No.</label>
                                  <input type="text" name="guest_receipt[cheque_no]" class="form-control input-sm">
                                </div>

                                <div class="col-md-4 form-group">
                                  <label>Bank</label>
                                  <input type="text" name="guest_receipt[bank]" class="form-control input-sm">
                                </div>

                                <div class="col-md-6 form-group">
                                  <label>A/C Name</label>
                                  <input type="text" name="guest_receipt[ac_name]" class="form-control input-sm">
                                </div>

                                <div class="col-md-6 form-group">
                                  <label>Branch Name</label>
                                  <input type="text" name="guest_receipt[branch_name]" class="form-control input-sm">
                                </div>

                            </div>


                            <div class="col-md-12 form-group">
                                <label>Remarks</label>
                                <textarea class="form-control" style="resize: none;" rows="1" name="guest_receipt[remarks]"></textarea>
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