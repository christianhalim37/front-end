@extends('layoutvendor.vendorapp')

@section('content')
<div id="page-content-wrapper">
    <div class="container-fluid">
    @csrf
        <div class="container-xl">
            <div class="table-responsive">
                <div class="table-wrapper">
                    <div class="table-title">
                        <div class="row">
                            <div class="col-sm-4"><h2><b>Paket</b> Vendor</h2></div>
                            <div class="col-sm-4">
                                <a href="{{ url('/vendor') }}" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New Package</span></a>
                            </div>
                            <div class="col-sm-4">
                                <div class="search-box">
                                    <i class="material-icons">&#xE8B6;</i>
                                    <input type="text" class="form-control" placeholder="Search&hellip;">
                                </div>
                            </div>
                        </div>
                    </div>
                    <table class="table table-striped table-hover table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama Produk <i class="fa fa-sort"></i></th>
                                <th>Harga Produk</th>
                                <th>Kapasitas Tamu <i class="fa fa-sort"></i></th>
                                <th>Durasi Produk</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        
                            @foreach($viewtablepaket as $data)
                                <tr>
                                    <td>{{$data->id_paket_vendor}}</td>
                                    <td>{{$data->nama_paket}}</td>
                                    <td>{{$data->harga}}</td>
                                    <td>{{$data->kapasitas}}</td>
                                    <td>{{$data->durasi}}</td>
                                    <td>
                                        <a href="{{ url('/viewdetailpaket') }}" class="view" title="View Details" data-toggle="tooltip"><i class="material-icons">&#xE417;</i></a>
                                        <a href="#" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                                        <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                                    </td>
                                </tr>
                            @endforeach 
                        </tbody>
                    </table>
                    <!--<div class="clearfix">
                        <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
                        <ul class="pagination">
                            <li class="page-item disabled"><a href="#"><i class="fa fa-angle-double-left"></i></a></li>
                            <li class="page-item"><a href="#" class="page-link">1</a></li>
                            <li class="page-item"><a href="#" class="page-link">2</a></li>
                            <li class="page-item active"><a href="#" class="page-link">3</a></li>
                            <li class="page-item"><a href="#" class="page-link">4</a></li>
                            <li class="page-item"><a href="#" class="page-link">5</a></li>
                            <li class="page-item"><a href="#" class="page-link"><i class="fa fa-angle-double-right"></i></a></li>
                        </ul>
                    </div> -->
                </div>
            </div>  
        </div> 
    

    </div>
</div>


@endsection