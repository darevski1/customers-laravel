@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <div class="card-body">
                    <div class="form_creator">
                        <div x-data="{ open: false }">
                            <button @click="open = ! open" class="btn btn-primary">Креирај нов</button>
                        
                            <div x-show="open" @click.outside="open = true" class="form_creator_toggler">
                                <form action="{{route('users.store')}}" method="POST">
                                    @csrf
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" name="name" placeholder="Име" aria-label="contract" aria-describedby="basic-addon1">
                                    </div>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" name="last_name" placeholder="Презиме" aria-label="contract" aria-describedby="basic-addon1">
                                    </div>
                                    <div class="input-group mb-3">
                                        <input type="email" class="form-control" name="email" placeholder="Email" aria-label="contract" aria-describedby="basic-addon1">
                                    </div>
                                    <div class="input-group mb-3">
                                        <input type="password" class="form-control" name="password" placeholder="Лозинка" aria-label="contract" aria-describedby="basic-addon1">
                                    </div>

                                    <div class="input-group">
                                        <button type="submit" class="btn btn-success pull-right">Зачувај</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                <div class="contract_container">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Корисник</th>
                                <th scope="col">Емаил</th>
                                <th scope="col">Статус</th>
                                <th scope="col">Тип на Корисник</th>
                                <th scope="col">Промени</th>
                                <th scope="col">Бриши</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach( $users as $user)
                            <tr>
                                <th scope="row">{{ $user->id}}</th>
                                <td>{{ $user->name}}  {{ $user->last_name}}</td>
                                <td>{{ $user->email}}</td>
                                <td>
                                    @if($user->status == 1) 
                                        <span class="badge rounded-pill bg-success">Активен</span>
                                    @else
                                        <span class="badge rounded-pill bg-danger">Не е Активен</span>

                                    @endif
                                </td>
                                <td>{{ $user->user_type}}</td>

                                <td>
                                    <a href="{{ url('users/'.$user->id.'/edit') }}" class="btn btn-warning">Промениs</a>

                                </td>
                                <td><button type="button" class="btn btn-danger">Бриши</button></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>



                </div>
            </div>
        </div>
    </div>
</div>
@endsection
