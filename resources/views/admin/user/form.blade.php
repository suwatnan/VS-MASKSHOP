<?php $parts = DB::connection('mysql')->select('select * from user_type');?>
<div class="form-group {{ $errors->has('userID') ? 'has-error' : ''}}">
    <label for="userID" class="control-label">{{ 'Userid' }}</label>
    <input class="form-control" name="userID" type="number" id="userID" value="{{ isset($user->userID) ? $user->userID : ''}}" >
    {!! $errors->first('userID', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('firstname') ? 'has-error' : ''}}">
    <label for="firstname" class="control-label">{{ 'Firstname' }}</label>
    <input class="form-control" name="firstname" type="text" id="firstname" value="{{ isset($user->firstname) ? $user->firstname : ''}}" >
    {!! $errors->first('firstname', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('lastname') ? 'has-error' : ''}}">
    <label for="lastname" class="control-label">{{ 'Lastname' }}</label>
    <input class="form-control" name="lastname" type="text" id="lastname" value="{{ isset($user->lastname) ? $user->lastname : ''}}" >
    {!! $errors->first('lastname', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('username') ? 'has-error' : ''}}">
    <label for="username" class="control-label">{{ 'Username' }}</label>
    <input class="form-control" name="username" type="text" id="username" value="{{ isset($user->username) ? $user->username : ''}}" >
    {!! $errors->first('username', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('usertypeID') ? 'has-error' : ''}}">
   <label for="usertypeID" class="control-label">{{ 'userstypeID' }}</label>
   <select class="form-control" name="usertypeID" id="usertypeID">
           <option value="{{ isset($user->usertypeID) ? $user->usertypeID : ''}}">{{ isset($user->usertypeID) ? $user->usertypeID : ''}}</option>
           @foreach($parts as $row)
           	<option value="{{$row->usertypeID}}">{{$row->usertypeID}}</option>
           @endforeach    
   </select>
   {!! $errors->first('userstypeID', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
