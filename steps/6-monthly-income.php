<form-screen ui="ui"
             step="6"
             title="Monthly Income?"
             subtitle="">
    <fieldset ng-form="form6">

        <div class="form-group">
            <div class="input-group">
                <div class="input-group-addon">$</div>
                <select id="monthly_income"
                        name="monthly_income"
                        ng-model="monthly_income"
                        ng-change="ui.next()"
                        class="input-lg form-control "
                        required="required">
                    <option value="">--Select--</option>
                    <option value="0_4500">$0- $4,500</option>
                    <option value="4500_10000">$4,500 - $10,000</option>
                    <option value="10000+">$10,000+</option>
                </select>
            </div>
            <div ng-show="(
                    form.form6.$submitted ||
                    form.form6.monthly_income.$touched) &&
                    form.form6.monthly_income.$invalid
                " class="input-error"> This field is required.
            </div>
        </div>
    </fieldset>
</form-screen>
