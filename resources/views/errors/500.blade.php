<?php App::setLocale(config('app.http_status_code_locale')); ?>

@extends('errors.app_errors')

@section('title', __('Server Error'))

@section('code', '500')

@section('message', __('サーバーでエラーが発生しています'))
