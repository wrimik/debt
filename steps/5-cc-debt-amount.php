<form-screen ui="ui"
             step="5"
             title="Credit Card Debt Amount? "
             subtitle="">
    <fieldset ng-form="form5">

        <div class="form-group">
            <div class="input-group">
                <div class="input-group-addon">$</div>
                <select id="cc_debt_amount"
                        ng-model="cc_debt_amount"
                        ng-change="ui.next()"
                        name="cc_debt_amount"
                        class="input-lg form-control "
                        required="required">
                    <option value="">--Select--</option>
                    <option value="0_5000">$0 - $5,000</option>
                    <option value="5000_10000">$5,000 - $10,000</option>
                    <option value="10000_15000">$10,000 - $15,000</option>
                    <option value="15000_20000">$15,000 - $20,000</option>
                    <option value="20000_25000">$20,000 - $25,000</option>
                    <option value="25000_plus">$25,000+</option>
                </select>
            </div>
            <div ng-show="(
                    form.form5.$submitted ||
                    form.form5.cc_debt_amount.$touched) &&
                    form.form5.cc_debt_amount.$invalid
                " class="input-error"> This field is required.
            </div>
        </div>
    </fieldset>
</form-screen>
