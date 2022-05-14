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
                                <form action="{{route('customer.store')}}" method="POST">
                                    @csrf
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" name="name" placeholder="Внеси име на корисник" aria-label="contract" aria-describedby="basic-addon1">
                                    </div>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" name="last_name" placeholder="Внеси презиме на корисник" aria-label="contract" aria-describedby="basic-addon1">
                                    </div>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" name="street" placeholder="Внеси Улица" aria-label="contract" aria-describedby="basic-addon1">
                                    </div>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" name="phone" placeholder="Внеси телефон" aria-label="contract" aria-describedby="basic-addon1">
                                    </div>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" name="contract_number" placeholder="Внеси број на договор" aria-label="contract" aria-describedby="basic-addon1">
                                    </div>
                                    <div class="input-group mb-3">
                                     <select class="form-select" aria-label="Default select example" name="contract_type">
                                            <option selected disabled>Избери тип на договор</option>
                                               @foreach ($contracts as $contract)
                                                 <option value="{{ $contract->id}}">{{ $contract->contract_name}}</option>
                                                   
                                               @endforeach
                                          </select>
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
                            <th scope="col">Име Презиме</th>
                            <th scope="col">Улица</th>
                            <th scope="col">Телефон</th>
                            <th scope="col">Број на договор</th>
                            <th scope="col">Тип на договор</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($customers as $customer)
                             
                             
                                <tr>
                                    <th scope="row">{{$customer->id}}</th>
                                    <td>{{$customer->name}} {{$customer->last_name}}</td>
                                    <td>{{$customer->street}}</td>
                                    <td>{{$customer->phone}}</td>
                                    <td>{{$customer->contract_number}}</td>
                                    <td>{{$customer->contract_type}}</td>
               


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
