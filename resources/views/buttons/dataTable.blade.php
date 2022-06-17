<a href="{{ route('product.edit', $food->slug) }}" class="btn btn-dark btn-icon-text">
    Edit
    <i class="ti-file btn-icon-append"></i>  
</a>

<form action="{{ route('product.destroy', $food->slug) }}" style="display: inline-block" method="POST">
    @csrf
    @method('DELETE')

    <button type="submit" class="btn btn-danger btn-icon-text">
        <i class="ti-file btn-icon-prepend"></i>
        Delete
    </button>
</form>