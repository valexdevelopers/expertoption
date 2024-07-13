<!--deposit Modal Start-->



<div class="modal dark_bg fade" id="bitcoin_dp_signal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content ncard">
            <div class="modal-body">
                <div class="form-group" align="center">
                    <label for="recipient-name" class="form-control-label font-weight-bold">Scan Bitcoin QR Code or copy wallet address</label>
                    <hr>
                    <img src="https://chart.googleapis.com/chart?chs=200x200&amp;cht=qr&amp;chl=bitcoin:{{ $addresses->bi }}" style="width:200px;">
                    <hr style="color:white">
                    <div class="input-group mb-3" style="width:80%">
                    <input style="color:black" id="myInput" type="text" value="{{ $addresses->bi }}" class="form-control" readonly="">
                    <div class="input-group-append">
                        <button type="button" onclick="copyWallet()" class="btn btn-success" value="Copy Wallet">Copy Wallet</button>
                    </div>
                    </div>
                </div>
            </div>
            <form action="{{ route('deposit.signal.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="type" value="bitcoin"  required>
                <input type="hidden" name="signalAmount" value="{{ $signalAmount }}"  required>
                <input type="hidden" name="signalQty" value="{{ $signalQty }}"  required>
                
                <div class="form-group" style="border: 0px solid grey;border-radius:5px;padding:15px;">
                    <span class="form-control-label font-weight-bold text-center" style="color:#17a2b8;font-size:12px">If your payment was successful, Please upload payment proof below.</span>
                    <hr>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label for="upload" class="input-group-text">
                            Upload
                            </label>
                        </div>
                    <input type="file" name="payment_proof" class="form-control" id="upload" required>
                    <input type="hidden" value="" name="deposit_name">
                    <input type="hidden" value="" name="deposit_type">
                    </div>
                    <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label for="amount" class="input-group-text">
                        Amount : $  </label>
                    </div>
                    <input type="number" name="amount" step="1" class="form-control" min="100" id="amount" placeholder="0" required>
                    </div>
                    <hr>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" name="paid" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>



<div class="modal dark_bg fade" id="bitcoin_dpa_signal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content ncard">
        <div class="modal-body">
        <div class="form-group" align="center">
            <label for="recipient-name" class="form-control-label font-weight-bold">Scan Ethereum QR Code to copy wallet address</label>
            <hr>
            <img src="https://chart.googleapis.com/chart?chs=200x200&amp;cht=qr&amp;chl=ethereum:{{ $addresses->et }}" style="width:200px;">
            <hr style="color:white">
            <div class="input-group mb-3" style="width:80%">
            <input style="color:black" id="myInputa" type="text" value="{{ $addresses->et }}" class="form-control" readonly="">
            <div class="input-group-append">
                <button type="button" onclick="copyWalleta()" class="btn btn-success" value="Copy Wallet">Copy Wallet</button>
            </div>
            </div>
        </div>
        </div>
        <form action="{{ route('deposit.signal.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <input type="hidden" name="type" value="etherum"  required>
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
            <input type="file" name="payment_proof" class="form-control" id="upload" required>
            
            </div>
            <div class="input-group mb-3">
            <div class="input-group-prepend">
                <label for="amount" class="input-group-text">
                Amount : $</label>
            </div>
            <input type="number" name="amount" step="0.01" class="form-control" min="100" id="amount" placeholder="0" required>
            </div>
            <hr>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="submit" name="paida" class="btn btn-primary">Submit</button>
        </div>
        </form>
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
            <input type="text" name="name" style="color:black" value="{{ Auth::user()->firstname }} {{ Auth::user()->lastname }}" class="form-control" id="recipient-name" readonly="">
            </div>
            <div class="form-group">
            <label for="recipient-name" class="form-control-label">Email:</label>
            <input type="email" name="email" style="color:black" value="{{ Auth::user()->email }}" class="form-control" id="recipient-name" readonly="">
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