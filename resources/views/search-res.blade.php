
<x-admin.layout>
    <x-slot name="title">Search Data</x-slot>
    <x-slot name="heading">Search Data</x-slot>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">

                <form href="{{ route('search-res.index') }}" class="theme-form" name="addForm" id="addForm" enctype="multipart/form-data">
                    @csrf

                    <div class="card-body">
                        <div class="mb-3 row">

                            <div class="col-md-3">
                                <label class="col-form-label" for="fname">First Name<span class="text-danger"></span></label>
                                <input class="form-control title" id="fname" name="fname" type="text" placeholder="First Name">
                                <span class="text-danger invalid fname_err"></span>
                            </div>

                            <div class="col-md-3">
                                <label class="col-form-label" for="lname">Last Name<span class="text-danger"></span></label>
                                <input class="form-control title" id="lname" name="lname" type="text" placeholder="Last Name">
                                <span class="text-danger invalid lname_err"></span>
                            </div>

                            <div class="col-md-3">
                                <label class="col-form-label" for="epic_number">Epic Number<span class="text-danger"></span></label>
                                <input class="form-control title" id="epic_number" name="epic_number" type="text" placeholder="Epic Number">
                                <span class="text-danger invalid epic_number_err"></span>
                            </div>

                            <div class="col-md-3">
                                <label class="col-form-label" for="part_no">Part Number<span class="text-danger"></span></label>
                                <input class="form-control title" id="part_no" name="part_no" type="text" placeholder="Part Number">
                                <span class="text-danger invalid part_no_err"></span>
                            </div>

                            <div class="col-md-3">
                                <label class="col-form-label" for="part_serial_no">Part Serial Number<span class="text-danger"></span></label>
                                <input class="form-control title" id="part_serial_no" name="part_serial_no" type="text" placeholder="Part Serial Number">
                                <span class="text-danger invalid part_serial_no_err"></span>
                            </div>

                        </div>

                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary" id="addSubmit">Submit</button>
                        <a href="{{ route('search-res.index') }}" class="btn btn-warning">Refresh</a>
                    </div>
                </form>

                <div class="card-body">
                    <div class="table-responsive">
                        <table id="buttons-datatables" class="table table-bordered nowrap align-middle" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Sr No.</th>
                                    <th>Name</th>
                                    <th>Epic Number</th>
                                    <th>Part No</th>
                                    <th>Part Serial No.</th>
                                </tr>
                            </thead>
                            <tbody>
                                 @foreach ($result as $res)

                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $res->fname." ".$res->lname }}</td>
                                        <td>{{ $res->epic_number }}</td>
                                        <td>{{ $res->part_no }}</td>
                                        <td>{{ $res->part_serial_no }}</td>
                                    </tr>
                                @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>




</x-admin.layout>

