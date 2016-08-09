<!-- form security -->
<form class="panel form-horizontal form-bordered" name="form-security">
    <div class="panel-body pt0 pb0">
        <div class="form-group header bgcolor-default">
            <div class="col-md-12">
                <h4 class="semibold text-primary mt0 mb5">Security</h4>
                <p class="text-default nm">Change your security settings.</p>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">Login verification</label>
            <div class="col-sm-9">
                <div class="row">
                    <div class="col-sm-12">
                        <span class="radio custom-radio">
                            <input type="radio" name="loginverification" id="loginverification1">
                            <label for="loginverification1">&nbsp;&nbsp;Send login verification requests to my phone</label>
                        </span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <span class="radio custom-radio">
                            <input type="radio" name="loginverification" id="loginverification2">
                            <label for="loginverification2">&nbsp;&nbsp;Send login verification requests to my phone</label>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">Password reset</label>
            <div class="col-sm-9">
                <span class="checkbox custom-checkbox">
                    <input type="checkbox" name="passwordreset" id="passwordreset">
                    <label for="passwordreset">&nbsp;&nbsp;Require personal information to reset my password</label>
                </span>
                <p class="help-block">By default, you can initiate a password reset by entering only your @username. If you check this box, you will be prompted to enter your email address or phone number if you forget your password.</p>
            </div>
        </div>
        <div class="form-group header bgcolor-default">
            <div class="col-md-12">
                <h4 class="semibold text-primary mt0 mb5">Privacy</h4>
                <p class="text-default nm">Change your privacy settings.</p>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">Photo tagging</label>
            <div class="col-sm-9">
                <div class="row">
                    <div class="col-sm-12">
                        <span class="radio custom-radio">
                            <input type="radio" name="phototagging" id="phototagging1">
                            <label for="phototagging1">&nbsp;&nbsp;Allow anyone to tag me in photos</label>
                        </span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <span class="radio custom-radio">
                            <input type="radio" name="phototagging" id="phototagging2">
                            <label for="phototagging2">&nbsp;&nbsp;Only allow people I follow to tag me in photos</label>
                        </span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <span class="radio custom-radio">
                            <input type="radio" name="phototagging" id="phototagging3">
                            <label for="phototagging3">&nbsp;&nbsp;Do not allow anyone to tag me in photos</label>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">Discoverability</label>
            <div class="col-sm-9">
                <span class="checkbox custom-checkbox">
                    <input type="checkbox" name="discoverability" id="discoverability">
                    <label for="discoverability">&nbsp;&nbsp;Let others find me by my email address</label>
                </span>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">Personalization</label>
            <div class="col-sm-9">
                <span class="checkbox custom-checkbox">
                    <input type="checkbox" name="personalization" id="personalization">
                    <label for="personalization">&nbsp;&nbsp;Tailor content based on my recent website visits</label>
                </span>
                <p class="help-block"><a href="javascript:void(0);">Learn more</a> about how this works and your additional privacy controls.</p>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">Promoted content</label>
            <div class="col-sm-9">
                <span class="checkbox custom-checkbox">
                    <input type="checkbox" name="ads" id="ads">
                    <label for="ads">&nbsp;&nbsp;Tailor ads based on information shared by ad partners.</label>
                </span>
                <p class="help-block"><a href="javascript:void(0);">Learn more</a> about how this works and your additional privacy controls.</p>
            </div>
        </div>
    </div>
    <div class="panel-footer">
        @include('common.form_buttons')
    </div>
</form>