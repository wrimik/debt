<form-screen ui="ui"
             step="6"
             title="Monthly Income?"
             subtitle="">
    <div class="form-group">
        <div class="input-group">
            <div class="input-group-addon">$</div>
            <select id="monthly_income" name="monthly_income" class="input-lg form-control " required="required">
                <option value="">--Select--</option>
                <option value="0_4500">$0- $4,500</option>
                <option value="4500_10000">$4,500 - $10,000</option>
                <option value="10000+">$10,000+</option>
            </select>
        </div>
        <span for="monthly_income" class="">This field is required.</span>
    </div>
</form-screen>
