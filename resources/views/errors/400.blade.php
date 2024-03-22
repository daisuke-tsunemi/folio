<?php App::setLocale(config('app.http_status_code_locale')); ?>

   @extends('errors.app_errors')

   @section('title', 'Bad Request')

   @section('code', '400')

   @section('message', __('リクエストにエラーがあります。'))