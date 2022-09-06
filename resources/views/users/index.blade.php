@extends('home')
@section('content')
    <div class="index-wrapper py-5">
        <h5>Ara <ion-icon name="information-circle-outline"></ion-icon>
        </h5>
        <div class="table-top">
            <ion-icon name="search-outline" class="search-ico"></ion-icon>
            <input type="search" class="custom-search rounded-5 w-75 border-0"
                placeholder=@lang('custom.search_for')>
            <div class="filter_btns d-flex flex-column">
                <button class="fltr-btn">@lang('custom.filter')</button>
                <button class="fltr-btn">@lang('custom.clean')</button>
            </div>
        </div>

        <table class="table table-bordered my-5 pb-5">
            <thead>
                <tr>
                    <th class="text-center" scope="col">ID</th>
                    <th class="text-center" scope="col">@lang('custom.name')</th>
                    <th class="text-center" scope="col">@lang('custom.email')</th>
                    <th class="text-center" scope="col">@lang('custom.creation_date')</th>
                    <th class="text-center" scope="col">@lang('actions')</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <th class="text-center" scope="row">{{ $user->id }}</th>
                        <td class="text-center">{{ $user->name }}</td>
                        <td class="text-center">{{ $user->email }}</td>
                        <td class="text-center">{{ $user->created_at }}</td>
                        @if (Auth()->user()->is_admin) 
                        <td class="d-flex justify-content-center">
                            <a href="{{ route('edit', $user->id) }}" class="tbl_btn_update me-2">
                                <ion-icon name="pencil-outline"></ion-icon>@lang('custom.update')
                            </a>
                            <form action="{{ route('delete', $user->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="tbl_btn_delete me-2">
                                    <ion-icon name="trash-outline"></ion-icon>@lang('custom.delete')
                                </button>
                            </form>
                        </td>
                        @endif
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
