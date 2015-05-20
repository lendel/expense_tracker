@extends('app')

@section('content')
    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <caption>Expenses Table</caption>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Renewal</th>
                    <th>Company</th>
                </tr>
            </thead>
            <tbody>
                @if($expenses !== null)
                    @foreach($expenses as $expense)
                        <tr>
                            <td>{{$expense->name}}</td>
                            <td>{{$expense->price}}</td>
                            <td>{{$expense->renewal}}</td>
                            <td>{{$expense->company}}</td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td>No Expenses</td>
                        <td>No Expenses</td>
                        <td>No Expenses</td>
                        <td>No Expenses</td>
                    </tr>
                @endif
            </tbody>
            <tfoot></tfoot>
        </table>
    </div>
@endsection
