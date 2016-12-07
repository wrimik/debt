<form-screen ui="ui"
             step="3"
             title="Credit Rating?"
             subtitle="All Credit Types Are Welcome.">
    <div class="form-group">
        <select id="credit_rating" name="credit_rating" class="input-lg form-control " required="required">
            <option value="">--Select--</option>
            <option value="excellent">Excellent (720+)</option>
            <option value="good">Good (680-720)</option>
            <option value="fair">Fair (640-680)</option>
            <option value="poor">Poor (Below 640)</option>
        </select>
        <span for="credit_rating" class="">This field is required.</span>
    </div>
</form-screen>