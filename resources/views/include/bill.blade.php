<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Bill') }}
        </h2>
    </x-slot>

    <div class="py-2">
        <div class="max-w-10xl mx-auto sm:px-4 lg:px-4">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-4 text-gray-900">
                   <div class="card">
                    <div class="card-header">
                        <h4>{{$billdata->fullname}}
                            <a href="{{route('admindashboard')}}" class="btn btn-primary float-end">Back</a>
                            <a href="{{url('clients/'.$billdata->client_id.'/bill')}}" class="btn btn-success mx-1 float-end">Edit</a>
                            <a href="" class="btn btn-danger float-end">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-arrow-up" viewBox="0 0 16 16">
                                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v4.5a.5.5 0 0 1-1 0V5.383l-7 4.2-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h5.5a.5.5 0 0 1 0 1H2a2 2 0 0 1-2-1.99zm1 7.105 4.708-2.897L1 5.383zM1 4v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1"/>
                                    <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.354-5.354 1.25 1.25a.5.5 0 0 1-.708.708L13 12.207V14a.5.5 0 0 1-1 0v-1.717l-.28.305a.5.5 0 0 1-.737-.676l1.149-1.25a.5.5 0 0 1 .722-.016"/>
                                </svg>
                            </a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-sm text-center">
                                <thead class="table-dark">
                                    <tr>
                                        <th>Plan</th>
                                        @if(date('m')>=1)
                                            <th>Jan</th>
                                        @endif
                                        @if(date('m')>=2)
                                            <th>Feb</th>
                                        @endif
                                        @if(date('m')>=3)
                                            <th>Mar</th>
                                        @endif
                                        @if(date('m')>=4)
                                            <th>Apr</th>
                                        @endif
                                        @if(date('m')>=5)
                                            <th>May</th>
                                        @endif
                                        @if(date('m')>=6)
                                            <th>Jun</th>
                                        @endif
                                        @if(date('m')>=7)
                                            <th>Jul</th>
                                        @endif
                                        @if(date('m')>=8)
                                            <th>Aug</th>
                                        @endif
                                        @if(date('m')>=9)
                                            <th>Sep</th>
                                        @endif
                                        @if(date('m')>=10)
                                            <th>Oct</th>
                                        @endif
                                        @if(date('m')>=11)
                                            <th>Nov</th>
                                        @endif
                                        @if(date('m')>=12)
                                            <th>Dec</th>
                                        @endif
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{$billdata->plan}}</td>
                                        @if(date('m')>=1)
                                            <td>{{$billdata->january}}</td>
                                        @endif
                                        @if(date('m')>=2)
                                            <td>{{$billdata->febuary}}</td>
                                        @endif
                                        @if(date('m')>=3)
                                            <td>{{$billdata->march}}</td>
                                        @endif
                                        @if(date('m')>=4)
                                            <td>{{$billdata->april}}</td>
                                        @endif
                                        @if(date('m')>=5)
                                            <td>{{$billdata->may}}</td>
                                        @endif
                                        @if(date('m')>=6)
                                            <td>{{$billdata->june}}</td>
                                        @endif
                                        @if(date('m')>=7)
                                            <td>{{$billdata->july}}</td>
                                        @endif
                                        @if(date('m')>=8)
                                            <td>{{$billdata->august}}</td>
                                        @endif
                                        @if(date('m')>=9)
                                            <td>{{$billdata->september}}</td>
                                        @endif
                                        @if(date('m')>=10)
                                            <td>{{$billdata->october}}</td>
                                        @endif
                                        @if(date('m')>=11)
                                            <td>{{$billdata->november}}</td>
                                        @endif
                                        @if(date('m')>=12)
                                            <td>{{$billdata->december}}</td>
                                        @endif

                                    </tr>
                                    
                                                
                                  
                                </tbody>
                            </table>
                        </div>
                    </div>
                   </div>
                   

                </div>
            </div>
        </div>
    </div>
</x-app-layout>