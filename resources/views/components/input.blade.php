<div class="mb-3">
    <label for="{{$name}}" class="form-label">{{$text}}</label>
    <input type="{{$type}}" class="form-control" id="{{$name}}" name="{{$name}}" value="{{old($name)}}">
    @error($name)
    <div class="text-danger">{{$message}}</div>
    @enderror
</div>
