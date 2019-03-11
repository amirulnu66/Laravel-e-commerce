@extends('backend.layouts.master')
@section('style')

@stop
@section('content')
    <div class="flex-row">
        <a class="card-link"><span class="fa fa-dashboard"></span> Dashboard</a> &nbsp; /
        <a class="card-link"><span class="fa fa-trademark"></span> Medicine </a>
        <a class="card-link"><span class="fa fa-hand-o-right text-success"></span> Total of
            <b class="msg_num">0</b> Medicine</a>
        <a href="{{url('/pharmacy/products/add_new_porduct')}}" class="btn btn-info pull-right waves-effect waves-light">
            <span class="fa fa-plus-circle add_brand"> Add Medicine</span></a>

    </div>
    <div class="row">
        <div class="col-md-10 ">
            <h1>Manage Medicine</h1>
        </div>
    </div>
    <div class="row mb-5">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12 pb-5">
                            <table id="datatable-1" class="table table-datatable table-hover table-responsive">
                                <thead class="thead-default">
                                <tr role="row">
                                    <th>No:</th>
                                    <th>Product Name</th>
                                    <th>Description</th>
                                    <th>Qty</th>
                                    <th>Price</th>
                                    <th>Office Price</th>
                                    <th>Image</th>
                                    <th>Control</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($prodictsList as $prodict)
                                    <tr>
                                        <td>01</td>
                                        <td>{{$prodict->title}}</td>
                                        <td>{{$prodict->description}}</td>
                                        <td>{{$prodict->quentity}}</td>
                                        <td>{{$prodict->price}}</td>
                                        <td>{{$prodict->offer_price}}</td>
                                        <td>
                                            @foreach($prodict->images as $image)
                                                <img src="{{url('assetes/images/products/'.$image->image)}}" alt="image" width="45" height="45">
                                            @endforeach
                                        </td>
                                        <td>
                                            <span data-toggle="modal">
                                              <a href="#" class="fa fa-trash pointer text-danger delete_record"></a></span>  &nbsp; | &nbsp;
                                            <span><a href="#" class="fa fa-edit pointer text-warning edit_record"></a></span>
                                        </td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

@section('script')
    <!-- Datatables -->
    <script type="text/javascript" src="{{URL::to('/assets/plugins/datatables/js/jquery.dataTables.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::to('/assets/plugins/datatables/js/dataTables.bootstrap4.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::to('/assets/plugins/datatables/js/dataTables.responsive.min.js')}}"></script>

@stop
