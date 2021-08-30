<div>
    <div class="container" style="padding:30px 0;">
         <div class="row">
             <div class="col-md-12">
                 <div class="panel panel-default">
                     <div class="panel-heading">
                         <div class="row">
                         <div class="col-md-6">
                             Dodaj nowy produkt
                         </div>
                         <div class="col-md-6">
                             <a href="{{route('admin.prods')}}" class="btn btn-success pull-right">Wszystkie Produkty</a>
                         </div>
                         </div>
                     </div>
                     <div class="panel-body">
                        @if(Session::has('message'))
                            <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                        @endif
                         <form class="form-horizontal" enctype="multipart/form-data" wire:submit.prevent="addProd">
                            <div class="form-group">
                                <label class="col-md-4 control-label"> Nazwa</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Nazwa" class="form-control input-md" wire:model="name" wire:keyup="generateSlug"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label"> Slug</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder=" Slug" class="form-control input-md" wire:model="slug" />
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label"> Krótki opis</label>
                                <div class="col-md-4">
                                    <textarea class="form-control" placeholder="Krótki opis" wire:model="short_description" ></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">  Opis</label>
                                <div class="col-md-4">
                                    <textarea class="form-control" placeholder="Opis" wire:model="description" ></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label"> Cena</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Cena" class="form-control input-md"  wire:model="regular_price" />
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label"> Przecena</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Przecena" class="form-control input-md" wire:model="sale_price"  />
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label"> SKU</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="SKU" class="form-control input-md"  wire:model="SKU" />
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label"> Dostępność</label>
                                <div class="col-md-4">
                                    <select class="form-control" wire:model="stock_status" >
                                        <option value="instock">Dostepny</option>
                                        <option value="outstock">Nie dostępny</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label"> Wyróznienie</label>
                                <div class="col-md-4">
                                    <select class="form-control" wire:model="featured" >
                                        <option value="0">No</option>
                                        <option value="1">Yes</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label"> Ilość</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Ilość" class="form-control input-md" wire:model="quantity"  />
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="col-md-4 control-label"> Zdjęcie</label>
                                <div class="col-md-4">
                                    <input type="file"  class="input-file"  wire:model="image" />
                                    @if($image)
                                        <img src="{{$image->temporaryUrl()}}" width="120" />
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label"> Kategoria</label>
                                <div class="col-md-4">
                                    <select class="form-control" wire:model="cate_id" >
                                        <option value="">Wybierz kategorię</option>
                                        @foreach ($cates as $cate)
                                            <option value="{{$cate->id}}">{{$cate->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label"> </label>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary">Zatwierdź</button>
                                </div>
                            </div>

                        </form>
                     </div>
                 </div>
            </div>
         </div>
    </div>
</div>
