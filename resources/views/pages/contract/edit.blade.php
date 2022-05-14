@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-12 mb-4">
            <a href="{{ URL::previous() }}" class="btn btn-outline-primary" >Назад</a>
        </div>

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Промена на податоци') . " - " . $contract->contract_name }}</div>
                <div class="card-body">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="form_creator">
                        
                                <form action=" {{ route('contract.update', [$contract->id]) }}" method="POST">

                                    {{method_field('PATCH')}}
                                    {{ csrf_field() }}       
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                         
                                    <div class="input-group mb-3">
                                        <input id="contract_name" type="text" class="form-control" name="contract_name" aria-label="contract_name" aria-describedby="basic-addon1" value="{{$contract->contract_name}}">
                                    </div>
                                     
                                        @error('contract_name')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror

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
