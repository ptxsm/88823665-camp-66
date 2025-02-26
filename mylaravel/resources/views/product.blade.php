@extends('layouts.default_with_menu')

@section('content')
<form  action="{{ url( '/product') }}" method="post">
    @csrf
    <div class="row mt-3">
        <div>
            <label>Category Name</label>
            <input name="category_name" type="text" class="form-control">
        </div>
    </div>
    <button class="btn btn-primary mt-3" type="button" id="btn-add-product-list"> + เพิ่ม product</button>
    <div class="row mt-3" id="product-list"> 
        <div class="col-6">
            <label>Product Name <button type="button" 
                                class="btn btn-danger ml-3 mt-2 mb-2 btn-del-product-list">ลบ</button></label>
            <input name="product_name[]" type="text" class="form-control">
        </div>
    </div>
    <button type="submit" class="btn btn-success mt-3">บันทึก </button>
</form>
<table class="table">
    <thead>
        <tr>
            <td>#</td>
            <td>Category Name</td>
            <td>ProductList Name</td>
            <td>User Name</td>
        </tr>
    </thead>
    <!-- <tbody>
        <tr>
            <td>1</td>
            <td>Category name</td>
            <td>
                <ul>
                    <li>Product 01.</li>
                    <li>Product 02.</li>
                </ul>
            </td>
        </tr>
    </tbody> -->
    <tbody>
            @foreach ($category as $index => $categories)
            <tr>
                <td>{{ $index + 1 }}.</td>
                <td>{{ $categories->name }}</td>
                <td>
                    <ul>
                        @foreach ($categories->products as $product)
                            <li>{{ $product->name }}</li>
                        @endforeach
                    </ul>
                </td>
                <td>{{ $categories->products->first()->user->name ?? '-' }}</td>
            </tr>
            @endforeach
        </tbody>
</table>
<a href="{{url('/users')}}">
                    <button class="btn btn-warning">Back</button>
                  </a>
                  <a href="{{url('/logout')}}">
                    <button class="btn btn-danger">logout</button>
                  </a>
@endsection
@section('scripts')
<script>
    $(document).ready(function(){
        $('#btn-add-product-list').on('click', function(){
           $('#product-list').append(
            `<div class="col-6">
            <label>Procuct Name <button type="button" 
                                class="btn btn-danger ml-3 mt-2 mb-2 btn-del-product-list">ลบ</button></label>
            <input name="product_name[]" type="text" class="form-control">
        </div> `)
        })

        $(document).on('click', '.btn-del-product-list', function(){
            // console.log('click delete')
            $(this).parent().parent().remove();
        })
    })

</script>
@endsection