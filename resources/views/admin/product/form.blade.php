<div class="form-group {{ $errors->has('productID') ? 'has-error' : ''}}">
    <label for="productID" class="control-label">{{ 'Productid' }}</label>
    <input class="form-control" name="productID" type="number" id="productID" value="{{ isset($product->productID) ? $product->productID : ''}}" >
    {!! $errors->first('productID', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('productName') ? 'has-error' : ''}}">
    <label for="productName" class="control-label">{{ 'Productname' }}</label>
    <input class="form-control" name="productName" type="text" id="productName" value="{{ isset($product->productName) ? $product->productName : ''}}" >
    {!! $errors->first('productName', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('price') ? 'has-error' : ''}}">
    <label for="price" class="control-label">{{ 'Price' }}</label>
    <input class="form-control" name="price" type="number" id="price" value="{{ isset($product->price) ? $product->price : ''}}" >
    {!! $errors->first('price', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('quantity') ? 'has-error' : ''}}">
    <label for="quantity" class="control-label">{{ 'Quantity' }}</label>
    <input class="form-control" name="quantity" type="number" id="quantity" value="{{ isset($product->quantity) ? $product->quantity : ''}}" >
    {!! $errors->first('quantity', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('imageFileName') ? 'has-error' : ''}}">
    <label for="imageFileName" class="control-label">{{ 'Imagefilename' }}</label>
    <input class="form-control" name="imageFileName" type="file" id="imageFileName" value="{{ isset($product->imageFileName) ? $product->imageFileName : ''}}" >
    {!! $errors->first('imageFileName', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
