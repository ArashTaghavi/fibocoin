@extends('layouts.site')
@section('content')
    <section id="questions" style="background: #f5f9fc" class="feature-area section-big">
        <div class="container">
            <div class="section-title">
                <h2 class="title-class">نظرات کاربران</h2>
            </div>
            <div class="row">
                @if(\Illuminate\Support\Facades\Session::has('save_comment'))
                    <div class="alert alert-success text-center">
                        {{\Illuminate\Support\Facades\Session::get('save_comment')}}
                    </div>
                    <br>
                @endif
                <div class="col-md-8 col-md-offset-2 col-sm-12">
                    <div class="comment-wrapper">
                        <div class="panel panel-info">
                            <div class="panel-heading">ثبت نظر</div>
                            <div class="panel-body">
                                <form action="{{route('store-comment')}}" method="POST">
                                    @csrf
                                    @if(!\Illuminate\Support\Facades\Auth::check())
                                        <div class="form-group">
                                            <input type="text" name="full_name" placeholder="نام کامل" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name=email" placeholder="ایمیل" class="form-control">
                                        </div>
                                    @endif
                                    <div class="form-group">
                                        <textarea class="form-control" name="description" placeholder="لطفا نظر خود را وارد نمایید..."
                                                  rows="3"></textarea>
                                    </div>
                                    <br>
                                    <button type="submit" class="btn btn-info pull-right">ارسال</button>
                                </form>
                                <div class="clearfix"></div>
                                <hr>
                                <ul class="media-list">
                                    @foreach($comments as $comment)
                                        <li class="media">
                                            <div class="media-body">
                                            <span class="text-muted pull-right">
                                                <small class="text-muted">
                                                    {{jdate($comment->created_at)}}
                                                </small>
                                            </span>
                                                <strong class="text-success">
                                                    {{$comment->full_name}}
                                                </strong>
                                                <p style="text-align: justify;padding: 10px;font-size: 14px;">
                                                    {{$comment->description}}
                                                </p>
                                            </div>
                                        </li>
                                        <li class="divider"></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
@section('end-script')

@stop