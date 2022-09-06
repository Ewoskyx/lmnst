@extends('home')
@section('content')
    <div class="save_div">
        <div class="col-12 d-flex justify-content-start">
            <form action="{{ route('store') }}" class="d-flex flex-column bg-light p-4 rounded-4 w-100 h-50 gap-4"
                method="post">
                @csrf
                <div class="form_top d-flex justify-content-center">
                    <div class="form-group flex-grow-2 me-2 d-flex">
                        <label for="name">Kullanıcı Adı*</label>
                        <input type="text" class="form-control rounded-5 mx-3" name="name" value="" />
                    </div>

                    <div class="form-group flex-grow-2 me-2 d-flex">
                        <label for="email">Kullanıcı E-Posta*</label>
                        <input type="text" class="form-control rounded-5 mx-3" name="email" value="" />
                    </div>

                    <div class="form-group flex-grow-2 me-2 d-flex">
                        <label for="password">Kullanıcı Parola*</label>
                        <input type="password" class="form-control rounded-5" name="password" value="" />
                    </div>
                    <div class="d-flex">
                        <label for="is_admin">Admin*</label>
                        <input type="checkbox" class="" name="is_admin" value="1"/>
                    </div>
                </div>

                <div class="d-flex justify-content-center">
                    <a href="{{ route('index') }}" class="edit-btn btn btn-success rounded-5 me-3">İptal Et</a>
                    <button type="submit" class="edit-btn btn btn-success rounded-5 me-3">Kaydet</button>
                </div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <p><strong>Lütfen dikkat !</strong></p>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                @if (session('error'))
                    <div class="alert alert-danger">{{ session('error') }}</div>
                @endif
            </form>
        </div>
    </div>
@endsection
