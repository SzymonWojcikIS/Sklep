<div>
    <div class="container" style="padding: 30px;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                Dodaj nową kategorię
                            </div>
                            <div class="col-md-6">
                                <a href="{{route('admin.cates')}}" class="btn btn-success pull-right">Wszystkie Kategorie </a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        @if(Session::has('message'))
                            <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                        @endif
                        <form class="form-horizontal" wire:submit.prevent="soreCate">
                            <div class="form-group">
                                <label class="col-md-4 control-label">Nazwa</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Nazwa" class="form-control input-md" wire:model="name" wire:keyup="generateslug" />
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Slug</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder=" Slug" class="form-control input-md" wire:model="slug"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label"></label>
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
