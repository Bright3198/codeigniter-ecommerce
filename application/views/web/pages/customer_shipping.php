

<div class="main">
    <div class="content" style="text-align: center">
        <div class="register_account" style="text-align:center;display:inline-block;float: none">
            <h3>Your Shipping Address</h3>
            <style type="text/css">
                #result{color:red;padding: 5px}
                #result p{color:red}
            </style>
            <div id="result">
                <p><?php echo $this->session->flashdata('message'); ?></p>
            </div>
            <form method="post" action="<?php echo base_url('customer/save/shipping/address');?>">
                <table>
                    <tbody>
                        <tr>
                            <td>
                                <div>
                                    <input type="text" name="shipping_name" placeholder="Enter Your Name">
                                </div>


                                <div>
                                    <select id="region" name="shipping_region" class="frm-field required">
                                        <option value="null">Select a Region</option>
                                        <option value="Central Region">Central Region</option>
                                        <option value="Northern Region">Northern Region</option>
                                        <option value="Southern Region">Southern Region</option>
                                    </select>
                                </div>
                                <div>
                                    <input type="text" name="shipping_phone" placeholder="Enter Your Phone">
                                </div>
                            </td>
                            <td>
                                <div>
                                    <input type="text" name="shipping_email" placeholder="Enter Your Email">
                                </div>
                                        

                                <div>
                                    <input type="text" name="shipping_address" placeholder="Enter Your Address">
                                </div>
                                
                                <div>
                                    <select id="district" name="shipping_district" class="frm-field required">
                                        <option value="null">Select a District</option> 
                                        <option value="Balaka">Balaka</option> 
                                        <option value="Blantyre">Blantyre</option> 
                                        <option value="Chikwawa">Chikwawa</option> 
                                        <option value="Chiradzulu">Chiradzulu</option> 
                                        <option value="Chitipa">Chitipa</option>
                                        <option value="Dedza">Dedza</option> 
                                        <option value="Dowa">Dowa</option>
                                        <option value="Karonga">Karonga</option>
                                        <option value="Kasungu">Kasungu</option>
                                        <option value="Likoma">Likoma</option>
                                        <option value="Lilongwe">Lilongwe</option>
                                        <option value="Machinga">Machinga</option>
                                        <option value="Mangochi">Mangochi</option>
                                        <option value="Mchinji">Mchinji</option>
                                        <option value="Mulanje">Mulanje</option>
                                        <option value="Mwanza">Mwanza</option>
                                        <option value="Mzimba">Mzimba</option>
                                        <option value="Mzuzu">Mzuzu</option>
                                        <option value="Nkhata-bay">Nkhata-bay</option>
                                        <option value="Nkhota-kota">Nkhota-kota</option>
                                        <option value="Nsanje">Nsanje</option>
                                        <option value="Ntcheu">Ntcheu</option>
                                        <option value="Ntchisi">Ntchisi</option>
                                        <option value="Phalombe">Phalombe</option>
                                        <option value="Rumphi">Rumphi</option>
                                        <option value="Salima">Salima</option>
                                        <option value="Thyolo">Thyolo</option> 
                                        <option value="Zomba">Zomba</option>
                                    </select>
                                </div>		

                                
                            </td>
                        </tr> 
                    </tbody></table> 
                <div class="search"><div><button class="grey">Create Account</button></div></div>
                <p class="terms">By clicking 'Create Account' you agree to the <a href="#">Terms &amp; Conditions</a>.</p>
                <div class="clear"></div>
            </form>
        </div>  	
        <div class="clear"></div>
    </div>
</div>