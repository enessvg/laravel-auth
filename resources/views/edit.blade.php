@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Item') }}</div>

                <div class="card-body">
                    <form action="{{ route('item.update', ['id' => $item->id]) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="ismi">İsim</label>
                            <input type="text" class="form-control" id="ismi" name="name" value="{{ $item->name }}" required>
                        </div>
                        <div class="form-group">
                            <label for="aciklama">Açıklama</label>
                            <textarea class="form-control" id="aciklama" name="desc" required>{{ $item->desc }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="miktar">Miktarı</label>
                            <input type="number" class="form-control" id="miktar" name="miktar" value="{{ $item->miktar }}" required>
                        </div>
                        <button type="submit" class="btn btn-primary mt-2">Update Item</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
