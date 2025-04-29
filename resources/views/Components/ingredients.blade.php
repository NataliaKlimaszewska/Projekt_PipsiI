@props(['ingredientsGroups', 'defaultDisplay' => false])

<div class="ingredients-box" style="{{ $defaultDisplay ? '' : 'display: none;' }}">
    <form method="POST" action="{{ route('save.ingredients') }}">
        @csrf
        @foreach($ingredientsGroups as $category => $ingredients)
            <fieldset style="margin-bottom: 10px;">
                <legend><strong>{{ $category }}</strong></legend>
                @foreach($ingredients as $ingredient)
                    <label>
                        <input type="checkbox" name="ingredients[]" value="{{ $ingredient }}">
                        {{ $ingredient }}
                    </label> <br>
                @endforeach
            </fieldset>
        @endforeach

        <button type="submit">Save</button>
    </form>
</div>

@if (!$defaultDisplay)
    <button onclick="document.querySelector('.ingredients-box').style.display = 'block'; this.style.display = 'none';">
        Show Ingredients
    </button>
@endif

