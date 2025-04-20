@props(['ingredientsGoups', 'defaultDisplay' => false])

<div class ="ingredients-box" style="{{$defaultDisplay ? '' : 'display: none;'}}">
    <form method="POST" action="{{ route('save.ingredients') }}">
        @csrf
        @foreach($ingredientsGoups as $category => $ingrediets)
            <fieldset style="margin-bottom: 10px;">
                <legend><strong> {{$category}}</strong></legend>
                @foreach($ingrediets as $ingrediet)
                    <label>
                        <input type="checkbox" name="ingredients[]" value="{{$ingrediet}}">
                        {{$ingrediet }}
                    </label> <br>
                @endforeach
            </fieldset>
        @endforeach

        <button type="submit">Save</button>
    </form>
</div>
@if (!$defaultDisplay)
    <button onclick="document.querySelector('.ingredients-box').style.display= 'block'; this.style.display ='none';">
    </button>
@endif
