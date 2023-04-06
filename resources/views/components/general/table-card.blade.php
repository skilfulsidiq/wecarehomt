<h6 class="mb-0 text-uppercase">{{$title}}</h6>
<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap5">
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        {{$search}}
                    </div>
                    <div class="col-sm-12 col-md-6">
                      {{$export}}
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <table id="example2" class="table table-striped table-condensed dataTable" role="grid"
                            aria-describedby="example2_info">
                            <thead>
                                {{$thead}}
                            </thead>
                            <tbody>
                                {{$tbody}}
                            </tbody>

                        </table>
                    </div>
                </div>
                <div class="row">
                    {{$paginate}}
                </div>
            </div>
        </div>
    </div>
</div>
