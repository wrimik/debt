<form-screen ui="ui"
             step="3"
             title="Credit Rating?"
             subtitle="All Credit Types Are Welcome.">
    <fieldset ng-form="form3">

        <div class="form-group">
            <select id="credit_rating"
                    name="credit_rating"
                    ng-model="credit_rating"
                    ng-change="ui.next()"
                    class="input-lg form-control"
                    required="required">
                <option value="">--Select--</option>
                <option value="720_plus">Excellent (720+)</option>
                <option value="680_720">Good (680-720)</option>
                <option value="640_680">Fair (640-680)</option>
                <option value="below_640">Poor (Below 640)</option>
            </select>
            <div ng-show="(
                    form.form3.$submitted ||
                    form.form3.credit_rating.$touched) &&
                    form.form3.credit_rating.$invalid
                " class="input-error"> This field is required.
            </div>
        </div>
    </fieldset>
</form-screen>