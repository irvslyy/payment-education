@extends('layouts.app')

@section('content')


        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    
                    <div class="card">
                        <div class="card-header bg-white header-elements-inline">
                            <h6 class="card-title">Last Payment</h6>
                            <div class="header-elements">
                               
                            </div>
                        </div>
                       
                        <div class="card-body">
                            
                        </div>
                    </div>                                        

                </div>   
                <div class="col-md-6">
                    
                    <div class="card">
                        <div class="card-header bg-white header-elements-inline">
                            <h6 class="card-title">IP Blocked</h6>
                            <div class="header-elements">
                             
                            </div>
                        </div>
                       
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">id</th>
                                        <th scope="col">ip</th>
                                        <th scope="col">log_id</th>
                                        <th scope="col">blocked</th>
                                        <th scope="col">created at</th>
                                        <th scope="col">handle</th>
                                    </tr>
                                </thead>
                              @foreach($ip as $ips)
                                <tbody>
                                    <tr>
                                        <td>{{$ips->id}}</td>
                                        <td>{{$ips->ip}}</td>
                                        <td>{{$ips->log_id}}</td>
                                        <td>{{$ips->blocked}}</td>
                                        <td>{{$ips->created_at}}</td>
                                        <td><a href="" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>
                                    </tr>
                                </tbody>
                              @endforeach
                                </table>
                                {{$ip->links()}}
                            </div>
                        </div>
                    </div>                                        

                </div>         
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                            <div class="card-header bg-white header-elements-inline">
                                <h6 class="card-title">Login logs</h6>
                                <div class="header-elements">
                                  
                                </div>
                            </div>
                       
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">id</th>
                                        <th scope="col">ip</th>
                                        <th scope="col">level</th>
                                        <th scope="col">middleware</th>
                                        <th scope="col">user_id</th>
                                        <th scope="col">url</th>
                                        <th scope="col">referrer</th>
                                        <th scope="col">request</th>
                                        <th scope="col">created at</th>
                                    </tr>
                                </thead>
                                @foreach($firewall as $firewalls)
                                <tbody>
                                    <tr>
                                        <td>{{$firewalls->id}}</td>
                                        <td>{{$firewalls->ip}}</td>
                                        <td>{{$firewalls->level}}</td>
                                        <td>{{$firewalls->middleware}}</td>
                                        <td>{{$firewalls->user_id}}</td>
                                        <td>{{$firewalls->url}}</td>
                                        <td>{{$firewalls->referrer}}</td>
                                        <td>{{$firewalls->request}}</td>
                                        <td>{{$firewalls->created_at}}</td>
                                    </tr>
                                </tbody>
                                @endforeach
                                </table>
                                {{$firewall->links()}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>


                <div class="col-md-4">
                    
                </div>   

        </div>

@endsection
