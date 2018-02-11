<div class="modal fade modal-primary" id="filter_members" tabindex="-1" role="dialog" aria-labelledby="filter_membersLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <?php echo form_open_multipart(); ?>
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="filter_membersLabel">Filter Tyre By Name</h4>
            </div>

            <div class="modal-body">
                <div class="box-body">

                    <div class="col-md-12 form-group">
                    <label>Employee Name</label>
                         <input type="text" class="form-control" name="name" required="required" maxlength="128" placeholder="Enter Tyre Employee Name (Required)">
                    </div>
                
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" name="filter_members" value="submit" class="btn btn-primary">Filter</button>
            </div>

        <?php echo form_close(); ?>
        </div>
    </div>
</div>