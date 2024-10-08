@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{ route('tambah_lead.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="tanggal">Tanggal</label>
            <input type="date" class="form-control" id="tanggal" name="tanggal">
        </div>
        <div class="form-group">
            <label for="sales">Sales</label>
            <select class="form-control" id="sales" name="sales_id">
                @foreach ($sales as $sale)
                <option value="{{ $sale->id }}">{{ $sale->nama_sales }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection