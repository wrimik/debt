<form-screen ui="ui"
             step="2"
             title="Purpose of Loan?"
             subtitle="Money Can Be Used For Anything.">
    <fieldset ng-form="form2">
        <div class="form-group">
            <select id="purpose"
                    name="purpose"
                    ng-model="purpose"
                    ng-change="ui.next()"
                    class="input-lg form-control"
                    required="required">
                <option value="">--Select--</option>
                <option value="auto">Auto</option>
                <option value="baby_adoption">Baby Adoption</option>
                <option value="credit_card">Credit Card</option>
                <option value="debt_consolidation">Debt Consolidation</option>
                <option value="major_purchase">Major Purchase</option>
                <option value="medical">Medical</option>
                <option value="moving">Moving</option>
                <option value="renewable_energy">Renewable Energy</option>
                <option value="small_business">Small Business</option>
                <option value="vacation">Vacation</option>
                <option value="wedding">Wedding</option>
                <option value="other">Other</option>
            </select>
            <div ng-show="(
                    form.form2.$submitted ||
                    form.form2.purpose.$touched) &&
                    form.form2.purpose.$invalid
                " class="input-error"> This field is required.
            </div>
        </div>
    </fieldset>
</form-screen>
