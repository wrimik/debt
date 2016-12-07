<form-screen ui="ui"
             step="8"
             title="Contact Info?"
             subtitle="Why do we require this? Some lenders will quickly confirm your application by phone.">
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <input id="phone"
                       name="phone"
                       required="required"
                       type="text" class="form-control input-lg"
                       placeholder="Phone">
                <span for="phone" class="">This field is required.</span>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <input id="email"
                       name="email"
                       required="required"
                       type="text" class="form-control input-lg"
                       placeholder="Email">
                <span for="email" class="">This field is required.</span>
            </div>
        </div>
    </div>
</form-screen>