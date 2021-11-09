<div class="form-group {{ $errors->has('basketID') ? 'has-error' : ''}}">
    <label for="basketID" class="control-label">{{ 'Basketid' }}</label>
    <input class="form-control" name="basketID" type="number" id="basketID" value="{{ isset($basket->basketID) ? $basket->basketID : ''}}" >
    {!! $errors->first('basketID', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('basketnum') ? 'has-error' : ''}}">
    <label for="basketnum" class="control-label">{{ 'Basketnum' }}</label>
    <input class="form-control" name="basketnum" type="number" id="basketnum" value="{{ isset($basket->basketnum) ? $basket->basketnum : ''}}" >
    {!! $errors->first('basketnum', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('userID') ? 'has-error' : ''}}">
    <label for="userID" class="control-label">{{ 'Userid' }}</label>
    <input class="form-control" name="userID" type="number" id="userID" value="{{ isset($basket->userID) ? $basket->userID : ''}}" >
    {!! $errors->first('userID', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('productID') ? 'has-error' : ''}}">
    <label for="productID" class="control-label">{{ 'Productid' }}</label>
    <input class="form-control" name="productID" type="number" id="productID" value="{{ isset($basket->productID) ? $basket->productID : ''}}" >
    {!! $errors->first('productID', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
