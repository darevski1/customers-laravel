@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="card-body">
                    <div class="form_creator">
                        <div x-data="{ open: false }">
                            <button @click="open = ! open" class="btn btn-primary">Креирај нов</button>
                        
                            <div x-show="open" @click.outside="open = true" class="form_creator_toggler">
                                    <form method="POST" action="{{ route('contract.store') }}">
                                    @csrf
                                    <div class="input-group mb-3">
                                <form action="{{route('contract.store')}}" method="POST">
                                        <input id="contract_name" type="text" class="form-control" name="contract_name" placeholder="Внеси тип на договор" aria-label="contract_name" aria-describedby="basic-addon1">
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
                            <th scope="col">Тип на договор</th>
                            <th scope="col">Промени</th>
                            <th scope="col">Бриши</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($contracts as $contract)
                            <tr>
                                <th scope="row">{{ $contract->id}}</th>
                                <td>{{ $contract->contract_name}}</td>
                                <td>
                                 
                                    <a href="{{ url('contract/'.$contract->id.'/edit') }}" class="btn btn-warning">Промени</a>
                                </td>
                                <td>
                                    <form action=" {{ URL::route('contract.destroy', [$contract->id]) }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                                        {{method_field('DELETE')}}
                                        {{ csrf_field() }}
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button type="submit" class="btn btn-outline-danger">Бриши</button>
                                    </form>
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
</div>
@endsection
