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
                                <form action="">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" name="contract" placeholder="Внеси тип на договор" aria-label="contract" aria-describedby="basic-addon1">
                                    </div>
                                    <div class="input-group">
                                        <button type="button" class="btn btn-success pull-right">Зачувај</button>
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
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td><button type="button" class="btn btn-warning">Промени</button></td>
                                <td><button type="button" class="btn btn-danger">Бриши</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>



                </div>
            </div>
        </div>
    </div>
</div>
@endsection
