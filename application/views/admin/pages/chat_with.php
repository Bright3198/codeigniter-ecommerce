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
            <a href="#">Chat</a>
            <i class="icon-angle-right"></i> 
        </li>
        <li>
            <i class="icon-edit"></i>
            <a href="#">Chat with</a>
        </li>
    </ul>

    <div class="row-fluid sortable">
        <div class="box span12">
            <div class="box-header" data-original-title>
                <h2><i class="halflings-icon edit"></i><span class="break"></span>CHAT</h2>
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

                <?php $user_id = $this->session->userdata('user_id'); 
                if ($user_id){
                ?>
                    <label>messages</label>
                    <a href="#">see older</a>

                    <ul>
                        <!--loop-->
                        <?php foreach($messages as $message){?>
                        <li>
                            <?php
                                if ($message['sender'] === $user_id){
                            ?>
                                    <!--THIS IS A MESSAGE FROM ME -->
                                    <div>
                                        <h4>ME( <?php echo "ID:" . $user_id . ":"?> ):</h4>
                                        <h5><?php echo "Message: " . $message['message']?></h5>
                                    </div>
                            <?php      
                                } else {
                            ?>  
                                    <!--THIS IS A MESSAGE FROM THE OTHER PERSON-->
                                    <div>
                                        <h4>CUSTOMER( <?php echo "ID:" . $customer_id . ":"?> ):</h4>
                                        <h5><?php echo "Message: " . $message['message']?></h5>
                                    </div>
                            <?php   
                                }
                            ?>
                        </li>
                        <?php 
                        }
                        ?>
                    </ul>

                    <div> 
                        <form action="<?php echo base_url('chat/with/' . $customer_id)?>" method="post">
                            <input name="message" type="text" placeholder="enter your message here"/>    
                            <button class="grey">SEND</button>
                        </form>
                    </div>

                <?php
                } else {
                ?>
                    <h3>Log in first </h3>
                <?php
                }?>

             </div>
        </div><!--/span-->

    </div><!--/row-->

    
    
</div><!--/.fluid-container-->

<!-- end: Content -->