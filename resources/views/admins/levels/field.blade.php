
                    <div class="form-group row">
                        <label class="col-lg-2 col-form-label" for="lavel_name">{{ __('Level Name') }}<span class="text-danger">*</span></label>
                        <div class="col-lg-4">
                            <input type="text" class="form-control" id="lavel_name" name="lavel_name" placeholder="{{ __('Enter Level Name ...') }}">
                        </div>
                        <label class="col-lg-2 col-form-label" for="lavel_status">{{ __('Level Status') }}<span class="text-danger">*</span></label>
                        <div class="col-lg-4">                           
                            <select class="form-control" id="level_status" name="level_status">
                                <option value="">{{ ('Select') }}</option>
                                <option value="1">{{ ('Active') }}</option>
                                <option value="0">{{ ('Inactive') }}</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-2 col-form-label" for="lavel_description">{{ __('Level Description') }}<span class="text-danger">*</span></label>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" id="lavel_description" name="lavel_description" placeholder="{{ __('Level Description') }}">
                        </div>
                        
                    </div>

                    <div class="form-group row">
                        <div class="col-lg-8 ml-auto">
                            <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
                        </div>
                    </div>
