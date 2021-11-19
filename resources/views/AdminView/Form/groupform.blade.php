@extends('AdminView/Master/total')
@section('contentA')
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-wrapper-before"></div>
            <div class="content-header row">
                <div class="content-header-left col-md-4 col-12 mb-2">
                    <h3 class="content-header-title">فرم گروه</h3>
                </div>
    <div class="col-xl-12 col-lg-24">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title" id="file-repeater">ایجاد گروه</h4>
                <a class="heading-elements-toggle">
                    <i class="la la-ellipsis-h font-medium-3"></i>
                </a>
                <div class="heading-elements">
                    <ul class="list-inline mb-0">
                        <li>
                            <a data-action="collapse">
                                <i class="ft-minus"></i>
                            </a>
                        </li>
                        <li>
                            <a data-action="reload">
                                <i class="ft-rotate-cw"></i>
                            </a>
                        </li>
                        <li>
                            <a data-action="expand">
                                <i class="ft-maximize"></i>
                            </a>
                        </li>
                        <li>
                            <a data-action="close">
                                <i class="ft-x"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="card-content collapse show">
                <div class="card-body">

                    <form class="form row" action="{{route('AddGroupRout')}}"   method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group col-md-6 mb-2">
                            <input type="text" class="form-control" placeholder="نام گروه" name="title">
                        </div>
                        <div class="form-group col-md-6 mb-2">
                            <input type="file" class="btn btn-primary" placeholder="عکس گروه" name="imagegroup">
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary">
                                <i class="ft-plus"></i> اضافه کردن گروه
                            </button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection