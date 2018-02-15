<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $this->session->portal_config['short_name']; ?> | <?php echo $title; ?></title>

  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/fonts/font-awesome/css/font-awesome.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/fonts/ionicons/css/ionicons.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/jvectormap/jquery-jvectormap-1.2.2.css'); ?>">
  
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/timepicker/bootstrap-timepicker.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/selectpicker/select.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/AdminLTE.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/skins/_all-skins.min.css'); ?>">
  <link rel="icon" href="<?php echo base_url('assets/dist/img/favicon.ico'); ?>" type="image/x-icon">
  <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/custom.css'); ?>">

</head>

<?php $this->load->view('Admin/left_aside'); ?>
<section class="content">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="box">
        <div class="box-body">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
            <div class="row">
             <div class="col-md-4 col-sm-12 col-xs-12 form-group">
              <div class="col-md-12 form-group">   

             </div>
              Show
              <select class="input-sm" id="result_limit">
                 <option <?php if($pageval == '10'){echo 'selected';} ?> >10</option>
                  <option <?php if($pageval == '25'){echo 'selected';} ?> >25</option>
                  <option <?php if($pageval == '50'){echo 'selected';} ?> >50</option>
                  <option <?php if($pageval == '100'){echo 'selected';} ?> >100</option>
              </select>
              entries
            </div>    
            <div class="col-md-4 pull-right">
              <form action="<?php echo site_url('faculty/view_faculty'); ?>" method="post" accept-charset="utf-8">
                <div class="box-body">
                  <div class="col-md-6 form-group">
                    <select class="form-control selectpicker" name="column" required="required" >
                     <option value="name">Name</option> 
                     <option value="designation">Gender</option>
                     <option value="mobile1">Mobile</option>
                     <option value="email1">E-mail</option>
                   </select>
                 </div>

                 <div class="input-group input-group-sm">
                  <input type="text" class="form-control" name="keyword" placeholder="Search Text" required="">
                  <span class="input-group-btn">
                    <button type="submit" name="filter" value="submit" class="btn btn-info btn-flat">Go!</button>
                  </span>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
          <div class="col-md-12 table-responsive">
              <table class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>Sr.No. <?php $this->general_m->sort_link($url, $sort_column, $sort_order, 'faculty_id'); ?></th>
                        <th style="max-width: 80px;">Image</th>
                        <th>Name <?php $this->general_m->sort_link($url, $sort_column, $sort_order, 'full_name'); ?></th>
                        <th>Gender<?php $this->general_m->sort_link($url, $sort_column, $sort_order, 'gender'); ?></th>
                        <th>Mobile</th>
                        <th>E-mail</th>
                        <th>Action</th>
                       
                      </tr>
                    </thead>
                    <tbody>
                      <?php 

                      $b = $count+1 ; ?>
                      <?php for($i=0; $i<count($faculty); $i++)
                      {
                      ?>
                      <tr>
                        <td><?php echo $b; ?></td>
                        <td><img src="<?php echo base_url('assets/images/facultys/picture'.$faculty[$i]['faculty_id'].'.jpg'); ?>" width="80px"></td>
                        <td><?php echo $faculty[$i]['full_name']; ?></td>
                        <td><?php echo $faculty[$i]['gender']; ?></td>
                        <td><a href="tel:<?php echo $faculty[$i]['mob_no']; ?>"><?php echo $faculty[$i]['mob_no']; ?></td></a>
                        <td><?php echo $faculty[$i]['email_id']; ?></td>
                        

                        <td align="center">
                          <a href="<?php echo site_url('admin/faculty/faculty/detail/'.$faculty[$i]['faculty_id']); ?>" title="View" class="btn btn-primary btn-xs" ><i class="fa fa-eye"></i></a> |
                          <a href="<?php echo site_url('faculty/delete/'.$faculty[$i]['faculty_id']); ?>" title="Delete" class="btn btn-danger btn-xs" onclick="return confirm('Do you really want to delete all the data related with this faculty?');">
                            <i class="fa fa-trash-o"></i>
                          </a> 
                        </td>
                      </tr>
                      <?php
                      $b = $b + 1; }
                      ?>
                    </tbody>
                      <tfoot>
                        <tr>
                          <td colspan="3">Showing <?php echo $from_result; ?> to <?php echo $to_result; ?> of <?php echo $num_rows; ?> entries</td>
                          <td colspan="4">
                            <?php echo $this->pagination->create_links(); ?>
                          </td>
                        </tr>
                      </tfoot>
                  </table>
        
          </div>
        </div>
    </div>
  </div>

  </div>
</section>
</div>

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Developed by</b><a href="<?php echo $this->session->portal_config['developer_web']; ?>"> <?php echo $this->session->portal_config['developer_name']; ?></a>
    </div>
    <strong>Copyright &copy; <?php echo date('Y'); ?>
            <a href="<?php echo $this->session->portal_config['url']; ?>"><?php echo $this->session->portal_config['club_name']; ?></a>.
    </strong> All rights
    reserved.
  </footer>

  <div class="control-sidebar-bg"></div>

</div>

<script src="<?php echo base_url('assets/plugins/jQuery/jquery-2.2.3.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/plugins/fastclick/fastclick.js'); ?>"></script>
<script src="<?php echo base_url('assets/dist/js/app.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/plugins/sparkline/jquery.sparkline.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js'); ?>"></script>
<script src="<?php echo base_url('assets/plugins/datepicker/bootstrap-datepicker.js'); ?>"></script>

<script src="<?php echo base_url('assets/plugins/slimScroll/jquery.slimscroll.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/plugins/selectpicker/select.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/dist/js/demo.js'); ?>"></script>

<script type="text/javascript">
  $(document).on('change', '#result_limit', function(){
    window.location = "<?php echo site_url('faculty/view_faculty/all'); ?>/" + $(this).val();
  });
</script>
</body>
</html>
