<div class="form-group">
    <label for="name">{{$label}}</label>
    <input  type="{{$type}}" class="form-control @error($name) is-invalid @enderror" id="{{$id}}" name="{{$name}}" placeholder="{{$placeholder}}" @required($required) value="{{ old($name) ?? $value }}">
    <x-form.error :key="$name" />
</div>
