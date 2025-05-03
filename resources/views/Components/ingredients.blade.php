@props(['ingredientsGroups' => [], 'defaultDisplay' => false])

<div
    class="ingredients-box"
    style="display: {{ $defaultDisplay ? 'block' : 'none' }};">
    <form method="POST" action="{{ route('save.ingredients') }}">
        @csrf
        @if (!empty($ingredientsGroups) && is_array($ingredientsGroups))
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
        @else
            <p>No ingredients found.</p>
        @endif

        <button type="submit">Save</button>
    </form>
</div>


@if (!$defaultDisplay)
    <button id="show-ingredients-button">
        Show Ingredients
    </button>
@endif

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const showButton = document.getElementById('show-ingredients-button');
        const ingredientsBox = document.querySelector('.ingredients-box');

        if (showButton && ingredientsBox) {
            showButton.addEventListener('click', function () {
                ingredientsBox.style.display = 'block';
                showButton.style.display = 'none';
            });
        }
    });
</script>

