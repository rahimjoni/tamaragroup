<div class="card">
    <h5 class="card-header">Hey! I am {{ $data->name }}</h5>
    <div class="card-body">
        <h5 class="card-title">Subject: {{ $data->subject }}</h5>
        <p class="card-text"><br>{{ $data->message }}</p>
    </div><br>
    Thank you,<br>
    {{ $data->name }}<br>
    {{ $data->email }}
</div>
