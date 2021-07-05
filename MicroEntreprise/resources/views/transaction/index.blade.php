@extends('layouts.app')
@section('content')
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Your Transactions</h2>
            </div>
        </div>
    </div>
<table class="table table-bordered table-responsive-lg">
        <tr>
            <th>No</th>
            <th>Source id</th>
            <th>Source type</th>
            <th>Price</th>
            <th>Date Created</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($transactions as $transaction)
            <tr>
                <td>{{ $transaction->id }}</td>
                <td>{{ $transaction->source_id }}</td>
                @if ( str_replace("\App\Models\\", "", $transaction->source_type) === "Mission")
                <td><a href="{{ route('mission.show',['mission' => $transaction->source_id]) }}">{{ str_replace("\App\Models\\", "", $transaction->source_type) }}</a> </td>
                @elseif ( str_replace("\App\Models\\", "", $transaction->source_type) === "Contribution")
                <td><a href="{{ route('contribution.show',['contribution' => $transaction->source_id]) }}">{{ str_replace("\App\Models\\", "", $transaction->source_type) }}</a> </td>
                @endif
                {{-- @if (isset($transaction->source))
                    <td>{{ $transaction->source->title }}</td>
                @else
                    <td>No title available</td>
                @endif --}}
                <td>{{ $transaction->price }}</td>
                {{-- <td>{{ $transaction->paid_at }}</td> --}}
                <td>{{ $transaction->created_at}}</td>
            </tr>
        @endforeach
    </table>

@endsection