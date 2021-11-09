@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Orderdetail {{ $orderdetail->orderdetailID }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/orderdetail') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/orderdetail/' . $orderdetail->orderdetailID . '/edit') }}" title="Edit Orderdetail"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('admin/orderdetail' . '/' . $orderdetail->orderdetailID) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Orderdetail" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $orderdetail->orderdetailID }}</td>
                                    </tr>
                                    <tr><th> OrderdetailID </th><td> {{ $orderdetail->orderdetailID }} </td></tr><tr><th> ProductID </th><td> {{ $orderdetail->productID }} </td></tr><tr><th> Quantity </th><td> {{ $orderdetail->quantity }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
