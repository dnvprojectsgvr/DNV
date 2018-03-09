<!DOCTYPE html>
<html>
<head>
    <title>CodeIgniter AJAX Dynamic Dependent Dropdowns Example</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="<?php echo base_url("assets/bootstrap/css/bootstrap.css"); ?>" rel="stylesheet" type="text/css" />
    </style>
</head>
<body>

<div class="container" style="margin-top: 30px;">
<div class="col-sm-6 col-sm-offset-3">
    <div class="panel panel-info">
        <div class="panel-heading"><h3 class="panel-title">Dynamic Country, State & City Dropdown List Demo</h3></div>
        <div class="panel-body">
            <?php $attributes = array("name" => "form1");
            echo form_open("dropdown_demo/index", $attributes);?>
            <div class="form-group">
                <?php $attributes = 'id="course" class="form-control"';
                echo form_dropdown('course', $course, set_value('course'), $attributes); ?>
            </div>
            <div class="form-group">
                <?php $attributes = 'id="semester" class="form-control"';
                echo form_dropdown('semester', $semester, set_value('semester'), $attributes); ?>
            </div>
            <div class="form-group">
                <?php $attributes = 'id="subject" class="form-control"';
                echo form_dropdown('subject', $subject, set_value('subject'), $attributes); ?>
            </div>
            <div class="form-group">
                <button name="submit" type="submit" class="btn btn-info btn-block">Submit</button>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>
</div>
<script src="https://code.jquery.com/jquery-1.10.2.js" type="text/javascript"></script>
<script src="https://code.jquery.com/jquery-1.10.2.js" type="text/javascript"></script>
<script type="text/javascript">
$('#course').change(function(){
    var course_id = $(this).val();
    $("#semester > option").remove();
    $.ajax({
        type: "POST",
        url: "<?php echo site_url('dropdown_demo/add_semester'); ?>",
        data: {id: course_id},
        dataType: 'json',
        success:function(data){
            $.each(data,function(k, v){
                var opt = $('<option />');
                opt.val(k);
                opt.text(v);
                $('#semester').append(opt);
            });
            $('#subject').html('<option value="0">Select Subject</option>');
            //$('#semester').append('<option value="' + id + '">' + name + '</option>');
        }
    });
});

$('#semester').change(function(){
    var semester_id = $(this).val();
    $("#subject > option").remove();
    $.ajax({
        type: "POST",
        url: "<?php echo site_url('dropdown_demo/add_subject'); ?>",
        data: {id: semester_id},
        dataType: 'json',
        success:function(data){
            $.each(data,function(k, v){
                var opt = $('<option />');
                opt.val(k);
                opt.text(v);
                $('#subject').append(opt);
            });
        }
    });
});
</script>
</body>
</html>