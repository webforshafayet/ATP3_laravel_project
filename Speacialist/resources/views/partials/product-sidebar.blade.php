
<div class="list-group">
  @foreach (App\Category::orderBy('name', 'asc')->where('parent_id', NULL)->get() as $parent)
    <a href="#main-{{ $parent->id }}" class="list-group-item list-group-item-action" data-toggle="collapse">
      <img src="{!! asset('images/products/'.$parent->image) !!}" width="50">
      {{ $parent->name }}
    </a>
    <div class="collapse" id="main-{{ $parent->id }}">
      <div class="child-rows">
        @foreach (App\Category::orderBy('name', 'asc')->where('parent_id', $parent->id)->get() as $child)
          <a href="#main-{{ $parent->id }}" class="list-group-item list-group-item-action">
            <img src="{!! asset('images/products/'.$child->image) !!}" width="30">
            {{ $child->name }}
          </a>
        @endforeach
      </div>


    </div>
  @endforeach
</div>
