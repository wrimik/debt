<form-screen ui="ui"
             step="1"
             title="How Much Do You Need?"
             subtitle="You're Just a Few Clicks Away - Request $1,000 or MORE!">
    <fieldset ng-form="form1">
        <div class="form-group">
            <div class="input-group">
                <div class="input-group-addon">$</div>
                <select id="loan_amount"
                        name="loan_amount"
                        ng-model="loan_amount"
                        ng-change="ui.next()"
                        class="input-lg form-control"
                        required="required">
                    <option value="">--Select--</option>
                    <option value="0_5000">$0- $5,000</option>
                    <option value="5000_10000">$5,000 - $10,000</option>
                    <option value="10000_15000">$10,000 - $15,000</option>
                    <option value="15000_20000">$15,000 - $20,000</option>
                    <option value="20000_30000">$20,000 - $30,000</option>
                    <option value="30000_50000">$30,000 - $50,000</option>
                    <option value="50000_100000">$50,000 - $100,000</option>
                    <option value="100000_plus">$100,000+</option>
                </select>
            </div>
            <div ng-show="(
                    form.form1.$submitted ||
                    form.form1.loan_amount.$touched) &&
                    form.form1.loan_amount.$invalid
                " class="input-error"> This field is required.
            </div>
        </div>
    </fieldset>
</form-screen>
