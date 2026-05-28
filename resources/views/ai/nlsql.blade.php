@extends('layouts.app')
@section('title', 'Ai')
@section('content')
    <div class="main-content">
        <div class="ai-container"> 
            <form class="query-form" method="post" action="#">
                <!-- Dropdown -->
                <select name="option" required>
                    <option value="query_to_ai">Query to AI</option>
                    <option value="nlsql">NLSQL</option>
                </select>

                <!-- Input -->
                <input type="text" name="prompt" placeholder="Type your question..." required>

                <!-- Button -->
                <button type="submit">Submit</button>
            </form>
        </div>
    </div>

    @include('sidebar.rightaisidebar')
@endsection