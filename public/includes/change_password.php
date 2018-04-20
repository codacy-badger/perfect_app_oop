<div class="col-md-6 offset-md-3">
    <span class="anchor" id="formChangePassword"></span>
    <hr class="mb-5">

    <!-- form card change password -->
    <div class="card card-outline-secondary">
        <div class="card-header bg-primary text-white">
            <h3 class="mb-0">Change Password</h3>
        </div>
        <div class="card-body">
            <form class="form" role="form" autocomplete="off">
                <div class="form-group">
                    <label for="inputPasswordOld">Current Password</label>
                    <input type="password" class="form-control" id="inputPasswordOld" required="">
                </div>
                <div class="form-group">
                    <label for="inputPasswordNew">New Password</label>
                    <input type="password" class="form-control" id="inputPasswordNew" required="">
                    <span class="form-text small text-muted">The password must be 8-20 characters, and must <em>not</em> contain spaces.</span>
                </div>
                <div class="form-group">
                    <label for="inputPasswordNewVerify">Verify</label>
                    <input type="password" class="form-control" id="inputPasswordNewVerify" required="">
                    <span class="form-text small text-muted">To confirm, type the new password again.</span>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-md float-right">Save</button>
                </div>
            </form>
        </div>
    </div>
    <!-- /form card change password -->

</div>