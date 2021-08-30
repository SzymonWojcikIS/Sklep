<div>
    <style>
        nav svg{
            height: 20px;
        }
        nav .hidden{
            display: block !important;
        }
    </style>
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                Wszystkie Produkty
                            </div>
                            <div class="col-md-6">
                                <a href="{{route('admin.addprod')}}" class="btn btn-success pull-right">Dodaj nowy</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        @if(Session::has('message'))
                            <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                        @endif
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Zdjęcie</th>
                                    <th>Nazwa</th>
                                    <th>Dostępność</th>
                                    <th>Cena</th>
                                    <th>Kategoria</th>
                                    <th>Data</th>
                                    <th>Działanie</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($prods as $prod)
                                <tr>
                                    <td>{{$prod->id}}</td>
                                    <td><img src="{{asset('assets/images/prods')}}/{{$prod->image}}" width="60" /></td>
                                    <td>{{$prod->name}}</td>
                                    <td>{{$prod->stock_status}}</td>
                                    <td>{{$prod->regular_price}}</td>
                                    <td>{{$prod->cate->name}}</td>
                                    <td>{{$prod->created_at}}</td>
                                    <td>
                                        <a href="{{route('admin.editprod',['prod_slug'=>$prod->slug])}}"><i class="fa fa-edit fa-2x text-info"></i></a>
                                        <a href="#"style="margin-left:10px;" wire:click.prevent="deleteProd({{$prod->id}})"><i class="fa fa-times fa-2x text-danger"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{$prods->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
