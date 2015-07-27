@extends('admin.master')

@section('content')
    @if(count($res))
        @foreach($res as $item)
            <div class="col s12 m4 card amber lighten-5">
                <div class="card-content black-text">
                    <p class="flow-text">{{$item->fullname}}</p>
                    <p>{{$item->email}}</p>
                    Pos: <span id="position">{{$item->position}}</span>
                    <p class="flow-text">{{$item->message}}</p>
                    {{$item->created_at}}
                </div>
                <div class = "card-action">
                    <a href="#message-modal" data-email="{{ $item->email }}" data-name="{{ $item->fullname }}" data-id="{{ $item->id }}" class="modal-caller waves-effect waves-light btn modal-trigger" data-url="{{ URL::to('admin/send/application')}}" data-mtype="application">Reply</a>
                    <a href="{{ $item->cv}}">View CV</a>
                </div>
            </div>
        @endforeach
        <div id="message-modal" class="modal">
            <div class="modal-content">
                <h4>Compose message</h4>
                {{Form::open(['method'=>'POST'])}}
                <div class="input-field">{{ Form::label('email', 'Email')}}
                    {{Form::input('text', 'email', '', ['id'=>'modal-email'])}}
                </div>
                 <div id="" class="input-field">{{ Form::label('subject', 'Subject')}}
                    {{Form::input('text', 'subject', '', ['id'=>'modal-subject'])}}
                </div>
                <div class="input-field">
                    {{ Form::label('message', 'Message')}}
                    {{ Form::textarea('message','',['id'=>'modal-message','class'=>'materialize-textarea'])}}
                </div>
            </div>
            <div class="modal-footer">
                <a id="modal-sender" href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Send</a>
            </div>
        </div>
    @endif
@stop