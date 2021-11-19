@extends('AdminView/Master/total')
@section('contentA')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">لیست محصولات</h4>
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
                                <th>نام محصول</th>
                                <th>عنوان</th>
                                <th>گروه</th>
                                <th>قیمت(میلیون)</th>
                                <th>عکس محصول</th>
                                <th>ابزار</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($productlist as $item)
                                <tr style="text-align: center;">
                                    <th>{{$item->id}}</th>
                                    <td>{{$item->Name}}</td>
                                    <td>{{$item->Cat}}</td>
                                    <td>{{$item->Title}}</td>
                                    <td>{{$item->Price}}</td>
                                    <td>
                                        <img src="{{$item->ImageAddress_1}}" alt="picture" style="width: 70px;height: 70px;">
                                        <img src="{{$item->ImageAddress_2}}" alt="picture" style="width: 70px;height: 70px;">
                                        <img src="{{$item->ImageAddress_3}}" alt="picture" style="width: 70px;height: 70px;">
                                        <img src="{{$item->ImageAddress_4}}" alt="picture" style="width: 70px;height: 70px;">
                                    </td>
                                    <td>
                                        <a href="{{route('ProductUpdateViewRoute',$item->id)}}">
                                            <button type="button" class="btn btn-primary">
                                                <i class="ft-plus"></i> بروزرسانی
                                            </button>
                                        </a>
                                        <a href="{{route('ProductDeleteViewRoute',$item->id)}}">
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