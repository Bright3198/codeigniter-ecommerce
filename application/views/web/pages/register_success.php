

<div class="main">
    <div class="content" style="text-align: center">
        <div class="register_account" style="text-align:center;display:inline-block;float: none">
            <h3>Welcome To <?php echo $this->session->flashdata('customer_name'); ?></h3>

            <p>Hi <?php echo $this->session->flashdata('customer_name'); ?>, You Successfully Registered
                Please Go to Your Email <a href="mailto:<?php echo $this->session->flashdata('customer_email'); ?>"><b><?php echo $this->session->flashdata('customer_email'); ?></b></a>
                And Activate Your Account . Thank You Stay With Us.
            </p>



        </div>
        <div class="clear"></div>
    </div>
</div>
