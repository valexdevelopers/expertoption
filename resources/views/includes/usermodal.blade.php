<!-- Modal Start-->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">×</span> </button>
        </div>
        <div class="modal-body"> ... </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
        </div>
    </div>
    </div>
</div>


<div class="modal dark_bg fade" id="bitcoin_dp" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content ncard">
            <div class="modal-body">
                <div class="form-group" align="center">
                    <label for="recipient-name" class="form-control-label font-weight-bold">Scan Bitcoin QR Code or copy wallet address</label>
                    <hr>
                    <img src="https://chart.googleapis.com/chart?chs=200x200&amp;cht=qr&amp;chl=bitcoin:bc1qzjufwd87j9menl7szetuue5lhlx75th5kx8yaz" style="width:200px;">
                    <hr style="color:white">
                    <div class="input-group mb-3" style="width:80%">
                    <input style="color:black" id="myInput" type="text" value="bc1qzjufwd87j9menl7szetuue5lhlx75th5kx8yaz" class="form-control" readonly="">
                    <div class="input-group-append">
                        <button type="button" onclick="copyWallet()" class="btn btn-success" value="Copy Wallet">Copy Wallet</button>
                    </div>
                    </div>
                </div>
            </div>
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="form-group" style="border: 0px solid grey;border-radius:5px;padding:15px;">
                    <span class="form-control-label font-weight-bold text-center" style="color:#17a2b8;font-size:12px">If your payment was successful, Please upload payment proof below.</span>
                    <hr>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label for="upload" class="input-group-text">
                            Upload
                            </label>
                        </div>
                    <input type="file" name="payment_proof" class="form-control" id="upload" required="">
                    <input type="hidden" value="" name="deposit_name">
                    <input type="hidden" value="" name="deposit_type">
                    </div>
                    <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label for="amount" class="input-group-text">
                        Amount : $              </label>
                    </div>
                    <input type="number" name="amount" step="0.01" class="form-control" min="100" id="amount" placeholder="0" required="">
                    </div>
                    <hr>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" name="paid" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>



<div class="modal dark_bg fade" id="bitcoin_dpa" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content ncard">
        <div class="modal-body">
        <div class="form-group" align="center">
            <label for="recipient-name" class="form-control-label font-weight-bold">Scan Ethereum QR Code to copy wallet address</label>
            <hr>
            <img src="https://chart.googleapis.com/chart?chs=200x200&amp;cht=qr&amp;chl=ethereum:0xE27988610093A7Fa3fE94074390e9faB273EFb3d" style="width:200px;">
            <hr style="color:white">
            <div class="input-group mb-3" style="width:80%">
            <input style="color:black" id="myInputa" type="text" value="0xE27988610093A7Fa3fE94074390e9faB273EFb3d" class="form-control" readonly="">
            <div class="input-group-append">
                <button type="button" onclick="copyWalleta()" class="btn btn-success" value="Copy Wallet">Copy Wallet</button>
            </div>
            </div>
        </div>
        </div>
        <form action="" method="POST" enctype="multipart/form-data">
        <div class="form-group" style="border: 0px solid grey;border-radius:5px;padding:15px;">
            <span class="form-control-label font-weight-bold text-center" style="color:#17a2b8;font-size:12px">
            If your payment was successful, Please upload payment proof below.
            </span>
            <hr>
            <div class="input-group mb-3">
            <div class="input-group-prepend">
                <label for="upload" class="input-group-text">
                Upload
                </label>
            </div>
            <input type="file" name="file" class="form-control" id="upload" required="">
            <input type="hidden" value="" name="deposit_name">
            <input type="hidden" value="" name="deposit_type">
            </div>
            <div class="input-group mb-3">
            <div class="input-group-prepend">
                <label for="amount" class="input-group-text">
                Amount : $              </label>
            </div>
            <input type="number" name="amount" step="0.01" class="form-control" min="100" id="amount" placeholder="0" required="">
            </div>
            <hr>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="submit" name="paida" class="btn btn-primary">Submit</button>
        </div>
        </form>
    </div>
    </div>
</div>




<div class="modal dark_bg fade" id="mail_support" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog col-lg-6 col-sm-4" role="document">
    <div class="modal-content ncard">
        <div class="modal-body">
        <form method="POST" action="mail.php">
            <!-- <div class="form-group"> -->
            <!-- <label for="recipient-name" class="form-control-label">From:</label> -->
            <input type="hidden" style="color:black" name="to_email" value="BoomMarketing24 Option Trade Support" class="form-control" id="recipient-name" required="">
            <input type="hidden" style="color:black" name="email" value="malvernmia@gmail.com" class="form-control" id="recipient-name" readonly="">
            <input type="hidden" style="color:black" name="name" value="Mia Malvern" class="form-control" id="recipient-name" readonly="">
            <!-- </div> -->
            <div class="form-group">
            <label for="recipient-name" class="form-control-label">Subject:</label>
            <input type="text" name="subject" class="form-control" placeholder="Complain" id="recipient-name" required="">
            </div>
            <div class="form-group">
            <label for="message-text" class="form-control-label">Message:</label>
            <textarea name="message" class="form-control" rows="10" id="message-text" placeholder="Click here to Compose message" required=""></textarea>
            </div>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="submit" name="contact" class="btn btn-primary">Send message</button>
        </form>
        </div>
        <!-- <div class="modal-footer">
        </div> -->
    </div>
    </div>
</div>

<div class="modal dark_bg fade" id="order_deposit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-body">
        <form method="POST" action="">
            <div class="form-group">
            <label for="recipient-name" class="form-control-label">Full Name:</label>
            <input type="text" name="name" style="color:black" value="Mia Malvern" class="form-control" id="recipient-name" readonly="">
            </div>
            <div class="form-group">
            <label for="recipient-name" class="form-control-label">Email:</label>
            <input type="email" name="email" style="color:black" value="malvernmia@gmail.com" class="form-control" id="recipient-name" readonly="">
            </div>
            <div class="form-group">
            <label for="recipient-name" class="form-control-label">Account Type:</label>
            <select name="type" style="border:1px solid grey" class="form-control" id="recipient-name" required="">
                <option value="" selected="" disabled="">Deposit Type</option>
                <!-- <option value="Ethereum">Ethereum</option> -->
                <option value="Litecoin">Litecoin</option>
                <option value="Usdt">Usdt</option>
                <option value="Bitcoin Cash">Bitcoin Cash</option>
            </select>
            </div>
            <div class="form-group">
            <label for="recipient-name" class="form-control-label">Amount</label>
            <input type="number" step="0.01" name="amount" class="form-control" id="recipient-name" required="">
            <input type="hidden" value="" name="deposit_name">
            <input type="hidden" value="" name="deposit_type">
            </div>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="submit" name="request_deposit" class="btn btn-primary">Request</button>
        </form>
        </div>
        <!-- <div class="modal-footer">
        </div> -->
    </div>
    </div>
</div>
<!-- Modal Close -->