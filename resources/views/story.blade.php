@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

               <div class="panel-body">
                 <table>
                 @foreach ($stories as $story)
                    <tr>
                      <td>{{ $story['description'] }}</td>
                    </tr>
                      @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection