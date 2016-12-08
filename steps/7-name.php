<form-screen ui="ui"
             step="7"
             title="Your Name?"
             subtitle="Entering Your Full Legal Name May Increase Your Chances of Approval.">
    <fieldset ng-form="form7">
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <input id="first_name"
                           name="first_name"
                           ng-model="first_name"
                           required="required"
                           type="text" class="form-control input-lg"
                           placeholder="First Name">
                    <div ng-show="(
                            form.form7.$submitted ||
                            form.form7.first_name.$touched) &&
                            form.form7.first_name.$invalid
                        " class="input-error"> This field is required.
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <input id="last_name"
                           name="last_name"
                           ng-model="last_name"
                           required="required"
                           type="text" class="form-control input-lg"
                           placeholder="Last Name">
                    <div ng-show="(
                            form.form7.$submitted ||
                            form.form7.last_name.$touched) &&
                            form.form7.last_name.$invalid
                        " class="input-error"> This field is required.
                    </div>
                </div>
            </div>
        </div>
    </fieldset>
</form-screen>
