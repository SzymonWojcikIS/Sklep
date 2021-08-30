<div>
    <style>
        nav svg{
            height: 20px;
        }
        nav .hidden{
            display: block !important;
        }
    </style>
    <div class="container" style="padding:30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading"> 
                        <div class="row">
                            <div class="col-md-6">
                                Kategorie
                            </div>
                            <div class="col-md-6">
                                <a href="{{route('admin.addcate')}}" class="btn btn-success pull-right">Dodaj</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        @if(Session::has('message'))
                            <div class="alert alert-succes" role="alert">{{Session::get('message')}}</div>
                        @endif
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nazwa</th>
                                    <th>Slug</th>
                                    <th>Działanie</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($cates as $cate)
                                <tr>
                                    <td>{{$cate->id}}</td>
                                    <td>{{$cate->name}}</td>
                                    <td>{{$cate->slug}}</td>
                                    <td>
                                        <a href="{{route('admin.editcate',['cate_slug'=>$cate->slug])}}"><i class="fa fa-edit fa-2x"></i></a>
                                        <a href="a" wire:click.prevent="deleteCate({{$cate->id}})"><i class="fa fa-times fa-2x text-danger"></i> </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{$cates->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
