@extends('admin.components.layout')

@push('styles')
@endpush

@section('title', 'Dashboard')

@section('content')
    <div class="page-heading">
        <h3>Program - {{ $program->nama_program }}</h3>
    </div>
    <div class="page-content">
        <div class="row p-0 m-0">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Keterangan Program</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('program.update', $program->id ?? 1) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label class="form-label">Nama Program</label>
                                <input type="text" class="form-control" name="nama_program" value="{{ $program->nama_program ?? '' }}">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Slug</label>
                                <input type="text" class="form-control" name="slug" value="{{ $program->slug ?? '' }}">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Deskripsi</label>
                                <textarea class="form-control" name="deskripsi" rows="3" required>{{ $program->deskripsi ?? '' }}</textarea>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Ringkasan</label>
                                <textarea class="form-control" name="ringkasan" rows="3" required>{{ $program->ringkasan ?? '' }}</textarea>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Durasi</label>
                                <input type="text" class="form-control" name="durasi" value="{{ $program->durasi ?? '' }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Target Peserta</label>
                                <input type="text" class="form-control" name="target_peserta" value="{{ $program->target_peserta ?? '' }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Lokasi</label>
                                <input type="text" class="form-control" name="lokasi" value="{{ $program->lokasi ?? '' }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Thumbnail Program</label>
                                <input type="file" class="form-control" name="thumb_url">
                                @if (!empty($program->thumb_url))
                                    <div class="mt-2">
                                        <img src="{{ asset('storage/' . $program->thumb_url) }}" class="img-fluid rounded" style="max-height:400px;">
                                    </div>
                                @endif
                            </div>

                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn btn-success">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
