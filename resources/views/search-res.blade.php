
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
                                <label class="col-form-label" for="from_date">From Date<span class="text-danger">*</span></label>
                                <input class="form-control title" id="from_date" name="from_date" type="date" placeholder="From Date" readonly>
                                <span class="text-danger invalid from_date_err"></span>
                            </div>

                            <div class="col-md-3">
                                <label class="col-form-label" for="to_date">To Date<span class="text-danger">*</span></label>
                                <input class="form-control title" id="to_date" name="to_date" type="date" placeholder="To Date" readonly>
                                <span class="text-danger invalid to_date_err"></span>
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
                                    <th>name</th>
                                    <th>epic number</th>
                                    <th>part_no</th>
                                    <th>part_serial_no</th>
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

