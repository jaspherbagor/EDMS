@extends('admin.layout.app')

@section('heading', 'All Projects')

@section('right_top_button')
<a href="" class="btn btn-primary"><i class="fa fa-plus"></i> Add New</a>
@endsection
@section('main_content')
    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="example1">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Name</th>
                                        <th>Photo</th>
                                        <th>Location</th>
                                        <th>Client Name</th>
                                        <th>Admin</th>
                                        <th>Current Overall Progress</th>
                                        <th>Electrical Department</th>
                                        <th>Masonry Department</th>
                                        <th>Painting Department</th>
                                        <th>Plumbing Department</th>
                                        <th>Carpentry Department</th>
                                        <th>Finishing Department</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Little Moses Learning Center</td>
                                        <td><img src="" alt="image" class="w_200"></td>
                                        <td>Vista Mall - General Trias</td>
                                        <td>Jane Doe</td>
                                        <td>Baby Javier</td>
                                        <td>50%</td>
                                        <td>20%</td>
                                        <td>40%</td>
                                        <td>30%</td>
                                        <td>30%</td>
                                        <td>30%</td>
                                        <td>30%</td>
                                        <td class="pt_10 pb_10">
                                            <a href="" class="btn btn-primary mb-2">Edit</a>
                                            <a href="" class="btn btn-danger" onClick="return confirm('Are you sure you want to delete?');">Delete</a>
                                        </td>
                                        
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Coffee Shop</td>
                                        <td><img src="" alt="image" class="w_200"></td>
                                        <td>Vista Mall - Dasmariñas</td>
                                        <td>Jane Doe</td>
                                        <td>Mark Palugan</td>
                                        <td>40%</td>
                                        <td>20%</td>
                                        <td>40%</td>
                                        <td>30%</td>
                                        <td>30%</td>
                                        <td>30%</td>
                                        <td>30%</td>
                                        <td class="pt_10 pb_10">
                                            <a href="" class="btn btn-primary mb-2">Edit</a>
                                            <a href="" class="btn btn-danger" onClick="return confirm('Are you sure you want to delete?');">Delete</a>
                                        </td>
                                        
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
