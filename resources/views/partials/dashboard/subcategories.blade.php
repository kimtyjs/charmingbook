@if ($child_category)
    <ul>
        @foreach ($child_category->childrenRecursive as $childCategory)
            @include('partials.dashboard.subcategories', ['child_category' => $childCategory])
        @endforeach
    </ul>
@endif
