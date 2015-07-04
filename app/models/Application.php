<?php
class Application extends Eloquent {

    protected $table = "applications";
    protected $fillable = ['fullname', 'email', 'position', 'message', 'cv'];

}