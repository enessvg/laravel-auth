@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                

                    <div class="table-responsive mt-3">
                        <table class="table table-bordered border-danger">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">İsmi</th>
                                    <th scope="col">Açıklama</th>
                                    <th scope="col">Miktar</th>
                                    <th scope="col">İşlemler</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($items as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->desc }}</td>
                                        <td>{{ $item->miktar }}</td>
                                        <td>
                                            <div style="display: flex;justify-content: flex-start;">
                                                <a href="{{ route('item.edit', ['id' => $item->id]) }}"><i class="fa-regular fa-pen-to-square text-warning"></i></a>
                                                <form action="{{ route('item.delete', ['id' => $item->id]) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button style="background: none; border:0;" type="submit">
                                                        <i class="fa-regular fa-trash-can text-danger"></i>
                                                    </button>
                                                </form>
                                            </div>
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
<div id="myModal" class="modal">
@endsection
