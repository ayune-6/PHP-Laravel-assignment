@extends('layouts.front')
@section('title','みんなのプロフィール')
@section('content')
    <div class="container">
        <h2>みんなのプロフィール</h2>
        <hr color="#c0c0c0">
        <div class="row">
            <div class="profiles col-md-8 mx-auto mt-3">
                @foreach($profiles as $profile)
                    <div class="profile">
                        <div class="row">
                            <div class="text col-md-12">
                                <ul class="list-group">
                                  <li class="list-group-item name"><span class="name">名前</span><span class="divider">　|　</span>{{ str_limit($profile->name, 50) }}</li>
                                  <li class="list-group-item date"><span class="date">作成日</span><span class="divider">　|　</span>{{ $profile->created_at->format('Y年m月d日') }}</li>
                                  <li class="list-group-item gender"><span class="gender">性別</span><span class="divider">　|　</span>{{ str_limit($profile->gender, 50) }}</li>
                                  <li class="list-group-item hobby"><span class="hobby">趣味</span><span class="divider">　|　</span>{{ str_limit($profile->hobby, 100) }}</li>
                                  <li class="list-group-item introduction"><span class="introduction">自己紹介文</span><span class="divider">　|　</span>{{ str_limit($profile->introduction, 100) }}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <hr color="#c0c0c0">
                @endforeach
            </div>
        </div>
    </div>
    </div>
@endsection