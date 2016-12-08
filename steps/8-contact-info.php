<form-screen ui="ui"
             step="8"
             title="Contact Info?"
             subtitle="Why do we require this? Some lenders will quickly confirm your application by phone.">
    <fieldset ng-form="form8">
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <input id="phone"
                           name="phone"
                           ng-model="phone"
                           required="required"
                           type="text" class="form-control input-lg"
                           placeholder="Phone">
                    <div ng-show="(
                            form.form8.$submitted ||
                            form.form8.phone.$touched) &&
                            form.form8.phone.$invalid
                        " class="input-error"> This field is required.
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <input id="email"
                           name="email"
                           ng-model="email"
                           required="required"
                           type="text" class="form-control input-lg"
                           placeholder="Email">
                    <div ng-show="(
                            form.form8.$submitted ||
                            form.form8.email.$touched) &&
                            form.form8.email.$invalid
                        " class="input-error"> This field is required.
                    </div>
                </div>
            </div>
        </div>
    </fieldset>
</form-screen>