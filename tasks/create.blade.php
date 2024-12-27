@extends('layouts.app')

@section('content')

<div class="container">
    <h1>Thêm mới Task</h1>
    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf
        
        <div class="form-group">
            <lable for="title">Tiêu đề:</lable>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>

        <div class="form-group">
            <lable for="description">Mô tả:</lable>
            <textarea class="form-control" id="description" name="description" required> </textarea>
        </div>

        <div class="form-group">
            <lable for="long_description">Mô tả chi tiết:</lable>
            <textarea class="form-control" id="long_description" name="long_description" required> </textarea>
        </div>

        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="completed" name="completed" >
            <lable class="form-check-label" for="completed">Hoàn thành</lable>
        </div>        

        <button type="submit" class="btn btn-primary">Lưu</button>
    </form>
</div>
@endsection