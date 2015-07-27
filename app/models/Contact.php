<?php
class Contact extends Eloquent {

    protected $table = "contact";
    protected $fillable = ['first_name', 'last_name', 'phone', 'email', 'message', 'reply'];

}