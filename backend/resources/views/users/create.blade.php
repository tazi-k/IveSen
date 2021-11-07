@extends('layouts.app')

@section('content')
@push('css')
<link rel="stylesheet" href="../css/header.css">
<link rel="stylesheet" href="../css/create.css">

<form action="{{ route('users.store',Auth::id())}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="card-core">
        <div class="core-img">
            <label for="input-img">
                {{-- ここに登録済みの画像を表示させる --}}
                <img class="profile-img" src="https://pbs.twimg.com/media/EQvsyvBVAAEFOJX.jpg" alt="">
            </label>
            <label for="input-img">
                <i class="fas fa-camera camera-icon"></i>
            </label>
        </div>
        <input id="input-img" type="file" class="input-img" style="display: none">

        <div class="input-info">
            <label for="name">
                <p>名前<span style="color: red; font-size: 1px; vertical-align: top">＊</span></p>
            </label>
            <input class="user-input" id="name" name="name" type="text" style="display: block" required>

            <p>性別</p>
            <input class="user-input" name="sex" id="man" type="radio" value="{{ 1 }}">
            <label for="man">
                <span style="font-size: 12px">男</span>
            </label>
            <input name="sex" id="woman" type="radio" style="margin-left: 8px" value="{{ 2 }}">
            <label for="woman">
                <span style="font-size: 12px">女</span>
            </label>

            <label for="prefecture" style="display: block">
                <p>住所</p>
            </label>
            <select class="user-input" name="prefecture" id="prefecture">
                <option value="">-</option>
                @foreach($prefectures as $prefecture)
                <option value="{{ $prefecture->id }}">{{ $prefecture->prefecture_name }}</option>
                @endforeach
            </select>

            <p>SNSリンク</p>
            <label for="twitter">
                <p style="font-size: 10px; margin-left:13px">Twitter</p>
            </label>
            <input name="twitter" class="user-input" id="twitter" type="text" style="display: block" placeholder="" value="@">
            <label for="instagram">
                <p style="font-size: 10px; margin-left:13px"> Instagram</p>
            </label>
            <input name="instagram" class="user-input" id="instagram" type="text" style="display: block" value="@">
            <label for="other">
                <p style="font-size: 10px; margin-left:13px">その他</p>
            </label>
            <input name="other" class="user-input" id="other" type="text" style="display: block" placeholder="https://~">

            <label for="profile-text">
                <p>自己紹介</p>
            </label>
            <textarea name="profile-text" id="profile-text" cols="30" rows="5"></textarea>
        </div>
    </div>
    <div style="width: 100%; text-align: center">
        <button type="submit" class="profile-btn">更新</button>
    </div>
</form>

@endsection
