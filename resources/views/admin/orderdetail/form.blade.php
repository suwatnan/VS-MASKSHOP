<div class="form-group {{ $errors->has('orderdetailID') ? 'has-error' : ''}}">
    <label for="orderdetailID" class="control-label">{{ 'Orderdetailid' }}</label>
    <input class="form-control" name="orderdetailID" type="number" id="orderdetailID" value="{{ isset($orderdetail->orderdetailID) ? $orderdetail->orderdetailID : ''}}" >
    {!! $errors->first('orderdetailID', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('productID') ? 'has-error' : ''}}">
    <label for="productID" class="control-label">{{ 'Productid' }}</label>
    <input class="form-control" name="productID" type="number" id="productID" value="{{ isset($orderdetail->productID) ? $orderdetail->productID : ''}}" >
    {!! $errors->first('productID', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('quantity') ? 'has-error' : ''}}">
    <label for="quantity" class="control-label">{{ 'Quantity' }}</label>
    <input class="form-control" name="quantity" type="number" id="quantity" value="{{ isset($orderdetail->quantity) ? $orderdetail->quantity : ''}}" >
    {!! $errors->first('quantity', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('price') ? 'has-error' : ''}}">
    <label for="price" class="control-label">{{ 'Price' }}</label>
    <input class="form-control" name="price" type="number" id="price" value="{{ isset($orderdetail->price) ? $orderdetail->price : ''}}" >
    {!! $errors->first('price', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('orderID') ? 'has-error' : ''}}">
    <label for="orderID" class="control-label">{{ 'Orderid' }}</label>
    <input class="form-control" name="orderID" type="number" id="orderID" value="{{ isset($orderdetail->orderID) ? $orderdetail->orderID : ''}}" >
    {!! $errors->first('orderID', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
