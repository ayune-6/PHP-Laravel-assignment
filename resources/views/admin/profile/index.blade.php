@extends('layouts.profile')
@section('title','Myプロフィール')

@section('content')
<div class="container">
    <div class="row">
        <h2>Myプロフィール</h2>
    </div>
    <div class="row">
        <div class="col-md-10 mx-auto">
            <table class="table table-dark mx-auto">
                <thead>
                    <tr>
                        <th width="20%"></th>
                        <th width="80%"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th width="row">氏名</th>
                        <td>{{ $profile_form->name }}</td>
                    </tr>
                    <tr>
                        <th scope="row">性別</th>
                        <td>{{ $profile_form->gender }}</td>
                    </tr>
                    <tr>
                        <th scope="row" height="200px">趣味</h>
                        <td>{{ \Str::limit($profile_form->hobby, 200) }}</td>
                    </tr>
                        <th scope="row" height="200px">自己紹介欄</h>
                        <td>{{ \Str::limit($profile_form->introduction, 200) }}</td>
                </tbody>
            </table>
        </div>
    </div>
    <div class="col-md-4">
        <a href="{{ action('Admin\ProfileController@edit', ['id' =>1]) }}" role="button" class="btn btn-primary">編集</a>
    </div>
</div>
@endsection