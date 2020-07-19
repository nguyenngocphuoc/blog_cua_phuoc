                    <!--{{ $submited = \App\InfoSubmit::where("status","0")->get() }}-->
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" onclick="readed()">
                        <i class="fa fa-envelope-o"></i>
                        <span class="label label-success">{{\count($submited)}}</span>
                    </a>
                    <ul class="dropdown-menu">
                        <script>
                            function readed(params) {
                                @foreach($submited as $key => $value)
                                    fetch("{{url('api/submit-info/read/'.$value->id)}}"); //extract JSON from the http response
                                @endforeach
                            }
                        </script>
                        <li class="header">You have {{\count($submited)}} messages</li>
                        <li>
                            <!-- inner menu: contains the actual data -->
                            <ul class="menu">
                                @foreach($submited as $key => $value)
                                <li>
                                    <!-- start message -->
                                    <a href="#">
                                        <div class="pull-left">
                                            <img src="{{ asset('backend/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
                                        </div>
                                        <h4>
                                            {{ $value->orders }}
                                            <small><i class="fa fa-clock-o"></i> {{ $value->created_at->diffForHumans() }}</small>
                                        </h4>
                                        <p>{{ $value->name }}</p>
                                    </a>
                                </li>
                                <!-- end message -->
                                @endforeach
                            </ul>
                        </li>
                        <li class="footer"><a href="{{url('admin/info-submit')}}">See All Messages</a></li>
                    </ul>