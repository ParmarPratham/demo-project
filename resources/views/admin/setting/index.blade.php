<x-admin>
    @section('title','Site Settings')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.setting.update') }}" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{ $setting->id}}">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" id="email" value="{{ $setting->email }}">
                </div>
            </form>
        </div>
    </div>
</x-admin>
