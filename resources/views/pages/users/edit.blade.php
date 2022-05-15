@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <div class="card-body">
                    <div class="form_creator">
                  
                                <form action="{{route('users.update', [$user->id]) }}" method="POST">
                                    {{method_field('PATCH')}}
                                    {{ csrf_field() }}       
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
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
                                        <input type="password" class="form-control" name="password">
                                    </div>
                                    <div class="input-group mb-3">
                                        <select class="form-select" aria-label="Default select example" name="status">
                                            <option selected disabled>Промени статус</option>
                                                @if($user->status == 1)
                                                    <option value="0">Деактивирај</option>
                                                @else
                                                    <option value="1">Активирај</option>
                                                @endif
                                          </select>
                                    </div>
                                    <div class="input-group mb-3">
                                        <select class="form-select" aria-label="Default select example" name="status">
                                            <option selected disabled>Промени тип на Корисник</option>
                                            <option value="administrator">Администратор</option>
                                            <option value="super-administrator">Супер Администратор</option>
                                          </select>
                                    </div>
                                    <div class="input-group">
                                        <button type="submit" class="btn btn-success pull-right">Зачувај</button>
                                    </div>
                                </form>
                           
                    </div>


              
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
