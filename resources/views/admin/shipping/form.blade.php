<div class="form-group {{ $errors->has('shippingID') ? 'has-error' : ''}}">
    <label for="shippingID" class="control-label">{{ 'Shippingid' }}</label>
    <input class="form-control" name="shippingID" type="number" id="shippingID" value="{{ isset($shipping->shippingID) ? $shipping->shippingID : ''}}" >
    {!! $errors->first('shippingID', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('orderID') ? 'has-error' : ''}}">
    <label for="orderID" class="control-label">{{ 'Orderid' }}</label>
    <input class="form-control" name="orderID" type="number" id="orderID" value="{{ isset($shipping->orderID) ? $shipping->orderID : ''}}" >
    {!! $errors->first('orderID', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
