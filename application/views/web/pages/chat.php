

<div class="main">
    <div class="content">
        <div class="section group">
            <h2 style="text-align:center;"> This is a chat view </h2>
            <h3>
                <?php
                    $customer_id = $this->session->userdata('customer_id');
                    
                    if ($customer_id) {
                        echo "chatting with " . $customer_id;
                    ?>

                    <div>
                        <label>messages</label>
                        <a href="#">see older</a>

                        <div>
                            <ul>

                                <!--loop-->
                                <?php foreach($messages as $message){?>
                                    <li>
                                        <?php
                                            if ($message['sender'] === $customer_id){
                                        ?>
                                                <!--THIS IS A MESSAGE FROM ME -->
                                                <div>
                                                    <h4>ME( <?php echo "ID:" . $customer_id . ":"?> ):</h4>
                                                    <h5><?php echo "Message: " . $message['message']?></h5>
                                                </div>
                                        <?php      
                                            } else {
                                        ?>  
                                                <!--THIS IS A MESSAGE FROM THE OTHER PERSON-->
                                                <div>
                                                    <h4>SELLER( <?php echo "ID:" . $product_author . ":"?> ):</h4>
                                                    <h5><?php echo "Message: " . $message['message']?></h5>
                                                </div>
                                        <?php   
                                            }
                                        ?>
                                    </li>
                                <?php }?>
                            </ul>
                        </div>

                        <div> 
                            <form action="<?php echo base_url('chat/' . $product_author)?>" method="post">
                                <input name="message" type="text" placeholder="enter your message here"/>    
                                <button class="grey">SEND</button>
                            </form>
                        </div>
                    </div>
                                            
                    <?php

                    } else {
                        echo "Log in first";
                    }
                ?>
            </h3>            
        </div>
    </div>
</div>
