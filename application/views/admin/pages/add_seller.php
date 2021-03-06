<!-- start: Content -->
<div id="content" class="span10">


    <ul class="breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="<?php echo base_url('dashboard')?>">Home</a>
            <i class="icon-angle-right"></i>
        </li>
        <li>
            <i class="icon-edit"></i>
            <a href="<?php echo base_url('add/seller')?>">Add Seller</a>
        </li>
    </ul>

    <div class="row-fluid sortable">
        <div class="box span12">
            <div class="box-header" data-original-title>
                <h2><i class="halflings-icon edit"></i><span class="break"></span>Add Seller</h2>
                <div class="box-icon">
                    <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                    <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                    <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
                </div>
            </div>
            <style type="text/css">
                #result{color:red;padding: 5px}
                #result p{color:red}
            </style>
            <div id="result">
                <p><?php echo $this->session->flashdata('message');?></p>
            </div>
            <div class="box-content">
                <form class="form-horizontal" action="<?php echo base_url('details/save_seller')?>" method="post">
                    <fieldset>

                        <div class="control-group">
                            <label class="control-label" for="fileInput">User Name</label>
                            <div class="controls">
                                <input class="span6 typeahead" name="user_name" id="fileInput" type="text"/>
                            </div>
                        </div>

                        <label class="control-label" for="fileInput">Email</label>
                          <div class="controls">
                              <input class="span6 typeahead" name="user_email" id="fileInput" type="text"/>
                          </div>

                          <label class="control-label" for="fileInput">Password</label>
                          <div class="controls">
                              <input class="span6 typeahead" name="user_password" id="fileInput" type="password"/>
                          </div>

                          <div class="control-group">
                              <label class="control-label" for="textarea2">System Role</label>
                              <div class="controls">
                                  <select name="user_role">
                                      <option value="1">Admin</option>
                                      <option value="2">Seller</option>
                                  </select>
                              </div>
                          </div>



                      <div class="form-actions">
                            <button type="submit" class="btn btn-primary">Save changes</button>
                            <button type="reset" class="btn">Cancel</button>
                        </div>
                    </fieldset>
                </form>

            </div>
        </div><!--/span-->

    </div><!--/row-->


</div><!--/.fluid-container-->

<!-- end: Content -->
