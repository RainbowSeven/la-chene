@extends('admin.master')

@section('sidenav')
    <li><a href="#message-modal" class="modal-caller waves-effect waves-light btn modal-trigger" data-url="{{ URL::to('admin/send/newsletter')}}" data-name="Subscriber">Compose Newsletter</a></li>
@stop

@section('content')
    @if(count($res))
        @foreach($res as $item)
        <div class="col s12 m4 card amber lighten-5">
            <div class="card-content black-text">
                <p>
                    {{$item->email}}
                </p>
                {{$item->created_at}}
            </div>
        </div>
        @endforeach
        <div id="message-modal" class="modal">
            <div class="modal-content">
                <h4>Compose message</h4>
                {{Form::open(['method'=>'POST'])}}
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