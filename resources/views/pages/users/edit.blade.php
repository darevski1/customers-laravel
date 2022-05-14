@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <div class="card-body">
                    <div class="form_creator">
                  
                                <form action="">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" name="name" placeholder="Име" aria-label="contract" aria-describedby="basic-addon1" value="{{$user->name}}">
                                    </div>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" name="last_name" placeholder="Презиме" aria-label="contract" aria-describedby="basic-addon1" value="{{$user->last_name}}">
                                    </div>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" name="email" placeholder="Емаил" aria-label="contract" aria-describedby="basic-addon1" value="{{$user->email}}">
                                    </div>
                                    <div class="input-group mb-3">
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected disabled>Промени статус</option>
                                                @if($user->status == 1)
                                                    <option value="0">Деактивирај</option>
                                                @else
                                                    <option value="1">Активирај</option>
                                                @endif
                                          </select>
                                    </div>
                                    <div class="input-group">
                                        <button type="button" class="btn btn-success pull-right">Зачувај</button>
                                    </div>
                                </form>
                           
                    </div>


                   <div class="form_password">
                        <div x-data="{ open: true }">
                            <button @click="open = ! open" class="btn btn-outline-primary mb-4 ">Промени Лозинка</button>
                        
                            <div x-show="open" @click.outside="open = true" class="fo">
                                <h5>Промена на Лозинка</h5>
                                <form action="">
                                    <div class="input-group mb-3">
                                        <input type="password" class="form-control" name="password" >
                                    </div>
                                    <div class="input-group mb-3">
                                        <input type="password" class="form-control" name="retype_password">
                                    </div>
                                    <div class="input-group">
                                        <button type="button" class="btn btn-success pull-right">Зачувај</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                   </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
