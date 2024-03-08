@extends('layouts.index')

@section('content')
    <!--start page wrapper -->
    <div class="page-wrapper">
        <div class="page-content">

            <div class="dash-wrapper bg-dark">
                <div class="row row-cols-1 row-cols-md-2 row-cols-xl-5 row-cols-xxl-5">
                    <div class="col border-end border-light-2">
                        <div class="card bg-transparent shadow-none mb-0">
                            <div class="card-body text-center">
                                <p class="mb-1 text-white">Sessions</p>
                                <h3 class="mb-3 text-white">876</h3>
                                <p class="font-13 text-white"><span class="text-success"><i
                                            class="lni lni-arrow-up"></i>2.1%</span> vs last 7 days</p>
                                <div id="chart1"></div>
                            </div>
                        </div>
                    </div>

                </div>
                <!--end row-->
            </div>

            
        </div>
    </div>
    <!--end page wrapper -->
@endsection
