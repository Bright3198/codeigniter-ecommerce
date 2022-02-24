

<div class="main">
    <div class="content" style="text-align: center">
        <div class="register_account" style="text-align:center;display:inline-block;float: none">
            <h3>Welcome To Nsikawanga</h3>
            
            <p>Hi <?php echo $this->session->flashdata('customer_name'); ?>, You have Successfully Registered on Our Site
                Please check Your Email <a href="mailto:<?php echo $this->session->flashdata('customer_email'); ?>"><b><?php echo $this->session->flashdata('customer_email'); ?></b></a>
                And Activate Your Account . Shop With Us.
            </p>
            
            
            
        </div>  	
        <div class="clear"></div>
    </div>
</div>