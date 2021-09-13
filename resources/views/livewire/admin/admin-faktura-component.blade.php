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
                                Wszystkie Faktury
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
                                    <th>Id Faktury</th>
                                    <th>Id Użytkownika</th>
                                    <th>Cena</th>
                                    <th>Imie</th>
                                    <th>Nazwisko</th>
                                    <th>Numer</th>
                                    <th>Email</th>
                                    <th>Adres</th>
                                    <th>Państwo</th>
                                    <th>Kod pocztowy</th>
                                    <th>Data</th>
                                    <th>Działanie</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($fakturas as $faktura)
                                <tr>
                                    <td>{{$faktura->id}}</td>
                                    <td>{{$faktura->user_id}}</td>
                                    <td>{{$faktura->cena}}</td>
                                    <td>{{$faktura->fristname}}</td>
                                    <td>{{$faktura->lastname}}</td>
                                    <td>{{$faktura->mobile}}</td>
                                    <td>{{$faktura->email}}</td>
                                    <td>{{$faktura->adres}}</td>
                                    <td>{{$faktura->country}}</td>
                                    <td>{{$faktura->zipcode}}</td>
                                    <td>{{$faktura->created_at}}</td>
                                    <td>
                                        <a href="#"style="margin-left:10px;" wire:click.prevent="deleteFaktura({{$faktura->id}})"><i class="fa fa-times fa-2x text-danger"></i></a>
                                        <a href="{{ route('admin.printfaktura')}}"style="margin-left:10px;" ><i class="fa fa-file-pdf-o fa-2x" aria-hidden="true"></i>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{$fakturas->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
