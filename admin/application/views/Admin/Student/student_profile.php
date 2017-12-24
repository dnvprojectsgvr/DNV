<div class="box-body">
    <div class="col-md-6">
        <div class="form-group">
            <label><i class="fa fa-home"></i> Student Name:</label>
            <div class="form-line">
                <?php echo nl2br($student_details[0]['full_name']); ?>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label><i class="fa fa-home"></i> Student ID:</label>
            <div class="form-line">
                <?php echo nl2br($student_details[0]['student_id']); ?>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label><i class="fa fa-home"></i> Student First Name:</label>
            <div class="form-line">
                <?php echo nl2br($student_details[0]['f_name']); ?>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label><i class="fa fa-home"></i> Student Middile Name:</label>
            <div class="form-line">
                <?php echo nl2br($student_details[0]['m_name']); ?>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label><i class="fa fa-home"></i> Student Last Name:</label>
            <div class="form-line">
                <?php echo nl2br($student_details[0]['l_name']); ?>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label><i class="fa fa-home"></i> Student Father Name:</label>
            <div class="form-line">
                <?php echo nl2br($student_details[0]['father_name']); ?>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <label><i class="fa fa-mobile"></i> Mobile No. :</label>
            <div class="form-line">
                <a href="tel:<?php echo $student_details[0]['mob_no']; ?>">
                    <?php echo $student_details[0]['mob_no']; ?>
                </a>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <label><i class="fa fa-mobile"></i> E-mail. :</label>
            <div class="form-line">
                <?php echo $student_details[0]['email_id']; ?>
            </div>
        </div>
    </div>


    <div class="col-md-4">
        <div class="form-group">
            <label><i class="fa fa-handshake-o"></i> Adminssion Year :</label>
            <div class="form-line">
                <?php echo $student_details[0]['admin_year']; ?>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <label><i class="fa fa-handshake-o"></i> Roll No :</label>
            <div class="form-line">
                <?php echo $student_details[0]['roll_no']; ?>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <label><i class="fa fa-tint"></i> Course :</label>
            <div class="form-line">
                <?php echo $student_details[0]['course']; ?>
            </div>
        </div>
    </div>


    <div class="col-md-4">
        <div class="form-group">
            <label><i class="fa fa-bookmark"></i> Date of Birth :</label>
            <div class="form-line">
                <?php echo $student_details[0]['dob']; ?>
            </div>
        </div>
    </div>
</div>