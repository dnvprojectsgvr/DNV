<div class="box-body">
   <div class="col-md-4">
    <div class="form-group">
        <label><i class="fa fa-home"></i> Faculty First Name:</label>
        <div class="form-line">
            <?php echo ($faculty_details[0]['f_name']); ?>
        </div>
    </div>
</div>
<div class="col-md-4">
    <div class="form-group">
        <label><i class="fa fa-home"></i> Faculty Middile Name:</label>
        <div class="form-line">
            <?php echo ($faculty_details[0]['m_name']); ?>
        </div>
    </div>
</div>
<div class="col-md-4">
    <div class="form-group">
        <label><i class="fa fa-home"></i> Faculty Last Name:</label>
        <div class="form-line">
            <?php echo ($faculty_details[0]['l_name']); ?>
        </div>
    </div>
</div>
<div class="col-md-6">
    <div class="form-group">
        <label><i class="fa fa-home"></i> Faculty Name:</label>
        <div class="form-line">
            <?php echo ($faculty_details[0]['full_name']); ?>
        </div>
    </div>
</div>


<div class="col-md-4">
    <div class="form-group">
        <label><i class="fa fa-mobile"></i> Gender :</label>
        <div class="form-line">
            <?php echo $faculty_details[0]['gender']; ?>
        </div>
    </div>
</div>

<div class="col-md-4">
    <div class="form-group">
        <label><i class="fa fa-mobile"></i> Date Of Birth. :</label>
        <div class="form-line">
            <?php echo $faculty_details[0]['dob']; ?>
        </div>
    </div>
</div>

<div class="col-md-4">
    <div class="form-group">
        <label><i class="fa fa-car"></i> Mobile No :</label>
        <div class="form-line">
            <a href="tel:<?php echo $faculty_details[0]['mob_no']; ?>">
                <?php echo $faculty_details[0]['mob_no']; ?>
            </a>
        </div>
    </div>
</div>

<div class="col-md-4">
    <div class="form-group">
        <label><i class="fa fa-car"></i> E-Mail :</label>
        <div class="form-line">
            <?php echo $faculty_details[0]['email_id']; ?>
        </div>
    </div>
</div>

<div class="col-md-4">
    <div class="form-group">
        <label><i class="fa fa-car"></i> Username :</label>
        <div class="form-line">
            <?php echo $faculty_details[0]['faculty_id']; ?>
        </div>
    </div>
</div>


                                 <!-- <div class="col-md-12 form-group">
                               <a target="_blank" class="btn btn-warning" href="<?php echo site_url('faculty_details/PDFView/'.$faculty_details[0]['faculty_details_id']); ?>" ><i class="fa fa-file-pdf-o" aria-hidden="true"></i> View PDF </a>
                           </div> -->
                       </div>