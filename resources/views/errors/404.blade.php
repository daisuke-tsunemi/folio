<?php App::setLocale(config('app.http_status_code_locale')); ?>

@extends('errors.app_errors')

   @section('title', __('Not Found'))

   @section('code', '404')

   @section('message', __('このページは存在しません'))
