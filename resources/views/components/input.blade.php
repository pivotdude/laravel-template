<div class="mb-3">
    <label for="{{$name}}" class="form-label {{$required && "required" }} ">{{$text}}</label>
    <input type="{{$type}}" class="form-control" id="{{$name}}" name="{{$name}}" value="{{old($name)}}" placeholder="{{$example}}">
    @error($name)
        <div class="text-danger">{{$message}}</div>
    @enderror
</div>
