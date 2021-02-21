@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="card-title text-center">Showcase</div>
                <div class="card-text">
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <a class="nav-link active" id="nav-pertemuan-1-tab" data-toggle="tab"
                                href="#nav-pertemuan-1" role="tab" aria-controls="nav-pertemuan-1"
                                aria-selected="true">Pertemuan 1</a>
                            <a class="nav-link " id="nav-pertemuan-2-tab" data-toggle="tab" href="#nav-pertemuan-2"
                                role="tab" aria-controls="nav-pertemuan-2" aria-selected="true">Pertemuan 2</a>
                            <a class="nav-link " id="nav-pertemuan-3-tab" data-toggle="tab" href="#nav-pertemuan-3"
                                role="tab" aria-controls="nav-pertemuan-3" aria-selected="true">Pertemuan 3</a>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-pertemuan-1" role="tabpanel"
                            aria-labelledby="nav-pertemuan-1-tab">
                            <iframe src="{{ asset('storage/test/index.html')}}" frameborder="0" width="100%"
                                height="500">
                            </iframe>
                        </div>
                        <div class="tab-pane fade show " id="nav-pertemuan-2" role="tabpanel"
                            aria-labelledby="nav-pertemuan-2-tab">Pertemuan 2</div>
                        <div class="tab-pane fade show " id="nav-pertemuan-3" role="tabpanel"
                            aria-labelledby="nav-pertemuan-3-tab">Pertemuan 3</div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection