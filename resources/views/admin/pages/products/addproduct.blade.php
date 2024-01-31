@extends('admin.layouts.master')
@section('content')
<form action="/addproduct">
    <label for="productName">Product Name </label>
    <input type="text" name="productName">
    <label for="productCategory">Product Category</label>
    <select name="productCategory" id="">
        <option value=""></option>
    </select>
    <label for="costPrice">Cost Price (Rs:)</label>
    <input type="number" name="costPrice">
    <label for="sellingPrice">Selling Price (Rs:)</label>
    <input type="number" name="sellingPrice">
    <label for="Current Stock">Current Stock (pcs)</label>
    <input type="number" name="currentStock">
    <button type="submit">Add Product</button>
</form>
@endsection