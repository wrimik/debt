<form-screen ui="ui"
             step="4"
             title="Income Type?"
             subtitle="You Are Getting Closer To Submitting Your Application.">
    <fieldset ng-form="form4">

        <div class="form-group">
            <select id="income_type"
                    name="income_type"
                    ng-model="income_type"
                    ng-change="ui.next()"
                    class="input-lg form-control "
                    required="required">
                <option value="">--Select--</option>
                <option value="employed">Employed</option>
                <option value="retired">Retired</option>
                <option value="self_employed">Self-Employed</option>
            </select>
            <div ng-show="(
                    form.form4.$submitted ||
                    form.form4.income_type.$touched) &&
                    form.form4.income_type.$invalid
                " class="input-error"> This field is required.
            </div>
        </div>
    </fieldset>
</form-screen>