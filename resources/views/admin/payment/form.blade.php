<div class="form-group {{ $errors->has('paymentID') ? 'has-error' : ''}}">
    <label for="paymentID" class="control-label">{{ 'Paymentid' }}</label>
    <input class="form-control" name="paymentID" type="number" id="paymentID" value="{{ isset($payment->paymentID) ? $payment->paymentID : ''}}" >
    {!! $errors->first('paymentID', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('orderID') ? 'has-error' : ''}}">
    <label for="orderID" class="control-label">{{ 'Orderid' }}</label>
    <input class="form-control" name="orderID" type="number" id="orderID" value="{{ isset($payment->orderID) ? $payment->orderID : ''}}" >
    {!! $errors->first('orderID', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('price') ? 'has-error' : ''}}">
    <label for="price" class="control-label">{{ 'Price' }}</label>
    <input class="form-control" name="price" type="number" id="price" value="{{ isset($payment->price) ? $payment->price : ''}}" >
    {!! $errors->first('price', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('bank') ? 'has-error' : ''}}">
    <label for="bank" class="control-label">{{ 'Bank' }}</label>
    <input class="form-control" name="bank" type="text" id="bank" value="{{ isset($payment->bank) ? $payment->bank : ''}}" >
    {!! $errors->first('bank', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
