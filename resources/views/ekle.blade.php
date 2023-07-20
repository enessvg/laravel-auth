@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Yeni Ürün Ekle') }}</div>

                <div class="card-body">
                    <form action="{{ route('item.ekle') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="ismi">İsim</label>
                            <input type="text" class="form-control" id="ismi" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="aciklama">Açıklama</label>
                            <textarea class="form-control" id="aciklama" name="desc" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="miktar">Miktar</label>
                            <input type="number" class="form-control" id="miktar" name="miktar" required>
                        </div>
                        <button type="submit" class="btn btn-primary mt-2">Ürünü Ekle</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
