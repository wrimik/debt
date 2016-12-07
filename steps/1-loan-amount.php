<form-screen ui="ui"
             step="1"
             title="How Much Do You Need?"
             subtitle="You're Just a Few Clicks Away - Request $1,000 or MORE!">
    <div class="form-group">
        <div class="input-group">
            <div class="input-group-addon">$</div>
            <select id="loan_amount" name="loan_amount" class="input-lg form-control" required="required">
                <option value="">--Select--</option>
                <option value="0_5000">$0- $5,000</option>
                <option value="5000_10000">$5,000 - $10,000</option>
                <option value="10000_15000">$10,000 - $15,000</option>
                <option value="15000_20000">$15,000 - $20,000</option>
                <option value="20000_30000">$20,000 - $30,000</option>
                <option value="30000_50000">$30,000 - $50,000</option>
                <option value="50000_100000">$50,000 - $100,000</option>
                <option value="100000+">$100,000+</option>
            </select>
        </div>
        <span for="loan_amount" class="">This field is required.</span>
    </div>
</form-screen>
