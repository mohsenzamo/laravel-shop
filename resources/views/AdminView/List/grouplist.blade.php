@extends('AdminView/Master/total')
@section('contentA')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">لیست گروه ها</h4>
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
                                <th>نام گروه</th>
                                <th>عکس گروه</th>
                                <th>ابزار</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($grouplist as $item)
                                <tr style="text-align: center;">
                                    <th>{{$item->id}}</th>
                                    <td>{{$item->Title}}</td>
                                    <td><img src="{{$item->ImageAddress}}" alt="picture" style="width: 70px;height: 70px;"></td>
                                    <td>
                                        <a href="{{route('GroupUpdateViewRoute',$item->id)}}">
                                        <button type="button" class="btn btn-primary">
                                            <i class="ft-plus"></i> بروزرسانی
                                        </button>
                                        </a>
                                        <a href="{{route('GroupDeleteViewRoute',$item->id)}}">
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