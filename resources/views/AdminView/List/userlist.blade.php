@extends('AdminView/Master/total')
@section('contentA')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">لیست کاربران</h4>
                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-content collapse show">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>نام کاربر</th>
                                <th>پسورد</th>
                                <th>ابزار</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($userlist as $item)
                                <tr style="text-align: center;">
                                    <th>{{$item->id}}</th>
                                    <td>{{$item->UserName}}</td>
                                    <td>{{$item->Password}}</td>
                                    <td>
                                        <a href="{{route('UserUpdateViewRoute',$item->id)}}">
                                            <button type="button" class="btn btn-primary">
                                                <i class="ft-plus"></i> بروزرسانی
                                            </button>
                                        </a>
                                        <a href="{{route('UserDeleteViewRoute',$item->id)}}">
                                            <button type="button" class="btn btn-primary">
                                                <i class="ft-plus"></i> پاک کردن
                                            </button>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection