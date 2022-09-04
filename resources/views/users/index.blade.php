@extends('home')
@section('content')
    <h5>Ara  <ion-icon name="information-circle-outline"></ion-icon></h5>
    <div class="table-top">
        <ion-icon name="search-outline" class="search-ico"></ion-icon>
        <input type="search" class="custom-search rounded-5 w-75 border-0"
            placeholder="Lütfen aramak istediğiniz içeriğe ait bir kelime yazınız">
        <div class="filter_btns d-flex flex-column">
            <button class="fltr-btn">Filtrele</button>
            <button class="fltr-btn">Temizle</button>
        </div>
    </div>

    <table class="table table-light table-striped">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th class="text-center" scope="col">ID</th>
                    <th class="text-center" scope="col">Adı</th>
                    <th class="text-center" scope="col">Email</th>
                    <th class="text-center" scope="col">Oluşturulma Tarihi</th>
                    <th class="text-center" scope="col">Hareketler</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <th class="text-center" scope="row">{{ $user->id }}</th>
                        <td class="text-center">{{ $user->name }}</td>
                        <td class="text-center">{{ $user->email }}</td>
                        <td class="text-center">{{ $user->created_at }}</td>
                        <td class="d-flex justify-content-center">
                            <a href="{{ route('edit',$user->id) }}" class="tbl_btn_update me-2">
                                <ion-icon name="pencil-outline"></ion-icon>Düzenle
                            </a>
                            <form action="{{ route('delete',$user->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="tbl_btn_delete me-2">
                                    <ion-icon name="trash-outline"></ion-icon>Sil
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endsection
