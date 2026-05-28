@extends('layouts.app')
@section('title', 'Builder')
@section('content')
    <div class="main-content">
        <div class="ai-container"> 
            <!-- Loader -->
            <div id="loader" style="display:none; text-align:center; padding:20px;">
                <div class="spinner"></div>
                <p>Loading...</p>
            </div>
            <div id="ai-builder-content">
                <p>Welcome to the AI Builder!</p>
            </div>
        </div>
    </div>
@include('sidebar.rightaisidebar')
@endsection