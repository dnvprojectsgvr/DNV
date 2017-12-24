<footer class="main-footer">
  <div class="pull-right hidden-xs">
    <b>Developed by</b><a href="http://#"> ISD </a>
  </div>
  <strong>
    Copyright &copy; <?php echo date('Y'); ?>
    <a href="<?php echo $this->session->portal_config['url']; ?>">
      <?php echo $this->session->portal_config['company_name']; ?>
    </a>.
  </strong>
  All rights reserved.
</footer>

<?php
  $financial_years = $this->general->financial_year();
 ?>

<aside class="control-sidebar control-sidebar-dark">
  <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
    <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-calendar"></i></a></li>
  </ul>

  <div class="tab-content">
    <div class="tab-pane active" id="control-sidebar-home-tab">
      <h3 class="control-sidebar-heading">SELECT FINANCIAL YEAR  </h3>
        <ul class="control-sidebar-menu">
          <?php for($i=0; $i < count($financial_years); $i++) {
          if($this->session->financial_year['financial_year_id'] == $financial_years[$i]['financial_year_id'])
          {
            $flag = 'blue';
          }
          else
          {
            $flag = 'yellow';
          }
          ?>
          <li>
            <a href="<?php echo site_url('finance/set_financial_year/'.$financial_years[$i]['financial_year_id']); ?>">
              <i class="menu-icon fa fa-calendar bg-<?php echo $flag; ?>"></i>
              <div class="menu-info">
                <h4 class="control-sidebar-subheading">
                  <?php echo date_format(date_create($financial_years[$i]['from_finance']), 'd/m/Y'); ?> -
                   <?php echo date_format(date_create($financial_years[$i]['to_finance']), 'd/m/Y'); ?>
                </h4>
              </div>
            </a>
          </li>
          <?php } ?>

        </ul>
      </div>
    </div>
  </aside>